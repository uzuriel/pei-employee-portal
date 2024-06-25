<header class="bg-white px-2 py-4">
    <nav class="flex justify-between items-center w-[99%] mx-auto">
        <!-- Left Section: Image and Text -->
        <div>
            <a href="{{route('EmployeeDashboard')}}">
                <div class="flex item-center">
                    <img src="{{ asset('sllogo.png') }}" alt="Logo" class="w-10 h-10 mr-3">
                    <div class="flex flex-col">
                        <span class="text-sm text-customGray">Powered by</span>
                        <span class="text-lg text-nowrap font-semibold text-customRed">SL Groups</span>
                    </div>
                </div>
            </a>
        </div>
        <!-- Center Section: Navigation Buttons -->
        <div class="ns:invisible lg:visible lg:static absolute min-h-fit left-0 top-[9%] w-auto flex items-center px-5">
            <ul class="flex items-center gap-x-1.5">
                <!-- Home Button -->
                <li>
                    <a href="{{ route('EmployeeDashboard') }}" class="w-32">
                        <button class="w-32 h-7 font-sans text-sm font-medium shadow bg-navButton rounded-8px text-customGray hover:bg-customRed hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="inline-block w-5 h-5 mr-2">
                            <path fill-rule="evenodd" d="M8.543 2.232a.75.75 0 0 0-1.085 0l-5.25 5.5A.75.75 0 0 0 2.75 9H4v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 1 1 2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V9h1.25a.75.75 0 0 0 .543-1.268l-5.25-5.5Z" clip-rule="evenodd" />
                            </svg> Home
                        </button>
                    </a>
                </li>
                <!-- Attendance Button -->
                <li>
                    <a href="{{ route('AttendanceTable') }}" class="w-32">
                        <button class="w-32 h-7 font-sans text-sm font-medium shadow bg-navButton rounded-8px text-customGray h-114 hover:bg-customRed hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="currentColor" class="inline-block w-5 h-5 mr-2">
                                <path fill-rule="evenodd" d="M4 1.75a.75.75 0 0 1 1.5 0V3h5V1.75a.75.75 0 0 1 1.5 0V3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2V1.75ZM4.5 6a1 1 0 0 0-1 1v4.5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-7Z" clip-rule="evenodd" />
                            </svg> Attendance
                        </button>
                    </a>
                </li>
                <!-- Requests Button -->
                <li>
                    <div class="relative inline-block text-left">
                        <button id="requestsDropdownButton" class="w-32 h-7 font-sans text-sm font-medium shadow rounded-8px bg-navButton text-customGray h-114 hover:bg-customRed hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="currentColor" class="inline-block w-5 h-5 mr-2">
                                <path fill-rule="evenodd" d="M11.986 3H12a2 2 0 0 1 2 2v6a2 2 0 0 1-1.5 1.937V7A2.5 2.5 0 0 0 10 4.5H4.063A2 2 0 0 1 6 3h.014A2.25 2.25 0 0 1 8.25 1h1.5a2.25 2.25 0 0 1 2.236 2ZM10.5 4v-.75a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0-.75.75V4h3Z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M2 7a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7Zm6.585 1.08a.75.75 0 0 1 .336 1.005l-1.75 3.5a.75.75 0 0 1-1.16.234l-1.75-1.5a.75.75 0 0 1 .977-1.139l1.02.875 1.321-2.64a.75.75 0 0 1 1.006-.336Z" clip-rule="evenodd" />
                            </svg> Requests
                        </button>
                        <!-- Request Dropdown -->
                        <div id="requestsDropdownMenu" class="absolute z-10 hidden w-40 mt-2 bg-white rounded-md shadow-lg center-0 ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <div class="py-1">
                                <a href="{{ route('LeaveRequestTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Leave Requests</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Overtime Approval</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Undertime Approval</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Advise Slip</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Change Personal Information</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Certificate of Employment</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">IT Helpdesk</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Procurement</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Internal Audit</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Request for a Meeting</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Office Admin</a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Payroll Button -->
                <li>
                    <a href="{{ route('HrTicketsTable') }}" class="w-32">
                        <button class="w-32 h-7 font-sans text-sm font-medium shadow bg-navButton rounded-8px text-customGray h-114 hover:bg-customRed hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="currentColor" class="inline-block w-5 h-5 mr-2">
                                <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5V5h14v-.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                                <path fill-rule="evenodd" d="M15 7H1v4.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V7ZM3 10.25a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 0 1.5h-.5a.75.75 0 0 1-.75-.75Zm3.75-.75a.75.75 0 0 0 0 1.5h2.5a.75.75 0 0 0 0-1.5h-2.5Z" clip-rule="evenodd" />
                            </svg> Payroll
                        </button>
                    </a>
                </li>
                <!-- Tasks Button -->
                <li>
                    <div class="relative inline-block text-left">
                        <button id="tasksDropdownButton" class="w-32 h-7 font-sans text-sm font-medium shadow rounded-8px bg-navButton text-customGray h-114 hover:bg-customRed hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" fill="currentColor" class="inline-block w-5 h-5 mr-2">
                                <path fill-rule="evenodd" d="M11.986 3H12a2 2 0 0 1 2 2v6a2 2 0 0 1-1.5 1.937V7A2.5 2.5 0 0 0 10 4.5H4.063A2 2 0 0 1 6 3h.014A2.25 2.25 0 0 1 8.25 1h1.5a2.25 2.25 0 0 1 2.236 2ZM10.5 4v-.75a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0-.75.75V4h3Z" clip-rule="evenodd" />
                                <path fill-rule="evenodd" d="M2 7a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7Zm6.585 1.08a.75.75 0 0 1 .336 1.005l-1.75 3.5a.75.75 0 0 1-1.16.234l-1.75-1.5a.75.75 0 0 1 .977-1.139l1.02.875 1.321-2.64a.75.75 0 0 1 1.006-.336Z" clip-rule="evenodd" />
                            </svg> Tasks
                        </button>
                        <!-- Task Dropdown -->
                        <div id="tasksDropdownMenu" class="absolute z-10 hidden w-40 mt-2 origin-top-right bg-white rounded-md shadow-lg center-0 ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <div class="py-1">
                                <a href="{{ route('LeaveRequestTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Tasks for Me</a>
                                <a href="{{ route('HrTicketsTable') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-customRed hover:text-white">Assign a Task</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Right Section: Notification and Profile Buttons -->
        <div class="flex item-center gap-x-3.5">
            <!-- Notification -->
            <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-customGray hover:text-customRed focus:outline-none dark:hover:text-white dark:text-customGray" type="button">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                    <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
                </svg>
                <div class="absolute block w-3 h-3 bg-customRed border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900"></div> 
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownNotification" class="absolute right-0 z-10 hidden mt-5 origin-top-right bg-white divide-y divide-gray-100 rounded-lg shadow top-12 dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
                <div class="block px-4 py-2 text-sm font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white"> Notifications </div>
                <div class="divide-y divide-gray-100 dark:divide-gray-700">
                        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex-shrink-0">
                            <img class="rounded-full w-11 h-11" src="profilepicture.jpg" alt="Profile Picture">
                            <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 border border-white rounded-full bg-customRed ms-6 dark:border-gray-800">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                    <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w-full ps-3">
                            <div class="text-gray-500 text-xs mb-1.5 dark:text-gray-400">New task from <span class="font-semibold text-customGray1 dark:text-white">Jese Leos</span>: "Compile documents"</div>
                            <div class="text-xs text-customRed dark:text-customRed">a few moments ago</div>
                        </div>
                    </a>
                    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                        <div class="flex-shrink-0">
                            <img class="rounded-full w-11 h-11" src="profilepicture.jpg" alt="Profile Picture">
                            <div class="absolute flex items-center justify-center w-5 h-5 -mt-5 border border-white rounded-full bg-customRed ms-6 dark:border-gray-800">
                                <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                    <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"/>
                                    <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="w-full ps-3">
                            <div class="text-gray-500 text-xs mb-1.5 dark:text-gray-400">New task from <span class="font-semibold text-customGray1 dark:text-white">Jese Leos</span>: "Compile documents"</div>
                            <div class="text-xs text-customRed dark:text-customRed">a few moments ago</div>
                        </div>
                    </a>
                </div>
                <!-- Additional notification items here -->
                <a href="#" class="block py-2 text-sm font-medium text-center rounded-b-lg text-customGray1 bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-customRed dark:text-white">
                    <div class="inline-flex items-center ">
                            <svg class="w-4 h-4 text-sm text-gray-700 me-2 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                            <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                        </svg> View all
                    </div>
                </a>
            </div>
            <!-- Profile Icon -->
            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="relative flex items-center text-sm font-medium rounded-full text-customGray1 pe-1 hover:text-customRed dark:hover:text-customRed md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-customGray1 dark:text-white" type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full me-2" src="profilepicture.jpg" alt="user photo"> {{$employee_name}}
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <!-- Profile Dropdown -->
            <div id="dropdownAvatarName" class="absolute right-0 z-10 hidden mt-5 origin-top-right bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-customRed dark:divide-customRed top-12">
                <div class="px-4 py-3 text-sm text-customGray1 dark:text-white">
                    <div class="font-medium">ProjectEngage Inc.</div>
                    <div class="truncate">jrk@slgroup.com</div>
                </div>
                <ul class="py-2 text-sm text-customGray1 dark:text-gray-200" aria-labelledby="dropdownAvatarNameButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-customRed hover:text-white dark:hover:bg-customRed dark:hover:text-white">My Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-customRed hover:text-white dark:hover:bg-customRed dark:hover:text-white">Account Settings</a>
                    </li>
                </ul>
                <div class="py-2">
                    <a href="#" class="block px-4 py-2 text-sm text-customGray1 hover:bg-customRed hover:text-white dark:hover:bg-customRed dark:hover:text-white">Sign out</a>
                </div>
            </div>
            <!-- Menu Button when smaller than large screen -->
            <button class="lg:hidden">
                <svg class="w-5 h-5 text-customGray1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M2 3.75A.75.75 0 0 1 2.75 3h10.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 3.75ZM2 8a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 8Zm0 4.25a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z"/>
                </svg>
            </button>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Dropdown Avatar Name
        const dropdownButtonAvatarName = document.getElementById('dropdownAvatarNameButton');
        const dropdownMenuAvatarName = document.getElementById('dropdownAvatarName');

        if (dropdownButtonAvatarName) {
            dropdownButtonAvatarName.addEventListener('click', function() {
                dropdownMenuAvatarName.classList.toggle('hidden');
            });
        }

        // Dropdown Notification
        const dropdownButtonNotification = document.getElementById('dropdownNotificationButton');
        const dropdownMenuNotification = document.getElementById('dropdownNotification');

        if (dropdownButtonNotification) {
            dropdownButtonNotification.addEventListener('click', function() {
                dropdownMenuNotification.classList.toggle('hidden');
            });
        }

        // Dropdown Requests
        const dropdownButtonRequests = document.getElementById('requestsDropdownButton');
        const dropdownMenuRequests = document.getElementById('requestsDropdownMenu');

        if (dropdownButtonRequests) {
            let isHoveringButton = false;
            let isHoveringMenu = false;

            // Open dropdown on mouse enter
            dropdownButtonRequests.addEventListener('mouseenter', function() {
                dropdownMenuRequests.classList.remove('hidden');
                isHoveringButton = true;
            });

            // Close dropdown on mouse leave from button or menu
            dropdownButtonRequests.addEventListener('mouseleave', function() {
                isHoveringButton = false;
                setTimeout(function() {
                    if (!isHoveringButton && !isHoveringMenu) {
                        dropdownMenuRequests.classList.add('hidden');
                    }
                }, 200); // Delay closing to check if mouse moved to menu
            });

            dropdownMenuRequests.addEventListener('mouseenter', function() {
                isHoveringMenu = true;
            });

            dropdownMenuRequests.addEventListener('mouseleave', function() {
                isHoveringMenu = false;
                setTimeout(function() {
                    if (!isHoveringButton && !isHoveringMenu) {
                        dropdownMenuRequests.classList.add('hidden');
                    }
                }, 200); // Delay closing to check if mouse moved to button
            });
        }

        // Dropdown Tasks
        const dropdownButtonTasks = document.getElementById('tasksDropdownButton');
        const dropdownMenuTasks = document.getElementById('tasksDropdownMenu');

        if (dropdownButtonTasks) {
            let isHoveringButton = false;
            let isHoveringMenu = false;

            // Open dropdown on mouse enter
            dropdownButtonTasks.addEventListener('mouseenter', function() {
                dropdownMenuTasks.classList.remove('hidden');
                isHoveringButton = true;
            });

            // Close dropdown on mouse leave from button or menu
            dropdownButtonTasks.addEventListener('mouseleave', function() {
                isHoveringButton = false;
                setTimeout(function() {
                    if (!isHoveringButton && !isHoveringMenu) {
                        dropdownMenuTasks.classList.add('hidden');
                    }
                }, 200); // Delay closing to check if mouse moved to menu
            });

            dropdownMenuTasks.addEventListener('mouseenter', function() {
                isHoveringMenu = true;
            });

            dropdownMenuTasks.addEventListener('mouseleave', function() {
                isHoveringMenu = false;
                setTimeout(function() {
                    if (!isHoveringButton && !isHoveringMenu) {
                        dropdownMenuTasks.classList.add('hidden');
                    }
                }, 200); // Delay closing to check if mouse moved to button
            });
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (dropdownButtonAvatarName && !dropdownButtonAvatarName.contains(event.target) && !dropdownMenuAvatarName.contains(event.target)) {
                dropdownMenuAvatarName.classList.add('hidden');
            }
            if (dropdownButtonNotification && !dropdownButtonNotification.contains(event.target) && !dropdownMenuNotification.contains(event.target)) {
                dropdownMenuNotification.classList.add('hidden');
            }
            if (dropdownButtonRequests && !dropdownButtonRequests.contains(event.target) && !dropdownMenuRequests.contains(event.target)) {
                dropdownMenuRequests.classList.add('hidden');
            }
            if (dropdownButtonTasks && !dropdownButtonTasks.contains(event.target) && !dropdownMenuTasks.contains(event.target)) {
                dropdownMenuTasks.classList.add('hidden');
            }
        });
    });
</script>