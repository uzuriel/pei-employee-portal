<div class="main-content">
    <br><br>
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
            
            <nav class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{route('dashboard')}}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
                    <a href="{{route('IpcrTable')}}" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">IPCR</a>
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
            <h2 class="mb-4 text-3xl font-bold leading-none tracking-tight text-gray-900 md:text-3xl dark:text-white">IPCR</h2>
  
            
            <div class="flex justify-end">
                <button type="button" onclick="location.href='{{ route('IpcrForm', ['type' => 'target']) }}'" class="text-white mb-8 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create Target IPCR</button>
                <button type="button" onclick="location.href='{{ route('IpcrForm', ['type' => 'rated']) }}'" class="text-blue-700 border h-10 border-blue-400 hover:text-white hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:text-blue-300 dark:border-blue-300 dark:hover:text-white dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Create Rated IPCR</button>
            
            </div>


            <div class="overflow-x-auto shadow-md sm:rounded-lg bg-white pb-4">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 pb-4">
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
                                Ipcr Type
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Date Filled
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Start Period
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                End Period
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Ratee
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Core Rating
                            </th>
                            <th scope="col" class="px-6 py-3 text-center ">
                                Support/Administrative Rating
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Final Rating
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Actions
                            </th>
                            
                        </tr>
                    </thead>
                            @php
                                $ctr = 0;
                                $pageIndex = ($ipcrs->currentpage() - 1) * $ipcrs->perpage() + $ctr;
                            @endphp
                    <div>
                        <div>
                          
                            @foreach ($ipcrs as $index => $ipcr)
                            @php
                                $ctr += 1;
                            @endphp
                            <tbody> 
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
                                        {{$ipcr->ipcr_type}}
                                    </th>
                                    @if($ipcr->status == "Pending")
                                    <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white capitalize">
                                        <span  class="text-gray-200 text-xs bg-amber-700 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg  px-2 py-1 text-center inline-flex items-center me-2 dark:bg-amber-300 dark:hover:bg-amber-600 dark:focus:ring-amber-800">
                                            <svg class="grid grid-cols-1 text-xs w-6 h-6 text-gray-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 30 24">
                                                <path fill-rule="evenodd" d="M8 7V2.221a2 2 0 0 0-.5.365L3.586 6.5a2 2 0 0 0-.365.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.126a5.087 5.087 0 0 0-4.74 1.368v.001l-6.642 6.642a3 3 0 0 0-.82 1.532l-.74 3.692a3 3 0 0 0 3.53 3.53l3.694-.738a3 3 0 0 0 1.532-.82L19 15.149V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"/>
                                                <path fill-rule="evenodd" d="M17.447 8.08a1.087 1.087 0 0 1 1.187.238l.002.001a1.088 1.088 0 0 1 0 1.539l-.377.377-1.54-1.542.373-.374.002-.001c.1-.102.22-.182.353-.237Zm-2.143 2.027-4.644 4.644-.385 1.924 1.925-.385 4.644-4.642-1.54-1.54Zm2.56-4.11a3.087 3.087 0 0 0-2.187.909l-6.645 6.645a1 1 0 0 0-.274.51l-.739 3.693a1 1 0 0 0 1.177 1.176l3.693-.738a1 1 0 0 0 .51-.274l6.65-6.646a3.088 3.088 0 0 0-2.185-5.275Z" clip-rule="evenodd"/>
                                            </svg>    
                                            {{ $ipcr->status }}
                                        </span>
                                    </th>
                                    @elseif($ipcr->status == "Accepted")
                                        <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white capitalize">
                                            <span  class="text-gray-200 text-xs bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg  px-2 py-1 text-center inline-flex items-center me-2 dark:bg-green-300 dark:hover:bg-green-600 dark:focus:ring-green-800">
                                                <svg class="grid grid-cols-1 text-xs w-6 h-6 text-gray-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 30 24">
                                                    <path fill-rule="evenodd" d="M8 7V2.221a2 2 0 0 0-.5.365L3.586 6.5a2 2 0 0 0-.365.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.126a5.087 5.087 0 0 0-4.74 1.368v.001l-6.642 6.642a3 3 0 0 0-.82 1.532l-.74 3.692a3 3 0 0 0 3.53 3.53l3.694-.738a3 3 0 0 0 1.532-.82L19 15.149V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"/>
                                                    <path fill-rule="evenodd" d="M17.447 8.08a1.087 1.087 0 0 1 1.187.238l.002.001a1.088 1.088 0 0 1 0 1.539l-.377.377-1.54-1.542.373-.374.002-.001c.1-.102.22-.182.353-.237Zm-2.143 2.027-4.644 4.644-.385 1.924 1.925-.385 4.644-4.642-1.54-1.54Zm2.56-4.11a3.087 3.087 0 0 0-2.187.909l-6.645 6.645a1 1 0 0 0-.274.51l-.739 3.693a1 1 0 0 0 1.177 1.176l3.693-.738a1 1 0 0 0 .51-.274l6.65-6.646a3.088 3.088 0 0 0-2.185-5.275Z" clip-rule="evenodd"/>
                                                </svg>    
                                                {{ $ipcr->status }}
                                            </span>
                                        </th>
                                    @else
                                    <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white capitalize">
                                        <span  class="text-gray-200 text-xs bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg  px-2 py-1 text-center inline-flex items-center me-2 dark:bg-red-300 dark:hover:bg-red-600 dark:focus:ring-red-800">
                                            <svg class="grid grid-cols-1 text-xs w-6 h-6 text-gray-200 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 30 24">
                                                <path fill-rule="evenodd" d="M8 7V2.221a2 2 0 0 0-.5.365L3.586 6.5a2 2 0 0 0-.365.5H8Zm2 0V2h7a2 2 0 0 1 2 2v.126a5.087 5.087 0 0 0-4.74 1.368v.001l-6.642 6.642a3 3 0 0 0-.82 1.532l-.74 3.692a3 3 0 0 0 3.53 3.53l3.694-.738a3 3 0 0 0 1.532-.82L19 15.149V20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z" clip-rule="evenodd"/>
                                                <path fill-rule="evenodd" d="M17.447 8.08a1.087 1.087 0 0 1 1.187.238l.002.001a1.088 1.088 0 0 1 0 1.539l-.377.377-1.54-1.542.373-.374.002-.001c.1-.102.22-.182.353-.237Zm-2.143 2.027-4.644 4.644-.385 1.924 1.925-.385 4.644-4.642-1.54-1.54Zm2.56-4.11a3.087 3.087 0 0 0-2.187.909l-6.645 6.645a1 1 0 0 0-.274.51l-.739 3.693a1 1 0 0 0 1.177 1.176l3.693-.738a1 1 0 0 0 .51-.274l6.65-6.646a3.088 3.088 0 0 0-2.185-5.275Z" clip-rule="evenodd"/>
                                            </svg>    
                                            {{ $ipcr->status }}
                                        </span>
                                    </th>
                                    @endif
                                    <td class="px-6 py-4 text-center whitespace-nowrap">
                                        {{$ipcr->date_of_filling}}
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">
                                        {{$ipcr->start_period}}
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">
                                        {{$ipcr->end_period}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{$ipcr->ratee}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{$ipcr->core_rating}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{$ipcr->supp_admin_rating}}
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        {{$ipcr->final_rating}}
                                    </td>
                                      {{-- <a onclick="location.href='{{ route('ipcredit', ['index' => $ipcr->id]) }}'"  class="cursor-pointer font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                                        {{-- <a href="{{route('ipcredit', $ipcr)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                                        {{-- <a wire:click="removeIpcr({{$ipcr->id}})" class="cursor-pointer font-medium text-red-600 dark:text-red-500 hover:underline ms-3">Remove</a> --}}

                                    <td class="items-center text-center py-4">
                                        <button data-dropdown-toggle="dropdown{{$loop->index}}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                                <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                            </svg>
                                        </button>
                                        <div class="hidden top-0 right-0 mt-2 z-50 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdown{{$loop->index}}">
                                            <!-- Dropdown content -->
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                                <li>
                                                    <a onclick="location.href='{{ route('IpcrEdit', ['index' => $ipcr->id]) }}'"  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                </li>
                                                <li>
                                                    <a onclick="location.href='{{ route('IpcrPdf', ['index' => $ipcr->id]) }}'" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">PDF</a>
                                                </li>
                                            </ul>
                                            <div class="py-2">
                                                <a wire:click="removeIpcr({{$ipcr->id}})" wire:confirm="Are you sure you want to delete this post?" class="block px-4 py-2 text-black hover:bg-red-600 hover:text-white dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                            </div>
                                        </div>
                                    </td>

                                        {{-- <td class="relative items-center text-center py-4">
                                            <button data-dropdown-toggle="dropdown{{$loop->index}}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                                </svg>
                                            </button>
                                            <div class="hidden absolute top-0 right-0 mt-2 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700" id="dropdown{{$loop->index}}">
                                                <!-- Dropdown content -->
                                               
                                            </div>
                                        </td> --}}
                                </tr>
                               
                            </tbody>
                            @endforeach
                            
                        </div>
                     
                       
                    </div>
                </table>
                
            </div>
            <div class="p-4 bg-gray-100 overflow-x-auto w-full">
                {{ $ipcrs->links('vendor.pagination.default') }}
            </div>
            

        </div>
    </div> 
</div>