<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Inscrição confirmada</title>
</head>
<body style="margin:0;padding:0;background:#f4f6fb;font-family:Arial,Helvetica,sans-serif;color:#111827;">
@php
    $bannerCid = null;
    $eventoCid = null;
    $pixCid = null;

    if (isset($message)) {
        if (!empty($bannerPath) && file_exists($bannerPath)) {
            $bannerCid = $message->embed($bannerPath);
        }

        if (!empty($eventoImagePath) && file_exists($eventoImagePath)) {
            $eventoCid = $message->embed($eventoImagePath);
        }

        if (!empty($pixPath) && file_exists($pixPath)) {
            $pixCid = $message->embed($pixPath);
        }
    }
@endphp

<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background:#f4f6fb;margin:0;padding:24px 0;">
    <tr>
        <td align="center">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="max-width:860px;background:#ffffff;border:1px solid #e5e7eb;border-radius:14px;overflow:hidden;">
                <tr>
                    <td>
                        @if($bannerCid)
                            <img src="{{ $bannerCid }}" alt="Banner do MCC" style="display:block;width:100%;height:auto;border:0;">
                        @else
                            <div style="padding:24px;background:#c7d2fe;text-align:center;font-weight:bold;">
                                MCC Bauru
                            </div>
                        @endif
                    </td>
                </tr>

                <tr>
                    <td style="padding:28px;">
                        <h1 style="margin:0 0 8px;font-size:28px;line-height:1.2;color:#111827;">
                            Inscrição enviada ✅
                        </h1>

                        <p style="margin:0 0 18px;font-size:15px;line-height:1.6;color:#4b5563;">
                            {{ $numero }}º Cursilho para {{ strtoupper($sexoLabel) }} — GED Bauru - Grupo Executivo Diocesano - Bauru / SP
                        </p>

                        @if($eventoCid)
                            <div style="margin:0 0 18px;">
                                <img src="{{ $eventoCid }}" alt="Imagem do evento" style="display:block;width:100%;height:auto;border:1px solid #e5e7eb;border-radius:12px;">
                            </div>
                        @endif

                        <div style="margin-top:14px;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;background:#ffffff;">
                            <div style="background:#a9bfe6;color:#0f172a;font-weight:900;padding:10px 12px;font-size:14px;">
                                Orientações para o Encontro
                            </div>

                            <div style="padding:16px;">
                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    <strong>Queridos irmãos e irmãs,</strong>
                                </p>

                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    Estamos nos preparando com muito carinho para vivermos juntos um momento muito especial de fé, oração e encontro com Deus.
                                    Será uma grande alegria recebê-los para esta experiência de graça, amor e renovação espiritual.
                                </p>

                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    Estaremos reunidos por <strong>dois dias na Casa de Cursilhos de Bauru</strong> e, para que você possa participar
                                    com tranquilidade, conforto e serenidade, pedimos a gentileza de trazer alguns pertences de uso pessoal importantes
                                    para sua permanência durante o encontro.
                                </p>

                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    Pedimos que você traga <strong>roupas de cama</strong>, como lençóis, cobertores e travesseiro; itens de
                                    <strong>asseio pessoal</strong>, como toalha de rosto e banho, sabonete, creme dental e escova de dente;
                                    além de <strong>medicamentos de uso contínuo</strong>, caso utilize, em quantidade suficiente para os dois dias.
                                    Se você tiver, não se esqueça também de levar sua <strong>Bíblia</strong>.
                                </p>

                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    Também orientamos, com carinho, que <strong>não sejam levados equipamentos eletrônicos</strong>, como celular,
                                    notebook, tablet e semelhantes. Esse cuidado nos ajuda a viver mais intensamente cada momento, com mais recolhimento,
                                    atenção e abertura à presença de Deus. Caso alguém precise entrar em contato, poderá ligar diretamente para a
                                    <strong>Casa de Cursilhos</strong>.
                                </p>

                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    Para a realização do Cursilho, temos algumas despesas com alimentação, hospedagem, secretaria e materiais necessários.
                                    Por isso, pedimos uma <strong>contribuição de R$ 50,00</strong>, valor que ajuda a cobrir esses custos durante os
                                    dois dias de encontro.
                                </p>

                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    Pedimos também atenção ao <strong>horário de chegada</strong>: você deverá estar na Casa de Cursilhos entre
                                    <strong>19h15 e 19h45, na sexta-feira, dia 24/04</strong>.
                                </p>

                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    <strong>Endereço da Casa de Cursilhos de Bauru:</strong><br>
                                    Av. José Henrique Ferraz, 20-51 – Jardim Ouro Verde
                                </p>

                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    Mais do que trazer seus pertences, venha também com o <strong>coração aberto</strong>, disposto a ouvir,
                                    acolher, perdoar e viver com profundidade tudo aquilo que o Senhor preparou. Este encontro é uma oportunidade
                                    preciosa para renovar a fé, fortalecer a esperança e deixar-se transformar pelo amor de Deus.
                                </p>

                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    Que cada participante venha com o desejo sincero de <strong>buscar a fé, viver o amor e cultivar a gratidão
                                    ao nosso Senhor Jesus Cristo</strong>, que nos chama, nos sustenta e nos conduz com infinita misericórdia.
                                </p>

                                <p style="margin:0;font-size:15px;line-height:1.7;">
                                    <strong>Esperamos você com alegria e muito carinho</strong> para vivermos juntos essa linda experiência de bênçãos
                                    e encontro com Deus.
                                </p>
                            </div>
                        </div>

                        <div style="margin-top:14px;border:1px solid #e5e7eb;border-radius:12px;overflow:hidden;background:#ffffff;">
                            <div style="background:#a9bfe6;color:#0f172a;font-weight:900;padding:10px 12px;font-size:14px;">
                                Pagamento / PIX
                            </div>

                            <div style="padding:16px;">
                                <p style="margin:0 0 10px;font-size:15px;line-height:1.7;">
                                    <strong>Taxa:</strong> R$ 50,00
                                </p>

                                <p style="margin:0 0 10px;font-size:15px;line-height:1.7;">
                                    <strong>Chave PIX:</strong> 45.035.052/0001-31 — BRADESCO<br>
                                    <strong>Favorecido:</strong> Instituto Nossa Senhora do Rosário
                                </p>

                                <p style="margin:0 0 10px;font-size:15px;line-height:1.7;">
                                    <strong>Início:</strong> Sexta às 19h30 do dia 24 de Abril de 2026<br>
                                    <strong>Saída:</strong> Domingo às 17h00 do dia 26 de Abril de 2026 com a Santa Missa
                                </p>

                                <p style="margin:0 0 12px;font-size:15px;line-height:1.7;">
                                    <strong>Comprovante:</strong> enviar para o WhatsApp <strong>14 99781-8088</strong> — A/c Natalia
                                </p>

                                @if($pixCid)
                                    <div style="margin-top:12px;text-align:center;">
                                        <img src="{{ $pixCid }}" alt="QR Code PIX" style="display:inline-block;max-width:320px;width:100%;height:auto;border:1px solid #e5e7eb;border-radius:12px;padding:10px;background:#fff;">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <p style="margin:20px 0 0;font-size:14px;line-height:1.6;color:#4b5563;">
                            Deus abençoe sua caminhada. Nos vemos no Cursilho.
                        </p>
                    </td>
                </tr>

                <tr>
                    <td style="padding:14px 18px;border-top:1px solid #e5e7eb;color:#4b5563;font-size:12px;">
                        Inscrição finalizada • {{ strtoupper($sexoLabel) }} / {{ $numero }}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>