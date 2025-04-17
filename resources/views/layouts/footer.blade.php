<footer class="bg-white border-t border-stone-200 shadow fixed bottom-0 w-full">
    <div class="flex gap-2 flex-wrap sm:w-auto p-3 justify-center">
        <x-text-input name="filename" id="filename" placeholder="Filename" class="grow max-w-md h-10"></x-text-input>

        <x-callToAction-button class="group relative h-10 overflow-hidden">
            <span class="relative inline-flex">
                <span class="duration-700 [transition-delay:0.02s] group-hover:[transform:rotateY(360deg)] py-1">D</span>
                <span class="duration-700 [transition-delay:0.04s] group-hover:[transform:rotateY(360deg)] py-1">o</span>
                <span class="duration-700 [transition-delay:0.06s] group-hover:[transform:rotateY(360deg)] py-1">w</span>
                <span class="duration-700 [transition-delay:0.08s] group-hover:[transform:rotateY(360deg)] py-1">n</span>
                <span class="duration-700 [transition-delay:0.10s] group-hover:[transform:rotateY(360deg)] py-1">l</span>
                <span class="duration-700 [transition-delay:0.12s] group-hover:[transform:rotateY(360deg)] py-1">o</span>
                <span class="duration-700 [transition-delay:0.14s] group-hover:[transform:rotateY(360deg)] py-1">a</span>
                <span class="duration-700 [transition-delay:0.16s] group-hover:[transform:rotateY(360deg)] py-1">d</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                      class="duration-700 [transition-delay:0.16s] group-hover:[transform:rotateY(360deg)] ml-2 size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
            </span>
        </x-callToAction-button>
    </div>
</footer>
