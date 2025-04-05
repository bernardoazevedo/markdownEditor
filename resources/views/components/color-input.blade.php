@props(['disabled' => false])

<input @disabled($disabled) type="color" {{ $attributes->merge(['class' => 'rounded p-1 w-full h-10 cursor-pointer border border-stone-300 bg-white shadow-sm hover:bg-stone-100 focus:border-emerald-500 focus:ring-emerald-500 focus:border-2']) }}>
