<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Erro' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 text-slate-800 antialiased">
    <main class="flex min-h-screen items-center justify-center px-6 py-10">
        <section class="w-full max-w-3xl rounded-3xl border border-slate-200 bg-white p-8 shadow-sm sm:p-10">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-start lg:justify-between">
                <div class="max-w-2xl">
                    <p class="text-sm font-semibold uppercase tracking-[0.2em] text-sky-700">
                        {{ $eyebrow ?? 'Erro do sistema' }}
                    </p>

                    <h1 class="mt-3 text-4xl font-bold tracking-tight text-slate-900 sm:text-5xl">
                        {{ $code ?? 'Erro' }}
                    </h1>

                    <h2 class="mt-3 text-xl font-semibold text-slate-900 sm:text-2xl">
                        {{ $heading ?? 'Ocorreu um problema' }}
                    </h2>

                    <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                        {{ $message ?? 'Não foi possível concluir sua solicitação.' }}
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        @if (!empty($primaryUrl) && !empty($primaryLabel))
                            <a
                                href="{{ $primaryUrl }}"
                                class="inline-flex items-center rounded-2xl bg-sky-700 px-5 py-3 text-sm font-semibold text-white transition hover:bg-sky-800"
                            >
                                {{ $primaryLabel }}
                            </a>
                        @endif

                        <button
                            type="button"
                            onclick="window.history.back();"
                            class="inline-flex items-center rounded-2xl border border-slate-200 px-5 py-3 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                        >
                            Voltar
                        </button>
                    </div>
                </div>

                <div class="shrink-0">
                    <div class="flex h-24 w-24 items-center justify-center rounded-3xl bg-sky-50 text-3xl font-bold text-sky-700 ring-1 ring-inset ring-sky-100 sm:h-28 sm:w-28 sm:text-4xl">
                        {{ $icon ?? '!' }}
                    </div>
                </div>
            </div>

            @if (!empty($detail))
                <div class="mt-10 rounded-2xl border border-slate-100 bg-slate-50 px-5 py-4">
                    <p class="text-xs font-semibold uppercase tracking-[0.15em] text-slate-500">
                        Detalhe
                    </p>
                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        {{ $detail }}
                    </p>
                </div>
            @endif
        </section>
    </main>
</body>
</html>