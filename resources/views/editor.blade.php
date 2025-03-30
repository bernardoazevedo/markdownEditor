<x-app-layout>
    <div class="mx-auto space-y-6 py-4">
        <form action="/generatePdf" method="post">
            @csrf
            <div class="grid gap-4 grid-cols-5">
                @include('content.partials.style-editor')
                @include('content.partials.write-content')
                @include('content.partials.parsed-content')
            </div>
        </form>
    </div>
</x-app-layout>
