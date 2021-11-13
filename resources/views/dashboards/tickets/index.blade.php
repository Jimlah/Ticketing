<x-app-layout>
    <div class="container px-4 mx-auto sm:px-8">
        <div class="py-8">
            <x-slot name="header">
                {{ __('Tickets') }}
            </x-slot>
            <div class="flex flex-col justify-between my-2 sm:flex-row">
                <form class="flex flex-col sm:flex-row" form="GET">
                    <div class="flex flex-row mb-1 sm:mb-0">
                        <div class="relative">
                            <select name="priority"
                                class="block w-full h-full px-4 py-2 pr-8 leading-tight text-gray-700 bg-white border-t border-b border-r border-gray-400 rounded-r appearance-none sm:rounded-r-none sm:border-r-0 focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                                <option disabled="true" {{ !request()->get('priority') ? 'selected' : '' }}>All
                                </option>
                                @foreach ($priorities as $priority)
                                    <option value="{{ $priority->id }}"
                                        {{ request()->get('priority') == $priority->id ? 'selected' : '' }}>
                                        {{ $priority->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative">
                            <select name="category"
                                class="block w-full h-full px-4 py-2 pr-8 leading-tight text-gray-700 bg-white border-t border-b border-r border-gray-400 rounded-r appearance-none sm:rounded-r-none sm:border-r-0 focus:outline-none focus:border-l focus:border-r focus:bg-white focus:border-gray-500">
                                <option disabled="true" {{ !request()->get('category') ? 'selected' : '' }}>All
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ request()->get('category') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="relative block">
                        <span class="absolute inset-y-0 left-0 flex items-center h-full pl-2">
                            <svg viewBox="0 0 24 24" class="w-4 h-4 text-gray-500 fill-current">
                                <path
                                    d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                </path>
                            </svg>
                        </span>
                        <input placeholder="Search" type="search" name="search" value="{{ request()->get('search') }}"
                            class="block w-full py-2 pl-8 pr-6 text-sm text-gray-700 placeholder-gray-400 bg-white border border-b border-gray-400 rounded-l rounded-r appearance-none sm:rounded-l-none focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                    </div>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-semibold text-gray-800 bg-gray-300 rounded-r hover:bg-gray-400">
                        Search
                    </button>
                </form>

                <a href="{{ route('tickets.create') }}"
                    class="flex items-center px-4 py-2 text-sm font-semibold text-gray-800 bg-gray-300 rounded-r hover:bg-gray-400">
                    <span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </span>
                    <span> New Ticket</span>
                </a>
            </div>
            <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <x-col-head>
                                    Subject
                                </x-col-head>
                                <x-col-head>
                                    Admin
                                </x-col-head>
                                <x-col-head>
                                    Status
                                </x-col-head>
                                <x-col-head>
                                    Category
                                </x-col-head>
                                <x-col-head>
                                    Priority
                                </x-col-head>
                                <x-col-head>
                                    Agents
                                </x-col-head>
                                <x-col-head>
                                    Actions
                                </x-col-head>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr>
                                    <x-col-body>
                                        <p class="text-gray-900 whitespace-no-wrap">{{ $ticket->subject }}</p>
                                    </x-col-body>
                                    <x-col-body>
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                <img class="w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                    alt="" />
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $ticket->admin->name }}
                                                </p>
                                            </div>
                                        </div>
                                    </x-col-body>
                                    <x-col-body>
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 rounded-full opacity-50 {{ $ticket->closed_at ? 'bg-blue-200' : 'bg-green-200' }}"></span>
                                            <span class="relative">{{ $ticket->status }}</span>
                                        </span>
                                    </x-col-body>
                                    <x-col-body>
                                        <span
                                            class="relative inline-flex items-center font-semibold leading-tight text-white bg-opacity-50 rounded-sm"
                                            style="background-color: {{ $ticket->category->color }};">
                                            <span class="relative px-3 py-1">{{ $ticket->category->name }}</span>
                                            <button class="p-1 hover:opacity-50">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </button>
                                        </span>
                                    </x-col-body>
                                    <x-col-body>
                                        <span
                                            class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-green-200 rounded-full opacity-50"></span>
                                            <span class="relative">{{ $ticket->priority->name }}</span>
                                        </span>
                                    </x-col-body>
                                    <x-col-body>
                                        <div class="relative flex items-center">
                                            @foreach ($ticket->agents as $agent)
                                                <div
                                                    class="flex-shrink-0 w-10 h-10 hover:z-50 transition duration-300 relative {{ $loop->first ? '' : '-ml-3' }}">
                                                    <img class="w-full h-full border-2 rounded-full "
                                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                        alt="{{ $agent->name }}" />
                                                    <x-tooltip>{{ $agent->name }}</x-tooltip>
                                                </div>
                                            @endforeach
                                            <button id="add-agent" href="#"
                                                class="relative flex-shrink-0 -ml-3 text-white transition duration-300 bg-blue-500 rounded-full -z-10 hover:z-50 hover:bg-blue-700">
                                                <svg class="w-8 h-8" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>
                                                <x-tooltip>Add new Agent</x-tooltip>
                                            </button>
                                        </div>
                                    </x-col-body>
                                    {{-- <x-col-body>
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            Jan 21, 2020
                                        </p>
                                    </x-col-body> --}}
                                    <x-col-body>
                                        <div class="flex items-center">
                                            <a href="{{ route('tickets.show', $ticket) }}"
                                                class="relative inline-flex items-center px-3 py-1 font-semibold leading-tight text-white bg-blue-500 rounded-sm hover:bg-opacity-50">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                                </svg>
                                                <span class="relative">View</span>
                                            </a>
                                            <a href="{{ route('tickets.edit', $ticket) }}"
                                                class="relative inline-flex items-center px-3 py-1 font-semibold leading-tight text-white bg-green-500 rounded-sm hover:bg-opacity-50">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                                <span class="relative">Edit</span>
                                            </a>
                                        </div>
                                    </x-col-body>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <x-paginate :paginator="$tickets" />
                </div>
            </div>
        </div>
    </div>
    {{-- @livewire('add-agent-to-ticket') --}}
</x-app-layout>
