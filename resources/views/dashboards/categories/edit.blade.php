<x-app-layout>
    <x-slot name="header">
        {{ __('Edit Ticket') }}
    </x-slot>
    <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <form action="{{ route('tickets.update', [$ticket->id]) }}" method="POST" class="flex flex-col w-full space-y-4">
            @csrf
            @method('PUT')
            <x-Form.InputWrapper name="name">
                <x-form.label for="name">{{ __('Name') }}</x-form.label>
                <x-form.input type="text" id="name" name="name" placeholder="name"
                    value="{{ $ticket->customer->name }}" />
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="email">
                <x-form.label for="email">{{ __('email') }}</x-form.label>
                <x-form.input type="email" id="email" name="email" placeholder="email"
                    value="{{ $ticket->customer->email }}" />
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="subject">
                <x-form.label for="phone">{{ __('phone') }}</x-form.label>
                <x-form.input type="tel" id="phone" name="phone" placeholder="Phone"
                    value="{{ $ticket->customer->email }}" />
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="subject">
                <x-form.label for="subject">{{ __('Subject') }}</x-form.label>
                <x-form.input type="text" id="subject" name="subject" placeholder="Subject"
                    value="{{ $ticket->subject }}" />
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="category_id">
                <x-form.label for="category">{{ __('Category') }}</x-form.label>
                <x-form.select name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" selected={{ $category->id == $ticket->category_id }}>
                            {{ $category->name }}</option>
                    @endforeach
                </x-form.select>
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="priority_id">
                <x-form.label for="priority">{{ __('Priority') }}</x-form.label>
                <x-form.select name="priority_id">
                    @foreach ($priorities as $priority)
                        <option value="{{ $priority->id }}" selected={{ $priority->id == $ticket->priority_id }}>
                            {{ $priority->name }}</option>
                    @endforeach
                </x-form.select>
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="content">
                <x-form.label for="content">{{ __('Content') }}</x-form.label>
                <x-form.textarea name="content" :name="'content'" class="h-20 resize-none" name="content"
                    spellcheck="true" placeholder="Write content here" value="{{ $ticket->content }}">{{ $ticket->content }}</x-form.textarea>
            </x-Form.InputWrapper>
            <button type="submit"
                class="w-full py-2 font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600">{{ __('Update') }}</button>
        </form>
    </div>
</x-app-layout>
