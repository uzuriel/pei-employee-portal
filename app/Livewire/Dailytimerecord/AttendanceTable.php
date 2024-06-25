<?php

namespace App\Livewire\Dailytimerecord;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Training;
use App\Models\Activities;
use Livewire\WithPagination;
use App\Models\Dailytimerecord;
use Illuminate\Support\Facades\DB;
use Livewire\WithoutUrlPagination;

class AttendanceTable extends Component
{
    use WithPagination;
    public $options = [];
    public $dateChosen = [];

    public $currentYear;

    public $currentMonth;

    public $search = "";

    // public $filter;

    public $filterName = "All";


    public $activities;

    public $trainings;
    public $data;
    public $dateData = [];
    public $weeklyCountsArray = [];
    public $monthlyCountsArray = [];
    public $vacationCredits;
    public $sickCredits;

    public $filter = "Weekly";

    public $period;

    public $firstName;

    public $gender;

    public $currentHourMinuteSecond;

    protected $queryString = [
        'category',
        'sort',
    ];
    

    public function search()
    {
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount(){

        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;
        $years = range($currentYear, 2000, -1);
        $months = [
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December'
        ];

        // Add options for the current month and year
        $this->options["{$currentYear}-{$currentMonth}"] = "{$currentYear} - {$months[str_pad($currentMonth, 2, '0', STR_PAD_LEFT)]}";

        // Add options for the previous months of the current year
        for ($i = $currentMonth - 1; $i > 0; $i--) {
            $monthNumber = str_pad($i, 2, '0', STR_PAD_LEFT);
            $this->options["{$currentYear}-{$monthNumber}"] = "{$currentYear} - {$months[$monthNumber]}";
        }

    

        // Loop through previous years and add options for each month
        foreach (array_slice($years, 1) as $year) {
            foreach ($months as $monthNumber => $monthName) {
                $this->options["{$year}-{$monthNumber}"] = "{$year} - {$monthName}";
            }
        }


        $loggedInUser = auth()->user()->employee_id;
        $employeeInformation = Employee::where('employee_id', $loggedInUser)
                                ->select('college_id', 'sick_credits', 'vacation_credits', 'first_name', 'gender')->first();
        $collegeName = DB::table('colleges')->where('college_id', $employeeInformation->college_id)->value('college_name');
        $collegeIds = $employeeInformation->college_id;
        $this->firstName = $employeeInformation->first_name;
        $this->vacationCredits = $employeeInformation->vacation_credits;
        $this->sickCredits = $employeeInformation->sick_credits;
        $this->gender = $employeeInformation->gender;
        $this->activities = Activities::where(function ($query) use ($collegeIds) {
                foreach ($collegeIds  as $college) {
                $college_name = DB::table('colleges')->where('college_id', $college)->value('college_name');
                    $query->orWhereJsonContains('visible_to_list', $college_name);
                }
            })->get();
        $this->trainings = Training::where(function ($query) use ($collegeIds) {
            foreach ($collegeIds  as $college) {
            $college_name = DB::table('colleges')->where('college_id', $college)->value('college_name');
                $query->orWhereJsonContains('visible_to_list', $college_name);
            }
        })->get();

        $attendanceCount = Dailytimerecord::where('employee_id', $loggedInUser)->count();
        $currentTime = Carbon::now();
        // Set the start and end times for each period
        $morningStart = Carbon::createFromTime(6, 0, 0); // 6:00 AM
        $afternoonStart = Carbon::createFromTime(12, 0, 0); // 12:00 PM (noon)
        $eveningStart = Carbon::createFromTime(18, 0, 0); // 6:00 PM

        // Compare the current time with the defined periods
        if ($currentTime->between($morningStart, $afternoonStart)) {
            // Current time is in the morning
            $this->period = 'Morning';
        } elseif ($currentTime->between($afternoonStart, $eveningStart)) {
            // Current time is in the afternoon
            $this->period = 'Afternoon';
        } else {
            // Current time is in the evening
            $this->period = 'Evening';
        }
        $currentYear = Carbon::now()->year;
        $currentMonth = Carbon::now()->month;
        $currentDay = Carbon::now()->day;

        // Query to get the attendance count for each month in the current year
        $monthlyCounts = Dailytimerecord::select(
                DB::raw('MONTH(attendance_date) as month'),
                DB::raw('COUNT(*) as count')
            )
            ->where('employee_id', $loggedInUser)
            // ->where('attendance_type', 'time-in')
            ->whereYear('attendance_date', $currentYear)
            ->groupBy(DB::raw('MONTH(attendance_date)'))
            ->get();


        $weeklyCounts = Dailytimerecord::select(
            DB::raw('WEEK(attendance_date, 0) as week'), // Start the week on Sunday (0)
            DB::raw('COUNT(*) as count')
        )
        ->where('employee_id', $loggedInUser)
        // ->where('attendance_type', 'time-in')
        ->whereYear('attendance_date', $currentYear)
        ->whereMonth('attendance_date', $currentMonth)
        ->groupBy(DB::raw('WEEK(attendance_date, 0)'))
        ->get();

        // Initialize arrays to hold the counts for each month and week
        $monthlyCountsArray = [];
        $weeklyCountsArray = [];

        // Process monthly counts
        for ($i = 1; $i <= 12; $i++) {
            $found = false;
            foreach ($monthlyCounts as $count) {
                if ($count->month == $i) {
                    $this->monthlyCountsArray[$i] = $count->count;
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $this->monthlyCountsArray[$i] = 0;
            }
        }

        foreach ($weeklyCounts as $count) {
            if($count->count != 0){
                $this->weeklyCountsArray[] = $count->count;
            }else {
                $this->weeklyCountsArray[] = 0;
            }
        }
        while (count($this->weeklyCountsArray) < 5) {
            $this->weeklyCountsArray[] = 0;
        }

        $this->setFilter("weekly");

        // $this->data = array_values($this->weeklyCountsArray);
    
    }

    public function filter($filter){
        if($filter == 'weekly'){
            return [332, 321, 54, 32, 32];
            
        }
        else if ($filter == 'monthly'){
            // $this->dateData = $this->monthlyCountsArray;
            return [332, 321, 54, 32, 32];

        }
        $this->dispatch('$refresh');

    }

    public function setFilter($filter){
        if($filter == "weekly"){
            $this->filter = "Weekly";
                $this->dispatch('refresh-weekly-chart', data: array_values($this->weeklyCountsArray));
        }
        else{
            $this->filter = "Monthly";
            // dd($this->monthlyCountsArray );
            $this->dispatch('refresh-monthly-chart', data: array_values($this->monthlyCountsArray));
        }
        
    }

    protected $rules = [
        'dateChosen' => 'required|max:3',
    ];
    public function submit(){
        $countArray = count($this->dateChosen);
        if($countArray > 12 or $countArray < 1){
            return redirect()->to(route('AttendanceTable'));
        }
        return redirect()->to(route('AttendancePdf', json_encode($this->dateChosen))); 
    }


    public function render()
    {
       $loggedInUser = auth()->user();
        $query = Dailytimerecord::where('employee_id', $loggedInUser->employee_id);
        
        switch ($this->filter) {
            case '1':
                $query->whereDate('attendance_date',  Carbon::today());
                $this->filterName = "Today";
                break;
            case '2':
                $query->whereBetween('attendance_date', [Carbon::today()->startOfWeek(), Carbon::today()]);
                $this->filterName = "Last 7 Days";
                break;
            case '3':
                $query->whereBetween('attendance_date', [Carbon::today()->subDays(30), Carbon::today()]);
                $this->filterName = "Last 30 days";
                break;
            case '4':
                $query->whereBetween('attendance_date', [Carbon::today()->subMonths(6), Carbon::today()]);
                $this->filterName = "Last 6 Months";
                break;
            case '5':
                $query->whereBetween('attendance_date', [Carbon::today()->subYear(), Carbon::today()]);
                    $this->filterName = "Last Year";
                break;
        }


        if(strlen($this->search) >= 1){
            $results = $query->where('attendance_date', 'like', '%' . $this->search . '%')->orderBy('attendance_date', 'desc')->paginate(5);
        } else {
            $results = $query->orderBy('attendance_date', 'desc')->paginate(5);
        }
    
        return view('livewire.dailytimerecord.attendance-table', [
            'DtrData' => $results,
            'data' => $this->filter($this->filter),

        ]);


      
    }


}
