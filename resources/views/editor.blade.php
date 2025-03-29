<x-app-layout>
    <div class=" mx-auto sm:px-6 lg:px-8 space-y-6">
        <form action="/generatePdf" method="post">
            @csrf
            <div class="lg:grid lg:grid-cols-5 lg:space-x-4 space-y-6 lg:space-y-0">
                @include('content.partials.style-editor')

                @include('content.partials.write-content')

                @include('content.partials.parsed-content')
            </div>
        </form>
    </div>
</x-app-layout>
