<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Autenticação')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            min-height: 100vh;
            background:
                radial-gradient(circle at top right, rgba(59, 130, 246, 0.10), transparent 30%),
                radial-gradient(circle at bottom left, rgba(16, 185, 129, 0.10), transparent 25%),
                linear-gradient(180deg, #f8fafc 0%, #eef2ff 100%);
        }
    </style>
</head>
<body class="min-h-screen text-slate-800 antialiased">
    @yield('content')
</body>
</html>