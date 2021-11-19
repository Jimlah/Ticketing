<div>
    <x-Form.InputWrapper name="category_id">
        <x-form.label for="category">{{ __('Category') }}</x-form.label>
        <x-form.select name="category_id" wire:model="categoryId">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}</option>
            @endforeach
        </x-form.select>
    </x-Form.InputWrapper>
    <x-Form.InputWrapper name="sub_category_id">
        <x-form.label for="sub_category">{{ __('Sub Category') }}</x-form.label>
        <x-form.select name="sub_category_id" wire:model="subCategoryId">
            @foreach ($sub_categories as $sub_category)
                <option value="{{ $sub_category->id }}">{{ $sub_category->content }}</option>
            @endforeach
        </x-form.select>
    </x-Form.InputWrapper>
</div>
