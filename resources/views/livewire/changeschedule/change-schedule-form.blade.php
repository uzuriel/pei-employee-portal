<div>
    <nav class="flex mb-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="{{route('EmployeeDashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            Home
            </a>
        </li>
        <li>
            <div class="flex items-center">
            <svg class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <a href="{{route('ChangeScheduleTable')}}" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Permit to Teach</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
            <svg class="w-3 h-3 text-gray-600 mx-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="ms-1 text-sm font-semibold text-gray-900 md:ms-2 dark:text-gray-400">Create</span>
            </div>
        </li>
        </ol>
    </nav> 
    <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-3xl dark:text-white">Create a new Schedule Change Request</h2>
    <section class="bg-white dark:bg-gray-900 pb-24 px-8  rounded-lg">
        <div class=" px-1 mx-auto pt-8">
            <form wire:submit.prevent="submit" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                    <div class="block w-full col-span-3 p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                        <div class="grid gap-4 sm:grid-cols-3 sm:gap-6">
                            {{-- Application Date --}}

                            <div class="grid min-[1000px]:grid-cols-2  col-span-3 p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                                <div class="w-full">
                                    <label for="application_date"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Filling<span class="text-red-600">*</span></label>
                                    <input type="datetime-local" value="{{now()}}" 
                                        class="bg-gray-50 border w-auto  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                         required disabled>
                                </div>
                            </div>
                            {{-- Information field --}}
                            <div class="grid grid-cols-1 w-full col-span-3 gap-4 min-[902px]:grid-cols-3 p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                                <h2><b>Information</b></h2>
                                    <div  class="col-span-3 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                            <div class="grid grid-cols-1 min-[1000px]:grid-cols-3 gap-4 col-span-3 pb-4">
                                                <div class="w-full ">
                                                    <label for="firstname"
                                                        class="block mb-2 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">First name <span class="text-red-600">*</span></label>
                                                    <input type="text" name="firstname" id="firstname"  value="{{$first_name}}"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="First name" required="" disabled>
                                                </div>
                                                <div class="w-full ">
                                                    <label for="middlename"
                                                        class="block mb-2 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">Middle name <span class="text-red-600">*</span></label>
                                                    <input type="text" name="middlename" id="middlename" value="{{$middle_name}}"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="Middle name" required="" disabled>
                                                </div>
                                                <div class="w-full">
                                                    <label for="lastname"
                                                        class="block mb-2 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">Last name <span class="text-red-600">*</span></label>
                                                    <input type="text" name="lastname" id="lastname"  value="{{$last_name}}"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        placeholder="Last name" required="" disabled>
                                                </div>
                                                <div class="w-full">
                                                    <label for="department_name"
                                                        class="block mb-2 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">Department Name <span class="text-red-600">*</span></label>
                                                    <input type="text" name="department_name" id="department_name"  value="{{$department_name}}"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        disabled>
                                                </div>
                                                <div class="w-full">
                                                    <label for="current_position"
                                                        class="block mb-2 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">Current Position <span class="text-red-600">*</span></label>
                                                    <input type="text" name="current_position" id="current_position"  value="{{$current_position}}"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        disabled>
                                                </div>
                                                <div class="w-full">
                                                    <label for="employee_type"
                                                        class="block mb-2 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">Employee Status <span class="text-red-600">*</span></label>
                                                    <input type="text" name="employee_type" id="employee_type"  value="{{$employee_type}}"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                        disabled>
                                                </div>
                                            </div>
                                            
                                    </div>
                                {{-- Designation and inside or outside the university --}}
                                <div class="grid grid-cols-1 w-full col-span-3 gap-4 min-[1000px]:grid-cols-2 p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                                    <div class="grid grid-cols-1 gap-4 p-6 col-span-2 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                                        <h2><b>Period Covered</b></h2>
                                        <div class="grid grid-cols-2  gap-4 pt-5">
                                            <div class="w-full">
                                                <label for="start_period_cover"
                                                    class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white ">Start Period <span class="text-red-600">*</span></label>
                                                <input type="date" name="start_period_cover" id="start_period_cover" wire:model.live="start_period_cover" value="{{$date}}"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                    required="">
                                                {{-- @error('start_period') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror  --}}
                                                @error('start_period_cover')
                                                        <div class="transition transform alert alert-danger text-sm"
                                                            x-data x-init="document.getElementById('start_period_cover').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('start_period_cover').focus();">
                                                                <span class="text-red-500 text-xs "> {{$message}}</span>
                                                        </div> 
                                                @enderror       
                                            </div>
                                            <div class="w-full">
                                                <label for="end_period_cover"
                                                    class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">End Period <span class="text-red-600">*</span></label>
                                                <input type="date" name="end_period_cover" id="end_period_cover" wire:model.live="end_period_cover" value="{{$date}}" min="{{ \Carbon\Carbon::now()->addDays($start_period_cover)->format('Y-m-d\TH:i') }}"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                required="">
                                                @error('end_period_cover')   
                                                    <div class="transition transform alert alert-danger text-sm"
                                                    x-data x-init="document.getElementById('end_period_cover').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('end_period_cover').focus();">
                                                        <span class="text-red-500 text-xs "> {{$message}}</span>
                                                    </div> 
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Original Schedule --}}
                            <div class="grid grid-cols-1 col-span-3 p-6 gap-4 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                                <h2><b>Original Schedule</b></h2>
                                @php
                                    $ctr = 0
                                @endphp
                                @foreach ($original as $index => $load)
                                    <div class="grid grid-cols-5 col-span-3 p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                                        <div class="col-span-5">
                                            <ul class="text-sm font-medium text-right text-gray-500 border border-gray-300 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                                                <li class="float-left mt-4 ml-5 float-bold text-gray-900 font-bold">
                                                    <span>No. {{$ctr + 1 }}</span>
                                                </li>
                                                <li class="">
                                                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true"
                                                    type="button" name="add" wire:click.prevent="removeSchedule({{$index}})" wire:confirm="Are you sure you want to delete this?"
                                                    class="inline-block p-4 text-red-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-red-500">
                                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round"  stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                        </svg>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="grid grid-cols-1 min-[1000px]:grid-cols-2 col-span-5 ">
                                            <div class="grid grid-cols-1 min-[1404px]:grid-cols-2 p-6 gap-4 bg-white border border-gray-200  shadow  dark:bg-gray-800 dark:border-gray-700">
                                                <div>
                                                    <div>
                                                        <p class="text-sm ">Time Schedule</p>
                                                    </div>
                                                    <div class="  p-4 mt-3 rounded-lg  bg-white border border-gray-200  shadow  dark:bg-gray-800 dark:border-gray-700">
                                                        <div class="">
                                                            <label for="original_{{$index}}_start_time_schedule"
                                                                class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white ">Start <span class="text-red-600">*</span></label>
                                                            <input type="time" name="original_{{$index}}_start_time_schedule" id="original_{{$index}}_start_time_schedule" wire:model.live="original.{{$index}}.start_time_schedule" 
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                required="">
                                                            {{-- @error('start_period') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror  --}}
                                                            @error('original.' . $index . '.start_time_schedule')
                                                                <div class="transition transform alert alert-danger text-sm"
                                                                x-data x-init="document.getElementById('original_{{$index}}_start_time_schedule').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('original_{{$index}}_start_time_schedule').focus();" >
                                                                    <span class="text-red-500 text-xs" > {{$message}}</span>
                                                                </div> 
                                                            @enderror       
                                                        </div>
                                                        <div class="mt-2">
                                                            <label for="original_{{$index}}_end_time_schedule"
                                                                class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">End <span class="text-red-600">*</span></label>
                                                            <input type="time" name="original_{{$index}}_end_time_schedule" id="original_{{$index}}_end_time_schedule" wire:model.live="original.{{$index}}.end_time_schedule" value="{{$date}}" min="{{ \Carbon\Carbon::now()->addDays()->format('Y-m-d\TH:i') }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            required="">
                                                            @error('original.' . $index . '.end_time_schedule')   
                                                                <div class="transition transform alert alert-danger text-sm"
                                                                x-data x-init="document.getElementById('original_{{$index}}_end_time_schedule').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('original_{{$index}}_end_time_schedule').focus();" >
                                                                    <span class="text-red-500 text-xs" > {{$message}}</span>
                                                                </div> 
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Days<span class="text-red-600">*</span> (Hold Ctrl + Click for multiple Select)</label>
                                                    <select multiple size="8" id="original_{{$index}}_work_days" name="original_{{$index}}_work_days" wire:model.blur="original.{{$index}}.work_days"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option value="Sunday">Sunday</option>
                                                        <option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
                                                        <option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
                                                        <option value="Friday">Friday</option>
                                                        <option value="Saturday">Saturday</option>                                                        
                                                    </select>
                                                    @error('original.' . $index . '.work_days')   
                                                        <div class="transition transform alert alert-danger text-sm"
                                                            x-data x-init="document.getElementById('original_{{$index}}_work_days').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('original_{{$index}}_work_days').focus();" >
                                                                <span class="text-red-500 text-xs" > {{$message}}</span>
                                                        </div> 
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 min-[1404px]:grid-cols-2 p-6 gap-4  bg-white border border-gray-200  shadow  dark:bg-gray-800 dark:border-gray-700">
                                                <div>
                                                    <div>
                                                        <p class="text-sm ">Break Time</p>
                                                    </div>
                                                    <div class="  p-4 mt-3 rounded-lg  bg-white border border-gray-200  shadow  dark:bg-gray-800 dark:border-gray-700">
                                                        <div class="">
                                                            <label for="original_{{$index}}_start_break_time"
                                                                class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white ">Start <span class="text-red-600">*</span></label>
                                                            <input type="time" name="original_{{$index}}_start_break_time" id="original_{{$index}}_start_break_time" wire:model.live="original.{{$index}}.start_break_time" 
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                required="">
                                                            {{-- @error('start_period') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror  --}}
                                                            @error('original.' . $index . '.start_break_time')
                                                                <div class="transition transform alert alert-danger text-sm"
                                                                x-data x-init="document.getElementById('original_{{$index}}_start_break_time').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('original_{{$index}}_start_break_time').focus();" >
                                                                    <span class="text-red-500 text-xs" > {{$message}}</span>
                                                                </div> 
                                                            @enderror       
                                                        </div>
                                                        <div class="mt-2">
                                                            <label for="original_{{$index}}_end_break_time"
                                                                class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">End <span class="text-red-600">*</span></label>
                                                            <input type="time" name="original_{{$index}}_end_break_time" id="original_{{$index}}_end_break_time" wire:model.live="original.{{$index}}.end_break_time" value="{{$date}}" min="{{ \Carbon\Carbon::now()->addDays()->format('Y-m-d\TH:i') }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            required="">
                                                            @error('original.' . $index . '.end_time')   
                                                                <div class="transition transform alert alert-danger text-sm"
                                                                x-data x-init="document.getElementById('original_{{$index}}_end_break_time').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('original_{{$index}}_end_break_time').focus();" >
                                                                    <span class="text-red-500 text-xs" > {{$message}}</span>
                                                                </div> 
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="x" id="original_{{$index}}_day_off">
                                                    <label for="original_{{$index}}_day_off" class="block mb-2 text-sm whitespace-nowrap font-medium text-gray-900 dark:text-white">Day Off <span class="text-red-600">*</span></label>
                                                    <input type="date" rows="4" id="original_{{$index}}_day_off" name="original[{{$index}}][day_off]" wire:model.live="original.{{$index}}.day_off" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></input>
                                                    @error('original.' . $index . '.day_off')   
                                                        <div class="transition transform alert alert-danger text-sm"
                                                                x-data x-init="document.getElementById('original_{{$index}}_day_off').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('original_{{$index}}_day_off').focus();">
                                                            <span class="text-red-500 text-xs "> {{$message}}</span>
                                                        </div> 
                                                    @enderror
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        @php
                                        $ctr += 1;
                                    @endphp
                                    @endforeach

                                    <script>
                                        document.addEventListener('livewire:init', () => {
                                            Livewire.on('update-original-load', (data) => {
                                                // Parse the JSON data into a JavaScript array
                                                const dataArray = JSON.parse(data);
                                    
                                                // Iterate over the array elements
                                                dataArray.forEach((element, index) => {
                                                    document.getElementById('original_' + index + '_start_time_schedule').value = element.subject;
                                                    document.getElementById('original_' + index + '_end_time_schedule').value = element.subject;
                                                    document.getElementById('original_' + index + '_work_days').value = element.subject;
                                                    document.getElementById('original_' + index + '_start_break_time').value = element.subject;
                                                    document.getElementById('original_' + index + '_end_break_time').value = element.subject;
                                                    document.getElementById('original_' + index + '_days_off').value = element.subject;
                                                });
                                            });
                                        });
                                    </script>
                                <div class="flex justify-center">
                                    <button type="button" name="add" wire:click.prevent="addSchedule" class="text-white bgindigo focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Schedule</button>
                                </div>
                               
                                
                            </div>

                             {{-- Proposed Schedule --}}
                            <div class="grid grid-cols-1 col-span-3 p-6 gap-4 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                                <h2><b>Proposed Schedule</b></h2>
                                @php
                                    $ctr = 0
                                @endphp
                                @foreach ($proposed as $index => $load)
                                    <div class="grid grid-cols-5 col-span-3 p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                                        <div class="col-span-5">
                                            <ul class="text-sm font-medium text-right pb-12 text-gray-500 border border-gray-300 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                                                <li class="float-left mt-4 ml-5  float-bold text-gray-900 font-bold">
                                                    <span>No. {{$index + 1 }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="grid grid-cols-1 min-[1000px]:grid-cols-2 col-span-5 ">
                                            <div class="grid grid-cols-1 min-[1404px]:grid-cols-2 p-6 gap-4 bg-white border border-gray-200  shadow  dark:bg-gray-800 dark:border-gray-700">
                                                <div>
                                                    <div>
                                                        <p class="text-sm ">Time Schedule</p>
                                                    </div>
                                                    <div class="  p-4 mt-3 rounded-lg  bg-white border border-gray-200  shadow  dark:bg-gray-800 dark:border-gray-700">
                                                        <div class="">
                                                            <label for="proposed_{{$index}}_start_time_schedule"
                                                                class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white ">Start <span class="text-red-600">*</span></label>
                                                            <input type="time" name="proposed_{{$index}}_start_time_schedule" id="proposed_{{$index}}_start_time_schedule" wire:model.live="proposed.{{$index}}.start_time_schedule" 
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                required="">
                                                            {{-- @error('start_period') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror  --}}
                                                            @error('proposed.' . $index . '.start_time_schedule')
                                                                <div class="transition transform alert alert-danger text-sm"
                                                                x-data x-init="document.getElementById('proposed_{{$index}}_start_time_schedule').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('proposed_{{$index}}_start_time_schedule').focus();" >
                                                                    <span class="text-red-500 text-xs" > {{$message}}</span>
                                                                </div> 
                                                            @enderror       
                                                        </div>
                                                        <div class="mt-2">
                                                            <label for="proposed_{{$index}}_end_time_schedule"
                                                                class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">End <span class="text-red-600">*</span></label>
                                                            <input type="time" name="proposed_{{$index}}_end_time_schedule" id="proposed_{{$index}}_end_time_schedule" wire:model.live="proposed.{{$index}}.end_time_schedule" value="{{$date}}" min="{{ \Carbon\Carbon::now()->addDays()->format('Y-m-d\TH:i') }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            required="">
                                                            @error('proposed.' . $index . '.end_time_schedule')   
                                                                <div class="transition transform alert alert-danger text-sm"
                                                                x-data x-init="document.getElementById('proposed_{{$index}}_end_time_schedule').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('proposed_{{$index}}_end_time_schedule').focus();" >
                                                                    <span class="text-red-500 text-xs" > {{$message}}</span>
                                                                </div> 
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Days<span class="text-red-600">*</span> (Hold Ctrl + Click for multiple Select)</label>
                                                    <select multiple size="8" id="proposed_{{$index}}_work_days" name="proposed_{{$index}}_work_days" wire:model.blur="proposed.{{$index}}.work_days"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option value="Sunday">Sunday</option>
                                                        <option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
                                                        <option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
                                                        <option value="Friday">Friday</option>
                                                        <option value="Saturday">Saturday</option>                                                        
                                                    </select>
                                                    @error('proposed.' . $index . '.work_days')   
                                                        <div class="transition transform alert alert-danger text-sm"
                                                            x-data x-init="document.getElementById('proposed_{{$index}}_work_days').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('proposed_{{$index}}_work_days').focus();" >
                                                                <span class="text-red-500 text-xs" > {{$message}}</span>
                                                        </div> 
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 min-[1404px]:grid-cols-2 p-6 gap-4  bg-white border border-gray-200  shadow  dark:bg-gray-800 dark:border-gray-700">
                                                <div>
                                                    <div>
                                                        <p class="text-sm ">Break Time</p>
                                                    </div>
                                                    <div class="  p-4 mt-3 rounded-lg  bg-white border border-gray-200  shadow  dark:bg-gray-800 dark:border-gray-700">
                                                        <div class="">
                                                            <label for="proposed_{{$index}}_start_break_time"
                                                                class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white ">Start <span class="text-red-600">*</span></label>
                                                            <input type="time" name="proposed_{{$index}}_start_break_time" id="proposed_{{$index}}_start_break_time" wire:model.live="proposed.{{$index}}.start_break_time" 
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                required="">
                                                            {{-- @error('start_period') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror  --}}
                                                            @error('proposed.' . $index . '.start_break_time')
                                                                <div class="transition transform alert alert-danger text-sm"
                                                                x-data x-init="document.getElementById('proposed_{{$index}}_start_break_time').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('proposed_{{$index}}_start_break_time').focus();" >
                                                                    <span class="text-red-500 text-xs" > {{$message}}</span>
                                                                </div> 
                                                            @enderror       
                                                        </div>
                                                        <div class="mt-2">
                                                            <label for="proposed_{{$index}}_end_break_time"
                                                                class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">End <span class="text-red-600">*</span></label>
                                                            <input type="time" name="proposed_{{$index}}_end_break_time" id="proposed_{{$index}}_end_break_time" wire:model.live="proposed.{{$index}}.end_break_time" value="{{$date}}" min="{{ \Carbon\Carbon::now()->addDays()->format('Y-m-d\TH:i') }}"
                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            required="">
                                                            @error('proposed.' . $index . '.end_time')   
                                                                <div class="transition transform alert alert-danger text-sm"
                                                                x-data x-init="document.getElementById('proposed_{{$index}}_end_break_time').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('proposed_{{$index}}_end_break_time').focus();" >
                                                                    <span class="text-red-500 text-xs" > {{$message}}</span>
                                                                </div> 
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="x" id="proposed_{{$index}}_day_off">
                                                    <label for="proposed_{{$index}}_day_off" class="block mb-2 text-sm whitespace-nowrap font-medium text-gray-900 dark:text-white">Day Off <span class="text-red-600">*</span></label>
                                                    <input type="date" rows="4" id="proposed_{{$index}}_day_off" name="proposed[{{$index}}][day_off]" wire:model.live="proposed.{{$index}}.day_off" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></input>
                                                    @error('proposed.' . $index . '.day_off')   
                                                        <div class="transition transform alert alert-danger text-sm"
                                                                x-data x-init="document.getElementById('proposed_{{$index}}_day_off').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('proposed_{{$index}}_day_off').focus();">
                                                            <span class="text-red-500 text-xs "> {{$message}}</span>
                                                        </div> 
                                                    @enderror
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        @php
                                        $ctr += 1;
                                    @endphp
                                    @endforeach

                                    <script>
                                        document.addEventListener('livewire:init', () => {
                                            Livewire.on('update-proposed-load', (data) => {
                                                // Parse the JSON data into a JavaScript array
                                                const dataArray = JSON.parse(data);
                                                // Iterate over the array elements
                                                dataArray.forEach((element, index) => {
                                                    document.getElementById('proposed_' + index + '_start_time_schedule').value = element.subject;
                                                    document.getElementById('proposed_' + index + '_end_time_schedule').value = element.subject;
                                                    document.getElementById('proposed_' + index + '_work_days').value = element.subject;
                                                    document.getElementById('proposed_' + index + '_start_break_time').value = element.subject;
                                                    document.getElementById('proposed_' + index + '_end_break_time').value = element.subject;
                                                    document.getElementById('proposed_' + index + '_days_off').value = element.subject;
                                                });
                                            });
                                        });
                                    </script>
                            </div>
                            <div class="grid grid-cols-1 w-full col-span-3 gap-4 min-[1000px]:grid-cols-2 p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                                {{-- <h2><b>Date of Filling</b></h2> --}}
                             
                                <div class="grid grid-cols-1 gap-4 p-6 bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700">
                                <div class="grid grid-cols-1 gap-4">
                                    <h2><b>Reason</b></h2>
                                    <div>
                                        <textarea type="text" rows="5" id="reason" name="reason" wire:model="reason"
                                        placeholder="Place your reason here."   
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </textarea>
                                        @error('reason')   
                                            <div class="transition transform alert alert-danger text-sm"
                                            x-data x-init="document.getElementById('reason').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('reason').focus();">
                                                <span class="text-red-500 text-xs "> {{$message}}</span>
                                            </div> 
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div id="applicant_signature_container" class="grid grid-cols-1  p-4  bg-white border border-gray-200 rounded-lg shadow  dark:bg-gray-800 dark:border-gray-700 ">
                                <h2 for="applicant_signature"
                                class="block text-base mb-2 font-semibold text-gray-900 dark:text-white">Applicant Signature <span class="text-red-600">*</span></h2>
                                <div class="grid grid-cols-1 items-center justify-center w-full">
                                <label for="applicant_signature" class="relative flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                @if($applicant_signature)
                                        {{-- @php
                                            $image = null;
                                            try {
                                                $image = $applicant_signature->temporaryUrl();
                                            } catch (\Throwable $th) {
                                                abort(404); 
                                                $this->js("alert('Upload PNG, JPG, OR PDF only!')");
                                            }
                                        @endphp
                                        @if($image)
                                            <img src="{{ $image }}" class="w-full h-full object-contain" alt="Uploaded Image">
                                        @endif --}}
                                        <span class="text-green-800"> File Uploaded</span>

                                        <input id="applicant_signature" type="file" class="hidden" wire:model.blur="applicant_signature">
                                        <button type="button" wire:click="removeImage('applicant_signature')" class="absolute top-0 right-0 m-2 text-red-600 py-1  rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                        </button>
                                @else
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-4 h-4 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                            </svg>
                                            <p class="mb-2 text-xs text-center text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span></p>
                                            <p class="text-xs text-center text-gray-500 dark:text-gray-400">PNG, JPG, or PDF file (Max: 5 MB size)</p>
                                        </div>
                                        <input id="applicant_signature" type="file" class="hidden" wire:model.blur="applicant_signature" />
                                @endif
                                </div>
                            @error('applicant_signature')
                                <div class="transition transform alert alert-danger text-sm mb-1"
                                    x-data x-init="document.getElementById('applicant_signature_container').scrollIntoView({ behavior: 'smooth', block: 'center' }); document.getElementById('applicant_signature_container').focus();">
                                    <span   span class="text-red-500 text-xs "> {{$message}}</span>
                                </div> 
                            @enderror
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit"  class="inline-flex items-center float-right px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bgindigo  rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Submit Change Schedule
            </button>
            </form>
        </div>
    </section>
    </div>
</div>