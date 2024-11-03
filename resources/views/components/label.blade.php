@props(['required' => false, 'class' => 'text-sm text-gray-700 dark:text-gray-300'])

<label {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
    @if ($required)
        <span class="text-red-500">*</span>
    @endif
</label>
