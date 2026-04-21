@csrf

<div class="grid gap-6 lg:grid-cols-2">
    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="nome">Nome</label>
        <input id="nome" name="nome" type="text" value="{{ old('nome', $evento->nome) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
        @error('nome') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="numero">Número</label>
        <input id="numero" name="numero" type="number" min="1" value="{{ old('numero', $evento->numero) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
        @error('numero') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="tipo_evento">Tipo do evento</label>
        <select id="tipo_evento" name="tipo_evento"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
            @foreach ($tiposEvento as $tipoEvento)
                <option value="{{ $tipoEvento }}" @selected(old('tipo_evento', $evento->tipo_evento) === $tipoEvento)>
                    {{ $tipoEvento }}
                </option>
            @endforeach
        </select>
        @error('tipo_evento') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="publico_evento">Público</label>
        <select id="publico_evento" name="publico_evento"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
            @foreach ($publicosEvento as $publicoEvento)
                <option value="{{ $publicoEvento }}" @selected(old('publico_evento', $evento->publico_evento) === $publicoEvento)>
                    {{ $publicoEvento }}
                </option>
            @endforeach
        </select>
        @error('publico_evento') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="status">Status</label>
        <select id="status" name="status"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
            @foreach ($statusDisponiveis as $status)
                <option value="{{ $status }}" @selected(old('status', $evento->status) === $status)>
                    {{ $status }}
                </option>
            @endforeach
        </select>
        @error('status') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>

    <div class="flex items-center gap-3 pt-8">
        <input id="ativo" name="ativo" type="hidden" value="0">
        <input id="ativo" name="ativo" type="checkbox" value="1" @checked((bool) old('ativo', $evento->ativo ?? true))
            class="h-4 w-4 rounded border-slate-300 text-sky-700 focus:ring-sky-500">
        <label for="ativo" class="text-sm font-medium text-slate-700">Evento ativo</label>
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="inicio_em">Início</label>
        <input id="inicio_em" name="inicio_em" type="datetime-local"
            value="{{ old('inicio_em', optional($evento->inicio_em)->format('Y-m-d\TH:i')) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
        @error('inicio_em') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="termino_em">Término</label>
        <input id="termino_em" name="termino_em" type="datetime-local"
            value="{{ old('termino_em', optional($evento->termino_em)->format('Y-m-d\TH:i')) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
        @error('termino_em') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="aceita_inscricoes_ate">Aceita inscrições até</label>
        <input id="aceita_inscricoes_ate" name="aceita_inscricoes_ate" type="datetime-local"
            value="{{ old('aceita_inscricoes_ate', optional($evento->aceita_inscricoes_ate)->format('Y-m-d\TH:i')) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
        @error('aceita_inscricoes_ate') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>

    <div>
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="limite_inscricoes">Limite de inscrições</label>
        <input id="limite_inscricoes" name="limite_inscricoes" type="number" min="0"
            value="{{ old('limite_inscricoes', $evento->limite_inscricoes) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
        @error('limite_inscricoes') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>

    <div class="lg:col-span-2">
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="descricao_publica_curta">Descrição pública curta</label>
        <input id="descricao_publica_curta" name="descricao_publica_curta" type="text"
            value="{{ old('descricao_publica_curta', $evento->descricao_publica_curta) }}"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
        @error('descricao_publica_curta') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>

    <div class="lg:col-span-2">
        <label class="mb-2 block text-sm font-semibold text-slate-700" for="orientacoes_participante">Orientações ao participante</label>
        <textarea id="orientacoes_participante" name="orientacoes_participante" rows="4"
            class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">{{ old('orientacoes_participante', $evento->orientacoes_participante) }}</textarea>
        @error('orientacoes_participante') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
    </div>
</div>

<div class="mt-8 flex items-center justify-end gap-3">
    <a
        href="{{ route('secretaria.eventos.index') }}"
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