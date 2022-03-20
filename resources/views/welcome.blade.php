<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="container mx-auto">
            <x-alert color='blue'>
                <x-slot name='title'>
                    Este es  el slot con nombre
                </x-slot>
            </x-alert>
            <x-alert color='red'>
                <x-slot name='title'>
                    Este es  el slot con nombre
                </x-slot>
                Hola Tu
            </x-alert>
            <x-alert color='green'>
                <x-slot name='title'>
                    Este es  el slot con nombre
                </x-slot>
            </x-alert>
            <x-alert color='orange'>
                <x-slot name='title'>
                    Este es  el slot con nombre
                </x-slot>
            </x-alert>
        </div>
        
    </body>
</html>
