 <div class="main-content p-4">
        <div class="rounded-lg dark:border-gray-700">
            <nav class="flex mb-2" aria-label="Breadcrumb">
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
                    <svg class="w-3 h-3 text-gray-600 mx-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <a href="{{route('AttendanceTable')}}" class="ms-1 text-sm font-semibold text-gray-900 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Daily Time Record</a>
                    </div>
                </li>
                {{-- <li aria-current="page">
                    <div class="flex items-center">
                    <svg class="w-3 h-3 text-gray-400 mx-1 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
                    </div>
                </li> --}}
                </ol>
               
            </nav>
            <h2 class=" text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-3xl dark:text-white">Daily Time Record</h2>
        </div>
        <br>
    <div class="col-span-3  gap-4">
        <div class="w-full col-span-2 bg-white rounded-lg shadow pb-4 dark:bg-gray-800 p-4 md:p-4 ">
            <div class="flex justify-between">
            <div>
                <p class=" text-2xl font-bold text-customRed dark:text-gray-400" style="word-break: break-word;">Summary</p>
            </div>
            <div
                class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
                </svg>
            </div>
            </div>
            <div id="area-chart"></div>
            <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
            <div class="flex justify-between items-center" >
                <!-- Button -->
                <button
                id="dropdownDefaultButton"
                data-dropdown-toggle="lastDaysdropdown"
                data-dropdown-placement="bottom"
                class="text-sm font-medium text-gray-900  dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white mt-2"
                type="button" >
                <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="lastDaysdropdown" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-900 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a wire:click.prevent="setFilter('weekly')" class="block px-4 py-2  hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Weekly</a>
                    </li>
                    <li>
                        <a wire:click.prevent="setFilter('monthly')" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yearly</a>
                    </li>
                    </ul>
                </div>
            
            </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Modal toggle -->
    {{-- <div class="grid grid-cols-1 mb-4">
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="block  text-white bg-indigo-800 hover:bg-indigo-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-self-end" type="button">
            Export DTR
        </button>
    </div> --}}
    <!-- Main modal -->
    {{-- <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Choose Months  <br>(Multiple is allowed | Max:12)
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="crud-modal-form" class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Months</label>
                            <select multiple style="width:100%" class="js-example-basic-multiple mb-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @php
                                    $ctr = 0;
                                @endphp
                                <optgroup label="" >  </optgroup>
                                <optgroup label="Current Year" ></optgroup>
                                @foreach($options as $value => $label)
                                    @if ($ctr == $currentMonth)
                                        <optgroup label="" > Previous Years </optgroup>
                                        <optgroup label="Previous Years" > Previous Years </optgroup>
                                    @endif
                                    <option value="{{ $value }}">{{ $label }}</option>
                                    @php
                                        $ctr++;
                                    @endphp
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="button" wire:click.prevent="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-self-end">
                        Export
                    </button>
                </form>
            </div>
        </div>
    </div>   --}}
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                placeholder: 'Select an option',
                closeOnSelect: false,
            }).on('change', function() {
                let data = $(this).val();
                console.log(data);
                @this.dateChosen = data;
            });

            // Toggle modal visibility when form submission is completed
            Livewire.on('formSubmitted', () => {
                $('#crud-modal').modal('hide'); // Assuming you're using Bootstrap modal
            });
        });
    </script>
    <br>
    <div class="overflow-x-auto shadow-md rounded-t-lg bg-white">
        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 p-4">
            <div>
                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class=" z-50 inline-flex items-center ring-1 ring-gray-900 h-10 p-2 hover:bg-gray-100 focus:ring-1 focus:border-1 focus:ring-customRed focus:border-customRed font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                    <svg class="w-3 h-3 text-gray-900 dark:text-gray-400 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                        </svg>
                    {{$filterName}}
                    <svg class="ml-2 w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownRadio" class="hidden mt-2 z-50 w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                {{-- <div class="hidden top-0 right-0 mt-2 z-50 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdownRadio"> --}}
                    <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioButton">
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900 hover:bg-customRed hover:text-white   dark:hover:bg-gray-600">
                                <input id="filter-radio-example-1" type="radio" wire:model.live="filter" value="0" name="filter-radio" class="w-4 h-4 text-customRed bg-gray-100 ring-2 ring-white border-gray-300 focus:ring-customRed dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> &nbsp; All </input>
                                {{-- <label for="filter-radio-example-1" class="w-full ms-2 text-sm  font-medium text-gray-900 rounded dark:text-gray-300" >All</label> --}}
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900 hover:bg-customRed hover:text-white dark:hover:bg-gray-600">
                                <input id="filter-radio-example-1" type="radio" wire:model.live="filter" value="1" name="filter-radio" class="w-4 h-4 text-customRed bg-gray-100 ring-2 ring-white border-gray-300 focus:ring-customRed dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> &nbsp;  Today </input>
                                {{-- <label for="filter-radio-example-1" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300" >Last day</label> --}}
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900 hover:bg-customRed hover:text-white dark:hover:bg-gray-600">
                                <input checked="" id="filter-radio-example-2" type="radio" wire:model.live="filter" value="2" name="filter-radio" class="w-4 h-4 text-customRed bg-gray-100 ring-2 ring-white border-gray-300 focus:ring-customRed dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> &nbsp;  Last 7 days </input>
                                {{-- <label for="filter-radio-example-2" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 7 days</label> --}}
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900 hover:bg-customRed hover:text-white dark:hover:bg-gray-600">
                                <input id="filter-radio-example-3" type="radio" wire:model.live="filter" value="3" name="filter-radio" class="w-4 h-4 text-customRed bg-gray-100 ring-2 ring-white border-gray-300 focus:ring-customRed dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> &nbsp; Last 30 days   </input>
                                {{-- <label for="filter-radio-example-3" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 30 days</label> --}}
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900 hover:bg-customRed hover:text-white dark:hover:bg-gray-600">
                                <input id="filter-radio-example-4" type="radio" wire:model.live="filter" value="4" name="filter-radio" class="w-4 h-4 text-customRed bg-gray-100 ring-2 ring-white border-gray-300 focus:ring-customRed dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> &nbsp;  Last 6 Months </input>
                                {{-- <label for="filter-radio-example-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last 6 Months</label> --}}
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded text-gray-900 hover:bg-customRed hover:text-white dark:hover:bg-gray-600">
                                <input id="filter-radio-example-5" type="radio" wire:model.live="filter" value="5" name="filter-radio" class="w-4 h-4 text-customRed bg-gray-100 ring-2 ring-white border-gray-300 focus:ring-customRed dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"> &nbsp;  Last year</input>
                                {{-- <label for="filter-radio-example-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Last year</label> --}}
                            </div>
                        </li>
                    </ul>
                    </div>
                </div>
            
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-900 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="table-search" wire:model.live="search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-900 rounded-lg w-80 bg-gray-50 focus:ring-customRed focus:border-customRed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search like: 2024-01-01 ">
                    {{-- <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items"> --}}
                </div>
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right texttext-gray-500  dark:text-gray-400 pb-4">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    {{-- <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th> --}}
                    <th scope="col" class="px-6 py-3 text-center">
                        No.
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Day of the Week
                    </th>
                    {{-- <th scope="col" class="px-6 py-3 text-center">
                        Status
                    </th> 
                    <th scope="col" class="px-6 py-3 text-center">
                        Late\On-Time
                    </th> --}}
                    <th scope="col" class="px-6 py-3 text-center">
                        Time In
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Time Out
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Undertime
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Overtime
                    </th>
                </tr>
            </thead>
            <div>
                <div wire:ignore>
                    <tbody class="pb-4">
                    @if ($DtrData->isEmpty())
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 ">
                                <th scope="col" colspan="7" class="justify-center" style="padding-bottom: 40px"> 
                                    <div class="flex justify-center " style="padding-top: 40px">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black" class="w-6 h-6 mt-1 mr-1">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                        </svg>
                                        <p class="textindigo text-xl font-semibold items-center "> Nothing to show</p>
                                    </div>
                                </th>
                            </tr>
                    @else
                        <div>
                            @php
                                $ctr = 0;
                                $pageIndex = ($DtrData->currentpage() - 1) * $DtrData->perpage() + $ctr ;
                            @endphp
                        </div>
                        @foreach ($DtrData as $index =>$data)
                        <div>
                            @php
                                $ctr = $ctr + 1;
                            @endphp
                        </div>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                {{-- <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td> --}}
                                <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$pageIndex + $ctr}}
                                </th>
                                <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white capitalize">
                                    <span  class="text-gray-200 text-xs bg-green-500 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg  px-2 py-1 text-center inline-flex items-center me-2 dark:bg-red-300 dark:hover:bg-red-600 dark:focus:ring-red-800">
                                        {{-- <svg class="grid grid-cols-1 text-xs w-6 h-6 text-gray-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 30 24">
                                            <path fill-rule="evenodd" d="M8 7V2.221a2 2 0 0 0-.5.365L3.586 6.5a2 2 0 0 0-.365.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.126a5.087 5.087 0 0 0-4.74 1.368v.001l-6.642 6.642a3 3 0 0 0-.82 1.532l-.74 3.692a3 3 0 0 0 3.53 3.53l3.694-.738a3 3 0 0 0 1.532-.82L19 15.149V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M17.447 8.08a1.087 1.087 0 0 1 1.187.238l.002.001a1.088 1.088 0 0 1 0 1.539l-.377.377-1.54-1.542.373-.374.002-.001c.1-.102.22-.182.353-.237Zm-2.143 2.027-4.644 4.644-.385 1.924 1.925-.385 4.644-4.642-1.54-1.54Zm2.56-4.11a3.087 3.087 0 0 0-2.187.909l-6.645 6.645a1 1 0 0 0-.274.51l-.739 3.693a1 1 0 0 0 1.177 1.176l3.693-.738a1 1 0 0 0 .51-.274l6.65-6.646a3.088 3.088 0 0 0-2.185-5.275Z" clip-rule="evenodd"/>
                                        </svg>     --}}
                                        {{$data->attendance_date }}
                                    </span>
                                </th>
                               
                                @php
                                    
                                @endphp
                                {{-- <td class="px-6 py-4 text-center">
                                    {{$data->status ? 'In' : 'Out'}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{$data->late ? 'Late' : 'On-Time'}}
                                </td> --}}
                                <td class="px-6 py-4 text-center whitespace-nowrap">
                                    @if ($data->type == "Wholeday")
                                        <span  class="text-gray-200 text-xs bg-gray-500 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg  px-2 py-1 text-center inline-flex items-center me-2 dark:bg-red-300 dark:hover:bg-red-600 dark:focus:ring-red-800">
                                            {{$data->type}}
                                        </span>
                                    @elseif ($data->type == "Overtime")
                                        <span  class="text-gray-200 text-xs bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg  px-2 py-1 text-center inline-flex items-center me-2 dark:bg-red-300 dark:hover:bg-red-600 dark:focus:ring-red-800">
                                            {{$data->type}}
                                        </span>
                                    @elseif ($data->type == "Undertime")
                                        <span  class="text-gray-200 text-xs bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg  px-2 py-1 text-center inline-flex items-center me-2 dark:bg-red-300 dark:hover:bg-red-600 dark:focus:ring-red-800">
                                            {{$data->type}}
                                        </span>
                                    @elseif ($data->type == "Half-Day")
                                        <span  class="text-gray-200 text-xs bg-purple-500 hover:bg-p-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg  px-2 py-1 text-center inline-flex items-center me-2 dark:bg-red-300 dark:hover:bg-red-600 dark:focus:ring-red-800">
                                            {{$data->type}}
                                        </span>
                                    @endif
                                    
                                    
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{ Illuminate\Support\Carbon::parse($data->attendance_date)->format('l') }}
                                </td>
                                <td class="px-6 py-4 text-center whitespace-nowrap">
                                    {{$data->time_in}}
                                </td>
                                <td class="px-6 py-4 text-center whitespace-nowrap">
                                    {{$data->time_out}}
                                </td>
                                <td class="px-6 py-4 text-center whitespace-nowrap">
                                    {{$data->undertime}}
                                </td>
                                <td class="px-6 py-4 text-center whitespace-nowrap">
                                    {{$data->overtime}}
                                </td>
                                
                              
                                    {{-- <a onclick="location.href='{{ route('ipcredit', ['index' =>$data->id]) }}'"  class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                                    {{-- <a href="{{route('ipcredit',$data)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                                    {{-- <a wire:click="removeIpcr({{$data->id}})" class="cursor-pointer font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a> --}}   
                            </tr>
                        @endforeach
                    @endif
                </tbody>

                    
                </div>
                
            </div>
        </table>
        <div class="p-4 bg-gray-100 overflow-x-auto w-full rounded-b-lg">
            {{ $DtrData->links()}}
        </div>
        </div>
    </div>
</div>

<script>
    const options = {
      chart: {
        height: "100%",
        maxHeight: "100%",
        maxWidth: "100%",
        type: "area",
        fontFamily: "Inter, sans-serif",
        animations: {
          enabled: false,
        },
        padding: {
            // left: 100, // Adjust the left padding to create more space for the y-axis labels
            // right: 50, // Adjust the right padding if needed
            // top: 20, // Adjust the top padding if needed
            // bottom: 20 // Adjust the bottom padding if needed
        },
        dropShadow: {
          enabled: false,
        },
        toolbar: {
          show: false,
        },
      },
      tooltip: {
        enabled: true,
        x: {
          show: true,
        },
      },
      fill: {
        type: "gradient",
        gradient: {
          opacityFrom: 0.55,
          opacityTo: 0,
          shade: "#A90024",
          gradientToColors: ["#A90024"],
        },
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        width: 6,
      },
      grid: {
        show: true,
        strokeDashArray: 4,
        padding: {
          left: 20,
          right: 0,
          bottom: 0,
          top: 0
        },
      },
      tooltip: {
          enabled: true,
      },
      series: [
        {
          name: "Weekly Count",
          data: @json($data),
          color: "#A90024",
        },
      ],
      yaxis: {
          labels: {
            show: true,
          },
          min: 1,
          max: 7,
          axisBorder: {
            show: true,
          },
          axisTicks: {
            show: true,
          }
        },
      xaxis: {
        categories: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
        labels: {
          show: true,
        },
        beginAtZero: true,
          min: 1,
          max: 5,
        axisBorder: {
          show: true,
        },
        axisTicks: {
          show: true,
        }
      },
    }
  
      const chart = new ApexCharts(document.getElementById("area-chart"), options);
      chart.render();
  
      document.addEventListener('livewire:init', () => {
          Livewire.on('refresh-monthly-chart', (chartData) => {
            chart.updateSeries([{
              name: "Monthly Count",
              data: chartData.data,
            }])
            chart.updateOptions({
              xaxis: {
                categories: ['January',
                              'February',
                              'March',
                              'April',
                              'May',
                              'June',
                              'July',
                              'August',
                              'September',
                              'October',
                              'November',
                              'December'],
                min: 1,
                max: 12,
              },
              yaxis: {
                min: 1,
                max: 31
              }
            })
          })
      })
      document.addEventListener('livewire:init', () => {
          Livewire.on('refresh-weekly-chart', (chartData) => {
            chart.updateSeries([{
              name: "Weekly Count",
              data: chartData.data,
            }])
            chart.updateOptions({
              xaxis: {
                categories: ['Week 1', 'Week 2', 'Week 3', 'Week 4', 'Week 5'],
                min: 1,
                max: 5,
              },
              yaxis: {
                min: 1,
                max: 7
              }
            })
          })
      })
  
</script>