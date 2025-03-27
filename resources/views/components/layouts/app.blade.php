<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>{{ $title ?? 'Page Title' }}</title>
        @livewireStyles
        @vite('resources/css/app.css')
    </head> 
    <body>
        {{-- <div style="background-image: url('{{ asset('img/bg/pasar.png') }}')"> --}}
         {{-- <div class="absolute inset-1 bg-black bg-opacity-50"></div> --}}
        @livewireScripts
        {{ $slot }}
    </body>
</html>