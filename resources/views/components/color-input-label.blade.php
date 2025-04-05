@props(['value'])

<label {{ $attributes->merge(['class' => 'font-medium text-sm text-stone-700']) }}>
    {{ $value ?? $slot }}
</label>
