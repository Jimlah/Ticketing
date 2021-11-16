<x-modal wire:model="show">
    <x-slot name="header">
        {{ __('New Ticket') }}
    </x-slot>

    <div>
        <form action="{{ $url }}" method="POST" class="flex flex-col w-full space-y-4">
            @csrf
            <x-Form.InputWrapper name="agents">
                <x-form.label for=" agent_id">{{ __('Agents') }}</x-form.label>
                <x-form.select name="agent_id">
                    @if ($notAttachedAgent)
                        @foreach ($notAttachedAgent as $agent)
                            @if (!in_array($agent, $data?->agents ?? []))
                                <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                            @endif
                        @endforeach
                    @endif
                </x-form.select>
            </x-Form.InputWrapper>
            <button type="submit"
                class="w-full py-2 font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600">{{ __('Attach') }}</button>
        </form>
    </div>
</x-modal>
