@csrf

<div class="grid gap-6 lg:grid-cols-2">
    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="name">Nome</label>
        <input
            id="name"
            name="name"
            type="text"
            value="{{ old('name', $user->name) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
        >
        @error('name')
            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="email">E-mail</label>
        <input
            id="email"
            name="email"
            type="email"
            value="{{ old('email', $user->email) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
        >
        @error('email')
            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="password">
            {{ $user->exists ? 'Nova senha' : 'Senha' }}
        </label>
        <input
            id="password"
            name="password"
            type="password"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
        >
        @error('password')
            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="password_confirmation">
            Confirmar senha
        </label>
        <input
            id="password_confirmation"
            name="password_confirmation"
            type="password"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
        >
    </div>

    <div class="lg:col-span-2">
        <label class="mb-2 block text-sm font-semibold text-slate-700">Papéis</label>

        <div class="grid gap-3 md:grid-cols-2">
            @foreach ($roles as $role)
                <label class="flex items-start gap-3 rounded-xl border border-slate-100 px-4 py-3">
                    <input
                        type="checkbox"
                        name="roles[]"
                        value="{{ $role->id }}"
                        @checked(in_array($role->id, old('roles', $selectedRoles), true))
                        class="mt-1 h-4 w-4 rounded border-slate-300 text-sky-700 focus:ring-sky-500"
                    >

                    <div>
                        <div class="text-sm font-semibold text-slate-800">{{ $role->label }}</div>
                        <div class="text-xs text-slate-500">{{ $role->name }}</div>
                    </div>
                </label>
            @endforeach
        </div>

        @error('roles')
            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
        @enderror

        @error('roles.*')
            <p class="mt-1 text-sm text-rose-600">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="mt-8 flex items-center justify-end gap-3">
    <a
        href="{{ route('secretaria.users.index') }}"
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