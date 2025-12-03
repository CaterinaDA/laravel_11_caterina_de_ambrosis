<!doctype html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Blog</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-dark text-light min-vh-100 d-flex flex-column">

    {{-- NAVBAR --}}
    <x-navbar />

    {{-- CONTENUTO PAGINA --}}
    <main class="container py-4 flex-grow-1">
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    <x-footer />

</body>

</html>
