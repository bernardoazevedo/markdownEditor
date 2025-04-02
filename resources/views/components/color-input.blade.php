@props(['disabled' => false])

<input @disabled($disabled) type="color" {{ $attributes->merge(['class' => 'rounded p-1 w-full h-10 cursor-pointer border border-gray-200 bg-white shadow-sm']) }}>
