<?php

namespace Database\Seeders;

use App\Models\Evento;
use Illuminate\Database\Seeder;

class EventoMulheres109Seeder extends Seeder
{
    public function run(): void
    {
        Evento::updateOrCreate(
            [
                'tipo_evento' => 'CURSILHO',
                'publico_evento' => 'MULHERES',
                'numero' => 109,
            ],
            [
                'nome' => '109º Cursilho para Mulheres',
                'coordenador_nome' => null,
                'tesoureiro_nome' => null,

                'status' => 'ABERTO',
                'ativo' => true,

                'inicio_em' => '2026-04-24 19:30:00',
                'termino_em' => '2026-04-26 17:00:00',
                'aceita_inscricoes_ate' => null,

                'janela_chegada_inicio' => '2026-04-24 19:15:00',
                'janela_chegada_fim' => '2026-04-24 19:45:00',

                'valor_contribuicao' => 50.00,
                'pix_chave' => '45.035.052/0001-31',
                'pix_banco' => 'BRADESCO',
                'pix_favorecido' => 'Instituto Nossa Senhora do Rosário',
                'pix_qr_code_path' => 'assets/img/pix.png',
                'comprovante_whatsapp' => '14997818088',
                'comprovante_responsavel' => 'Natalia',

                'logradouro' => 'Av. José Henrique Ferraz',
                'numero_endereco' => '20-51',
                'complemento' => null,
                'bairro' => 'Jardim Ouro Verde',
                'cidade' => 'Bauru',
                'uf' => 'SP',
                'cep' => null,

                'limite_inscricoes' => null,

                'descricao_publica_curta' =>
                    '109º Cursilho para Mulheres — GED Bauru, de 24 a 26 de abril de 2026.',

                'orientacoes_participante' => <<<TEXT
Queridos irmãos e irmãs,

Estamos nos preparando com muito carinho para vivermos juntos um momento muito especial de fé, oração e encontro com Deus.
Será uma grande alegria recebê-los para esta experiência de graça, amor e renovação espiritual.

Estaremos reunidos por dois dias na Casa de Cursilhos de Bauru e, para que você possa participar com tranquilidade,
conforto e serenidade, pedimos a gentileza de trazer alguns pertences de uso pessoal importantes para sua permanência
durante o encontro.

Pedimos que você traga roupas de cama, como lençóis, cobertores e travesseiro; itens de asseio pessoal, como toalha de
rosto e banho, sabonete, creme dental e escova de dente; além de medicamentos de uso contínuo, caso utilize, em
quantidade suficiente para os dois dias. Se você tiver, não se esqueça também de levar sua Bíblia.

Também orientamos, com carinho, que não sejam levados equipamentos eletrônicos, como celular, notebook, tablet e
semelhantes. Esse cuidado nos ajuda a viver mais intensamente cada momento, com mais recolhimento, atenção e abertura à
presença de Deus. Caso alguém precise entrar em contato, poderá ligar diretamente para a Casa de Cursilhos.
TEXT,

                'encerramento_info' =>
                    'Saída no domingo, dia 26 de abril de 2026, às 17h00, com a Santa Missa.',

                'informacoes_finais' => <<<TEXT
Para a realização do Cursilho, temos algumas despesas com alimentação, hospedagem, secretaria e materiais necessários.
Por isso, pedimos uma contribuição de R$ 50,00, valor que ajuda a cobrir esses custos durante os dois dias de encontro.

Pedimos também atenção ao horário de chegada: você deverá estar na Casa de Cursilhos entre 19h15 e 19h45, na sexta-feira,
dia 24/04.

Endereço da Casa de Cursilhos de Bauru:
Av. José Henrique Ferraz, 20-51 – Jardim Ouro Verde

Mais do que trazer seus pertences, venha também com o coração aberto, disposto a ouvir, acolher, perdoar e viver com
profundidade tudo aquilo que o Senhor preparou. Este encontro é uma oportunidade preciosa para renovar a fé, fortalecer a
esperança e deixar-se transformar pelo amor de Deus.

Que cada participante venha com o desejo sincero de buscar a fé, viver o amor e cultivar a gratidão ao nosso Senhor Jesus
Cristo, que nos chama, nos sustenta e nos conduz com infinita misericórdia.

Esperamos você com alegria e muito carinho para vivermos juntos essa linda experiência de bênçãos e encontro com Deus.
TEXT,

                'observacoes_internas' =>
                    'Seeder criado a partir das fichas públicas de inscrição e das telas de revisão/finalização do evento Mulheres 109.',
            ]
        );
    }
}