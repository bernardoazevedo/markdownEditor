<section class="p-4 sm:p-8 shadow sm:rounded-lg bg-white">
    <div class="flex flex-col gap-y-2 sm:w-auto">
        <header class="text-lg font-medium mb-2">Edit your content style</header>

        <div class="flex gap-3 flex-wrap">
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
        </div>

        <div class="flex gap-3 flex-wrap mt-4">
            <div class="flex flex-col flex-grow">
                <x-input-label for="filename">Filename</x-input-label>
                <x-text-input name="filename" id="filename" class="w-full"></x-text-input>
            </div>
            <x-primary-button class="max-w-fit">Generate PDF</x-primary-button>
        </div>

    </div>
</section>
