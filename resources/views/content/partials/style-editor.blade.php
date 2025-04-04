<x-section class="col-span-5 order-3 lg:col-span-1 lg:order-1">
    <header class="text-lg font-medium px-4 py-2">Edit your content style</header>

    <div class="flex sm:w-auto p-4 gap-3 flex-wrap">
        <div class="flex flex-col flex-grow">
            <x-color-input-label for="textColor" class="truncate">Text Color</x-color-input-label>
            <x-color-input name="textColor" id="textColor" value="#374151"></x-color-input>
        </div>
        <div class="flex flex-col flex-grow">
            <x-color-input-label for="highlightColor" class="truncate">Highlight Color</x-color-input-label>
            <x-color-input name="highlightColor" id="highlightColor" value="#559949"></x-color-input>
        </div>
        <div class="flex flex-col flex-grow">
            <x-color-input-label for="backgroundColor" class="truncate">Background Color</x-color-input-label>
            <x-color-input name="backgroundColor" id="backgroundColor" value="#FFFFFF"></x-color-input>
        </div>
        <div class="flex flex-col flex-grow">
            <x-input-label for="titleMargin" class="truncate">Title Margin</x-input-label>
            <x-text-input name="titleMargin" id="titleMargin" placeholder="4px" type="number"></x-text-input>
        </div>
        <div class="flex flex-col flex-grow">
            <x-input-label for="marginHeight" class="truncate">Margin Between Elements</x-input-label>
            <x-text-input name="marginHeight" id="marginHeight" placeholder="4px" type="number"></x-text-input>
        </div>
    </div>
</x-section>
