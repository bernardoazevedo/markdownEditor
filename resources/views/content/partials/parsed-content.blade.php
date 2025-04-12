<x-section class="col-span-5 order-2 lg:col-span-2 lg:order-3 flex flex-col">
    <header class="text-lg font-medium px-4 py-2 flex justify-between items-center">
        <span>Preview Content</span>
        <x-copy-button value='htmlText'></x-copy-button>
    </header>

    <div id="htmlText" class="parsedown flex flex-col gap-y-2 sm:w-auto p-4 h-max grow rounded-b">
        Formatted content will appear here
    </div>
</x-section>
