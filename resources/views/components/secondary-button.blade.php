<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center bg-white border border-stone-300 rounded-md font-semibold
        text-xs text-stone-700 uppercase tracking-widest shadow-sm hover:bg-stone-50 focus:outline-none focus:ring-2 focus:ring-emerald-500
        focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

