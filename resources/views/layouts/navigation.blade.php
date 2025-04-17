<nav x-data="{ open: false }" class="bg-white border-b border-stone-100 shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 text-stone-700">
            {{-- <a href="{{ config('app.url') }}" class="flex items-center gap-1">
                <img src="{{ asset('assets/images/favicon.svg') }}" alt="md2pdf logo" width="40px" height="40px">
                <span class="font-bold text-lg">{{ config('app.name', 'Markdown Editor') }}</span>
            </a> --}}

            <a href="{{ config('app.url') }}" class="flex items-center gap-1 group relative justify-center overflow-hidden transition hover:scale-105">
                <img src="{{ asset('assets/images/favicon.svg') }}" alt="md2pdf logo" width="40px" height="40px">
                <span class="font-bold text-lg">{{ config('app.name', 'Markdown Editor') }}</span>
                <div class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-12deg)_translateX(-100%)] group-hover:duration-1000 group-hover:[transform:skew(-12deg)_translateX(100%)]">
                    <div class="relative h-full w-8 bg-black/20"></div>
                </div>
            </a>

            <h1 class="text-lg font-semibold hidden sm:block">Edit text in markdown and convert to PDF</h1>

            <a href="https://github.com/bernardoazevedo/markdownEditor" target="_blank"
                class="relative select-none cursor-pointer flex items-center justify-center w-12 h-12 bg-white text-black font-bold rounded-xl transition-all
                duration-300 ease-in-out group overflow-hidden hover:w-36">
                <svg class="absolute transition-transform duration-300 ease-in-out group-hover:-translate-x-12" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" width="24" height="24">
                    <path d="M12 .297C5.373.297 0 5.67 0 12.297c0 5.305 3.438 9.8 8.205 11.4.6.111.82-.261.82-.577 0-.287-.011-1.25-.017-2.28-3.338.724-4.042-1.608-4.042-1.608-.546-1.386-1.333-1.756-1.333-1.756-1.091-.745.083-.73.083-.73 1.207.085 1.839 1.237 1.839 1.237 1.071 1.836 2.809 1.303 3.492.996.108-.775.419-1.303.761-1.603-2.665-.303-5.466-1.334-5.466-5.93 0-1.313.469-2.387 1.236-3.228-.125-.303-.535-1.53.117-3.175 0 0 1.008-.323 3.302 1.23a11.563 11.563 0 0 1 3.002-.404c1.022.004 2.052.139 3.002.404 2.294-1.553 3.302-1.23 3.302-1.23.652 1.645.243 2.872.118 3.175.77.841 1.236 1.915 1.236 3.228 0 4.607-2.805 5.624-5.474 5.92.431.372.815 1.102.815 2.224 0 1.604-.014 2.896-.014 3.287 0 .316.22.694.825.577C20.563 22.097 24 17.602 24 12.297 24 5.67 18.627.297 12 .297z"></path>
                </svg>
                <span class="pl-0 text-sm uppercase opacity-0 transition-opacity ease-in group-hover:opacity-100 group-hover:duration-500">Github</span>
            </a>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">

        </div>
    </div>
</nav>
