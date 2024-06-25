<?php

namespace App\Livewire\Activities;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Activities;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ActivitiesUpdate extends Component
{
    use WithFileUploads;

    public $type;
    public $title;
    public $description;
    public $poster;
    public $date;
    public $start;
    public $end;
    public $host;
    public $is_featured;
    public $visible_to_list;

    public $index;

    public $colleges;

    public $departments;


    public function mount($index){
        $this->index = $index;
        $activitydata = Activities::findOrFail($this->index);
        $this->type = $activitydata->type;
        $this->title = $activitydata->title;
        $this->description = $activitydata->description;
        $this->poster = $activitydata->poster ? " " : null; 
        $this->date = $activitydata->date;
        $this->start = $activitydata->start;
        $this->end = $activitydata->end;
        $this->host = $activitydata->host;
        $this->is_featured = ( $activitydata->is_featured == 1) ? true : false;
        $this->visible_to_list = $activitydata->visible_to_list;
        $this->colleges = DB::table('colleges')->orderBy('college_name', 'asc')->pluck('college_name');
        $this->departments = DB::table('departments')->orderBy('department_name', 'asc')->pluck('department_name');
}

    public function getPoster(){
        $activitydata = Activities::findOrFail($this->index);
        return $activitydata->poster;
    }

    protected $rules = [
        'type' => 'required|in:Announcement,Event,Seminar,Training,Others',
        'title' => 'required|min:2|max:150',
        'description' => 'required|min:2|max:1024',
        'start' => 'required|before_or_equal:end',
        'end' => 'required|after_or_equal:start',
        'is_featured' => 'nullable|boolean',
        'host' => 'required',
        'visible_to_list' => 'required|array|min:1',
        'visible_to_list.*' => 'required'
        
    ];

    public function submit(){
       
        foreach($this->rules as $rule => $validationRule){
            $this->validate([$rule => $validationRule]);
            $this->resetValidation();
        }  

        $activitydata = Activities::findOrFail($this->index);
        $this->validate(['date' => 'required|after_or_equal:'.$activitydata->date]);

        $activitydata->type = $this->type;
        $activitydata->title = $this->title;
        $activitydata->description = $this->description;

        if(is_string($this->poster) ){

        } else{
            $this->validate(['poster' => 'required|mimes:jpg,png|extensions:jpg,png']);
            $activitydata->poster = file_get_contents($this->poster->getRealPath());

        }
        $activitydata->date = $this->date;
        $activitydata->start = $this->start;
        $activitydata->end = $this->end;
        $activitydata->host = $this->host;
        $activitydata->is_featured = $this->is_featured;
        $activitydata->visible_to_list = $this->visible_to_list;

        $updateData = [
            'type' => $activitydata->type,
            'title' => $activitydata->title,
            'description' => $activitydata->description,
            'poster' =>  $activitydata->poster,
            'date' => $activitydata->date,
            'start' => $activitydata->start,
            'end' => $activitydata->end, 
            'host' => $activitydata->host,
            'is_featured' => $activitydata->is_featured , 
            'visible_to_list' => $activitydata->visible_to_list, 
            'updated_at' => now(),
          ];
        
        Activities::where('activity_id', $this->index)
                               ->update($updateData);


        $this->js("alert('Activity Updated!')"); 
        // $activitydata->update();
        return redirect()->to(route('ActivitiesGallery'));
    }

    public function removeActivity(){
        // $activityData = Activities::where('activity_id', $this->index)->first();
        $dataToUpdate = ['status' => 'Deleted',
                         'deleted_at' => now()];
        // $this->authorize('delete',  $activityData);
        $loggedInUser = auth()->user();
        if(in_array($loggedInUser->role_id, [29, 30, 31, 48])){
            Activities::where('activity_id', $this->index)->update($dataToUpdate);
        } 
        return redirect()->route('ActivitiesGallery');
    }

    
    public function render()
    {
        return view('livewire.activities.activities-update')->extends('components.layouts.app');
    }
}
