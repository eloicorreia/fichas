<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Secretaria')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            min-height: 100vh;
            background-color: #f8fafc;
        }
    </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    <div class="min-h-screen lg:grid lg:grid-cols-[280px_minmax(0,1fr)]">
        <aside class="border-r border-slate-200 bg-slate-900 text-white">
            @include('partials.sidebar')
        </aside>

        <div class="min-w-0">
            <header class="border-b border-slate-200 bg-white">
                <div class="flex items-center justify-between gap-4 px-6 py-4 lg:px-8">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-sky-700">
                            Secretaria
                        </p>
                        <h1 class="mt-1 text-2xl font-bold text-slate-900">
                            @yield('page-title', 'Dashboard')
                        </h1>
                    </div>

                    <div class="text-right">
                        <p class="text-sm font-medium text-slate-800">
                            {{ auth()->user()->name ?? 'Usuário autenticado' }}
                        </p>
                        <p class="text-xs text-slate-500">
                            Área administrativa
                        </p>
                    </div>
                </div>
            </header>

            <main class="px-6 py-6 lg:px-8">
                @if (session('status'))
                    <div class="mb-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                        {{ session('status') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>