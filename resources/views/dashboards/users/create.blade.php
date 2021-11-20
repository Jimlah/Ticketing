<x-app-layout>
    <x-slot name="header">
        {{ __('New Ticket') }}
    </x-slot>
    <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <form action="{{ route('tickets.store') }}" method="POST" class="flex flex-col w-full space-y-4">
            @csrf
            <x-Form.InputWrapper name="name">
                <x-form.label for="name">{{ __('Name') }}</x-form.label>
                <x-form.input type="text" id="subject" name="name" placeholder="name" value="{{ old('name') }}" />
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="email">
                <x-form.label for="email">{{ __('email') }}</x-form.label>
                <x-form.input type="email" id="email" name="email" placeholder="email" value="{{ old('email') }}" />
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="subject">
                <x-form.label for="phone">{{ __('phone') }}</x-form.label>
                <x-form.input type="tel" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}" />
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="subject">
                <x-form.label for="subject">{{ __('Subject') }}</x-form.label>
                <x-form.input type="text" id="subject" name="subject" placeholder="Subject"
                    value="{{ old('subject') }}" />
            </x-Form.InputWrapper>
            @livewire('sub-category')
            <x-Form.InputWrapper name="priority_id">
                <x-form.label for="priority">{{ __('Priority') }}</x-form.label>
                <x-form.select name="priority_id">
                    @foreach ($priorities as $priority)
                        <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                    @endforeach
                </x-form.select>
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="content">
                <x-form.label for="content">{{ __('Content') }}</x-form.label>
                <x-form.textarea name="content" :name="'content'" class="h-20 resize-none" name="content"
                    spellcheck="true" placeholder="Write content here">{{ old('content') }}</x-form.textarea>
            </x-Form.InputWrapper>
            <button type="submit"
                class="w-full py-2 font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600">{{ __('Submit') }}</button>
        </form>
    </div>
</x-app-layout>
