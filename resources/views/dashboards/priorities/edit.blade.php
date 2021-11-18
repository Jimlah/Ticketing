<x-app-layout>
    <x-slot name="header">
        {{ __('New Priority') }}
    </x-slot>
    <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <form action="{{ route('priorities.store') }}" method="POST" class="flex flex-col w-full space-y-4">
            @csrf
            <x-Form.InputWrapper name="name">
                <x-form.label for="name">{{ __('Name') }}</x-form.label>
                <x-form.input type="text" id="name" name="name" placeholder="name" value="{{ $priority->name }}" />
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="color">
                <x-form.label for="color">{{ __('Color') }}</x-form.label>
                <x-form.input-color type="color" id="color" name="color" placeholder="color" value="{{ $priority->color }}" />
            </x-Form.InputWrapper>
            <button type="submit"
                class="w-full py-2 font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600">{{ __('Submit') }}</button>
        </form>
    </div>
</x-app-layout>
