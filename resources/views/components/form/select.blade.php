<select {{ $attributes->merge(["class" => 'px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200' ]) }}>
    <option value="" disabled>Select</option>
    {{ $slot }}
</select>
