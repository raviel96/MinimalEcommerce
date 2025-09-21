<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Minimal E-Commerce' }}</title>
        @vite(['public/css/app/app.css'])
    </head>
    <body>
        <header>
            <livewire:partials.navbar/>
        </header>
        <main>
            {{ $slot }}    
        </main>
    </body>
</html>
