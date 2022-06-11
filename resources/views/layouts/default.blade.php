<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>@yield('title', 'Laravel')</title>

    </head>

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h1 class="text-3xl font-bold text-gray-900">
                    <a href="/">@yield('header_title', 'Laravel Challenge')</a>
                </h1>
                @yield('header-right-content')
            </div>
        </div>
    </header>
    
    <body class="bg-gray-100">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </body>
</html>
