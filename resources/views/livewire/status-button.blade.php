<div class="relative">
    <button
        class="flex items-center justify-start px-2 py-1 space-x-1 text-white {{ $ticket->closed_at ? 'hover:bg-green-600 bg-green-500' : 'hover:bg-blue-600 bg-blue-500' }}"
        wire:click="dropdown()">

        <span>
            {{ $ticket->status }}
        </span>
        <span>
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </span>
    </button>
    @if ($show)
        <div class="absolute flex flex-col w-full p-1 mt-2 space-y-1 text-gray-900 bg-white rounded shadow-md">
            <button class="px-2 py-1 hover:bg-gray-200" wire:click="showAlert()">
                Close
            </button>
        </div>
    @endif
    @if ($showAlert)
        <div class="fixed top-0 left-0 z-40 flex items-center justify-center w-full h-screen bg-gray-300 bg-opacity-30">
            <div class="flex flex-col max-w-sm p-6 space-y-5 bg-white rounded-lg">
                <p class="text-center">
                    Are you sure you want to {{ $ticket->closed_at ? 'open' : 'close' }} this ticket?
                    Once closed, it cannot be reopened.
                </p>
                <div class="flex justify-end space-x-2 text-white rounded-md">
                    <button wire:click="closeAlert()" class="px-2 py-1 bg-gray-400 rounded hover:bg-gray-500"
                        wire:click="dropdown()">
                        Cancel
                    </button>
                    <a href="{{ route('tickets.status', $ticket->id) }}"
                        class="px-2 py-1 bg-red-400 rounded hover:bg-red-500">
                        Confirm
                    </a>
                </div>
            </div>
        </div>
    @endif
</div>
