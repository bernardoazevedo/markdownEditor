<x-section class="col-span-5 order-1 lg:col-span-2 lg:order-2">
    <header class="text-lg font-medium px-4 py-2">Write here</header>

    <div class="grow-wrap dont-break-out">
        <textarea id="text" name="text" type="text" rows="27" cols=""
            class="p-4 border-none focus:border-gray-400 focus:ring-gray-400 block w-full"
            required autofocus autocomplete="text" placeholder="Type here"
            onInput="this.parentNode.dataset.replicatedValue = this.value"></textarea>
    </div>
</x-section>
