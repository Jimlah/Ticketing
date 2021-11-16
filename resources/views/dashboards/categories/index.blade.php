<x-app-layout>
    <div class="container px-4 mx-auto sm:px-8">
        <div class="py-8">
            <x-slot name="header">
                {{ __('Categories') }}
            </x-slot>
            <div class="flex flex-col justify-between my-2 sm:flex-row">
                <a href="{{ route('categories.create') }}"
                    class="flex items-center self-end px-4 py-2 text-sm font-semibold text-gray-800 bg-gray-300 rounded-r hover:bg-gray-400">
                    <span>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </span>
                    <span> New category</span>
                </a>
            </div>
            <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
                <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <x-col-head>
                                    Name
                                </x-col-head>
                                <x-col-head>
                                    Color
                                </x-col-head>
                                <x-col-head>
                                    Actions
                                </x-col-head>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <x-col-body>
                                        <p class="text-gray-900 uppercase whitespace-no-wrap">{{ $category->name }}</p>
                                    </x-col-body>

                                    <x-col-body>
                                        <span class="flex items-center justify-start space-x-2">
                                            <span class="w-10 h-10"
                                                style="background-color: {{ $category->color }}"></span>
                                            <span class="uppercase">{{ $category->color }}</span>
                                        </span>
                                    </x-col-body>
                                    <x-col-body>
                                        <div class="flex items-center">
                                            <a href="{{ route('categories.show', $category) }}"
                                                class="relative inline-flex items-center px-3 py-1 font-semibold leading-tight text-white bg-blue-500 rounded-sm hover:bg-opacity-50">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                                </svg>
                                                <span class="relative">View</span>
                                            </a>
                                            <a href="{{ route('categories.edit', $category) }}"
                                                class="relative inline-flex items-center px-3 py-1 font-semibold leading-tight text-white bg-green-500 rounded-sm hover:bg-opacity-50">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                                <span class="relative">Edit</span>
                                            </a>
                                        </div>
                                    </x-col-body>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <x-paginate :paginator="$categories" />
                </div>
            </div>
        </div>
    </div>
    @livewire('add-agent')
</x-app-layout>
