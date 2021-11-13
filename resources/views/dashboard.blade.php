<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="overflow-hidden">
        <div class="flex flex-wrap">
            <div class="w-full px-5 mt-4 mb-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-3 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400"> Open Ticket</h5>
                                <span
                                    class="text-xl font-semibold text-blueGray-700">{{ $tickets->where('closed_at', null)->count() }}</span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-red-500 rounded-full shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-emerald-500"><i class="fas fa-arrow-up"></i> 2,99% </span>
                            <span class="whitespace-nowrap"> Since last month </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-5 mt-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-4 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">Closed Ticket</h5>
                                <span
                                    class="text-xl font-semibold text-blueGray-700">{{ $tickets->where('closed_at')->count() }}</span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-pink-500 rounded-full shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-red-500"><i class="fas fa-arrow-down"></i> 4,01%</span>
                            <span class="whitespace-nowrap"> Since last week </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-5 mt-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">Customers</h5>
                                <span class="text-xl font-semibold text-blueGray-700">{{ $customers->count() }}</span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-blue-500 rounded-full shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-red-500"><i class="fas fa-arrow-down"></i> 1,25% </span>
                            <span class="whitespace-nowrap"> Since yesterday </span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-5 mt-4 lg:w-6/12 xl:w-3/12">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white rounded shadow-lg xl:mb-0">
                    <div class="flex-auto p-4">
                        <div class="flex flex-wrap">
                            <div class="relative flex-1 flex-grow w-full max-w-full pr-4">
                                <h5 class="text-xs font-bold uppercase text-blueGray-400">Users</h5>
                                <span class="text-xl font-semibold text-blueGray-700">{{ $users->count() }} </span>
                            </div>
                            <div class="relative flex-initial w-auto pl-4">
                                <div
                                    class="inline-flex items-center justify-center w-12 h-12 p-3 text-center text-white bg-indigo-500 rounded-full shadow-lg">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-blueGray-400">
                            <span class="mr-2 text-emerald-500"><i class="fas fa-arrow-up"></i> 12% </span>
                            <span class="whitespace-nowrap"> Since last mounth </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
