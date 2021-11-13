<div {{ $attributes->merge(['class' => 'flex flex-col space-y-2']) }}>
    {{ $slot }}
   @error($name)
        <div class="text-sm text-red-500">{{ $message }}</div>
   @enderror
</div>
