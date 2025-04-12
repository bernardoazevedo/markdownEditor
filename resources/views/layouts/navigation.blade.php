<nav x-data="{ open: false }" class="bg-white border-b border-stone-100 shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 text-stone-700">
            <img src="{{ asset('assets/images/logo.svg') }}" alt="mdf2pdf logo" width="80px">

            <h1 class="text-lg font-semibold hidden sm:block">Edit text in markdown and convert to PDF</h1>

            <a href="https://github.com/bernardoazevedo/markdownEditor" target="_blank">
                <img src="{{ asset('assets/images/github.svg') }}" alt="Github Logo" width="24px" height="24px">
            </a>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">

        </div>
    </div>
</nav>
