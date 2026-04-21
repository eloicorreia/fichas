@csrf

<div class="space-y-8">
    <section>
        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">Dados principais</h3>

        <div class="mt-4 grid gap-6 lg:grid-cols-2">
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
                <input name="ativo" type="hidden" value="0">
                <input id="ativo" name="ativo" type="checkbox" value="1" @checked((bool) old('ativo', $evento->ativo ?? true))
                    class="h-4 w-4 rounded border-slate-300 text-sky-700 focus:ring-sky-500">
                <label for="ativo" class="text-sm font-medium text-slate-700">Evento ativo</label>
            </div>

            <div class="lg:col-span-2">
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="descricao_publica_curta">Descrição pública curta</label>
                <input id="descricao_publica_curta" name="descricao_publica_curta" type="text"
                    value="{{ old('descricao_publica_curta', $evento->descricao_publica_curta) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('descricao_publica_curta') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">Responsáveis</h3>

        <div class="mt-4 grid gap-6 lg:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="coordenador_nome">Coordenador</label>
                <input id="coordenador_nome" name="coordenador_nome" type="text"
                    value="{{ old('coordenador_nome', $evento->coordenador_nome) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('coordenador_nome') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="tesoureiro_nome">Tesoureiro</label>
                <input id="tesoureiro_nome" name="tesoureiro_nome" type="text"
                    value="{{ old('tesoureiro_nome', $evento->tesoureiro_nome) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('tesoureiro_nome') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">Datas e janelas</h3>

        <div class="mt-4 grid gap-6 lg:grid-cols-2">
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

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="janela_chegada_inicio">Janela de chegada - início</label>
                <input id="janela_chegada_inicio" name="janela_chegada_inicio" type="datetime-local"
                    value="{{ old('janela_chegada_inicio', optional($evento->janela_chegada_inicio)->format('Y-m-d\TH:i')) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('janela_chegada_inicio') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="janela_chegada_fim">Janela de chegada - fim</label>
                <input id="janela_chegada_fim" name="janela_chegada_fim" type="datetime-local"
                    value="{{ old('janela_chegada_fim', optional($evento->janela_chegada_fim)->format('Y-m-d\TH:i')) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('janela_chegada_fim') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="inicio_descricao">Descrição do início</label>
                <input id="inicio_descricao" name="inicio_descricao" type="text"
                    value="{{ old('inicio_descricao', $evento->inicio_descricao) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('inicio_descricao') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="final_descricao">Descrição do encerramento</label>
                <input id="final_descricao" name="final_descricao" type="text"
                    value="{{ old('final_descricao', $evento->final_descricao) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('final_descricao') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div class="lg:col-span-2">
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="dias">Dias</label>
                <input id="dias" name="dias" type="text"
                    value="{{ old('dias', $evento->dias) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100"
                    placeholder="Ex.: Sexta, Sábado e Domingo">
                @error('dias') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">Financeiro e comprovantes</h3>

        <div class="mt-4 grid gap-6 lg:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="valor_contribuicao">Valor da contribuição</label>
                <input id="valor_contribuicao" name="valor_contribuicao" type="number" step="0.01" min="0"
                    value="{{ old('valor_contribuicao', $evento->valor_contribuicao) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('valor_contribuicao') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="comprovante_whatsapp">WhatsApp para comprovante</label>
                <input id="comprovante_whatsapp" name="comprovante_whatsapp" type="text"
                    value="{{ old('comprovante_whatsapp', $evento->comprovante_whatsapp) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('comprovante_whatsapp') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="pix_chave">PIX - chave</label>
                <input id="pix_chave" name="pix_chave" type="text"
                    value="{{ old('pix_chave', $evento->pix_chave) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('pix_chave') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="pix_banco">PIX - banco</label>
                <input id="pix_banco" name="pix_banco" type="text"
                    value="{{ old('pix_banco', $evento->pix_banco) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('pix_banco') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="pix_favorecido">PIX - favorecido</label>
                <input id="pix_favorecido" name="pix_favorecido" type="text"
                    value="{{ old('pix_favorecido', $evento->pix_favorecido) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('pix_favorecido') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="comprovante_responsavel">Responsável pelo comprovante</label>
                <input id="comprovante_responsavel" name="comprovante_responsavel" type="text"
                    value="{{ old('comprovante_responsavel', $evento->comprovante_responsavel) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('comprovante_responsavel') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">Local</h3>

        <div class="mt-4 grid gap-6 lg:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="logradouro">Logradouro</label>
                <input id="logradouro" name="logradouro" type="text"
                    value="{{ old('logradouro', $evento->logradouro) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('logradouro') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="numero_endereco">Número</label>
                <input id="numero_endereco" name="numero_endereco" type="text"
                    value="{{ old('numero_endereco', $evento->numero_endereco) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('numero_endereco') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="complemento">Complemento</label>
                <input id="complemento" name="complemento" type="text"
                    value="{{ old('complemento', $evento->complemento) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('complemento') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="bairro">Bairro</label>
                <input id="bairro" name="bairro" type="text"
                    value="{{ old('bairro', $evento->bairro) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('bairro') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700" for="cidade">Cidade</label>
                <input id="cidade" name="cidade" type="text"
                    value="{{ old('cidade', $evento->cidade) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                @error('cidade') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div class="grid gap-6 sm:grid-cols-[120px_minmax(0,1fr)]">
                <div>
                    <label class="mb-2 block text-sm font-semibold text-slate-700" for="uf">UF</label>
                    <input id="uf" name="uf" type="text"
                        value="{{ old('uf', $evento->uf) }}"
                        maxlength="2"
                        class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm uppercase text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                    @error('uf') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="mb-2 block text-sm font-semibold text-slate-700" for="cep">CEP</label>
                    <input id="cep" name="cep" type="text"
                        value="{{ old('cep', $evento->cep) }}"
                        class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm text-slate-800 outline-none transition focus:border-sky-400 focus:ring-2 focus:ring-sky-100">
                    @error('cep') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
                </div>
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">Textos e observações</h3>

        <div class="mt-4 grid gap-6">
            <x-forms.html-editor
                name="orientacoes_participante"
                label="Orientações ao participante"
                :value="$evento->orientacoes_participante"
                hint="Esse conteúdo poderá ser exibido em telas e páginas públicas/administrativas."
            />

            <x-forms.html-editor
                name="encerramento_info"
                label="Informações de encerramento"
                :value="$evento->encerramento_info"
            />

            <x-forms.html-editor
                name="informacoes_finais"
                label="Informações finais"
                :value="$evento->informacoes_finais"
            />

            <x-forms.html-editor
                name="observacoes_internas"
                label="Observações internas"
                :value="$evento->observacoes_internas"
            />
        </div>
    </section>
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