@csrf

<div class="grid gap-6 lg:grid-cols-2">
    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="name">Nome interno</label>
        <input
            id="name"
            name="name"
            type="text"
            value="{{ old('name', $role->name) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
        >
        @error('name')
            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="label">Rótulo</label>
        <input
            id="label"
            name="label"
            type="text"
            value="{{ old('label', $role->label) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
        >
        @error('label')
            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex items-center gap-3 pt-8">
        <input id="active_hidden" name="active" type="hidden" value="0">
        <input
            id="active"
            name="active"
            type="checkbox"
            value="1"
            @checked((bool) old('active', $role->active ?? true))
            class="h-4 w-4 rounded border-slate-300 text-sky-700 focus:ring-sky-500"
        >
        <label for="active" class="text-sm font-medium text-slate-700">Papel ativo</label>
        @error('active')
            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-8 flex items-center justify-end gap-3">
    <a
        href="{{ route('secretaria.roles.index') }}"
        class="inline-flex items-center rounded-2xl border border-slate-200 px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-50"
    >
        Cancelar
    </a>

    <button
        type="submit"
        class="inline-flex items-center rounded-2xl bg-sky-700 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-sky-800"
    >
        Salvar
    </button>
</div>