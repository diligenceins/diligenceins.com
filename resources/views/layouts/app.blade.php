<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-50 overflow-hidden">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            @include('layouts.footer')
        </div>

        {{-- Script references --}}
        {{ $scriptref }}

        <script type="text/javascript">
            window.onscroll = function() {
                if(window.pageYOffset > 55) {
                    document.getElementById("btmNav").classList.add("fixed");
                    document.getElementById("topNav").classList.add("mb-12");
                }else {
                    document.getElementById("btmNav").classList.remove("fixed");
                    document.getElementById("topNav").classList.remove("mb-12");
                }
            }
        </script>

        {{-- Scripts --}}
        {{ $script }}

    </body>
</html>
