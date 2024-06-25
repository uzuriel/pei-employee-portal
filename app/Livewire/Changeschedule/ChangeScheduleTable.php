<?php

namespace App\Livewire\Changeschedule;

use App\Models\ChangeSchedule;
use Livewire\Component;
use finfo;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Response;

class ChangeScheduleTable extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $date_filter;

    public $status_filter;

    public $dateFilterName = "All";
    public $statusFilterName = "All";

    public $search = "";
    
    
    public function search()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $loggedInUser = auth()->user();
        $query = ChangeSchedule::where('employee_id', $loggedInUser->employee_id);
        switch ($this->date_filter) {
            case '1':
                $query->whereDate('date_of_filling',  Carbon::today());
                $this->dateFilterName = "Today";
                break;
            case '2':
                $query->whereBetween('date_of_filling', [Carbon::today()->startOfWeek(), Carbon::today()]);
                $this->dateFilterName = "Last 7 Days";
                break;
            case '3':
                $query->whereBetween('date_of_filling', [Carbon::today()->subDays(30), Carbon::today()]);
                $this->dateFilterName = "Last 30 days";
                break;
            case '4':
                $query->whereBetween('date_of_filling', [Carbon::today()->subMonths(6), Carbon::today()]);
                // $query->whereDate('date_of_filling', '>=', Carbon::today()->subMonths(6), '<=', Carbon::today());
                $this->dateFilterName = "Last 6 Months";
                break;
            case '5':
                $query->whereBetween('date_of_filling', [Carbon::today()->subYear(), Carbon::today()]);
                $this->dateFilterName = "Last Year";
                break;
        }

        switch ($this->status_filter) {
            case '1':
                $query->where('status',  'Approved');
                $this->statusFilterName = "Approved";
                break;
            case '2':
                $query->where('status', 'Pending');
                $this->statusFilterName = "Pending";
                break;
            case '3':
                $query->where('status', 'Declined');
                $this->statusFilterName = "Declined";
                break;
        }


        if(strlen($this->search) >= 1){
            $results = $query->where('status', '!=', 'Deleted')->where('date_of_filling', 'like', '%' . $this->search . '%')->orderBy('date_of_filling', 'desc')->paginate(5);
        } else {
            $results = $query->where('status', '!=', 'Deleted')->orderBy('date_of_filling', 'desc')->paginate(5);
        }
        return view('livewire.changeschedule.change-schedule-table', [
            'ChangeScheduleData' => $results,
        ]);
    }

    public function download($reference_num){
        $teachpermitData = ChangeSchedule::where('reference_num', $reference_num)->first();
        $image = base64_decode($teachpermitData->permit_to_teach);
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $contentType = $finfo->buffer($image);
        switch($contentType){
            case "application/pdf":
                $fileName = "leaverequest.pdf";
                break;
            case "image/jpeg":
                $fileName = "leaverequest.jpg";
                break;
            case "image/png":
                $fileName = "leaverequest.png";
                break;
            default:
                abort(404);
        }
        return Response::make($image, 200, [
            'Content-Type' => $contentType,
            'Content-Disposition' => 'attachment; filename="'.$fileName.'"'
        ]);
    
    }

    public function removeScheduleChange($ref_num){
        $data = ChangeSchedule::where('reference_num', $ref_num)->first();
        $dataToUpdate = ['status' => 'Deleted',
                         'deleted_at' => now()];
        if($data->employee_id != auth()->user()->employee_id){
            return redirect()->to(route('ChangeScheduleTable'));
        };
        // $this->authorize('delete', $data);
        ChangeSchedule::where('reference_num', $ref_num)->update($dataToUpdate);
        return redirect()->route('ChangeScheduleTable');
    }

  
}
