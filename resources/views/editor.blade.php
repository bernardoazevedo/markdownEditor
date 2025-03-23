<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="lg:grid lg:grid-cols-5 lg:space-x-4 space-y-6 lg:space-y-0">
                @include('content.partials.style-editor')

                @include('content.partials.write-content')

                @include('content.partials.parsed-content')
            </div>
        </div>
    </div>
</x-app-layout>
