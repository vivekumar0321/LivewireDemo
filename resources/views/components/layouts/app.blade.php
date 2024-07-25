<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav>
            <a href="/" wire:navigate>Home</a> |
            <a href="/about" wire:navigate>About</a> |
            <a href="/contact" wire:navigate>Contact</a>
        </nav>
        {{ $slot }}
    </body>
</html>
