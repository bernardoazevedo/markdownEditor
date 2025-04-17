@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-stone-300 focus:border-emerald-500 focus:ring-emerald-500 rounded shadow-sm hover:bg-stone-100
    transition ease-in-out duration-150']) }}>
