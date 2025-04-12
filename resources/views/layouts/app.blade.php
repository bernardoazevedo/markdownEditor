<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="Edit text in markdown and convert to PDF">
        <meta name="keywords" content="markdown, pdf, convert, editor, md, converter, md2pdf">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Bernardo Azevedo">

        <meta property="og:title" content="Markdown to PDF">
        <meta property="og:description" content="Edit text in markdown and convert to PDF">
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:site_name" content="Markdown to PDF">
        <meta property="og:image" content="{{ asset('assets/images/logo-white-bg.png') }}">

        <title>{{ config('app.name', 'Markdown Editor') }}</title>

        <link rel="icon" href="{{ url('assets/images/favicon.svg') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css?v3') }}" >

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-stone-100 pb-28">

            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <form action="/generatePdf" method="post">
                @csrf

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>

                @include('layouts.footer')
            </form>
        </div>
    </body>

    <script src="{{ url('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ url('assets/js/js.cookie.min.js') }}"></script>
    <script src="{{ url('assets/js/script.js?v3') }}"></script>
</html>
