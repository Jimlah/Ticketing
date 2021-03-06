<x-app-layout>
    <x-slot name="header">
        {{ __($category->name) }}
    </x-slot>
    <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <form action="{{ route('sub-category.store', $category) }}" method="POST" class="flex flex-col w-full space-y-4">
            @csrf
            <x-Form.InputWrapper name="content">
                <x-form.label for="content">{{ __('Content') }}</x-form.label>
                <x-form.input type="text" id="content" name="content" placeholder="content"
                    value="{{ old('content') }}" />
            </x-Form.InputWrapper>
            <x-Form.InputWrapper name="color">
                <x-form.label for="color">{{ __('Color') }}</x-form.label>
                <x-form.input-color id="color" name="color" placeholder="color" value="{{ old('color') }}" />
            </x-Form.InputWrapper>
            <button type="submit"
                class="w-full py-2 font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600">{{ __('Submit') }}</button>
        </form>
    </div>
</x-app-layout>
