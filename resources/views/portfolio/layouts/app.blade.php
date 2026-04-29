<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FAF9F6] text-[#111111]">

    @include('portfolio.components.nav')

    <main class="pt-20 min-h-screen">
        @yield('content')
    </main>

    @include('portfolio.components.footer')

</body>
</html>