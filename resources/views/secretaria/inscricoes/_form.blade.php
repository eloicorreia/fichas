@csrf

<div class="space-y-8">
    <section>
        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">Dados da ficha</h3>

        <div class="mt-4 grid gap-6 lg:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Status da ficha</label>
                <select name="status_ficha" class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                    @foreach ($statusDisponiveis as $status)
                        <option value="{{ $status }}" @selected(old('status_ficha', $inscricao->status_ficha) === $status)>
                            {{ $status }}
                        </option>
                    @endforeach
                </select>
                @error('status_ficha') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center gap-3 pt-8">
                <input type="hidden" name="aceitou_termo" value="0">
                <input type="checkbox" id="aceitou_termo" name="aceitou_termo" value="1"
                    @checked((bool) old('aceitou_termo', $inscricao->aceitou_termo))
                    class="h-4 w-4 rounded border-slate-300 text-sky-700">
                <label for="aceitou_termo" class="text-sm font-medium text-slate-700">Aceitou termo</label>
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">Dados pessoais</h3>

        <div class="mt-4 grid gap-6 lg:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Nome</label>
                <input name="nome" type="text" value="{{ old('nome', $inscricao->nome) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                @error('nome') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">CPF</label>
                <input name="cpf" type="text" value="{{ old('cpf', $inscricao->cpf) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                @error('cpf') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Data de nascimento</label>
                <input name="data_nascimento" type="date"
                    value="{{ old('data_nascimento', optional($inscricao->data_nascimento)->format('Y-m-d')) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
                @error('data_nascimento') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Estado civil</label>
                <input name="estado_civil" type="text" value="{{ old('estado_civil', $inscricao->estado_civil) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Nome da mãe</label>
                <input name="nome_mae" type="text" value="{{ old('nome_mae', $inscricao->nome_mae) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Profissão</label>
                <input name="profissao" type="text" value="{{ old('profissao', $inscricao->profissao) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">Contato e endereço</h3>

        <div class="mt-4 grid gap-6 lg:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Telefone</label>
                <input name="telefone" type="text" value="{{ old('telefone', $inscricao->telefone) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">E-mail</label>
                <input name="email" type="email" value="{{ old('email', $inscricao->email) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">CEP</label>
                <input name="cep" type="text" value="{{ old('cep', $inscricao->cep) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Endereço</label>
                <input name="endereco" type="text" value="{{ old('endereco', $inscricao->endereco) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Bairro</label>
                <input name="bairro" type="text" value="{{ old('bairro', $inscricao->bairro) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Cidade</label>
                <input name="cidade" type="text" value="{{ old('cidade', $inscricao->cidade) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Estado</label>
                <input name="estado" type="text" value="{{ old('estado', $inscricao->estado) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>
        </div>
    </section>

    <section>
        <h3 class="text-sm font-bold uppercase tracking-[0.12em] text-slate-600">Igreja, pastoral e pagamento</h3>

        <div class="mt-4 grid gap-6 lg:grid-cols-2">
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Participa da igreja</label>
                <input name="participa_igreja" type="text" value="{{ old('participa_igreja', $inscricao->participa_igreja) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Paróquia</label>
                <input name="paroquia" type="text" value="{{ old('paroquia', $inscricao->paroquia) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div class="flex items-center gap-3 pt-8">
                <input type="hidden" name="sacramento_batizado" value="0">
                <input type="checkbox" id="sacramento_batizado" name="sacramento_batizado" value="1"
                    @checked((bool) old('sacramento_batizado', $inscricao->sacramento_batizado))
                    class="h-4 w-4 rounded border-slate-300 text-sky-700">
                <label for="sacramento_batizado" class="text-sm font-medium text-slate-700">Batizado</label>
            </div>

            <div class="flex items-center gap-3 pt-8">
                <input type="hidden" name="sacramento_eucaristia" value="0">
                <input type="checkbox" id="sacramento_eucaristia" name="sacramento_eucaristia" value="1"
                    @checked((bool) old('sacramento_eucaristia', $inscricao->sacramento_eucaristia))
                    class="h-4 w-4 rounded border-slate-300 text-sky-700">
                <label for="sacramento_eucaristia" class="text-sm font-medium text-slate-700">Eucaristia</label>
            </div>

            <div class="flex items-center gap-3 pt-8">
                <input type="hidden" name="sacramento_crisma" value="0">
                <input type="checkbox" id="sacramento_crisma" name="sacramento_crisma" value="1"
                    @checked((bool) old('sacramento_crisma', $inscricao->sacramento_crisma))
                    class="h-4 w-4 rounded border-slate-300 text-sky-700">
                <label for="sacramento_crisma" class="text-sm font-medium text-slate-700">Crisma</label>
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Participa de pastoral</label>
                <input name="participa_pastoral" type="text" value="{{ old('participa_pastoral', $inscricao->participa_pastoral) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div class="lg:col-span-2">
                <label class="mb-2 block text-sm font-semibold text-slate-700">Quais pastorais</label>
                <textarea name="quais_pastorais" rows="3"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">{{ old('quais_pastorais', $inscricao->quais_pastorais) }}</textarea>
            </div>

            <div class="flex items-center gap-3 pt-8">
                <input type="hidden" name="pagamento_confirmado" value="0">
                <input type="checkbox" id="pagamento_confirmado" name="pagamento_confirmado" value="1"
                    @checked((bool) old('pagamento_confirmado', $inscricao->pagamento_confirmado))
                    class="h-4 w-4 rounded border-slate-300 text-sky-700">
                <label for="pagamento_confirmado" class="text-sm font-medium text-slate-700">Pagamento confirmado</label>
            </div>

            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">Data do pagamento</label>
                <input name="pagamento_data" type="date"
                    value="{{ old('pagamento_data', optional($inscricao->pagamento_data)->format('Y-m-d')) }}"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">
            </div>

            <div class="lg:col-span-2">
                <label class="mb-2 block text-sm font-semibold text-slate-700">Comprovante (base64)</label>
                <textarea name="pagamento_comprovante_base64" rows="4"
                    class="w-full rounded-2xl border border-slate-300 px-4 py-3 text-sm">{{ old('pagamento_comprovante_base64', $inscricao->pagamento_comprovante_base64) }}</textarea>
            </div>
        </div>
    </section>
</div>

<div class="mt-8 flex items-center justify-end gap-3">
    <a
        href="{{ route('secretaria.eventos.inscricoes.index', $evento) }}"
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