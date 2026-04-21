@props([
    'action',
    'q' => '',
    'placeholder' => 'Buscar',
    'status' => null,
    'showStatus' => false,
    'createUrl' => null,
    'createLabel' => 'Incluir',
])

<div class="mb-4 flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
    <div>
        {{ $title ?? '' }}
    </div>

    <div class="flex flex-col gap-3 sm:flex-row sm:items-center">
        <form method="GET" action="{{ $action }}" class="flex flex-col gap-2 sm:flex-row sm:items-center">
            <input
                type="text"
                name="q"
                value="{{ $q }}"
                placeholder="{{ $placeholder }}"
                class="w-full min-w-[260px] rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
            >

            @if ($showStatus)
                <select
                    name="status"
                    class="rounded-xl border border-slate-300 px-3 py-2 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
                >
                    <option value="">Todos os status</option>
                    <option value="1" @selected((string) $status === '1')>Ativo</option>
                    <option value="0" @selected((string) $status === '0')>Inativo</option>
                </select>
            @endif

            <button
                type="submit"
                class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
            >
                Buscar
            </button>

            @if (filled($q) || (string) $status !== '')
                <a
                    href="{{ $action }}"
                    class="inline-flex items-center justify-center rounded-xl border border-slate-200 px-3 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
                >
                    Limpar
                </a>
            @endif
        </form>

        @if ($createUrl)
            <a
                href="{{ $createUrl }}"
                class="inline-flex items-center justify-center rounded-xl bg-sky-700 px-4 py-2 text-sm font-semibold text-white transition hover:bg-sky-800"
            >
                {{ $createLabel }}
            </a>
        @endif
    </div>
</div>