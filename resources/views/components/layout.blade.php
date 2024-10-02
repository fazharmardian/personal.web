<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=comfortaa:300" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-black" style="font-family: 'Comfortaa', display;">
    <x-navbar></x-navbar>

    <main>
        {{ $slot }}
    </main>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
