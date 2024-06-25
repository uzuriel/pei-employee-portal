<div class="mt-10 flex lg:flex-row flex-col gap-y-6 lg:justify-center ns:items-stretch lg:items-start">
    <div class="lg:p-6 ns:pt-5 mt-[-70px]">
        <div wire:ignore class="lg:w-[350px] lg:h-[210px] overflow-hidden bg-white rounded-lg  shadow-lg">
            <header>
                <img class="object-cover w-full h-50" src="header.png" alt="Header Photo">
            </header>
            <div class="flex items-center pl-4 mb-4 -mt-12">
                @if(is_null($employeeImage) == False)
                    <img 
                        class="w-20 h-20 border-4 border-white rounded-full" 
                        src="data:image/gif;base64,{{ $employeeImage }}" 
                        alt="Employee Image"
                    />
                @else
                    <img class="object-cover w-20 h-20 border-4 border-white rounded-full " src="{{ asset( 'defaultuser.png') }}" alt="Employee Image"/>
                @endif
                    {{-- <img class="w-20 h-20 border-4 border-white rounded-full" src="{{asset('assets/header.png')}}" alt="Profile Icon"> --}}
            </div>
            <div class="pl-5 mb-2 text-left">
                <h2 class="text-xl font-semibold text-customGray1">{{$employee_name}}</h2>
            </div>
            <div class="px-5 pb-5 text-sm text-left text-customGray1">
                <p>{{$position}}, {{$department}}</p>
            </div>
        </div>
        <div class="mt-[15px] lg:w-[350px] lg:h-120 overflow-hidden bg-white rounded-lg shadow-lg flex flex-col items-center">
            <div class = mb-6>
                <div wire:ignore >
                    <div class="mt-5 mb-6 text-center">
                        <p class="px-20 text-sm font-regular text-customGray1">{{ now()->format('F j, Y') }}</p>
                        <p id="current-time" class="px-20 text-sm text-customGray1 font-regular">{{ now('Asia/Manila')->format('g:i:s A') }}</p>
                        <div class="my-4 border-t border-gray-300"></div>
                    </div> 
                    <div wire:poll.1ms class="flex px-20 mb-4">
                        <button wire:click.prevent="checkIn" class="flex items-center justify-center px-4 mr-4 text-sm font-medium shadow bg-navButton rounded-10px w-28 h-7 text-activeButton rounded-8px hover:bg-customRed hover:text-white"
                            @if($timeInFlag) disabled @endif>
                            Time In
                        </button>
                        <button wire:click.prevent="checkOut" class="flex items-center justify-center px-4 text-sm font-medium shadow bg-navButton rounded-10px w-28 h-7 text-activeButton rounded-8px hover:bg-customRed hover:text-white"
                            @if($timeOutFlag) disabled @endif>
                            Time Out
                        </button>
                    </div>
                </div>
            </div>
            <div wire:poll.1ms  class="grid grid-cols-2 gap-4 px-10 mb-6 text-center">
                <div class="">
                    <p class="text-sm font-medium text-customGray1">Time In:</p>
                    <p class="text-sm font-medium text-customRed">{{$timeIn ?? "N/A"}} </p>
                </div>
                <div class="">
                    <p class="text-sm font-medium text-customGray1">Time Out:</p>
                    <p class="text-sm font-medium text-customRed">{{$timeOut ?? "N/A"}}</p>
                </div>
                <div class="items-center col-span-2 mt-6">
                    <div class="">
                        <p class="text-sm font-medium text-customGray1">Number of Hours:</p>
                        <p class="text-sm font-medium text-customRed">{{$currentTimeIn ?? "N/A"}}</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center mb-6 px-15">
                <a href="{{ route('AttendanceTable') }}" class="w-full">
                    <button class="flex items-center px-3 ml-2 text-sm font-medium shadow bg-navButton w-58 h-7 text-activeButton rounded-8px hover:bg-customRed hover:text-white"> Generate Daily Log Record </button>
                </a>
            </div>
        </div>
    </div>

    <!-- Center Container -->
    <div class="lg:w-full lg:max-w-xl pt-5 text-center bg-white rounded-lg shadow-lg mb-10 lg:mt-[-45px] ns:mt-[0px]">
        <div class="flex items-center px-6 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2 text-customGray1">
                <path d="M5.85 3.5a.75.75 0 0 0-1.117-1 9.719 9.719 0 0 0-2.348 4.876.75.75 0 0 0 1.479.248A8.219 8.219 0 0 1 5.85 3.5ZM19.267 2.5a.75.75 0 1 0-1.118 1 8.22 8.22 0 0 1 1.987 4.124.75.75 0 0 0 1.48-.248A9.72 9.72 0 0 0 19.266 2.5Z" />
                <path fill-rule="evenodd" d="M12 2.25A6.75 6.75 0 0 0 5.25 9v.75a8.217 8.217 0 0 1-2.119 5.52.75.75 0 0 0 .298 1.206c1.544.57 3.16.99 4.831 1.243a3.75 3.75 0 1 0 7.48 0 24.583 24.583 0 0 0 4.83-1.244.75.75 0 0 0 .298-1.205 8.217 8.217 0 0 1-2.118-5.52V9A6.75 6.75 0 0 0 12 2.25ZM9.75 18c0-.034 0-.067.002-.1a25.05 25.05 0 0 0 4.496 0l.002.1a2.25 2.25 0 1 1-4.5 0Z" clip-rule="evenodd" />
            </svg>
            <h2 class="text-base font-semibold text-customGray1">Announcement</h2>
        </div>
        <div class="px-8 text-xs text-justify text-customGray">
            <p class="flex items-center">
                <span>Published by: Maria Santos</span>
                <span class="mx-1">•</span>
                <span>Date Published: June 13, 2024</span>
            </p>
        </div>
        <div class="my-4 border-t border-gray-300"></div>
        <div class="px-8 py-2 pb-5 text-justify">
            <p class="text-xs font-semibold text-customGray1">Subject: New Office Announcement</p>
            <p class="mt-2 text-xs text-customGray font-regular">Welcome to our new office location! We are thrilled to announce the opening of our new office in Boracay, Philippines. <br><br> This expansion marks an exciting milestone in our journey and represents our ongoing commitment to providing excellent service and innovative solutions for our clients.<br>
            <br>Key Features of Our New Office:
            <br>• Modern Workspace: Our new office is equipped with state-of-the-art facilities designed to foster collaboration and creativity.
            <br>• Convenient Location: Easily accessible via major highways and public transportation, making it convenient for both our employees and clients.
            <br>• Enhanced Services: The new location will allow us to expand our service offerings and improve our response times.
            <br>• Sustainable Design: Built with sustainability in mind, our new office features energy-efficient systems and environmentally friendly materials.
            <br><br>Join Us for the Grand Opening:
            We invite you to join us for the grand opening ceremony on June 19, 2024 at 6 AM. <br><br>This will be a wonderful opportunity to tour the new space, meet our team, and celebrate this exciting development together. Light refreshments will be served!
            <br><br>Stay Connected: Follow us on Facebook for updates, photos, and more information about our new office and upcoming events. <br><br>We look forward to continuing to serve you from our new location!
            <br><br>Thank you for your continued support.</p>
        </div>
    </div>
    
    <!-- Right Side Containers -->
    <div wire:ignore class="flex flex-col lg:items-center ns:items-stretch lg:ml-5 mt-[-45px]">
        <!-- Pending Tasks -->
        <div class="lg:w-64 mb-4 bg-white rounded-lg shadow-lg ns:items-stretch">
            <div class="pt-4 pb-4">
                <h2 class="mb-4 ml-4 text-base font-semibold text-customGray1">Tasks Available</h2>
                <hr class="my-4 border-gray-300">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-5 size-6 text-customRed">
                        <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
                        <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                    </svg>
                    <p class="ml-2 text-sm text-center text-customRed">5 pending tasks</p>
                    {{-- <p class="text-sm text-center text-customGray">No pending taks</p> this is for no pending taks --}}
                </div>
            </div>
        </div>
        <!-- Quick Actions -->
        <div class="lg:w-64 mb-4 bg-white rounded-lg shadow-lg">
            <div class="pt-4 pb-4">
                <h2 class="mb-4 ml-4 text-base font-semibold text-customGray1">Quick Actions</h2>
                <hr class="w-full my-4 border-gray-300">
                <!-- Buttons -->
                <div class="flex flex-col">
                    <button wire:click="leaveRequest" id="myButton" class="flex text-center items-center px-4 mb-2 ml-4 mr-4 text-sm font-medium shadow bg-navButton w-55 h-7 text-activeButton rounded-8px hover:bg-customRed hover:text-white"> My Tasks </button>
                    <button wire:click="checkIn" id="myButton" class="flex items-center px-4 mb-2 ml-4 mr-4 text-sm font-medium shadow bg-navButton w-55 h-7 text-activeButton rounded-8px hover:bg-customRed hover:text-white"> HR Tickets </button>
                    <a href="{{route('ItHelpDeskTable')}}" class="flex items-center px-4 mb-2 ml-4 mr-4 text-sm font-medium shadow bg-navButton w-55 h-7 text-activeButton rounded-8px hover:bg-customRed hover:text-white"> IT Helpdesk </a>
                    <button class="flex items-center px-4 ml-4 mr-4 text-sm font-medium shadow bg-navButton w-55 h-7 text-activeButton rounded-8px hover:bg-customRed hover:text-white"> Leave Requests </button>
                </div>
            </div>
        </div>
        <!-- Upcoming leaves -->
        <div class="lg:w-64 mb-4 bg-white rounded-lg shadow-lg">
            <div class="pt-4 pb-4">
                <h2 class="mb-4 ml-4 text-base font-semibold text-customGray1">Upcoming Leaves</h2>
                <hr class="my-4 border-gray-300">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="ml-5 size-6 text-customRed">
                        <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                    </svg>
                    <p class="ml-2 text-sm text-center text-customRed">July 1, 2024</p>
                    {{-- <p class="text-sm text-center text-customGray">No pending leaves</p> this is for no pending leaves --}}
                </div>
            </div>
        </div>
    </div>
</div>
    
<script>
    function updateTime() {
        const options = { timeZone: 'Asia/Manila', hour12: true, hour: '2-digit', minute: '2-digit', second: '2-digit' };
        const now = new Date().toLocaleTimeString('en-US', options);
        document.getElementById('current-time').textContent = now;
    }
    setInterval(updateTime, 1000); // Update every second
    updateTime(); // Initial call to display time immediately
</script>