<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bekasi Computer (B-COMP) provides reliable IT, software, infrastructure and technology solutions for businesses.">
    <meta name="author" content="Bekasi Computer">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Bekasi Computer (B-COMP) | Technology & IT Solutions')</title>

    <link rel="icon" type="image/png" href="{{ asset('images/bcomp-logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-slate-800 antialiased">
    @yield('content')
</body>
</html>
