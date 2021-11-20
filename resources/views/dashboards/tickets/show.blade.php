<x-app-layout>
    <x-slot name="header">
        {{ __('New Ticket') }}
    </x-slot>
    <div class="grid items-start grid-cols-1 gap-y-5 md:gap-y-0 gap-x-0 md:gap-x-5 md:grid-cols-4">
        <div class="col-span-1 sm:col-span-3">
            <div class="p-6 overflow-hidden bg-white rounded-lg shadow-sm">
                <div class="flex justify-between w-full mb-2F">
                    @livewire('status-button', [$ticket])
                    <span>{{ $ticket->created_at }}</span>
                </div>
                <div>
                    <h2 class="mb-5 text-2xl font-medium">{{ $ticket->subject }}</h2>
                    <p>
                        {{ $ticket->content }}
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full col-span-1">
            <div class="w-full p-6 mb-5 overflow-hidden bg-white rounded-lg shadow-sm">
                <ul class="divide-y">
                    @foreach ($ticket->agents as $agent)
                        <li class="py-3">{{ $agent->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="w-full p-6 overflow-hidden bg-white rounded-lg shadow-sm">
                <ul class="flex flex-col w-full divide-y">
                    @foreach ($ticket->comments as $comment)
                        <li class="inline-block w-full">
                            <div class="w-full py-5">
                                <p class="mb-1 text-sm text-left">
                                    {{ $comment->content }}
                                </p>
                                <span class="flex justify-between text-xs">
                                    <span class="font-medium">{{ $comment->user->name }}</span>
                                    <span class="text-gray-500">{{ $comment->created_at }}</span>
                                </span>
                            </div>
                        </li>
                    @endforeach
                    <li>
                        @livewire('add-comment', ['url' => route('comments.store', $ticket->id)])
                    </li>
                </ul>

            </div>
        </div>
    </div>

</x-app-layout>
