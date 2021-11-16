<div>
    @if (!$show)
        <button class="flex justify-center w-full px-4 py-3 space-x-2 text-white bg-purple-500 hover:bg-purple-600"
            wire:click="showComment">
            <span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
            </span>
            <span>Comment</span>
        </button>
    @endif
    @if ($show)
        <form action="{{ $url }}" class="flex flex-col w-full space-y-2" method="POST">
            @csrf
            <x-Form.InputWrapper name="Comment">
                <x-form.textarea name="content" :name="'content'" class="h-32 rounded-none resize-none" name="content"
                    spellcheck="true" placeholder="Write your comment here">{{ old('comment') }}</x-form.textarea>
            </x-Form.InputWrapper>
            <button class="flex justify-center w-full px-4 py-3 space-x-2 text-white bg-purple-500 hover:bg-purple-600">
                <span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                        </path>
                    </svg>
                </span>
                <span>Comment</span>
            </button>
        </form>
    @endif
</div>
