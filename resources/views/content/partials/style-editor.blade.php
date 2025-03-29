<section class="p-4 sm:p-8 shadow sm:rounded-lg bg-white">
    <div class="flex flex-col gap-y-2 sm:w-auto">
        <header class="text-lg font-medium mb-2">Edit your content style</header>

        <div>
            <label for="textColor">Text Color</label>
            <input class="float-right" type="color" name="textColor" id="textColor" value="#374151">
        </div>
        <div>
            <label for="highlightColor">Highlight Color</label>
            <input class="float-right" type="color" name="highlightColor" id="highlightColor" value="#559949">
        </div>
        <div>
            <label for="backgroundColor">Background Color</label>
            <input class="float-right" type="color" name="backgroundColor" id="backgroundColor" value="#FFFFFF">
        </div>

        <x-primary-button class="mt-4">Generate PDF</x-primary-button>
    </div>
</section>
