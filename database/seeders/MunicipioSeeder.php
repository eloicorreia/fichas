<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('municipio')->truncate();

        $dados = [
            [
                'id_municipio' => 1100015,
                'nome_municipio' => 'Alta Floresta D\'Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100023,
                'nome_municipio' => 'Ariquemes',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100031,
                'nome_municipio' => 'Cabixi',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100049,
                'nome_municipio' => 'Cacoal',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100056,
                'nome_municipio' => 'Cerejeiras',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100064,
                'nome_municipio' => 'Colorado do Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100072,
                'nome_municipio' => 'Corumbiara',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100080,
                'nome_municipio' => 'Costa Marques',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100098,
                'nome_municipio' => 'Espigão D\'Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100106,
                'nome_municipio' => 'Guajará-Mirim',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100114,
                'nome_municipio' => 'Jaru',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100122,
                'nome_municipio' => 'Ji-Paraná',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100130,
                'nome_municipio' => 'Machadinho D\'Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100148,
                'nome_municipio' => 'Nova Brasilândia D\'Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100155,
                'nome_municipio' => 'Ouro Preto do Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100189,
                'nome_municipio' => 'Pimenta Bueno',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100205,
                'nome_municipio' => 'Porto Velho',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100254,
                'nome_municipio' => 'Presidente Médici',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100262,
                'nome_municipio' => 'Rio Crespo',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100288,
                'nome_municipio' => 'Rolim de Moura',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100296,
                'nome_municipio' => 'Santa Luzia D\'Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100304,
                'nome_municipio' => 'Vilhena',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100320,
                'nome_municipio' => 'São Miguel do Guaporé',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100338,
                'nome_municipio' => 'Nova Mamoré',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100346,
                'nome_municipio' => 'Alvorada D\'Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100379,
                'nome_municipio' => 'Alto Alegre dos Parecis',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100403,
                'nome_municipio' => 'Alto Paraíso',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100452,
                'nome_municipio' => 'Buritis',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100502,
                'nome_municipio' => 'Novo Horizonte do Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100601,
                'nome_municipio' => 'Cacaulândia',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100700,
                'nome_municipio' => 'Campo Novo de Rondônia',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100809,
                'nome_municipio' => 'Candeias do Jamari',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100908,
                'nome_municipio' => 'Castanheiras',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100924,
                'nome_municipio' => 'Chupinguaia',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1100940,
                'nome_municipio' => 'Cujubim',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101005,
                'nome_municipio' => 'Governador Jorge Teixeira',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101104,
                'nome_municipio' => 'Itapuã do Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101203,
                'nome_municipio' => 'Ministro Andreazza',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101302,
                'nome_municipio' => 'Mirante da Serra',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101401,
                'nome_municipio' => 'Monte Negro',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101435,
                'nome_municipio' => 'Nova União',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101450,
                'nome_municipio' => 'Parecis',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101468,
                'nome_municipio' => 'Pimenteiras do Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101476,
                'nome_municipio' => 'Primavera de Rondônia',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101484,
                'nome_municipio' => 'São Felipe D\'Oeste',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101492,
                'nome_municipio' => 'São Francisco do Guaporé',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101500,
                'nome_municipio' => 'Seringueiras',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101559,
                'nome_municipio' => 'Teixeirópolis',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101609,
                'nome_municipio' => 'Theobroma',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101708,
                'nome_municipio' => 'Urupá',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101757,
                'nome_municipio' => 'Vale do Anari',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1101807,
                'nome_municipio' => 'Vale do Paraíso',
                'uf' => 'RO',
            ],
            [
                'id_municipio' => 1200013,
                'nome_municipio' => 'Acrelândia',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200054,
                'nome_municipio' => 'Assis Brasil',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200104,
                'nome_municipio' => 'Brasiléia',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200138,
                'nome_municipio' => 'Bujari',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200179,
                'nome_municipio' => 'Capixaba',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200203,
                'nome_municipio' => 'Cruzeiro do Sul',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200252,
                'nome_municipio' => 'Epitaciolândia',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200302,
                'nome_municipio' => 'Feijó',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200328,
                'nome_municipio' => 'Jordão',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200336,
                'nome_municipio' => 'Mâncio Lima',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200344,
                'nome_municipio' => 'Manoel Urbano',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200351,
                'nome_municipio' => 'Marechal Thaumaturgo',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200385,
                'nome_municipio' => 'Plácido de Castro',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200393,
                'nome_municipio' => 'Porto Walter',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200401,
                'nome_municipio' => 'Rio Branco',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200427,
                'nome_municipio' => 'Rodrigues Alves',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200435,
                'nome_municipio' => 'Santa Rosa do Purus',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200450,
                'nome_municipio' => 'Senador Guiomard',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200500,
                'nome_municipio' => 'Sena Madureira',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200609,
                'nome_municipio' => 'Tarauacá',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200708,
                'nome_municipio' => 'Xapuri',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1200807,
                'nome_municipio' => 'Porto Acre',
                'uf' => 'AC',
            ],
            [
                'id_municipio' => 1300029,
                'nome_municipio' => 'Alvarães',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300060,
                'nome_municipio' => 'Amaturá',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300086,
                'nome_municipio' => 'Anamã',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300102,
                'nome_municipio' => 'Anori',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300144,
                'nome_municipio' => 'Apuí',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300201,
                'nome_municipio' => 'Atalaia do Norte',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300300,
                'nome_municipio' => 'Autazes',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300409,
                'nome_municipio' => 'Barcelos',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300508,
                'nome_municipio' => 'Barreirinha',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300607,
                'nome_municipio' => 'Benjamin Constant',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300631,
                'nome_municipio' => 'Beruri',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300680,
                'nome_municipio' => 'Boa Vista do Ramos',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300706,
                'nome_municipio' => 'Boca do Acre',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300805,
                'nome_municipio' => 'Borba',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300839,
                'nome_municipio' => 'Caapiranga',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1300904,
                'nome_municipio' => 'Canutama',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301001,
                'nome_municipio' => 'Carauari',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301100,
                'nome_municipio' => 'Careiro',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301159,
                'nome_municipio' => 'Careiro da Várzea',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301209,
                'nome_municipio' => 'Coari',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301308,
                'nome_municipio' => 'Codajás',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301407,
                'nome_municipio' => 'Eirunepé',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301506,
                'nome_municipio' => 'Envira',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301605,
                'nome_municipio' => 'Fonte Boa',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301654,
                'nome_municipio' => 'Guajará',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301704,
                'nome_municipio' => 'Humaitá',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301803,
                'nome_municipio' => 'Ipixuna',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301852,
                'nome_municipio' => 'Iranduba',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301902,
                'nome_municipio' => 'Itacoatiara',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1301951,
                'nome_municipio' => 'Itamarati',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302009,
                'nome_municipio' => 'Itapiranga',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302108,
                'nome_municipio' => 'Japurá',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302207,
                'nome_municipio' => 'Juruá',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302306,
                'nome_municipio' => 'Jutaí',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302405,
                'nome_municipio' => 'Lábrea',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302504,
                'nome_municipio' => 'Manacapuru',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302553,
                'nome_municipio' => 'Manaquiri',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302603,
                'nome_municipio' => 'Manaus',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302702,
                'nome_municipio' => 'Manicoré',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302801,
                'nome_municipio' => 'Maraã',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1302900,
                'nome_municipio' => 'Maués',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303007,
                'nome_municipio' => 'Nhamundá',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303106,
                'nome_municipio' => 'Nova Olinda do Norte',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303205,
                'nome_municipio' => 'Novo Airão',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303304,
                'nome_municipio' => 'Novo Aripuanã',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303403,
                'nome_municipio' => 'Parintins',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303502,
                'nome_municipio' => 'Pauini',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303536,
                'nome_municipio' => 'Presidente Figueiredo',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303569,
                'nome_municipio' => 'Rio Preto da Eva',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303601,
                'nome_municipio' => 'Santa Isabel do Rio Negro',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303700,
                'nome_municipio' => 'Santo Antônio do Içá',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303809,
                'nome_municipio' => 'São Gabriel da Cachoeira',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303908,
                'nome_municipio' => 'São Paulo de Olivença',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1303957,
                'nome_municipio' => 'São Sebastião do Uatumã',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1304005,
                'nome_municipio' => 'Silves',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1304062,
                'nome_municipio' => 'Tabatinga',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1304104,
                'nome_municipio' => 'Tapauá',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1304203,
                'nome_municipio' => 'Tefé',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1304237,
                'nome_municipio' => 'Tonantins',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1304260,
                'nome_municipio' => 'Uarini',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1304302,
                'nome_municipio' => 'Urucará',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1304401,
                'nome_municipio' => 'Urucurituba',
                'uf' => 'AM',
            ],
            [
                'id_municipio' => 1400027,
                'nome_municipio' => 'Amajari',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400050,
                'nome_municipio' => 'Alto Alegre',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400100,
                'nome_municipio' => 'Boa Vista',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400159,
                'nome_municipio' => 'Bonfim',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400175,
                'nome_municipio' => 'Cantá',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400209,
                'nome_municipio' => 'Caracaraí',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400233,
                'nome_municipio' => 'Caroebe',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400282,
                'nome_municipio' => 'Iracema',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400308,
                'nome_municipio' => 'Mucajaí',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400407,
                'nome_municipio' => 'Normandia',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400456,
                'nome_municipio' => 'Pacaraima',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400472,
                'nome_municipio' => 'Rorainópolis',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400506,
                'nome_municipio' => 'São João da Baliza',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400605,
                'nome_municipio' => 'São Luiz',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1400704,
                'nome_municipio' => 'Uiramutã',
                'uf' => 'RR',
            ],
            [
                'id_municipio' => 1500107,
                'nome_municipio' => 'Abaetetuba',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500131,
                'nome_municipio' => 'Abel Figueiredo',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500206,
                'nome_municipio' => 'Acará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500305,
                'nome_municipio' => 'Afuá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500347,
                'nome_municipio' => 'Água Azul do Norte',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500404,
                'nome_municipio' => 'Alenquer',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500503,
                'nome_municipio' => 'Almeirim',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500602,
                'nome_municipio' => 'Altamira',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500701,
                'nome_municipio' => 'Anajás',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500800,
                'nome_municipio' => 'Ananindeua',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500859,
                'nome_municipio' => 'Anapu',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500909,
                'nome_municipio' => 'Augusto Corrêa',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1500958,
                'nome_municipio' => 'Aurora do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501006,
                'nome_municipio' => 'Aveiro',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501105,
                'nome_municipio' => 'Bagre',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501204,
                'nome_municipio' => 'Baião',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501253,
                'nome_municipio' => 'Bannach',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501303,
                'nome_municipio' => 'Barcarena',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501402,
                'nome_municipio' => 'Belém',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501451,
                'nome_municipio' => 'Belterra',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501501,
                'nome_municipio' => 'Benevides',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501576,
                'nome_municipio' => 'Bom Jesus do Tocantins',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501600,
                'nome_municipio' => 'Bonito',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501709,
                'nome_municipio' => 'Bragança',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501725,
                'nome_municipio' => 'Brasil Novo',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501758,
                'nome_municipio' => 'Brejo Grande do Araguaia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501782,
                'nome_municipio' => 'Breu Branco',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501808,
                'nome_municipio' => 'Breves',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501907,
                'nome_municipio' => 'Bujaru',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1501956,
                'nome_municipio' => 'Cachoeira do Piriá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502004,
                'nome_municipio' => 'Cachoeira do Arari',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502103,
                'nome_municipio' => 'Cametá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502152,
                'nome_municipio' => 'Canaã dos Carajás',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502202,
                'nome_municipio' => 'Capanema',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502301,
                'nome_municipio' => 'Capitão Poço',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502400,
                'nome_municipio' => 'Castanhal',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502509,
                'nome_municipio' => 'Chaves',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502608,
                'nome_municipio' => 'Colares',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502707,
                'nome_municipio' => 'Conceição do Araguaia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502756,
                'nome_municipio' => 'Concórdia do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502764,
                'nome_municipio' => 'Cumaru do Norte',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502772,
                'nome_municipio' => 'Curionópolis',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502806,
                'nome_municipio' => 'Curralinho',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502855,
                'nome_municipio' => 'Curuá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502905,
                'nome_municipio' => 'Curuçá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502939,
                'nome_municipio' => 'Dom Eliseu',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1502954,
                'nome_municipio' => 'Eldorado do Carajás',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503002,
                'nome_municipio' => 'Faro',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503044,
                'nome_municipio' => 'Floresta do Araguaia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503077,
                'nome_municipio' => 'Garrafão do Norte',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503093,
                'nome_municipio' => 'Goianésia do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503101,
                'nome_municipio' => 'Gurupá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503200,
                'nome_municipio' => 'Igarapé-Açu',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503309,
                'nome_municipio' => 'Igarapé-Miri',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503408,
                'nome_municipio' => 'Inhangapi',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503457,
                'nome_municipio' => 'Ipixuna do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503507,
                'nome_municipio' => 'Irituia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503606,
                'nome_municipio' => 'Itaituba',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503705,
                'nome_municipio' => 'Itupiranga',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503754,
                'nome_municipio' => 'Jacareacanga',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503804,
                'nome_municipio' => 'Jacundá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1503903,
                'nome_municipio' => 'Juruti',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504000,
                'nome_municipio' => 'Limoeiro do Ajuru',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504059,
                'nome_municipio' => 'Mãe do Rio',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504109,
                'nome_municipio' => 'Magalhães Barata',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504208,
                'nome_municipio' => 'Marabá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504307,
                'nome_municipio' => 'Maracanã',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504406,
                'nome_municipio' => 'Marapanim',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504422,
                'nome_municipio' => 'Marituba',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504455,
                'nome_municipio' => 'Medicilândia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504505,
                'nome_municipio' => 'Melgaço',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504604,
                'nome_municipio' => 'Mocajuba',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504703,
                'nome_municipio' => 'Moju',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504752,
                'nome_municipio' => 'Mojuí dos Campos',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504802,
                'nome_municipio' => 'Monte Alegre',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504901,
                'nome_municipio' => 'Muaná',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504950,
                'nome_municipio' => 'Nova Esperança do Piriá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1504976,
                'nome_municipio' => 'Nova Ipixuna',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505007,
                'nome_municipio' => 'Nova Timboteua',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505031,
                'nome_municipio' => 'Novo Progresso',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505064,
                'nome_municipio' => 'Novo Repartimento',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505106,
                'nome_municipio' => 'Óbidos',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505205,
                'nome_municipio' => 'Oeiras do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505304,
                'nome_municipio' => 'Oriximiná',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505403,
                'nome_municipio' => 'Ourém',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505437,
                'nome_municipio' => 'Ourilândia do Norte',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505486,
                'nome_municipio' => 'Pacajá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505494,
                'nome_municipio' => 'Palestina do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505502,
                'nome_municipio' => 'Paragominas',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505536,
                'nome_municipio' => 'Parauapebas',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505551,
                'nome_municipio' => 'Pau D\'Arco',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505601,
                'nome_municipio' => 'Peixe-Boi',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505635,
                'nome_municipio' => 'Piçarra',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505650,
                'nome_municipio' => 'Placas',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505700,
                'nome_municipio' => 'Ponta de Pedras',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505809,
                'nome_municipio' => 'Portel',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1505908,
                'nome_municipio' => 'Porto de Moz',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506005,
                'nome_municipio' => 'Prainha',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506104,
                'nome_municipio' => 'Primavera',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506112,
                'nome_municipio' => 'Quatipuru',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506138,
                'nome_municipio' => 'Redenção',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506161,
                'nome_municipio' => 'Rio Maria',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506187,
                'nome_municipio' => 'Rondon do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506195,
                'nome_municipio' => 'Rurópolis',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506203,
                'nome_municipio' => 'Salinópolis',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506302,
                'nome_municipio' => 'Salvaterra',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506351,
                'nome_municipio' => 'Santa Bárbara do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506401,
                'nome_municipio' => 'Santa Cruz do Arari',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506500,
                'nome_municipio' => 'Santa Izabel do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506559,
                'nome_municipio' => 'Santa Luzia do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506583,
                'nome_municipio' => 'Santa Maria das Barreiras',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506609,
                'nome_municipio' => 'Santa Maria do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506708,
                'nome_municipio' => 'Santana do Araguaia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506807,
                'nome_municipio' => 'Santarém',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1506906,
                'nome_municipio' => 'Santarém Novo',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507003,
                'nome_municipio' => 'Santo Antônio do Tauá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507102,
                'nome_municipio' => 'São Caetano de Odivelas',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507151,
                'nome_municipio' => 'São Domingos do Araguaia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507201,
                'nome_municipio' => 'São Domingos do Capim',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507300,
                'nome_municipio' => 'São Félix do Xingu',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507409,
                'nome_municipio' => 'São Francisco do Pará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507458,
                'nome_municipio' => 'São Geraldo do Araguaia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507466,
                'nome_municipio' => 'São João da Ponta',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507474,
                'nome_municipio' => 'São João de Pirabas',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507508,
                'nome_municipio' => 'São João do Araguaia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507607,
                'nome_municipio' => 'São Miguel do Guamá',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507706,
                'nome_municipio' => 'São Sebastião da Boa Vista',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507755,
                'nome_municipio' => 'Sapucaia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507805,
                'nome_municipio' => 'Senador José Porfírio',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507904,
                'nome_municipio' => 'Soure',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507953,
                'nome_municipio' => 'Tailândia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507961,
                'nome_municipio' => 'Terra Alta',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1507979,
                'nome_municipio' => 'Terra Santa',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508001,
                'nome_municipio' => 'Tomé-Açu',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508035,
                'nome_municipio' => 'Tracuateua',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508050,
                'nome_municipio' => 'Trairão',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508084,
                'nome_municipio' => 'Tucumã',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508100,
                'nome_municipio' => 'Tucuruí',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508126,
                'nome_municipio' => 'Ulianópolis',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508159,
                'nome_municipio' => 'Uruará',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508209,
                'nome_municipio' => 'Vigia',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508308,
                'nome_municipio' => 'Viseu',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508357,
                'nome_municipio' => 'Vitória do Xingu',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1508407,
                'nome_municipio' => 'Xinguara',
                'uf' => 'PA',
            ],
            [
                'id_municipio' => 1600055,
                'nome_municipio' => 'Serra do Navio',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600105,
                'nome_municipio' => 'Amapá',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600154,
                'nome_municipio' => 'Pedra Branca do Amapari',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600204,
                'nome_municipio' => 'Calçoene',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600212,
                'nome_municipio' => 'Cutias',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600238,
                'nome_municipio' => 'Ferreira Gomes',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600253,
                'nome_municipio' => 'Itaubal',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600279,
                'nome_municipio' => 'Laranjal do Jari',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600303,
                'nome_municipio' => 'Macapá',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600402,
                'nome_municipio' => 'Mazagão',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600501,
                'nome_municipio' => 'Oiapoque',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600535,
                'nome_municipio' => 'Porto Grande',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600550,
                'nome_municipio' => 'Pracuúba',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600600,
                'nome_municipio' => 'Santana',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600709,
                'nome_municipio' => 'Tartarugalzinho',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1600808,
                'nome_municipio' => 'Vitória do Jari',
                'uf' => 'AP',
            ],
            [
                'id_municipio' => 1700251,
                'nome_municipio' => 'Abreulândia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1700301,
                'nome_municipio' => 'Aguiarnópolis',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1700350,
                'nome_municipio' => 'Aliança do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1700400,
                'nome_municipio' => 'Almas',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1700707,
                'nome_municipio' => 'Alvorada',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1701002,
                'nome_municipio' => 'Ananás',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1701051,
                'nome_municipio' => 'Angico',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1701101,
                'nome_municipio' => 'Aparecida do Rio Negro',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1701309,
                'nome_municipio' => 'Aragominas',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1701903,
                'nome_municipio' => 'Araguacema',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1702000,
                'nome_municipio' => 'Araguaçu',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1702109,
                'nome_municipio' => 'Araguaína',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1702158,
                'nome_municipio' => 'Araguanã',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1702208,
                'nome_municipio' => 'Araguatins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1702307,
                'nome_municipio' => 'Arapoema',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1702406,
                'nome_municipio' => 'Arraias',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1702554,
                'nome_municipio' => 'Augustinópolis',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1702703,
                'nome_municipio' => 'Aurora do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1702901,
                'nome_municipio' => 'Axixá do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703008,
                'nome_municipio' => 'Babaçulândia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703057,
                'nome_municipio' => 'Bandeirantes do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703073,
                'nome_municipio' => 'Barra do Ouro',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703107,
                'nome_municipio' => 'Barrolândia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703206,
                'nome_municipio' => 'Bernardo Sayão',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703305,
                'nome_municipio' => 'Bom Jesus do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703602,
                'nome_municipio' => 'Brasilândia do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703701,
                'nome_municipio' => 'Brejinho de Nazaré',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703800,
                'nome_municipio' => 'Buriti do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703826,
                'nome_municipio' => 'Cachoeirinha',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703842,
                'nome_municipio' => 'Campos Lindos',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703867,
                'nome_municipio' => 'Cariri do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703883,
                'nome_municipio' => 'Carmolândia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703891,
                'nome_municipio' => 'Carrasco Bonito',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1703909,
                'nome_municipio' => 'Caseara',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1704105,
                'nome_municipio' => 'Centenário',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1704600,
                'nome_municipio' => 'Chapada de Areia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1705102,
                'nome_municipio' => 'Chapada da Natividade',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1705508,
                'nome_municipio' => 'Colinas do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1705557,
                'nome_municipio' => 'Combinado',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1705607,
                'nome_municipio' => 'Conceição do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1706001,
                'nome_municipio' => 'Couto Magalhães',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1706100,
                'nome_municipio' => 'Cristalândia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1706258,
                'nome_municipio' => 'Crixás do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1706506,
                'nome_municipio' => 'Darcinópolis',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1707009,
                'nome_municipio' => 'Dianópolis',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1707108,
                'nome_municipio' => 'Divinópolis do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1707207,
                'nome_municipio' => 'Dois Irmãos do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1707306,
                'nome_municipio' => 'Dueré',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1707405,
                'nome_municipio' => 'Esperantina',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1707553,
                'nome_municipio' => 'Fátima',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1707652,
                'nome_municipio' => 'Figueirópolis',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1707702,
                'nome_municipio' => 'Filadélfia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1708205,
                'nome_municipio' => 'Formoso do Araguaia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1708254,
                'nome_municipio' => 'Tabocão',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1708304,
                'nome_municipio' => 'Goianorte',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1709005,
                'nome_municipio' => 'Goiatins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1709302,
                'nome_municipio' => 'Guaraí',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1709500,
                'nome_municipio' => 'Gurupi',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1709807,
                'nome_municipio' => 'Ipueiras',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1710508,
                'nome_municipio' => 'Itacajá',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1710706,
                'nome_municipio' => 'Itaguatins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1710904,
                'nome_municipio' => 'Itapiratins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1711100,
                'nome_municipio' => 'Itaporã do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1711506,
                'nome_municipio' => 'Jaú do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1711803,
                'nome_municipio' => 'Juarina',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1711902,
                'nome_municipio' => 'Lagoa da Confusão',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1711951,
                'nome_municipio' => 'Lagoa do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1712009,
                'nome_municipio' => 'Lajeado',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1712157,
                'nome_municipio' => 'Lavandeira',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1712405,
                'nome_municipio' => 'Lizarda',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1712454,
                'nome_municipio' => 'Luzinópolis',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1712504,
                'nome_municipio' => 'Marianópolis do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1712702,
                'nome_municipio' => 'Mateiros',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1712801,
                'nome_municipio' => 'Maurilândia do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1713205,
                'nome_municipio' => 'Miracema do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1713304,
                'nome_municipio' => 'Miranorte',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1713601,
                'nome_municipio' => 'Monte do Carmo',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1713700,
                'nome_municipio' => 'Monte Santo do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1713809,
                'nome_municipio' => 'Palmeiras do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1713957,
                'nome_municipio' => 'Muricilândia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1714203,
                'nome_municipio' => 'Natividade',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1714302,
                'nome_municipio' => 'Nazaré',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1714880,
                'nome_municipio' => 'Nova Olinda',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1715002,
                'nome_municipio' => 'Nova Rosalândia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1715101,
                'nome_municipio' => 'Novo Acordo',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1715150,
                'nome_municipio' => 'Novo Alegre',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1715259,
                'nome_municipio' => 'Novo Jardim',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1715507,
                'nome_municipio' => 'Oliveira de Fátima',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1715705,
                'nome_municipio' => 'Palmeirante',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1715754,
                'nome_municipio' => 'Palmeirópolis',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1716109,
                'nome_municipio' => 'Paraíso do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1716208,
                'nome_municipio' => 'Paranã',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1716307,
                'nome_municipio' => 'Pau D\'Arco',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1716505,
                'nome_municipio' => 'Pedro Afonso',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1716604,
                'nome_municipio' => 'Peixe',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1716653,
                'nome_municipio' => 'Pequizeiro',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1716703,
                'nome_municipio' => 'Colméia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1717008,
                'nome_municipio' => 'Pindorama do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1717206,
                'nome_municipio' => 'Piraquê',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1717503,
                'nome_municipio' => 'Pium',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1717800,
                'nome_municipio' => 'Ponte Alta do Bom Jesus',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1717909,
                'nome_municipio' => 'Ponte Alta do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718006,
                'nome_municipio' => 'Porto Alegre do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718204,
                'nome_municipio' => 'Porto Nacional',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718303,
                'nome_municipio' => 'Praia Norte',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718402,
                'nome_municipio' => 'Presidente Kennedy',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718451,
                'nome_municipio' => 'Pugmil',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718501,
                'nome_municipio' => 'Recursolândia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718550,
                'nome_municipio' => 'Riachinho',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718659,
                'nome_municipio' => 'Rio da Conceição',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718709,
                'nome_municipio' => 'Rio dos Bois',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718758,
                'nome_municipio' => 'Rio Sono',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718808,
                'nome_municipio' => 'Sampaio',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718840,
                'nome_municipio' => 'Sandolândia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718865,
                'nome_municipio' => 'Santa Fé do Araguaia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718881,
                'nome_municipio' => 'Santa Maria do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718899,
                'nome_municipio' => 'Santa Rita do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1718907,
                'nome_municipio' => 'Santa Rosa do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1719004,
                'nome_municipio' => 'Santa Tereza do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720002,
                'nome_municipio' => 'Santa Terezinha do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720101,
                'nome_municipio' => 'São Bento do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720150,
                'nome_municipio' => 'São Félix do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720200,
                'nome_municipio' => 'São Miguel do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720259,
                'nome_municipio' => 'São Salvador do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720309,
                'nome_municipio' => 'São Sebastião do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720499,
                'nome_municipio' => 'São Valério',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720655,
                'nome_municipio' => 'Silvanópolis',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720804,
                'nome_municipio' => 'Sítio Novo do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720853,
                'nome_municipio' => 'Sucupira',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720903,
                'nome_municipio' => 'Taguatinga',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720937,
                'nome_municipio' => 'Taipas do Tocantins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1720978,
                'nome_municipio' => 'Talismã',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1721000,
                'nome_municipio' => 'Palmas',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1721109,
                'nome_municipio' => 'Tocantínia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1721208,
                'nome_municipio' => 'Tocantinópolis',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1721257,
                'nome_municipio' => 'Tupirama',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1721307,
                'nome_municipio' => 'Tupiratins',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1722081,
                'nome_municipio' => 'Wanderlândia',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 1722107,
                'nome_municipio' => 'Xambioá',
                'uf' => 'TO',
            ],
            [
                'id_municipio' => 2100055,
                'nome_municipio' => 'Açailândia',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100105,
                'nome_municipio' => 'Afonso Cunha',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100154,
                'nome_municipio' => 'Água Doce do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100204,
                'nome_municipio' => 'Alcântara',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100303,
                'nome_municipio' => 'Aldeias Altas',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100402,
                'nome_municipio' => 'Altamira do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100436,
                'nome_municipio' => 'Alto Alegre do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100477,
                'nome_municipio' => 'Alto Alegre do Pindaré',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100501,
                'nome_municipio' => 'Alto Parnaíba',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100550,
                'nome_municipio' => 'Amapá do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100600,
                'nome_municipio' => 'Amarante do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100709,
                'nome_municipio' => 'Anajatuba',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100808,
                'nome_municipio' => 'Anapurus',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100832,
                'nome_municipio' => 'Apicum-Açu',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100873,
                'nome_municipio' => 'Araguanã',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100907,
                'nome_municipio' => 'Araioses',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2100956,
                'nome_municipio' => 'Arame',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101004,
                'nome_municipio' => 'Arari',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101103,
                'nome_municipio' => 'Axixá',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101202,
                'nome_municipio' => 'Bacabal',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101251,
                'nome_municipio' => 'Bacabeira',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101301,
                'nome_municipio' => 'Bacuri',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101350,
                'nome_municipio' => 'Bacurituba',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101400,
                'nome_municipio' => 'Balsas',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101509,
                'nome_municipio' => 'Barão de Grajaú',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101608,
                'nome_municipio' => 'Barra do Corda',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101707,
                'nome_municipio' => 'Barreirinhas',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101731,
                'nome_municipio' => 'Belágua',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101772,
                'nome_municipio' => 'Bela Vista do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101806,
                'nome_municipio' => 'Benedito Leite',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101905,
                'nome_municipio' => 'Bequimão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101939,
                'nome_municipio' => 'Bernardo do Mearim',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2101970,
                'nome_municipio' => 'Boa Vista do Gurupi',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102002,
                'nome_municipio' => 'Bom Jardim',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102036,
                'nome_municipio' => 'Bom Jesus das Selvas',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102077,
                'nome_municipio' => 'Bom Lugar',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102101,
                'nome_municipio' => 'Brejo',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102150,
                'nome_municipio' => 'Brejo de Areia',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102200,
                'nome_municipio' => 'Buriti',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102309,
                'nome_municipio' => 'Buriti Bravo',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102325,
                'nome_municipio' => 'Buriticupu',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102358,
                'nome_municipio' => 'Buritirana',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102374,
                'nome_municipio' => 'Cachoeira Grande',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102408,
                'nome_municipio' => 'Cajapió',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102507,
                'nome_municipio' => 'Cajari',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102556,
                'nome_municipio' => 'Campestre do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102606,
                'nome_municipio' => 'Cândido Mendes',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102705,
                'nome_municipio' => 'Cantanhede',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102754,
                'nome_municipio' => 'Capinzal do Norte',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102804,
                'nome_municipio' => 'Carolina',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2102903,
                'nome_municipio' => 'Carutapera',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103000,
                'nome_municipio' => 'Caxias',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103109,
                'nome_municipio' => 'Cedral',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103125,
                'nome_municipio' => 'Central do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103158,
                'nome_municipio' => 'Centro do Guilherme',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103174,
                'nome_municipio' => 'Centro Novo do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103208,
                'nome_municipio' => 'Chapadinha',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103257,
                'nome_municipio' => 'Cidelândia',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103307,
                'nome_municipio' => 'Codó',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103406,
                'nome_municipio' => 'Coelho Neto',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103505,
                'nome_municipio' => 'Colinas',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103554,
                'nome_municipio' => 'Conceição do Lago-Açu',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103604,
                'nome_municipio' => 'Coroatá',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103703,
                'nome_municipio' => 'Cururupu',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103752,
                'nome_municipio' => 'Davinópolis',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103802,
                'nome_municipio' => 'Dom Pedro',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2103901,
                'nome_municipio' => 'Duque Bacelar',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104008,
                'nome_municipio' => 'Esperantinópolis',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104057,
                'nome_municipio' => 'Estreito',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104073,
                'nome_municipio' => 'Feira Nova do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104081,
                'nome_municipio' => 'Fernando Falcão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104099,
                'nome_municipio' => 'Formosa da Serra Negra',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104107,
                'nome_municipio' => 'Fortaleza dos Nogueiras',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104206,
                'nome_municipio' => 'Fortuna',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104305,
                'nome_municipio' => 'Godofredo Viana',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104404,
                'nome_municipio' => 'Gonçalves Dias',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104503,
                'nome_municipio' => 'Governador Archer',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104552,
                'nome_municipio' => 'Governador Edison Lobão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104602,
                'nome_municipio' => 'Governador Eugênio Barros',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104628,
                'nome_municipio' => 'Governador Luiz Rocha',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104651,
                'nome_municipio' => 'Governador Newton Bello',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104677,
                'nome_municipio' => 'Governador Nunes Freire',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104701,
                'nome_municipio' => 'Graça Aranha',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104800,
                'nome_municipio' => 'Grajaú',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2104909,
                'nome_municipio' => 'Guimarães',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105005,
                'nome_municipio' => 'Humberto de Campos',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105104,
                'nome_municipio' => 'Icatu',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105153,
                'nome_municipio' => 'Igarapé do Meio',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105203,
                'nome_municipio' => 'Igarapé Grande',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105302,
                'nome_municipio' => 'Imperatriz',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105351,
                'nome_municipio' => 'Itaipava do Grajaú',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105401,
                'nome_municipio' => 'Itapecuru Mirim',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105427,
                'nome_municipio' => 'Itinga do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105450,
                'nome_municipio' => 'Jatobá',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105476,
                'nome_municipio' => 'Jenipapo dos Vieiras',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105500,
                'nome_municipio' => 'João Lisboa',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105609,
                'nome_municipio' => 'Joselândia',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105658,
                'nome_municipio' => 'Junco do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105708,
                'nome_municipio' => 'Lago da Pedra',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105807,
                'nome_municipio' => 'Lago do Junco',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105906,
                'nome_municipio' => 'Lago Verde',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105922,
                'nome_municipio' => 'Lagoa do Mato',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105948,
                'nome_municipio' => 'Lago dos Rodrigues',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105963,
                'nome_municipio' => 'Lagoa Grande do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2105989,
                'nome_municipio' => 'Lajeado Novo',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106003,
                'nome_municipio' => 'Lima Campos',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106102,
                'nome_municipio' => 'Loreto',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106201,
                'nome_municipio' => 'Luís Domingues',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106300,
                'nome_municipio' => 'Magalhães de Almeida',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106326,
                'nome_municipio' => 'Maracaçumé',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106359,
                'nome_municipio' => 'Marajá do Sena',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106375,
                'nome_municipio' => 'Maranhãozinho',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106409,
                'nome_municipio' => 'Mata Roma',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106508,
                'nome_municipio' => 'Matinha',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106607,
                'nome_municipio' => 'Matões',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106631,
                'nome_municipio' => 'Matões do Norte',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106672,
                'nome_municipio' => 'Milagres do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106706,
                'nome_municipio' => 'Mirador',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106755,
                'nome_municipio' => 'Miranda do Norte',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106805,
                'nome_municipio' => 'Mirinzal',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2106904,
                'nome_municipio' => 'Monção',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107001,
                'nome_municipio' => 'Montes Altos',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107100,
                'nome_municipio' => 'Morros',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107209,
                'nome_municipio' => 'Nina Rodrigues',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107258,
                'nome_municipio' => 'Nova Colinas',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107308,
                'nome_municipio' => 'Nova Iorque',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107357,
                'nome_municipio' => 'Nova Olinda do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107407,
                'nome_municipio' => 'Olho d\'Água das Cunhãs',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107456,
                'nome_municipio' => 'Olinda Nova do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107506,
                'nome_municipio' => 'Paço do Lumiar',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107605,
                'nome_municipio' => 'Palmeirândia',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107704,
                'nome_municipio' => 'Paraibano',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107803,
                'nome_municipio' => 'Parnarama',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2107902,
                'nome_municipio' => 'Passagem Franca',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108009,
                'nome_municipio' => 'Pastos Bons',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108058,
                'nome_municipio' => 'Paulino Neves',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108108,
                'nome_municipio' => 'Paulo Ramos',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108207,
                'nome_municipio' => 'Pedreiras',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108256,
                'nome_municipio' => 'Pedro do Rosário',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108306,
                'nome_municipio' => 'Penalva',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108405,
                'nome_municipio' => 'Peri Mirim',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108454,
                'nome_municipio' => 'Peritoró',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108504,
                'nome_municipio' => 'Pindaré-Mirim',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108603,
                'nome_municipio' => 'Pinheiro',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108702,
                'nome_municipio' => 'Pio XII',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108801,
                'nome_municipio' => 'Pirapemas',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2108900,
                'nome_municipio' => 'Poção de Pedras',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109007,
                'nome_municipio' => 'Porto Franco',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109056,
                'nome_municipio' => 'Porto Rico do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109106,
                'nome_municipio' => 'Presidente Dutra',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109205,
                'nome_municipio' => 'Presidente Juscelino',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109239,
                'nome_municipio' => 'Presidente Médici',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109270,
                'nome_municipio' => 'Presidente Sarney',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109304,
                'nome_municipio' => 'Presidente Vargas',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109403,
                'nome_municipio' => 'Primeira Cruz',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109452,
                'nome_municipio' => 'Raposa',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109502,
                'nome_municipio' => 'Riachão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109551,
                'nome_municipio' => 'Ribamar Fiquene',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109601,
                'nome_municipio' => 'Rosário',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109700,
                'nome_municipio' => 'Sambaíba',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109759,
                'nome_municipio' => 'Santa Filomena do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109809,
                'nome_municipio' => 'Santa Helena',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2109908,
                'nome_municipio' => 'Santa Inês',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110005,
                'nome_municipio' => 'Santa Luzia',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110039,
                'nome_municipio' => 'Santa Luzia do Paruá',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110104,
                'nome_municipio' => 'Santa Quitéria do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110203,
                'nome_municipio' => 'Santa Rita',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110237,
                'nome_municipio' => 'Santana do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110278,
                'nome_municipio' => 'Santo Amaro do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110302,
                'nome_municipio' => 'Santo Antônio dos Lopes',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110401,
                'nome_municipio' => 'São Benedito do Rio Preto',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110500,
                'nome_municipio' => 'São Bento',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110609,
                'nome_municipio' => 'São Bernardo',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110658,
                'nome_municipio' => 'São Domingos do Azeitão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110708,
                'nome_municipio' => 'São Domingos do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110807,
                'nome_municipio' => 'São Félix de Balsas',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110856,
                'nome_municipio' => 'São Francisco do Brejão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2110906,
                'nome_municipio' => 'São Francisco do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111003,
                'nome_municipio' => 'São João Batista',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111029,
                'nome_municipio' => 'São João do Carú',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111052,
                'nome_municipio' => 'São João do Paraíso',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111078,
                'nome_municipio' => 'São João do Soter',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111102,
                'nome_municipio' => 'São João dos Patos',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111201,
                'nome_municipio' => 'São José de Ribamar',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111250,
                'nome_municipio' => 'São José dos Basílios',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111300,
                'nome_municipio' => 'São Luís',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111409,
                'nome_municipio' => 'São Luís Gonzaga do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111508,
                'nome_municipio' => 'São Mateus do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111532,
                'nome_municipio' => 'São Pedro da Água Branca',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111573,
                'nome_municipio' => 'São Pedro dos Crentes',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111607,
                'nome_municipio' => 'São Raimundo das Mangabeiras',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111631,
                'nome_municipio' => 'São Raimundo do Doca Bezerra',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111672,
                'nome_municipio' => 'São Roberto',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111706,
                'nome_municipio' => 'São Vicente Ferrer',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111722,
                'nome_municipio' => 'Satubinha',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111748,
                'nome_municipio' => 'Senador Alexandre Costa',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111763,
                'nome_municipio' => 'Senador La Rocque',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111789,
                'nome_municipio' => 'Serrano do Maranhão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111805,
                'nome_municipio' => 'Sítio Novo',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111904,
                'nome_municipio' => 'Sucupira do Norte',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2111953,
                'nome_municipio' => 'Sucupira do Riachão',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112001,
                'nome_municipio' => 'Tasso Fragoso',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112100,
                'nome_municipio' => 'Timbiras',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112209,
                'nome_municipio' => 'Timon',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112233,
                'nome_municipio' => 'Trizidela do Vale',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112274,
                'nome_municipio' => 'Tufilândia',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112308,
                'nome_municipio' => 'Tuntum',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112407,
                'nome_municipio' => 'Turiaçu',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112456,
                'nome_municipio' => 'Turilândia',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112506,
                'nome_municipio' => 'Tutóia',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112605,
                'nome_municipio' => 'Urbano Santos',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112704,
                'nome_municipio' => 'Vargem Grande',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112803,
                'nome_municipio' => 'Viana',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112852,
                'nome_municipio' => 'Vila Nova dos Martírios',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2112902,
                'nome_municipio' => 'Vitória do Mearim',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2113009,
                'nome_municipio' => 'Vitorino Freire',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2114007,
                'nome_municipio' => 'Zé Doca',
                'uf' => 'MA',
            ],
            [
                'id_municipio' => 2200053,
                'nome_municipio' => 'Acauã',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200103,
                'nome_municipio' => 'Agricolândia',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200202,
                'nome_municipio' => 'Água Branca',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200251,
                'nome_municipio' => 'Alagoinha do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200277,
                'nome_municipio' => 'Alegrete do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200301,
                'nome_municipio' => 'Alto Longá',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200400,
                'nome_municipio' => 'Altos',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200459,
                'nome_municipio' => 'Alvorada do Gurguéia',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200509,
                'nome_municipio' => 'Amarante',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200608,
                'nome_municipio' => 'Angical do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200707,
                'nome_municipio' => 'Anísio de Abreu',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200806,
                'nome_municipio' => 'Antônio Almeida',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200905,
                'nome_municipio' => 'Aroazes',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2200954,
                'nome_municipio' => 'Aroeiras do Itaim',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201002,
                'nome_municipio' => 'Arraial',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201051,
                'nome_municipio' => 'Assunção do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201101,
                'nome_municipio' => 'Avelino Lopes',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201150,
                'nome_municipio' => 'Baixa Grande do Ribeiro',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201176,
                'nome_municipio' => 'Barra D\'Alcântara',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201200,
                'nome_municipio' => 'Barras',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201309,
                'nome_municipio' => 'Barreiras do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201408,
                'nome_municipio' => 'Barro Duro',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201507,
                'nome_municipio' => 'Batalha',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201556,
                'nome_municipio' => 'Bela Vista do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201572,
                'nome_municipio' => 'Belém do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201606,
                'nome_municipio' => 'Beneditinos',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201705,
                'nome_municipio' => 'Bertolínia',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201739,
                'nome_municipio' => 'Betânia do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201770,
                'nome_municipio' => 'Boa Hora',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201804,
                'nome_municipio' => 'Bocaina',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201903,
                'nome_municipio' => 'Bom Jesus',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201919,
                'nome_municipio' => 'Bom Princípio do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201929,
                'nome_municipio' => 'Bonfim do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201945,
                'nome_municipio' => 'Boqueirão do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201960,
                'nome_municipio' => 'Brasileira',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2201988,
                'nome_municipio' => 'Brejo do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202000,
                'nome_municipio' => 'Buriti dos Lopes',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202026,
                'nome_municipio' => 'Buriti dos Montes',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202059,
                'nome_municipio' => 'Cabeceiras do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202075,
                'nome_municipio' => 'Cajazeiras do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202083,
                'nome_municipio' => 'Cajueiro da Praia',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202091,
                'nome_municipio' => 'Caldeirão Grande do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202109,
                'nome_municipio' => 'Campinas do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202117,
                'nome_municipio' => 'Campo Alegre do Fidalgo',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202133,
                'nome_municipio' => 'Campo Grande do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202174,
                'nome_municipio' => 'Campo Largo do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202208,
                'nome_municipio' => 'Campo Maior',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202251,
                'nome_municipio' => 'Canavieira',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202307,
                'nome_municipio' => 'Canto do Buriti',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202406,
                'nome_municipio' => 'Capitão de Campos',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202455,
                'nome_municipio' => 'Capitão Gervásio Oliveira',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202505,
                'nome_municipio' => 'Caracol',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202539,
                'nome_municipio' => 'Caraúbas do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202554,
                'nome_municipio' => 'Caridade do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202604,
                'nome_municipio' => 'Castelo do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202653,
                'nome_municipio' => 'Caxingó',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202703,
                'nome_municipio' => 'Cocal',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202711,
                'nome_municipio' => 'Cocal de Telha',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202729,
                'nome_municipio' => 'Cocal dos Alves',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202737,
                'nome_municipio' => 'Coivaras',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202752,
                'nome_municipio' => 'Colônia do Gurguéia',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202778,
                'nome_municipio' => 'Colônia do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202802,
                'nome_municipio' => 'Conceição do Canindé',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202851,
                'nome_municipio' => 'Coronel José Dias',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2202901,
                'nome_municipio' => 'Corrente',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203008,
                'nome_municipio' => 'Cristalândia do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203107,
                'nome_municipio' => 'Cristino Castro',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203206,
                'nome_municipio' => 'Curimatá',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203230,
                'nome_municipio' => 'Currais',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203255,
                'nome_municipio' => 'Curralinhos',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203271,
                'nome_municipio' => 'Curral Novo do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203305,
                'nome_municipio' => 'Demerval Lobão',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203354,
                'nome_municipio' => 'Dirceu Arcoverde',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203404,
                'nome_municipio' => 'Dom Expedito Lopes',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203420,
                'nome_municipio' => 'Domingos Mourão',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203453,
                'nome_municipio' => 'Dom Inocêncio',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203503,
                'nome_municipio' => 'Elesbão Veloso',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203602,
                'nome_municipio' => 'Eliseu Martins',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203701,
                'nome_municipio' => 'Esperantina',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203750,
                'nome_municipio' => 'Fartura do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203800,
                'nome_municipio' => 'Flores do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203859,
                'nome_municipio' => 'Floresta do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2203909,
                'nome_municipio' => 'Floriano',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204006,
                'nome_municipio' => 'Francinópolis',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204105,
                'nome_municipio' => 'Francisco Ayres',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204154,
                'nome_municipio' => 'Francisco Macedo',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204204,
                'nome_municipio' => 'Francisco Santos',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204303,
                'nome_municipio' => 'Fronteiras',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204352,
                'nome_municipio' => 'Geminiano',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204402,
                'nome_municipio' => 'Gilbués',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204501,
                'nome_municipio' => 'Guadalupe',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204550,
                'nome_municipio' => 'Guaribas',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204600,
                'nome_municipio' => 'Hugo Napoleão',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204659,
                'nome_municipio' => 'Ilha Grande',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204709,
                'nome_municipio' => 'Inhuma',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204808,
                'nome_municipio' => 'Ipiranga do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2204907,
                'nome_municipio' => 'Isaías Coelho',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205003,
                'nome_municipio' => 'Itainópolis',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205102,
                'nome_municipio' => 'Itaueira',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205151,
                'nome_municipio' => 'Jacobina do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205201,
                'nome_municipio' => 'Jaicós',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205250,
                'nome_municipio' => 'Jardim do Mulato',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205276,
                'nome_municipio' => 'Jatobá do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205300,
                'nome_municipio' => 'Jerumenha',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205359,
                'nome_municipio' => 'João Costa',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205409,
                'nome_municipio' => 'Joaquim Pires',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205458,
                'nome_municipio' => 'Joca Marques',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205508,
                'nome_municipio' => 'José de Freitas',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205516,
                'nome_municipio' => 'Juazeiro do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205524,
                'nome_municipio' => 'Júlio Borges',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205532,
                'nome_municipio' => 'Jurema',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205540,
                'nome_municipio' => 'Lagoinha do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205557,
                'nome_municipio' => 'Lagoa Alegre',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205565,
                'nome_municipio' => 'Lagoa do Barro do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205573,
                'nome_municipio' => 'Lagoa de São Francisco',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205581,
                'nome_municipio' => 'Lagoa do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205599,
                'nome_municipio' => 'Lagoa do Sítio',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205607,
                'nome_municipio' => 'Landri Sales',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205706,
                'nome_municipio' => 'Luís Correia',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205805,
                'nome_municipio' => 'Luzilândia',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205854,
                'nome_municipio' => 'Madeiro',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205904,
                'nome_municipio' => 'Manoel Emídio',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2205953,
                'nome_municipio' => 'Marcolândia',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206001,
                'nome_municipio' => 'Marcos Parente',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206050,
                'nome_municipio' => 'Massapê do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206100,
                'nome_municipio' => 'Matias Olímpio',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206209,
                'nome_municipio' => 'Miguel Alves',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206308,
                'nome_municipio' => 'Miguel Leão',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206357,
                'nome_municipio' => 'Milton Brandão',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206407,
                'nome_municipio' => 'Monsenhor Gil',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206506,
                'nome_municipio' => 'Monsenhor Hipólito',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206605,
                'nome_municipio' => 'Monte Alegre do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206654,
                'nome_municipio' => 'Morro Cabeça no Tempo',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206670,
                'nome_municipio' => 'Morro do Chapéu do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206696,
                'nome_municipio' => 'Murici dos Portelas',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206704,
                'nome_municipio' => 'Nazaré do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206720,
                'nome_municipio' => 'Nazária',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206753,
                'nome_municipio' => 'Nossa Senhora de Nazaré',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206803,
                'nome_municipio' => 'Nossa Senhora dos Remédios',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206902,
                'nome_municipio' => 'Novo Oriente do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2206951,
                'nome_municipio' => 'Novo Santo Antônio',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207009,
                'nome_municipio' => 'Oeiras',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207108,
                'nome_municipio' => 'Olho D\'Água do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207207,
                'nome_municipio' => 'Padre Marcos',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207306,
                'nome_municipio' => 'Paes Landim',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207355,
                'nome_municipio' => 'Pajeú do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207405,
                'nome_municipio' => 'Palmeira do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207504,
                'nome_municipio' => 'Palmeirais',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207553,
                'nome_municipio' => 'Paquetá',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207603,
                'nome_municipio' => 'Parnaguá',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207702,
                'nome_municipio' => 'Parnaíba',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207751,
                'nome_municipio' => 'Passagem Franca do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207777,
                'nome_municipio' => 'Patos do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207793,
                'nome_municipio' => 'Pau D\'Arco do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207801,
                'nome_municipio' => 'Paulistana',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207850,
                'nome_municipio' => 'Pavussu',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207900,
                'nome_municipio' => 'Pedro II',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207934,
                'nome_municipio' => 'Pedro Laurentino',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2207959,
                'nome_municipio' => 'Nova Santa Rita',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208007,
                'nome_municipio' => 'Picos',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208106,
                'nome_municipio' => 'Pimenteiras',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208205,
                'nome_municipio' => 'Pio IX',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208304,
                'nome_municipio' => 'Piracuruca',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208403,
                'nome_municipio' => 'Piripiri',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208502,
                'nome_municipio' => 'Porto',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208551,
                'nome_municipio' => 'Porto Alegre do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208601,
                'nome_municipio' => 'Prata do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208650,
                'nome_municipio' => 'Queimada Nova',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208700,
                'nome_municipio' => 'Redenção do Gurguéia',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208809,
                'nome_municipio' => 'Regeneração',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208858,
                'nome_municipio' => 'Riacho Frio',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208874,
                'nome_municipio' => 'Ribeira do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2208908,
                'nome_municipio' => 'Ribeiro Gonçalves',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209005,
                'nome_municipio' => 'Rio Grande do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209104,
                'nome_municipio' => 'Santa Cruz do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209153,
                'nome_municipio' => 'Santa Cruz dos Milagres',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209203,
                'nome_municipio' => 'Santa Filomena',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209302,
                'nome_municipio' => 'Santa Luz',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209351,
                'nome_municipio' => 'Santana do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209377,
                'nome_municipio' => 'Santa Rosa do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209401,
                'nome_municipio' => 'Santo Antônio de Lisboa',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209450,
                'nome_municipio' => 'Santo Antônio dos Milagres',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209500,
                'nome_municipio' => 'Santo Inácio do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209559,
                'nome_municipio' => 'São Braz do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209609,
                'nome_municipio' => 'São Félix do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209658,
                'nome_municipio' => 'São Francisco de Assis do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209708,
                'nome_municipio' => 'São Francisco do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209757,
                'nome_municipio' => 'São Gonçalo do Gurguéia',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209807,
                'nome_municipio' => 'São Gonçalo do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209856,
                'nome_municipio' => 'São João da Canabrava',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209872,
                'nome_municipio' => 'São João da Fronteira',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209906,
                'nome_municipio' => 'São João da Serra',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209955,
                'nome_municipio' => 'São João da Varjota',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2209971,
                'nome_municipio' => 'São João do Arraial',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210003,
                'nome_municipio' => 'São João do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210052,
                'nome_municipio' => 'São José do Divino',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210102,
                'nome_municipio' => 'São José do Peixe',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210201,
                'nome_municipio' => 'São José do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210300,
                'nome_municipio' => 'São Julião',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210359,
                'nome_municipio' => 'São Lourenço do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210375,
                'nome_municipio' => 'São Luis do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210383,
                'nome_municipio' => 'São Miguel da Baixa Grande',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210391,
                'nome_municipio' => 'São Miguel do Fidalgo',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210409,
                'nome_municipio' => 'São Miguel do Tapuio',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210508,
                'nome_municipio' => 'São Pedro do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210607,
                'nome_municipio' => 'São Raimundo Nonato',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210623,
                'nome_municipio' => 'Sebastião Barros',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210631,
                'nome_municipio' => 'Sebastião Leal',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210656,
                'nome_municipio' => 'Sigefredo Pacheco',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210706,
                'nome_municipio' => 'Simões',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210805,
                'nome_municipio' => 'Simplício Mendes',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210904,
                'nome_municipio' => 'Socorro do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210938,
                'nome_municipio' => 'Sussuapara',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210953,
                'nome_municipio' => 'Tamboril do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2210979,
                'nome_municipio' => 'Tanque do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2211001,
                'nome_municipio' => 'Teresina',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2211100,
                'nome_municipio' => 'União',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2211209,
                'nome_municipio' => 'Uruçuí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2211308,
                'nome_municipio' => 'Valença do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2211357,
                'nome_municipio' => 'Várzea Branca',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2211407,
                'nome_municipio' => 'Várzea Grande',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2211506,
                'nome_municipio' => 'Vera Mendes',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2211605,
                'nome_municipio' => 'Vila Nova do Piauí',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2211704,
                'nome_municipio' => 'Wall Ferraz',
                'uf' => 'PI',
            ],
            [
                'id_municipio' => 2300101,
                'nome_municipio' => 'Abaiara',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2300150,
                'nome_municipio' => 'Acarape',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2300200,
                'nome_municipio' => 'Acaraú',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2300309,
                'nome_municipio' => 'Acopiara',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2300408,
                'nome_municipio' => 'Aiuaba',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2300507,
                'nome_municipio' => 'Alcântaras',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2300606,
                'nome_municipio' => 'Altaneira',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2300705,
                'nome_municipio' => 'Alto Santo',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2300754,
                'nome_municipio' => 'Amontada',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2300804,
                'nome_municipio' => 'Antonina do Norte',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2300903,
                'nome_municipio' => 'Apuiarés',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301000,
                'nome_municipio' => 'Aquiraz',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301109,
                'nome_municipio' => 'Aracati',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301208,
                'nome_municipio' => 'Aracoiaba',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301257,
                'nome_municipio' => 'Ararendá',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301307,
                'nome_municipio' => 'Araripe',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301406,
                'nome_municipio' => 'Aratuba',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301505,
                'nome_municipio' => 'Arneiroz',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301604,
                'nome_municipio' => 'Assaré',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301703,
                'nome_municipio' => 'Aurora',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301802,
                'nome_municipio' => 'Baixio',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301851,
                'nome_municipio' => 'Banabuiú',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301901,
                'nome_municipio' => 'Barbalha',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2301950,
                'nome_municipio' => 'Barreira',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302008,
                'nome_municipio' => 'Barro',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302057,
                'nome_municipio' => 'Barroquinha',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302107,
                'nome_municipio' => 'Baturité',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302206,
                'nome_municipio' => 'Beberibe',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302305,
                'nome_municipio' => 'Bela Cruz',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302404,
                'nome_municipio' => 'Boa Viagem',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302503,
                'nome_municipio' => 'Brejo Santo',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302602,
                'nome_municipio' => 'Camocim',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302701,
                'nome_municipio' => 'Campos Sales',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302800,
                'nome_municipio' => 'Canindé',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2302909,
                'nome_municipio' => 'Capistrano',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303006,
                'nome_municipio' => 'Caridade',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303105,
                'nome_municipio' => 'Cariré',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303204,
                'nome_municipio' => 'Caririaçu',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303303,
                'nome_municipio' => 'Cariús',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303402,
                'nome_municipio' => 'Carnaubal',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303501,
                'nome_municipio' => 'Cascavel',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303600,
                'nome_municipio' => 'Catarina',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303659,
                'nome_municipio' => 'Catunda',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303709,
                'nome_municipio' => 'Caucaia',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303808,
                'nome_municipio' => 'Cedro',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303907,
                'nome_municipio' => 'Chaval',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303931,
                'nome_municipio' => 'Choró',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2303956,
                'nome_municipio' => 'Chorozinho',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304004,
                'nome_municipio' => 'Coreaú',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304103,
                'nome_municipio' => 'Crateús',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304202,
                'nome_municipio' => 'Crato',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304236,
                'nome_municipio' => 'Croatá',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304251,
                'nome_municipio' => 'Cruz',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304269,
                'nome_municipio' => 'Deputado Irapuan Pinheiro',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304277,
                'nome_municipio' => 'Ereré',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304285,
                'nome_municipio' => 'Eusébio',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304301,
                'nome_municipio' => 'Farias Brito',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304350,
                'nome_municipio' => 'Forquilha',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304400,
                'nome_municipio' => 'Fortaleza',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304459,
                'nome_municipio' => 'Fortim',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304509,
                'nome_municipio' => 'Frecheirinha',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304608,
                'nome_municipio' => 'General Sampaio',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304657,
                'nome_municipio' => 'Graça',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304707,
                'nome_municipio' => 'Granja',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304806,
                'nome_municipio' => 'Granjeiro',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304905,
                'nome_municipio' => 'Groaíras',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2304954,
                'nome_municipio' => 'Guaiúba',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305001,
                'nome_municipio' => 'Guaraciaba do Norte',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305100,
                'nome_municipio' => 'Guaramiranga',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305209,
                'nome_municipio' => 'Hidrolândia',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305233,
                'nome_municipio' => 'Horizonte',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305266,
                'nome_municipio' => 'Ibaretama',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305308,
                'nome_municipio' => 'Ibiapina',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305332,
                'nome_municipio' => 'Ibicuitinga',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305357,
                'nome_municipio' => 'Icapuí',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305407,
                'nome_municipio' => 'Icó',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305506,
                'nome_municipio' => 'Iguatu',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305605,
                'nome_municipio' => 'Independência',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305654,
                'nome_municipio' => 'Ipaporanga',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305704,
                'nome_municipio' => 'Ipaumirim',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305803,
                'nome_municipio' => 'Ipu',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2305902,
                'nome_municipio' => 'Ipueiras',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306009,
                'nome_municipio' => 'Iracema',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306108,
                'nome_municipio' => 'Irauçuba',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306207,
                'nome_municipio' => 'Itaiçaba',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306256,
                'nome_municipio' => 'Itaitinga',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306306,
                'nome_municipio' => 'Itapajé',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306405,
                'nome_municipio' => 'Itapipoca',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306504,
                'nome_municipio' => 'Itapiúna',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306553,
                'nome_municipio' => 'Itarema',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306603,
                'nome_municipio' => 'Itatira',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306702,
                'nome_municipio' => 'Jaguaretama',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306801,
                'nome_municipio' => 'Jaguaribara',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2306900,
                'nome_municipio' => 'Jaguaribe',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307007,
                'nome_municipio' => 'Jaguaruana',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307106,
                'nome_municipio' => 'Jardim',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307205,
                'nome_municipio' => 'Jati',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307254,
                'nome_municipio' => 'Jijoca de Jericoacoara',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307304,
                'nome_municipio' => 'Juazeiro do Norte',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307403,
                'nome_municipio' => 'Jucás',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307502,
                'nome_municipio' => 'Lavras da Mangabeira',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307601,
                'nome_municipio' => 'Limoeiro do Norte',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307635,
                'nome_municipio' => 'Madalena',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307650,
                'nome_municipio' => 'Maracanaú',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307700,
                'nome_municipio' => 'Maranguape',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307809,
                'nome_municipio' => 'Marco',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2307908,
                'nome_municipio' => 'Martinópole',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308005,
                'nome_municipio' => 'Massapê',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308104,
                'nome_municipio' => 'Mauriti',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308203,
                'nome_municipio' => 'Meruoca',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308302,
                'nome_municipio' => 'Milagres',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308351,
                'nome_municipio' => 'Milhã',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308377,
                'nome_municipio' => 'Miraíma',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308401,
                'nome_municipio' => 'Missão Velha',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308500,
                'nome_municipio' => 'Mombaça',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308609,
                'nome_municipio' => 'Monsenhor Tabosa',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308708,
                'nome_municipio' => 'Morada Nova',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308807,
                'nome_municipio' => 'Moraújo',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2308906,
                'nome_municipio' => 'Morrinhos',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309003,
                'nome_municipio' => 'Mucambo',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309102,
                'nome_municipio' => 'Mulungu',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309201,
                'nome_municipio' => 'Nova Olinda',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309300,
                'nome_municipio' => 'Nova Russas',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309409,
                'nome_municipio' => 'Novo Oriente',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309458,
                'nome_municipio' => 'Ocara',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309508,
                'nome_municipio' => 'Orós',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309607,
                'nome_municipio' => 'Pacajus',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309706,
                'nome_municipio' => 'Pacatuba',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309805,
                'nome_municipio' => 'Pacoti',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2309904,
                'nome_municipio' => 'Pacujá',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310001,
                'nome_municipio' => 'Palhano',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310100,
                'nome_municipio' => 'Palmácia',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310209,
                'nome_municipio' => 'Paracuru',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310258,
                'nome_municipio' => 'Paraipaba',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310308,
                'nome_municipio' => 'Parambu',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310407,
                'nome_municipio' => 'Paramoti',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310506,
                'nome_municipio' => 'Pedra Branca',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310605,
                'nome_municipio' => 'Penaforte',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310704,
                'nome_municipio' => 'Pentecoste',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310803,
                'nome_municipio' => 'Pereiro',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310852,
                'nome_municipio' => 'Pindoretama',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310902,
                'nome_municipio' => 'Piquet Carneiro',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2310951,
                'nome_municipio' => 'Pires Ferreira',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311009,
                'nome_municipio' => 'Poranga',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311108,
                'nome_municipio' => 'Porteiras',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311207,
                'nome_municipio' => 'Potengi',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311231,
                'nome_municipio' => 'Potiretama',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311264,
                'nome_municipio' => 'Quiterianópolis',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311306,
                'nome_municipio' => 'Quixadá',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311355,
                'nome_municipio' => 'Quixelô',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311405,
                'nome_municipio' => 'Quixeramobim',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311504,
                'nome_municipio' => 'Quixeré',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311603,
                'nome_municipio' => 'Redenção',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311702,
                'nome_municipio' => 'Reriutaba',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311801,
                'nome_municipio' => 'Russas',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311900,
                'nome_municipio' => 'Saboeiro',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2311959,
                'nome_municipio' => 'Salitre',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2312007,
                'nome_municipio' => 'Santana do Acaraú',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2312106,
                'nome_municipio' => 'Santana do Cariri',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2312205,
                'nome_municipio' => 'Santa Quitéria',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2312304,
                'nome_municipio' => 'São Benedito',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2312403,
                'nome_municipio' => 'São Gonçalo do Amarante',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2312502,
                'nome_municipio' => 'São João do Jaguaribe',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2312601,
                'nome_municipio' => 'São Luís do Curu',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2312700,
                'nome_municipio' => 'Senador Pompeu',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2312809,
                'nome_municipio' => 'Senador Sá',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2312908,
                'nome_municipio' => 'Sobral',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313005,
                'nome_municipio' => 'Solonópole',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313104,
                'nome_municipio' => 'Tabuleiro do Norte',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313203,
                'nome_municipio' => 'Tamboril',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313252,
                'nome_municipio' => 'Tarrafas',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313302,
                'nome_municipio' => 'Tauá',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313351,
                'nome_municipio' => 'Tejuçuoca',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313401,
                'nome_municipio' => 'Tianguá',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313500,
                'nome_municipio' => 'Trairi',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313559,
                'nome_municipio' => 'Tururu',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313609,
                'nome_municipio' => 'Ubajara',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313708,
                'nome_municipio' => 'Umari',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313757,
                'nome_municipio' => 'Umirim',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313807,
                'nome_municipio' => 'Uruburetama',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313906,
                'nome_municipio' => 'Uruoca',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2313955,
                'nome_municipio' => 'Varjota',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2314003,
                'nome_municipio' => 'Várzea Alegre',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2314102,
                'nome_municipio' => 'Viçosa do Ceará',
                'uf' => 'CE',
            ],
            [
                'id_municipio' => 2400109,
                'nome_municipio' => 'Acari',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2400208,
                'nome_municipio' => 'Açu',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2400307,
                'nome_municipio' => 'Afonso Bezerra',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2400406,
                'nome_municipio' => 'Água Nova',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2400505,
                'nome_municipio' => 'Alexandria',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2400604,
                'nome_municipio' => 'Almino Afonso',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2400703,
                'nome_municipio' => 'Alto do Rodrigues',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2400802,
                'nome_municipio' => 'Angicos',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2400901,
                'nome_municipio' => 'Antônio Martins',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401008,
                'nome_municipio' => 'Apodi',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401107,
                'nome_municipio' => 'Areia Branca',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401206,
                'nome_municipio' => 'Arês',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401305,
                'nome_municipio' => 'Campo Grande',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401404,
                'nome_municipio' => 'Baía Formosa',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401453,
                'nome_municipio' => 'Baraúna',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401503,
                'nome_municipio' => 'Barcelona',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401602,
                'nome_municipio' => 'Bento Fernandes',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401651,
                'nome_municipio' => 'Bodó',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401701,
                'nome_municipio' => 'Bom Jesus',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401800,
                'nome_municipio' => 'Brejinho',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401859,
                'nome_municipio' => 'Caiçara do Norte',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2401909,
                'nome_municipio' => 'Caiçara do Rio do Vento',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2402006,
                'nome_municipio' => 'Caicó',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2402105,
                'nome_municipio' => 'Campo Redondo',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2402204,
                'nome_municipio' => 'Canguaretama',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2402303,
                'nome_municipio' => 'Caraúbas',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2402402,
                'nome_municipio' => 'Carnaúba dos Dantas',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2402501,
                'nome_municipio' => 'Carnaubais',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2402600,
                'nome_municipio' => 'Ceará-Mirim',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2402709,
                'nome_municipio' => 'Cerro Corá',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2402808,
                'nome_municipio' => 'Coronel Ezequiel',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2402907,
                'nome_municipio' => 'Coronel João Pessoa',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403004,
                'nome_municipio' => 'Cruzeta',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403103,
                'nome_municipio' => 'Currais Novos',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403202,
                'nome_municipio' => 'Doutor Severiano',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403251,
                'nome_municipio' => 'Parnamirim',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403301,
                'nome_municipio' => 'Encanto',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403400,
                'nome_municipio' => 'Equador',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403509,
                'nome_municipio' => 'Espírito Santo',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403608,
                'nome_municipio' => 'Extremoz',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403707,
                'nome_municipio' => 'Felipe Guerra',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403756,
                'nome_municipio' => 'Fernando Pedroza',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403806,
                'nome_municipio' => 'Florânia',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2403905,
                'nome_municipio' => 'Francisco Dantas',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404002,
                'nome_municipio' => 'Frutuoso Gomes',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404101,
                'nome_municipio' => 'Galinhos',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404200,
                'nome_municipio' => 'Goianinha',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404309,
                'nome_municipio' => 'Governador Dix-Sept Rosado',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404408,
                'nome_municipio' => 'Grossos',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404507,
                'nome_municipio' => 'Guamaré',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404606,
                'nome_municipio' => 'Ielmo Marinho',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404705,
                'nome_municipio' => 'Ipanguaçu',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404804,
                'nome_municipio' => 'Ipueira',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404853,
                'nome_municipio' => 'Itajá',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2404903,
                'nome_municipio' => 'Itaú',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2405009,
                'nome_municipio' => 'Jaçanã',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2405108,
                'nome_municipio' => 'Jandaíra',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2405207,
                'nome_municipio' => 'Janduís',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2405306,
                'nome_municipio' => 'Januário Cicco',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2405405,
                'nome_municipio' => 'Japi',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2405504,
                'nome_municipio' => 'Jardim de Angicos',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2405603,
                'nome_municipio' => 'Jardim de Piranhas',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2405702,
                'nome_municipio' => 'Jardim do Seridó',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2405801,
                'nome_municipio' => 'João Câmara',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2405900,
                'nome_municipio' => 'João Dias',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406007,
                'nome_municipio' => 'José da Penha',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406106,
                'nome_municipio' => 'Jucurutu',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406155,
                'nome_municipio' => 'Jundiá',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406205,
                'nome_municipio' => 'Lagoa d\'Anta',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406304,
                'nome_municipio' => 'Lagoa de Pedras',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406403,
                'nome_municipio' => 'Lagoa de Velhos',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406502,
                'nome_municipio' => 'Lagoa Nova',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406601,
                'nome_municipio' => 'Lagoa Salgada',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406700,
                'nome_municipio' => 'Lajes',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406809,
                'nome_municipio' => 'Lajes Pintadas',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2406908,
                'nome_municipio' => 'Lucrécia',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407005,
                'nome_municipio' => 'Luís Gomes',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407104,
                'nome_municipio' => 'Macaíba',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407203,
                'nome_municipio' => 'Macau',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407252,
                'nome_municipio' => 'Major Sales',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407302,
                'nome_municipio' => 'Marcelino Vieira',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407401,
                'nome_municipio' => 'Martins',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407500,
                'nome_municipio' => 'Maxaranguape',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407609,
                'nome_municipio' => 'Messias Targino',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407708,
                'nome_municipio' => 'Montanhas',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407807,
                'nome_municipio' => 'Monte Alegre',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2407906,
                'nome_municipio' => 'Monte das Gameleiras',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408003,
                'nome_municipio' => 'Mossoró',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408102,
                'nome_municipio' => 'Natal',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408201,
                'nome_municipio' => 'Nísia Floresta',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408300,
                'nome_municipio' => 'Nova Cruz',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408409,
                'nome_municipio' => 'Olho d\'Água do Borges',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408508,
                'nome_municipio' => 'Ouro Branco',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408607,
                'nome_municipio' => 'Paraná',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408706,
                'nome_municipio' => 'Paraú',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408805,
                'nome_municipio' => 'Parazinho',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408904,
                'nome_municipio' => 'Parelhas',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2408953,
                'nome_municipio' => 'Rio do Fogo',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2409100,
                'nome_municipio' => 'Passa e Fica',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2409209,
                'nome_municipio' => 'Passagem',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2409308,
                'nome_municipio' => 'Patu',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2409332,
                'nome_municipio' => 'Santa Maria',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2409407,
                'nome_municipio' => 'Pau dos Ferros',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2409506,
                'nome_municipio' => 'Pedra Grande',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2409605,
                'nome_municipio' => 'Pedra Preta',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2409704,
                'nome_municipio' => 'Pedro Avelino',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2409803,
                'nome_municipio' => 'Pedro Velho',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2409902,
                'nome_municipio' => 'Pendências',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410009,
                'nome_municipio' => 'Pilões',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410108,
                'nome_municipio' => 'Poço Branco',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410207,
                'nome_municipio' => 'Portalegre',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410256,
                'nome_municipio' => 'Porto do Mangue',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410306,
                'nome_municipio' => 'Serra Caiada',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410405,
                'nome_municipio' => 'Pureza',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410504,
                'nome_municipio' => 'Rafael Fernandes',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410603,
                'nome_municipio' => 'Rafael Godeiro',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410702,
                'nome_municipio' => 'Riacho da Cruz',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410801,
                'nome_municipio' => 'Riacho de Santana',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2410900,
                'nome_municipio' => 'Riachuelo',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411007,
                'nome_municipio' => 'Rodolfo Fernandes',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411056,
                'nome_municipio' => 'Tibau',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411106,
                'nome_municipio' => 'Ruy Barbosa',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411205,
                'nome_municipio' => 'Santa Cruz',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411403,
                'nome_municipio' => 'Santana do Matos',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411429,
                'nome_municipio' => 'Santana do Seridó',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411502,
                'nome_municipio' => 'Santo Antônio',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411601,
                'nome_municipio' => 'São Bento do Norte',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411700,
                'nome_municipio' => 'São Bento do Trairí',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411809,
                'nome_municipio' => 'São Fernando',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2411908,
                'nome_municipio' => 'São Francisco do Oeste',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412005,
                'nome_municipio' => 'São Gonçalo do Amarante',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412104,
                'nome_municipio' => 'São João do Sabugi',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412203,
                'nome_municipio' => 'São José de Mipibu',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412302,
                'nome_municipio' => 'São José do Campestre',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412401,
                'nome_municipio' => 'São José do Seridó',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412500,
                'nome_municipio' => 'São Miguel',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412559,
                'nome_municipio' => 'São Miguel do Gostoso',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412609,
                'nome_municipio' => 'São Paulo do Potengi',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412708,
                'nome_municipio' => 'São Pedro',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412807,
                'nome_municipio' => 'São Rafael',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2412906,
                'nome_municipio' => 'São Tomé',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413003,
                'nome_municipio' => 'São Vicente',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413102,
                'nome_municipio' => 'Senador Elói de Souza',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413201,
                'nome_municipio' => 'Senador Georgino Avelino',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413300,
                'nome_municipio' => 'Serra de São Bento',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413359,
                'nome_municipio' => 'Serra do Mel',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413409,
                'nome_municipio' => 'Serra Negra do Norte',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413508,
                'nome_municipio' => 'Serrinha',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413557,
                'nome_municipio' => 'Serrinha dos Pintos',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413607,
                'nome_municipio' => 'Severiano Melo',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413706,
                'nome_municipio' => 'Sítio Novo',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413805,
                'nome_municipio' => 'Taboleiro Grande',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2413904,
                'nome_municipio' => 'Taipu',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414001,
                'nome_municipio' => 'Tangará',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414100,
                'nome_municipio' => 'Tenente Ananias',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414159,
                'nome_municipio' => 'Tenente Laurentino Cruz',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414209,
                'nome_municipio' => 'Tibau do Sul',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414308,
                'nome_municipio' => 'Timbaúba dos Batistas',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414407,
                'nome_municipio' => 'Touros',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414456,
                'nome_municipio' => 'Triunfo Potiguar',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414506,
                'nome_municipio' => 'Umarizal',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414605,
                'nome_municipio' => 'Upanema',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414704,
                'nome_municipio' => 'Várzea',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414753,
                'nome_municipio' => 'Venha-Ver',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414803,
                'nome_municipio' => 'Vera Cruz',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2414902,
                'nome_municipio' => 'Viçosa',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2415008,
                'nome_municipio' => 'Vila Flor',
                'uf' => 'RN',
            ],
            [
                'id_municipio' => 2500106,
                'nome_municipio' => 'Água Branca',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500205,
                'nome_municipio' => 'Aguiar',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500304,
                'nome_municipio' => 'Alagoa Grande',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500403,
                'nome_municipio' => 'Alagoa Nova',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500502,
                'nome_municipio' => 'Alagoinha',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500536,
                'nome_municipio' => 'Alcantil',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500577,
                'nome_municipio' => 'Algodão de Jandaíra',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500601,
                'nome_municipio' => 'Alhandra',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500700,
                'nome_municipio' => 'São João do Rio do Peixe',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500734,
                'nome_municipio' => 'Amparo',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500775,
                'nome_municipio' => 'Aparecida',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500809,
                'nome_municipio' => 'Araçagi',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2500908,
                'nome_municipio' => 'Arara',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501005,
                'nome_municipio' => 'Araruna',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501104,
                'nome_municipio' => 'Areia',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501153,
                'nome_municipio' => 'Areia de Baraúnas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501203,
                'nome_municipio' => 'Areial',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501302,
                'nome_municipio' => 'Aroeiras',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501351,
                'nome_municipio' => 'Assunção',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501401,
                'nome_municipio' => 'Baía da Traição',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501500,
                'nome_municipio' => 'Bananeiras',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501534,
                'nome_municipio' => 'Baraúna',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501575,
                'nome_municipio' => 'Barra de Santana',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501609,
                'nome_municipio' => 'Barra de Santa Rosa',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501708,
                'nome_municipio' => 'Barra de São Miguel',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501807,
                'nome_municipio' => 'Bayeux',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2501906,
                'nome_municipio' => 'Belém',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502003,
                'nome_municipio' => 'Belém do Brejo do Cruz',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502052,
                'nome_municipio' => 'Bernardino Batista',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502102,
                'nome_municipio' => 'Boa Ventura',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502151,
                'nome_municipio' => 'Boa Vista',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502201,
                'nome_municipio' => 'Bom Jesus',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502300,
                'nome_municipio' => 'Bom Sucesso',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502409,
                'nome_municipio' => 'Bonito de Santa Fé',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502508,
                'nome_municipio' => 'Boqueirão',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502607,
                'nome_municipio' => 'Igaracy',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502706,
                'nome_municipio' => 'Borborema',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502805,
                'nome_municipio' => 'Brejo do Cruz',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2502904,
                'nome_municipio' => 'Brejo dos Santos',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503001,
                'nome_municipio' => 'Caaporã',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503100,
                'nome_municipio' => 'Cabaceiras',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503209,
                'nome_municipio' => 'Cabedelo',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503308,
                'nome_municipio' => 'Cachoeira dos Índios',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503407,
                'nome_municipio' => 'Cacimba de Areia',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503506,
                'nome_municipio' => 'Cacimba de Dentro',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503555,
                'nome_municipio' => 'Cacimbas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503605,
                'nome_municipio' => 'Caiçara',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503704,
                'nome_municipio' => 'Cajazeiras',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503753,
                'nome_municipio' => 'Cajazeirinhas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503803,
                'nome_municipio' => 'Caldas Brandão',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2503902,
                'nome_municipio' => 'Camalaú',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504009,
                'nome_municipio' => 'Campina Grande',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504033,
                'nome_municipio' => 'Capim',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504074,
                'nome_municipio' => 'Caraúbas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504108,
                'nome_municipio' => 'Carrapateira',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504157,
                'nome_municipio' => 'Casserengue',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504207,
                'nome_municipio' => 'Catingueira',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504306,
                'nome_municipio' => 'Catolé do Rocha',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504355,
                'nome_municipio' => 'Caturité',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504405,
                'nome_municipio' => 'Conceição',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504504,
                'nome_municipio' => 'Condado',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504603,
                'nome_municipio' => 'Conde',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504702,
                'nome_municipio' => 'Congo',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504801,
                'nome_municipio' => 'Coremas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504850,
                'nome_municipio' => 'Coxixola',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2504900,
                'nome_municipio' => 'Cruz do Espírito Santo',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505006,
                'nome_municipio' => 'Cubati',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505105,
                'nome_municipio' => 'Cuité',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505204,
                'nome_municipio' => 'Cuitegi',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505238,
                'nome_municipio' => 'Cuité de Mamanguape',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505279,
                'nome_municipio' => 'Curral de Cima',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505303,
                'nome_municipio' => 'Curral Velho',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505352,
                'nome_municipio' => 'Damião',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505402,
                'nome_municipio' => 'Desterro',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505501,
                'nome_municipio' => 'Vista Serrana',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505600,
                'nome_municipio' => 'Diamante',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505709,
                'nome_municipio' => 'Dona Inês',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505808,
                'nome_municipio' => 'Duas Estradas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2505907,
                'nome_municipio' => 'Emas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506004,
                'nome_municipio' => 'Esperança',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506103,
                'nome_municipio' => 'Fagundes',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506202,
                'nome_municipio' => 'Frei Martinho',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506251,
                'nome_municipio' => 'Gado Bravo',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506301,
                'nome_municipio' => 'Guarabira',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506400,
                'nome_municipio' => 'Gurinhém',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506509,
                'nome_municipio' => 'Gurjão',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506608,
                'nome_municipio' => 'Ibiara',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506707,
                'nome_municipio' => 'Imaculada',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506806,
                'nome_municipio' => 'Ingá',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2506905,
                'nome_municipio' => 'Itabaiana',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2507002,
                'nome_municipio' => 'Itaporanga',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2507101,
                'nome_municipio' => 'Itapororoca',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2507200,
                'nome_municipio' => 'Itatuba',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2507309,
                'nome_municipio' => 'Jacaraú',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2507408,
                'nome_municipio' => 'Jericó',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2507507,
                'nome_municipio' => 'João Pessoa',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2507606,
                'nome_municipio' => 'Juarez Távora',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2507705,
                'nome_municipio' => 'Juazeirinho',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2507804,
                'nome_municipio' => 'Junco do Seridó',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2507903,
                'nome_municipio' => 'Juripiranga',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508000,
                'nome_municipio' => 'Juru',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508109,
                'nome_municipio' => 'Lagoa',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508208,
                'nome_municipio' => 'Lagoa de Dentro',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508307,
                'nome_municipio' => 'Lagoa Seca',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508406,
                'nome_municipio' => 'Lastro',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508505,
                'nome_municipio' => 'Livramento',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508554,
                'nome_municipio' => 'Logradouro',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508604,
                'nome_municipio' => 'Lucena',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508703,
                'nome_municipio' => 'Mãe d\'Água',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508802,
                'nome_municipio' => 'Malta',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2508901,
                'nome_municipio' => 'Mamanguape',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509008,
                'nome_municipio' => 'Manaíra',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509057,
                'nome_municipio' => 'Marcação',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509107,
                'nome_municipio' => 'Mari',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509156,
                'nome_municipio' => 'Marizópolis',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509206,
                'nome_municipio' => 'Massaranduba',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509305,
                'nome_municipio' => 'Mataraca',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509339,
                'nome_municipio' => 'Matinhas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509370,
                'nome_municipio' => 'Mato Grosso',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509396,
                'nome_municipio' => 'Maturéia',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509404,
                'nome_municipio' => 'Mogeiro',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509503,
                'nome_municipio' => 'Montadas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509602,
                'nome_municipio' => 'Monte Horebe',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509701,
                'nome_municipio' => 'Monteiro',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509800,
                'nome_municipio' => 'Mulungu',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2509909,
                'nome_municipio' => 'Natuba',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510006,
                'nome_municipio' => 'Nazarezinho',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510105,
                'nome_municipio' => 'Nova Floresta',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510204,
                'nome_municipio' => 'Nova Olinda',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510303,
                'nome_municipio' => 'Nova Palmeira',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510402,
                'nome_municipio' => 'Olho d\'Água',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510501,
                'nome_municipio' => 'Olivedos',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510600,
                'nome_municipio' => 'Ouro Velho',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510659,
                'nome_municipio' => 'Parari',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510709,
                'nome_municipio' => 'Passagem',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510808,
                'nome_municipio' => 'Patos',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2510907,
                'nome_municipio' => 'Paulista',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2511004,
                'nome_municipio' => 'Pedra Branca',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2511103,
                'nome_municipio' => 'Pedra Lavrada',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2511202,
                'nome_municipio' => 'Pedras de Fogo',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2511301,
                'nome_municipio' => 'Piancó',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2511400,
                'nome_municipio' => 'Picuí',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2511509,
                'nome_municipio' => 'Pilar',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2511608,
                'nome_municipio' => 'Pilões',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2511707,
                'nome_municipio' => 'Pilõezinhos',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2511806,
                'nome_municipio' => 'Pirpirituba',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2511905,
                'nome_municipio' => 'Pitimbu',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512002,
                'nome_municipio' => 'Pocinhos',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512036,
                'nome_municipio' => 'Poço Dantas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512077,
                'nome_municipio' => 'Poço de José de Moura',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512101,
                'nome_municipio' => 'Pombal',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512200,
                'nome_municipio' => 'Prata',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512309,
                'nome_municipio' => 'Princesa Isabel',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512408,
                'nome_municipio' => 'Puxinanã',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512507,
                'nome_municipio' => 'Queimadas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512606,
                'nome_municipio' => 'Quixaba',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512705,
                'nome_municipio' => 'Remígio',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512721,
                'nome_municipio' => 'Pedro Régis',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512747,
                'nome_municipio' => 'Riachão',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512754,
                'nome_municipio' => 'Riachão do Bacamarte',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512762,
                'nome_municipio' => 'Riachão do Poço',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512788,
                'nome_municipio' => 'Riacho de Santo Antônio',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512804,
                'nome_municipio' => 'Riacho dos Cavalos',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2512903,
                'nome_municipio' => 'Rio Tinto',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513000,
                'nome_municipio' => 'Salgadinho',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513109,
                'nome_municipio' => 'Salgado de São Félix',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513158,
                'nome_municipio' => 'Santa Cecília',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513208,
                'nome_municipio' => 'Santa Cruz',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513307,
                'nome_municipio' => 'Santa Helena',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513356,
                'nome_municipio' => 'Santa Inês',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513406,
                'nome_municipio' => 'Santa Luzia',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513505,
                'nome_municipio' => 'Santana de Mangueira',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513604,
                'nome_municipio' => 'Santana dos Garrotes',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513653,
                'nome_municipio' => 'Joca Claudino',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513703,
                'nome_municipio' => 'Santa Rita',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513802,
                'nome_municipio' => 'Santa Teresinha',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513851,
                'nome_municipio' => 'Santo André',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513901,
                'nome_municipio' => 'São Bento',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513927,
                'nome_municipio' => 'São Bentinho',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513943,
                'nome_municipio' => 'São Domingos do Cariri',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513968,
                'nome_municipio' => 'São Domingos',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2513984,
                'nome_municipio' => 'São Francisco',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514008,
                'nome_municipio' => 'São João do Cariri',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514107,
                'nome_municipio' => 'São João do Tigre',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514206,
                'nome_municipio' => 'São José da Lagoa Tapada',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514305,
                'nome_municipio' => 'São José de Caiana',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514404,
                'nome_municipio' => 'São José de Espinharas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514453,
                'nome_municipio' => 'São José dos Ramos',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514503,
                'nome_municipio' => 'São José de Piranhas',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514552,
                'nome_municipio' => 'São José de Princesa',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514602,
                'nome_municipio' => 'São José do Bonfim',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514651,
                'nome_municipio' => 'São José do Brejo do Cruz',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514701,
                'nome_municipio' => 'São José do Sabugi',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514800,
                'nome_municipio' => 'São José dos Cordeiros',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2514909,
                'nome_municipio' => 'São Mamede',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515005,
                'nome_municipio' => 'São Miguel de Taipu',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515104,
                'nome_municipio' => 'São Sebastião de Lagoa de Roça',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515203,
                'nome_municipio' => 'São Sebastião do Umbuzeiro',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515302,
                'nome_municipio' => 'Sapé',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515401,
                'nome_municipio' => 'São Vicente do Seridó',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515500,
                'nome_municipio' => 'Serra Branca',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515609,
                'nome_municipio' => 'Serra da Raiz',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515708,
                'nome_municipio' => 'Serra Grande',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515807,
                'nome_municipio' => 'Serra Redonda',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515906,
                'nome_municipio' => 'Serraria',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515930,
                'nome_municipio' => 'Sertãozinho',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2515971,
                'nome_municipio' => 'Sobrado',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516003,
                'nome_municipio' => 'Solânea',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516102,
                'nome_municipio' => 'Soledade',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516151,
                'nome_municipio' => 'Sossêgo',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516201,
                'nome_municipio' => 'Sousa',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516300,
                'nome_municipio' => 'Sumé',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516409,
                'nome_municipio' => 'Tacima',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516508,
                'nome_municipio' => 'Taperoá',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516607,
                'nome_municipio' => 'Tavares',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516706,
                'nome_municipio' => 'Teixeira',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516755,
                'nome_municipio' => 'Tenório',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516805,
                'nome_municipio' => 'Triunfo',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2516904,
                'nome_municipio' => 'Uiraúna',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2517001,
                'nome_municipio' => 'Umbuzeiro',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2517100,
                'nome_municipio' => 'Várzea',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2517209,
                'nome_municipio' => 'Vieirópolis',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2517407,
                'nome_municipio' => 'Zabelê',
                'uf' => 'PB',
            ],
            [
                'id_municipio' => 2600054,
                'nome_municipio' => 'Abreu e Lima',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2600104,
                'nome_municipio' => 'Afogados da Ingazeira',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2600203,
                'nome_municipio' => 'Afrânio',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2600302,
                'nome_municipio' => 'Agrestina',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2600401,
                'nome_municipio' => 'Água Preta',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2600500,
                'nome_municipio' => 'Águas Belas',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2600609,
                'nome_municipio' => 'Alagoinha',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2600708,
                'nome_municipio' => 'Aliança',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2600807,
                'nome_municipio' => 'Altinho',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2600906,
                'nome_municipio' => 'Amaraji',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601003,
                'nome_municipio' => 'Angelim',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601052,
                'nome_municipio' => 'Araçoiaba',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601102,
                'nome_municipio' => 'Araripina',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601201,
                'nome_municipio' => 'Arcoverde',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601300,
                'nome_municipio' => 'Barra de Guabiraba',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601409,
                'nome_municipio' => 'Barreiros',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601508,
                'nome_municipio' => 'Belém de Maria',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601607,
                'nome_municipio' => 'Belém do São Francisco',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601706,
                'nome_municipio' => 'Belo Jardim',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601805,
                'nome_municipio' => 'Betânia',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2601904,
                'nome_municipio' => 'Bezerros',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2602001,
                'nome_municipio' => 'Bodocó',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2602100,
                'nome_municipio' => 'Bom Conselho',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2602209,
                'nome_municipio' => 'Bom Jardim',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2602308,
                'nome_municipio' => 'Bonito',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2602407,
                'nome_municipio' => 'Brejão',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2602506,
                'nome_municipio' => 'Brejinho',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2602605,
                'nome_municipio' => 'Brejo da Madre de Deus',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2602704,
                'nome_municipio' => 'Buenos Aires',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2602803,
                'nome_municipio' => 'Buíque',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2602902,
                'nome_municipio' => 'Cabo de Santo Agostinho',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603009,
                'nome_municipio' => 'Cabrobó',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603108,
                'nome_municipio' => 'Cachoeirinha',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603207,
                'nome_municipio' => 'Caetés',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603306,
                'nome_municipio' => 'Calçado',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603405,
                'nome_municipio' => 'Calumbi',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603454,
                'nome_municipio' => 'Camaragibe',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603504,
                'nome_municipio' => 'Camocim de São Félix',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603603,
                'nome_municipio' => 'Camutanga',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603702,
                'nome_municipio' => 'Canhotinho',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603801,
                'nome_municipio' => 'Capoeiras',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603900,
                'nome_municipio' => 'Carnaíba',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2603926,
                'nome_municipio' => 'Carnaubeira da Penha',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604007,
                'nome_municipio' => 'Carpina',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604106,
                'nome_municipio' => 'Caruaru',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604155,
                'nome_municipio' => 'Casinhas',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604205,
                'nome_municipio' => 'Catende',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604304,
                'nome_municipio' => 'Cedro',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604403,
                'nome_municipio' => 'Chã de Alegria',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604502,
                'nome_municipio' => 'Chã Grande',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604601,
                'nome_municipio' => 'Condado',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604700,
                'nome_municipio' => 'Correntes',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604809,
                'nome_municipio' => 'Cortês',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2604908,
                'nome_municipio' => 'Cumaru',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605004,
                'nome_municipio' => 'Cupira',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605103,
                'nome_municipio' => 'Custódia',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605152,
                'nome_municipio' => 'Dormentes',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605202,
                'nome_municipio' => 'Escada',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605301,
                'nome_municipio' => 'Exu',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605400,
                'nome_municipio' => 'Feira Nova',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605459,
                'nome_municipio' => 'Fernando de Noronha',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605509,
                'nome_municipio' => 'Ferreiros',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605608,
                'nome_municipio' => 'Flores',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605707,
                'nome_municipio' => 'Floresta',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605806,
                'nome_municipio' => 'Frei Miguelinho',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2605905,
                'nome_municipio' => 'Gameleira',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2606002,
                'nome_municipio' => 'Garanhuns',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2606101,
                'nome_municipio' => 'Glória do Goitá',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2606200,
                'nome_municipio' => 'Goiana',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2606309,
                'nome_municipio' => 'Granito',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2606408,
                'nome_municipio' => 'Gravatá',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2606507,
                'nome_municipio' => 'Iati',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2606606,
                'nome_municipio' => 'Ibimirim',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2606705,
                'nome_municipio' => 'Ibirajuba',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2606804,
                'nome_municipio' => 'Igarassu',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2606903,
                'nome_municipio' => 'Iguaracy',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607000,
                'nome_municipio' => 'Inajá',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607109,
                'nome_municipio' => 'Ingazeira',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607208,
                'nome_municipio' => 'Ipojuca',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607307,
                'nome_municipio' => 'Ipubi',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607406,
                'nome_municipio' => 'Itacuruba',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607505,
                'nome_municipio' => 'Itaíba',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607604,
                'nome_municipio' => 'Ilha de Itamaracá',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607653,
                'nome_municipio' => 'Itambé',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607703,
                'nome_municipio' => 'Itapetim',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607752,
                'nome_municipio' => 'Itapissuma',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607802,
                'nome_municipio' => 'Itaquitinga',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607901,
                'nome_municipio' => 'Jaboatão dos Guararapes',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2607950,
                'nome_municipio' => 'Jaqueira',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608008,
                'nome_municipio' => 'Jataúba',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608057,
                'nome_municipio' => 'Jatobá',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608107,
                'nome_municipio' => 'João Alfredo',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608206,
                'nome_municipio' => 'Joaquim Nabuco',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608255,
                'nome_municipio' => 'Jucati',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608305,
                'nome_municipio' => 'Jupi',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608404,
                'nome_municipio' => 'Jurema',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608453,
                'nome_municipio' => 'Lagoa do Carro',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608503,
                'nome_municipio' => 'Lagoa de Itaenga',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608602,
                'nome_municipio' => 'Lagoa do Ouro',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608701,
                'nome_municipio' => 'Lagoa dos Gatos',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608750,
                'nome_municipio' => 'Lagoa Grande',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608800,
                'nome_municipio' => 'Lajedo',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2608909,
                'nome_municipio' => 'Limoeiro',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609006,
                'nome_municipio' => 'Macaparana',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609105,
                'nome_municipio' => 'Machados',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609154,
                'nome_municipio' => 'Manari',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609204,
                'nome_municipio' => 'Maraial',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609303,
                'nome_municipio' => 'Mirandiba',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609402,
                'nome_municipio' => 'Moreno',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609501,
                'nome_municipio' => 'Nazaré da Mata',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609600,
                'nome_municipio' => 'Olinda',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609709,
                'nome_municipio' => 'Orobó',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609808,
                'nome_municipio' => 'Orocó',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2609907,
                'nome_municipio' => 'Ouricuri',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2610004,
                'nome_municipio' => 'Palmares',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2610103,
                'nome_municipio' => 'Palmeirina',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2610202,
                'nome_municipio' => 'Panelas',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2610301,
                'nome_municipio' => 'Paranatama',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2610400,
                'nome_municipio' => 'Parnamirim',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2610509,
                'nome_municipio' => 'Passira',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2610608,
                'nome_municipio' => 'Paudalho',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2610707,
                'nome_municipio' => 'Paulista',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2610806,
                'nome_municipio' => 'Pedra',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2610905,
                'nome_municipio' => 'Pesqueira',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611002,
                'nome_municipio' => 'Petrolândia',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611101,
                'nome_municipio' => 'Petrolina',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611200,
                'nome_municipio' => 'Poção',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611309,
                'nome_municipio' => 'Pombos',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611408,
                'nome_municipio' => 'Primavera',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611507,
                'nome_municipio' => 'Quipapá',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611533,
                'nome_municipio' => 'Quixaba',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611606,
                'nome_municipio' => 'Recife',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611705,
                'nome_municipio' => 'Riacho das Almas',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611804,
                'nome_municipio' => 'Ribeirão',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2611903,
                'nome_municipio' => 'Rio Formoso',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612000,
                'nome_municipio' => 'Sairé',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612109,
                'nome_municipio' => 'Salgadinho',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612208,
                'nome_municipio' => 'Salgueiro',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612307,
                'nome_municipio' => 'Saloá',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612406,
                'nome_municipio' => 'Sanharó',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612455,
                'nome_municipio' => 'Santa Cruz',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612471,
                'nome_municipio' => 'Santa Cruz da Baixa Verde',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612505,
                'nome_municipio' => 'Santa Cruz do Capibaribe',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612554,
                'nome_municipio' => 'Santa Filomena',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612604,
                'nome_municipio' => 'Santa Maria da Boa Vista',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612703,
                'nome_municipio' => 'Santa Maria do Cambucá',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612802,
                'nome_municipio' => 'Santa Terezinha',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2612901,
                'nome_municipio' => 'São Benedito do Sul',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2613008,
                'nome_municipio' => 'São Bento do Una',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2613107,
                'nome_municipio' => 'São Caitano',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2613206,
                'nome_municipio' => 'São João',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2613305,
                'nome_municipio' => 'São Joaquim do Monte',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2613404,
                'nome_municipio' => 'São José da Coroa Grande',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2613503,
                'nome_municipio' => 'São José do Belmonte',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2613602,
                'nome_municipio' => 'São José do Egito',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2613701,
                'nome_municipio' => 'São Lourenço da Mata',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2613800,
                'nome_municipio' => 'São Vicente Férrer',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2613909,
                'nome_municipio' => 'Serra Talhada',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2614006,
                'nome_municipio' => 'Serrita',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2614105,
                'nome_municipio' => 'Sertânia',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2614204,
                'nome_municipio' => 'Sirinhaém',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2614303,
                'nome_municipio' => 'Moreilândia',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2614402,
                'nome_municipio' => 'Solidão',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2614501,
                'nome_municipio' => 'Surubim',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2614600,
                'nome_municipio' => 'Tabira',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2614709,
                'nome_municipio' => 'Tacaimbó',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2614808,
                'nome_municipio' => 'Tacaratu',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2614857,
                'nome_municipio' => 'Tamandaré',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2615003,
                'nome_municipio' => 'Taquaritinga do Norte',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2615102,
                'nome_municipio' => 'Terezinha',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2615201,
                'nome_municipio' => 'Terra Nova',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2615300,
                'nome_municipio' => 'Timbaúba',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2615409,
                'nome_municipio' => 'Toritama',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2615508,
                'nome_municipio' => 'Tracunhaém',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2615607,
                'nome_municipio' => 'Trindade',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2615706,
                'nome_municipio' => 'Triunfo',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2615805,
                'nome_municipio' => 'Tupanatinga',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2615904,
                'nome_municipio' => 'Tuparetama',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2616001,
                'nome_municipio' => 'Venturosa',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2616100,
                'nome_municipio' => 'Verdejante',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2616183,
                'nome_municipio' => 'Vertente do Lério',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2616209,
                'nome_municipio' => 'Vertentes',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2616308,
                'nome_municipio' => 'Vicência',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2616407,
                'nome_municipio' => 'Vitória de Santo Antão',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2616506,
                'nome_municipio' => 'Xexéu',
                'uf' => 'PE',
            ],
            [
                'id_municipio' => 2700102,
                'nome_municipio' => 'Água Branca',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2700201,
                'nome_municipio' => 'Anadia',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2700300,
                'nome_municipio' => 'Arapiraca',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2700409,
                'nome_municipio' => 'Atalaia',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2700508,
                'nome_municipio' => 'Barra de Santo Antônio',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2700607,
                'nome_municipio' => 'Barra de São Miguel',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2700706,
                'nome_municipio' => 'Batalha',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2700805,
                'nome_municipio' => 'Belém',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2700904,
                'nome_municipio' => 'Belo Monte',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701001,
                'nome_municipio' => 'Boca da Mata',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701100,
                'nome_municipio' => 'Branquinha',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701209,
                'nome_municipio' => 'Cacimbinhas',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701308,
                'nome_municipio' => 'Cajueiro',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701357,
                'nome_municipio' => 'Campestre',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701407,
                'nome_municipio' => 'Campo Alegre',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701506,
                'nome_municipio' => 'Campo Grande',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701605,
                'nome_municipio' => 'Canapi',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701704,
                'nome_municipio' => 'Capela',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701803,
                'nome_municipio' => 'Carneiros',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2701902,
                'nome_municipio' => 'Chã Preta',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702009,
                'nome_municipio' => 'Coité do Nóia',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702108,
                'nome_municipio' => 'Colônia Leopoldina',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702207,
                'nome_municipio' => 'Coqueiro Seco',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702306,
                'nome_municipio' => 'Coruripe',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702355,
                'nome_municipio' => 'Craíbas',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702405,
                'nome_municipio' => 'Delmiro Gouveia',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702504,
                'nome_municipio' => 'Dois Riachos',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702553,
                'nome_municipio' => 'Estrela de Alagoas',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702603,
                'nome_municipio' => 'Feira Grande',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702702,
                'nome_municipio' => 'Feliz Deserto',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702801,
                'nome_municipio' => 'Flexeiras',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2702900,
                'nome_municipio' => 'Girau do Ponciano',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703007,
                'nome_municipio' => 'Ibateguara',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703106,
                'nome_municipio' => 'Igaci',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703205,
                'nome_municipio' => 'Igreja Nova',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703304,
                'nome_municipio' => 'Inhapi',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703403,
                'nome_municipio' => 'Jacaré dos Homens',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703502,
                'nome_municipio' => 'Jacuípe',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703601,
                'nome_municipio' => 'Japaratinga',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703700,
                'nome_municipio' => 'Jaramataia',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703759,
                'nome_municipio' => 'Jequiá da Praia',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703809,
                'nome_municipio' => 'Joaquim Gomes',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2703908,
                'nome_municipio' => 'Jundiá',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2704005,
                'nome_municipio' => 'Junqueiro',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2704104,
                'nome_municipio' => 'Lagoa da Canoa',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2704203,
                'nome_municipio' => 'Limoeiro de Anadia',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2704302,
                'nome_municipio' => 'Maceió',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2704401,
                'nome_municipio' => 'Major Isidoro',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2704500,
                'nome_municipio' => 'Maragogi',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2704609,
                'nome_municipio' => 'Maravilha',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2704708,
                'nome_municipio' => 'Marechal Deodoro',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2704807,
                'nome_municipio' => 'Maribondo',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2704906,
                'nome_municipio' => 'Mar Vermelho',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2705002,
                'nome_municipio' => 'Mata Grande',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2705101,
                'nome_municipio' => 'Matriz de Camaragibe',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2705200,
                'nome_municipio' => 'Messias',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2705309,
                'nome_municipio' => 'Minador do Negrão',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2705408,
                'nome_municipio' => 'Monteirópolis',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2705507,
                'nome_municipio' => 'Murici',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2705606,
                'nome_municipio' => 'Novo Lino',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2705705,
                'nome_municipio' => 'Olho d\'Água das Flores',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2705804,
                'nome_municipio' => 'Olho d\'Água do Casado',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2705903,
                'nome_municipio' => 'Olho d\'Água Grande',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706000,
                'nome_municipio' => 'Olivença',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706109,
                'nome_municipio' => 'Ouro Branco',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706208,
                'nome_municipio' => 'Palestina',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706307,
                'nome_municipio' => 'Palmeira dos Índios',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706406,
                'nome_municipio' => 'Pão de Açúcar',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706422,
                'nome_municipio' => 'Pariconha',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706448,
                'nome_municipio' => 'Paripueira',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706505,
                'nome_municipio' => 'Passo de Camaragibe',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706604,
                'nome_municipio' => 'Paulo Jacinto',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706703,
                'nome_municipio' => 'Penedo',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706802,
                'nome_municipio' => 'Piaçabuçu',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2706901,
                'nome_municipio' => 'Pilar',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2707008,
                'nome_municipio' => 'Pindoba',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2707107,
                'nome_municipio' => 'Piranhas',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2707206,
                'nome_municipio' => 'Poço das Trincheiras',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2707305,
                'nome_municipio' => 'Porto Calvo',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2707404,
                'nome_municipio' => 'Porto de Pedras',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2707503,
                'nome_municipio' => 'Porto Real do Colégio',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2707602,
                'nome_municipio' => 'Quebrangulo',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2707701,
                'nome_municipio' => 'Rio Largo',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2707800,
                'nome_municipio' => 'Roteiro',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2707909,
                'nome_municipio' => 'Santa Luzia do Norte',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708006,
                'nome_municipio' => 'Santana do Ipanema',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708105,
                'nome_municipio' => 'Santana do Mundaú',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708204,
                'nome_municipio' => 'São Brás',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708303,
                'nome_municipio' => 'São José da Laje',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708402,
                'nome_municipio' => 'São José da Tapera',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708501,
                'nome_municipio' => 'São Luís do Quitunde',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708600,
                'nome_municipio' => 'São Miguel dos Campos',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708709,
                'nome_municipio' => 'São Miguel dos Milagres',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708808,
                'nome_municipio' => 'São Sebastião',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708907,
                'nome_municipio' => 'Satuba',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2708956,
                'nome_municipio' => 'Senador Rui Palmeira',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2709004,
                'nome_municipio' => 'Tanque d\'Arca',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2709103,
                'nome_municipio' => 'Taquarana',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2709152,
                'nome_municipio' => 'Teotônio Vilela',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2709202,
                'nome_municipio' => 'Traipu',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2709301,
                'nome_municipio' => 'União dos Palmares',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2709400,
                'nome_municipio' => 'Viçosa',
                'uf' => 'AL',
            ],
            [
                'id_municipio' => 2800100,
                'nome_municipio' => 'Amparo do São Francisco',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2800209,
                'nome_municipio' => 'Aquidabã',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2800308,
                'nome_municipio' => 'Aracaju',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2800407,
                'nome_municipio' => 'Arauá',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2800506,
                'nome_municipio' => 'Areia Branca',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2800605,
                'nome_municipio' => 'Barra dos Coqueiros',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2800670,
                'nome_municipio' => 'Boquim',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2800704,
                'nome_municipio' => 'Brejo Grande',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2801009,
                'nome_municipio' => 'Campo do Brito',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2801108,
                'nome_municipio' => 'Canhoba',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2801207,
                'nome_municipio' => 'Canindé de São Francisco',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2801306,
                'nome_municipio' => 'Capela',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2801405,
                'nome_municipio' => 'Carira',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2801504,
                'nome_municipio' => 'Carmópolis',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2801603,
                'nome_municipio' => 'Cedro de São João',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2801702,
                'nome_municipio' => 'Cristinápolis',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2801900,
                'nome_municipio' => 'Cumbe',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2802007,
                'nome_municipio' => 'Divina Pastora',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2802106,
                'nome_municipio' => 'Estância',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2802205,
                'nome_municipio' => 'Feira Nova',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2802304,
                'nome_municipio' => 'Frei Paulo',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2802403,
                'nome_municipio' => 'Gararu',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2802502,
                'nome_municipio' => 'General Maynard',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2802601,
                'nome_municipio' => 'Graccho Cardoso',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2802700,
                'nome_municipio' => 'Ilha das Flores',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2802809,
                'nome_municipio' => 'Indiaroba',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2802908,
                'nome_municipio' => 'Itabaiana',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2803005,
                'nome_municipio' => 'Itabaianinha',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2803104,
                'nome_municipio' => 'Itabi',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2803203,
                'nome_municipio' => 'Itaporanga d\'Ajuda',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2803302,
                'nome_municipio' => 'Japaratuba',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2803401,
                'nome_municipio' => 'Japoatã',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2803500,
                'nome_municipio' => 'Lagarto',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2803609,
                'nome_municipio' => 'Laranjeiras',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2803708,
                'nome_municipio' => 'Macambira',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2803807,
                'nome_municipio' => 'Malhada dos Bois',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2803906,
                'nome_municipio' => 'Malhador',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804003,
                'nome_municipio' => 'Maruim',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804102,
                'nome_municipio' => 'Moita Bonita',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804201,
                'nome_municipio' => 'Monte Alegre de Sergipe',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804300,
                'nome_municipio' => 'Muribeca',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804409,
                'nome_municipio' => 'Neópolis',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804458,
                'nome_municipio' => 'Nossa Senhora Aparecida',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804508,
                'nome_municipio' => 'Nossa Senhora da Glória',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804607,
                'nome_municipio' => 'Nossa Senhora das Dores',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804706,
                'nome_municipio' => 'Nossa Senhora de Lourdes',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804805,
                'nome_municipio' => 'Nossa Senhora do Socorro',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2804904,
                'nome_municipio' => 'Pacatuba',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2805000,
                'nome_municipio' => 'Pedra Mole',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2805109,
                'nome_municipio' => 'Pedrinhas',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2805208,
                'nome_municipio' => 'Pinhão',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2805307,
                'nome_municipio' => 'Pirambu',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2805406,
                'nome_municipio' => 'Poço Redondo',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2805505,
                'nome_municipio' => 'Poço Verde',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2805604,
                'nome_municipio' => 'Porto da Folha',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2805703,
                'nome_municipio' => 'Propriá',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2805802,
                'nome_municipio' => 'Riachão do Dantas',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2805901,
                'nome_municipio' => 'Riachuelo',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2806008,
                'nome_municipio' => 'Ribeirópolis',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2806107,
                'nome_municipio' => 'Rosário do Catete',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2806206,
                'nome_municipio' => 'Salgado',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2806305,
                'nome_municipio' => 'Santa Luzia do Itanhy',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2806404,
                'nome_municipio' => 'Santana do São Francisco',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2806503,
                'nome_municipio' => 'Santa Rosa de Lima',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2806602,
                'nome_municipio' => 'Santo Amaro das Brotas',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2806701,
                'nome_municipio' => 'São Cristóvão',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2806800,
                'nome_municipio' => 'São Domingos',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2806909,
                'nome_municipio' => 'São Francisco',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2807006,
                'nome_municipio' => 'São Miguel do Aleixo',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2807105,
                'nome_municipio' => 'Simão Dias',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2807204,
                'nome_municipio' => 'Siriri',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2807303,
                'nome_municipio' => 'Telha',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2807402,
                'nome_municipio' => 'Tobias Barreto',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2807501,
                'nome_municipio' => 'Tomar do Geru',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2807600,
                'nome_municipio' => 'Umbaúba',
                'uf' => 'SE',
            ],
            [
                'id_municipio' => 2900108,
                'nome_municipio' => 'Abaíra',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2900207,
                'nome_municipio' => 'Abaré',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2900306,
                'nome_municipio' => 'Acajutiba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2900355,
                'nome_municipio' => 'Adustina',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2900405,
                'nome_municipio' => 'Água Fria',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2900504,
                'nome_municipio' => 'Érico Cardoso',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2900603,
                'nome_municipio' => 'Aiquara',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2900702,
                'nome_municipio' => 'Alagoinhas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2900801,
                'nome_municipio' => 'Alcobaça',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2900900,
                'nome_municipio' => 'Almadina',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901007,
                'nome_municipio' => 'Amargosa',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901106,
                'nome_municipio' => 'Amélia Rodrigues',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901155,
                'nome_municipio' => 'América Dourada',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901205,
                'nome_municipio' => 'Anagé',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901304,
                'nome_municipio' => 'Andaraí',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901353,
                'nome_municipio' => 'Andorinha',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901403,
                'nome_municipio' => 'Angical',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901502,
                'nome_municipio' => 'Anguera',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901601,
                'nome_municipio' => 'Antas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901700,
                'nome_municipio' => 'Antônio Cardoso',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901809,
                'nome_municipio' => 'Antônio Gonçalves',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901908,
                'nome_municipio' => 'Aporá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2901957,
                'nome_municipio' => 'Apuarema',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902005,
                'nome_municipio' => 'Aracatu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902054,
                'nome_municipio' => 'Araçás',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902104,
                'nome_municipio' => 'Araci',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902203,
                'nome_municipio' => 'Aramari',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902252,
                'nome_municipio' => 'Arataca',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902302,
                'nome_municipio' => 'Aratuípe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902401,
                'nome_municipio' => 'Aurelino Leal',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902500,
                'nome_municipio' => 'Baianópolis',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902609,
                'nome_municipio' => 'Baixa Grande',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902658,
                'nome_municipio' => 'Banzaê',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902708,
                'nome_municipio' => 'Barra',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902807,
                'nome_municipio' => 'Barra da Estiva',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2902906,
                'nome_municipio' => 'Barra do Choça',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903003,
                'nome_municipio' => 'Barra do Mendes',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903102,
                'nome_municipio' => 'Barra do Rocha',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903201,
                'nome_municipio' => 'Barreiras',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903235,
                'nome_municipio' => 'Barro Alto',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903276,
                'nome_municipio' => 'Barrocas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903300,
                'nome_municipio' => 'Barro Preto',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903409,
                'nome_municipio' => 'Belmonte',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903508,
                'nome_municipio' => 'Belo Campo',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903607,
                'nome_municipio' => 'Biritinga',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903706,
                'nome_municipio' => 'Boa Nova',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903805,
                'nome_municipio' => 'Boa Vista do Tupim',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903904,
                'nome_municipio' => 'Bom Jesus da Lapa',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2903953,
                'nome_municipio' => 'Bom Jesus da Serra',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904001,
                'nome_municipio' => 'Boninal',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904050,
                'nome_municipio' => 'Bonito',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904100,
                'nome_municipio' => 'Boquira',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904209,
                'nome_municipio' => 'Botuporã',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904308,
                'nome_municipio' => 'Brejões',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904407,
                'nome_municipio' => 'Brejolândia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904506,
                'nome_municipio' => 'Brotas de Macaúbas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904605,
                'nome_municipio' => 'Brumado',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904704,
                'nome_municipio' => 'Buerarema',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904753,
                'nome_municipio' => 'Buritirama',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904803,
                'nome_municipio' => 'Caatiba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904852,
                'nome_municipio' => 'Cabaceiras do Paraguaçu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2904902,
                'nome_municipio' => 'Cachoeira',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905008,
                'nome_municipio' => 'Caculé',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905107,
                'nome_municipio' => 'Caém',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905156,
                'nome_municipio' => 'Caetanos',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905206,
                'nome_municipio' => 'Caetité',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905305,
                'nome_municipio' => 'Cafarnaum',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905404,
                'nome_municipio' => 'Cairu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905503,
                'nome_municipio' => 'Caldeirão Grande',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905602,
                'nome_municipio' => 'Camacan',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905701,
                'nome_municipio' => 'Camaçari',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905800,
                'nome_municipio' => 'Camamu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2905909,
                'nome_municipio' => 'Campo Alegre de Lourdes',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906006,
                'nome_municipio' => 'Campo Formoso',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906105,
                'nome_municipio' => 'Canápolis',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906204,
                'nome_municipio' => 'Canarana',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906303,
                'nome_municipio' => 'Canavieiras',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906402,
                'nome_municipio' => 'Candeal',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906501,
                'nome_municipio' => 'Candeias',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906600,
                'nome_municipio' => 'Candiba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906709,
                'nome_municipio' => 'Cândido Sales',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906808,
                'nome_municipio' => 'Cansanção',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906824,
                'nome_municipio' => 'Canudos',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906857,
                'nome_municipio' => 'Capela do Alto Alegre',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906873,
                'nome_municipio' => 'Capim Grosso',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906899,
                'nome_municipio' => 'Caraíbas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2906907,
                'nome_municipio' => 'Caravelas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907004,
                'nome_municipio' => 'Cardeal da Silva',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907103,
                'nome_municipio' => 'Carinhanha',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907202,
                'nome_municipio' => 'Casa Nova',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907301,
                'nome_municipio' => 'Castro Alves',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907400,
                'nome_municipio' => 'Catolândia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907509,
                'nome_municipio' => 'Catu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907558,
                'nome_municipio' => 'Caturama',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907608,
                'nome_municipio' => 'Central',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907707,
                'nome_municipio' => 'Chorrochó',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907806,
                'nome_municipio' => 'Cícero Dantas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2907905,
                'nome_municipio' => 'Cipó',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2908002,
                'nome_municipio' => 'Coaraci',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2908101,
                'nome_municipio' => 'Cocos',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2908200,
                'nome_municipio' => 'Conceição da Feira',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2908309,
                'nome_municipio' => 'Conceição do Almeida',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2908408,
                'nome_municipio' => 'Conceição do Coité',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2908507,
                'nome_municipio' => 'Conceição do Jacuípe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2908606,
                'nome_municipio' => 'Conde',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2908705,
                'nome_municipio' => 'Condeúba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2908804,
                'nome_municipio' => 'Contendas do Sincorá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2908903,
                'nome_municipio' => 'Coração de Maria',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2909000,
                'nome_municipio' => 'Cordeiros',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2909109,
                'nome_municipio' => 'Coribe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2909208,
                'nome_municipio' => 'Coronel João Sá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2909307,
                'nome_municipio' => 'Correntina',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2909406,
                'nome_municipio' => 'Cotegipe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2909505,
                'nome_municipio' => 'Cravolândia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2909604,
                'nome_municipio' => 'Crisópolis',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2909703,
                'nome_municipio' => 'Cristópolis',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2909802,
                'nome_municipio' => 'Cruz das Almas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2909901,
                'nome_municipio' => 'Curaçá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910008,
                'nome_municipio' => 'Dário Meira',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910057,
                'nome_municipio' => 'Dias d\'Ávila',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910107,
                'nome_municipio' => 'Dom Basílio',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910206,
                'nome_municipio' => 'Dom Macedo Costa',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910305,
                'nome_municipio' => 'Elísio Medrado',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910404,
                'nome_municipio' => 'Encruzilhada',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910503,
                'nome_municipio' => 'Entre Rios',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910602,
                'nome_municipio' => 'Esplanada',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910701,
                'nome_municipio' => 'Euclides da Cunha',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910727,
                'nome_municipio' => 'Eunápolis',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910750,
                'nome_municipio' => 'Fátima',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910776,
                'nome_municipio' => 'Feira da Mata',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910800,
                'nome_municipio' => 'Feira de Santana',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910859,
                'nome_municipio' => 'Filadélfia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2910909,
                'nome_municipio' => 'Firmino Alves',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911006,
                'nome_municipio' => 'Floresta Azul',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911105,
                'nome_municipio' => 'Formosa do Rio Preto',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911204,
                'nome_municipio' => 'Gandu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911253,
                'nome_municipio' => 'Gavião',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911303,
                'nome_municipio' => 'Gentio do Ouro',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911402,
                'nome_municipio' => 'Glória',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911501,
                'nome_municipio' => 'Gongogi',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911600,
                'nome_municipio' => 'Governador Mangabeira',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911659,
                'nome_municipio' => 'Guajeru',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911709,
                'nome_municipio' => 'Guanambi',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911808,
                'nome_municipio' => 'Guaratinga',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911857,
                'nome_municipio' => 'Heliópolis',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2911907,
                'nome_municipio' => 'Iaçu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2912004,
                'nome_municipio' => 'Ibiassucê',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2912103,
                'nome_municipio' => 'Ibicaraí',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2912202,
                'nome_municipio' => 'Ibicoara',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2912301,
                'nome_municipio' => 'Ibicuí',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2912400,
                'nome_municipio' => 'Ibipeba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2912509,
                'nome_municipio' => 'Ibipitanga',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2912608,
                'nome_municipio' => 'Ibiquera',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2912707,
                'nome_municipio' => 'Ibirapitanga',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2912806,
                'nome_municipio' => 'Ibirapuã',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2912905,
                'nome_municipio' => 'Ibirataia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913002,
                'nome_municipio' => 'Ibitiara',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913101,
                'nome_municipio' => 'Ibititá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913200,
                'nome_municipio' => 'Ibotirama',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913309,
                'nome_municipio' => 'Ichu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913408,
                'nome_municipio' => 'Igaporã',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913457,
                'nome_municipio' => 'Igrapiúna',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913507,
                'nome_municipio' => 'Iguaí',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913606,
                'nome_municipio' => 'Ilhéus',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913705,
                'nome_municipio' => 'Inhambupe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913804,
                'nome_municipio' => 'Ipecaetá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2913903,
                'nome_municipio' => 'Ipiaú',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914000,
                'nome_municipio' => 'Ipirá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914109,
                'nome_municipio' => 'Ipupiara',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914208,
                'nome_municipio' => 'Irajuba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914307,
                'nome_municipio' => 'Iramaia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914406,
                'nome_municipio' => 'Iraquara',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914505,
                'nome_municipio' => 'Irará',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914604,
                'nome_municipio' => 'Irecê',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914653,
                'nome_municipio' => 'Itabela',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914703,
                'nome_municipio' => 'Itaberaba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914802,
                'nome_municipio' => 'Itabuna',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2914901,
                'nome_municipio' => 'Itacaré',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915007,
                'nome_municipio' => 'Itaeté',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915106,
                'nome_municipio' => 'Itagi',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915205,
                'nome_municipio' => 'Itagibá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915304,
                'nome_municipio' => 'Itagimirim',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915353,
                'nome_municipio' => 'Itaguaçu da Bahia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915403,
                'nome_municipio' => 'Itaju do Colônia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915502,
                'nome_municipio' => 'Itajuípe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915601,
                'nome_municipio' => 'Itamaraju',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915700,
                'nome_municipio' => 'Itamari',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915809,
                'nome_municipio' => 'Itambé',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2915908,
                'nome_municipio' => 'Itanagra',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916005,
                'nome_municipio' => 'Itanhém',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916104,
                'nome_municipio' => 'Itaparica',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916203,
                'nome_municipio' => 'Itapé',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916302,
                'nome_municipio' => 'Itapebi',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916401,
                'nome_municipio' => 'Itapetinga',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916500,
                'nome_municipio' => 'Itapicuru',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916609,
                'nome_municipio' => 'Itapitanga',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916708,
                'nome_municipio' => 'Itaquara',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916807,
                'nome_municipio' => 'Itarantim',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916856,
                'nome_municipio' => 'Itatim',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2916906,
                'nome_municipio' => 'Itiruçu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917003,
                'nome_municipio' => 'Itiúba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917102,
                'nome_municipio' => 'Itororó',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917201,
                'nome_municipio' => 'Ituaçu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917300,
                'nome_municipio' => 'Ituberá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917334,
                'nome_municipio' => 'Iuiu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917359,
                'nome_municipio' => 'Jaborandi',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917409,
                'nome_municipio' => 'Jacaraci',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917508,
                'nome_municipio' => 'Jacobina',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917607,
                'nome_municipio' => 'Jaguaquara',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917706,
                'nome_municipio' => 'Jaguarari',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917805,
                'nome_municipio' => 'Jaguaripe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2917904,
                'nome_municipio' => 'Jandaíra',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918001,
                'nome_municipio' => 'Jequié',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918100,
                'nome_municipio' => 'Jeremoabo',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918209,
                'nome_municipio' => 'Jiquiriçá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918308,
                'nome_municipio' => 'Jitaúna',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918357,
                'nome_municipio' => 'João Dourado',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918407,
                'nome_municipio' => 'Juazeiro',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918456,
                'nome_municipio' => 'Jucuruçu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918506,
                'nome_municipio' => 'Jussara',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918555,
                'nome_municipio' => 'Jussari',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918605,
                'nome_municipio' => 'Jussiape',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918704,
                'nome_municipio' => 'Lafaiete Coutinho',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918753,
                'nome_municipio' => 'Lagoa Real',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918803,
                'nome_municipio' => 'Laje',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2918902,
                'nome_municipio' => 'Lajedão',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919009,
                'nome_municipio' => 'Lajedinho',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919058,
                'nome_municipio' => 'Lajedo do Tabocal',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919108,
                'nome_municipio' => 'Lamarão',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919157,
                'nome_municipio' => 'Lapão',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919207,
                'nome_municipio' => 'Lauro de Freitas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919306,
                'nome_municipio' => 'Lençóis',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919405,
                'nome_municipio' => 'Licínio de Almeida',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919504,
                'nome_municipio' => 'Livramento de Nossa Senhora',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919553,
                'nome_municipio' => 'Luís Eduardo Magalhães',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919603,
                'nome_municipio' => 'Macajuba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919702,
                'nome_municipio' => 'Macarani',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919801,
                'nome_municipio' => 'Macaúbas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919900,
                'nome_municipio' => 'Macururé',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919926,
                'nome_municipio' => 'Madre de Deus',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2919959,
                'nome_municipio' => 'Maetinga',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920007,
                'nome_municipio' => 'Maiquinique',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920106,
                'nome_municipio' => 'Mairi',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920205,
                'nome_municipio' => 'Malhada',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920304,
                'nome_municipio' => 'Malhada de Pedras',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920403,
                'nome_municipio' => 'Manoel Vitorino',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920452,
                'nome_municipio' => 'Mansidão',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920502,
                'nome_municipio' => 'Maracás',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920601,
                'nome_municipio' => 'Maragogipe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920700,
                'nome_municipio' => 'Maraú',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920809,
                'nome_municipio' => 'Marcionílio Souza',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2920908,
                'nome_municipio' => 'Mascote',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921005,
                'nome_municipio' => 'Mata de São João',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921054,
                'nome_municipio' => 'Matina',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921104,
                'nome_municipio' => 'Medeiros Neto',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921203,
                'nome_municipio' => 'Miguel Calmon',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921302,
                'nome_municipio' => 'Milagres',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921401,
                'nome_municipio' => 'Mirangaba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921450,
                'nome_municipio' => 'Mirante',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921500,
                'nome_municipio' => 'Monte Santo',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921609,
                'nome_municipio' => 'Morpará',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921708,
                'nome_municipio' => 'Morro do Chapéu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921807,
                'nome_municipio' => 'Mortugaba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2921906,
                'nome_municipio' => 'Mucugê',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922003,
                'nome_municipio' => 'Mucuri',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922052,
                'nome_municipio' => 'Mulungu do Morro',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922102,
                'nome_municipio' => 'Mundo Novo',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922201,
                'nome_municipio' => 'Muniz Ferreira',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922250,
                'nome_municipio' => 'Muquém do São Francisco',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922300,
                'nome_municipio' => 'Muritiba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922409,
                'nome_municipio' => 'Mutuípe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922508,
                'nome_municipio' => 'Nazaré',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922607,
                'nome_municipio' => 'Nilo Peçanha',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922656,
                'nome_municipio' => 'Nordestina',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922706,
                'nome_municipio' => 'Nova Canaã',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922730,
                'nome_municipio' => 'Nova Fátima',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922755,
                'nome_municipio' => 'Nova Ibiá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922805,
                'nome_municipio' => 'Nova Itarana',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922854,
                'nome_municipio' => 'Nova Redenção',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2922904,
                'nome_municipio' => 'Nova Soure',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923001,
                'nome_municipio' => 'Nova Viçosa',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923035,
                'nome_municipio' => 'Novo Horizonte',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923050,
                'nome_municipio' => 'Novo Triunfo',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923100,
                'nome_municipio' => 'Olindina',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923209,
                'nome_municipio' => 'Oliveira dos Brejinhos',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923308,
                'nome_municipio' => 'Ouriçangas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923357,
                'nome_municipio' => 'Ourolândia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923407,
                'nome_municipio' => 'Palmas de Monte Alto',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923506,
                'nome_municipio' => 'Palmeiras',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923605,
                'nome_municipio' => 'Paramirim',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923704,
                'nome_municipio' => 'Paratinga',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923803,
                'nome_municipio' => 'Paripiranga',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2923902,
                'nome_municipio' => 'Pau Brasil',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924009,
                'nome_municipio' => 'Paulo Afonso',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924058,
                'nome_municipio' => 'Pé de Serra',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924108,
                'nome_municipio' => 'Pedrão',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924207,
                'nome_municipio' => 'Pedro Alexandre',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924306,
                'nome_municipio' => 'Piatã',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924405,
                'nome_municipio' => 'Pilão Arcado',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924504,
                'nome_municipio' => 'Pindaí',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924603,
                'nome_municipio' => 'Pindobaçu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924652,
                'nome_municipio' => 'Pintadas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924678,
                'nome_municipio' => 'Piraí do Norte',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924702,
                'nome_municipio' => 'Piripá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924801,
                'nome_municipio' => 'Piritiba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2924900,
                'nome_municipio' => 'Planaltino',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925006,
                'nome_municipio' => 'Planalto',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925105,
                'nome_municipio' => 'Poções',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925204,
                'nome_municipio' => 'Pojuca',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925253,
                'nome_municipio' => 'Ponto Novo',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925303,
                'nome_municipio' => 'Porto Seguro',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925402,
                'nome_municipio' => 'Potiraguá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925501,
                'nome_municipio' => 'Prado',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925600,
                'nome_municipio' => 'Presidente Dutra',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925709,
                'nome_municipio' => 'Presidente Jânio Quadros',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925758,
                'nome_municipio' => 'Presidente Tancredo Neves',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925808,
                'nome_municipio' => 'Queimadas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925907,
                'nome_municipio' => 'Quijingue',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925931,
                'nome_municipio' => 'Quixabeira',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2925956,
                'nome_municipio' => 'Rafael Jambeiro',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926004,
                'nome_municipio' => 'Remanso',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926103,
                'nome_municipio' => 'Retirolândia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926202,
                'nome_municipio' => 'Riachão das Neves',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926301,
                'nome_municipio' => 'Riachão do Jacuípe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926400,
                'nome_municipio' => 'Riacho de Santana',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926509,
                'nome_municipio' => 'Ribeira do Amparo',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926608,
                'nome_municipio' => 'Ribeira do Pombal',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926657,
                'nome_municipio' => 'Ribeirão do Largo',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926707,
                'nome_municipio' => 'Rio de Contas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926806,
                'nome_municipio' => 'Rio do Antônio',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2926905,
                'nome_municipio' => 'Rio do Pires',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2927002,
                'nome_municipio' => 'Rio Real',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2927101,
                'nome_municipio' => 'Rodelas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2927200,
                'nome_municipio' => 'Ruy Barbosa',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2927309,
                'nome_municipio' => 'Salinas da Margarida',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2927408,
                'nome_municipio' => 'Salvador',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2927507,
                'nome_municipio' => 'Santa Bárbara',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2927606,
                'nome_municipio' => 'Santa Brígida',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2927705,
                'nome_municipio' => 'Santa Cruz Cabrália',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2927804,
                'nome_municipio' => 'Santa Cruz da Vitória',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2927903,
                'nome_municipio' => 'Santa Inês',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928000,
                'nome_municipio' => 'Santaluz',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928059,
                'nome_municipio' => 'Santa Luzia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928109,
                'nome_municipio' => 'Santa Maria da Vitória',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928208,
                'nome_municipio' => 'Santana',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928307,
                'nome_municipio' => 'Santanópolis',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928406,
                'nome_municipio' => 'Santa Rita de Cássia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928505,
                'nome_municipio' => 'Santa Terezinha',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928604,
                'nome_municipio' => 'Santo Amaro',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928703,
                'nome_municipio' => 'Santo Antônio de Jesus',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928802,
                'nome_municipio' => 'Santo Estêvão',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928901,
                'nome_municipio' => 'São Desidério',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2928950,
                'nome_municipio' => 'São Domingos',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929008,
                'nome_municipio' => 'São Félix',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929057,
                'nome_municipio' => 'São Félix do Coribe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929107,
                'nome_municipio' => 'São Felipe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929206,
                'nome_municipio' => 'São Francisco do Conde',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929255,
                'nome_municipio' => 'São Gabriel',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929305,
                'nome_municipio' => 'São Gonçalo dos Campos',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929354,
                'nome_municipio' => 'São José da Vitória',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929370,
                'nome_municipio' => 'São José do Jacuípe',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929404,
                'nome_municipio' => 'São Miguel das Matas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929503,
                'nome_municipio' => 'São Sebastião do Passé',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929602,
                'nome_municipio' => 'Sapeaçu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929701,
                'nome_municipio' => 'Sátiro Dias',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929750,
                'nome_municipio' => 'Saubara',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929800,
                'nome_municipio' => 'Saúde',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2929909,
                'nome_municipio' => 'Seabra',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930006,
                'nome_municipio' => 'Sebastião Laranjeiras',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930105,
                'nome_municipio' => 'Senhor do Bonfim',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930154,
                'nome_municipio' => 'Serra do Ramalho',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930204,
                'nome_municipio' => 'Sento Sé',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930303,
                'nome_municipio' => 'Serra Dourada',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930402,
                'nome_municipio' => 'Serra Preta',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930501,
                'nome_municipio' => 'Serrinha',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930600,
                'nome_municipio' => 'Serrolândia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930709,
                'nome_municipio' => 'Simões Filho',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930758,
                'nome_municipio' => 'Sítio do Mato',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930766,
                'nome_municipio' => 'Sítio do Quinto',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930774,
                'nome_municipio' => 'Sobradinho',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930808,
                'nome_municipio' => 'Souto Soares',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2930907,
                'nome_municipio' => 'Tabocas do Brejo Velho',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931004,
                'nome_municipio' => 'Tanhaçu',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931053,
                'nome_municipio' => 'Tanque Novo',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931103,
                'nome_municipio' => 'Tanquinho',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931202,
                'nome_municipio' => 'Taperoá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931301,
                'nome_municipio' => 'Tapiramutá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931350,
                'nome_municipio' => 'Teixeira de Freitas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931400,
                'nome_municipio' => 'Teodoro Sampaio',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931509,
                'nome_municipio' => 'Teofilândia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931608,
                'nome_municipio' => 'Teolândia',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931707,
                'nome_municipio' => 'Terra Nova',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931806,
                'nome_municipio' => 'Tremedal',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2931905,
                'nome_municipio' => 'Tucano',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932002,
                'nome_municipio' => 'Uauá',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932101,
                'nome_municipio' => 'Ubaíra',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932200,
                'nome_municipio' => 'Ubaitaba',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932309,
                'nome_municipio' => 'Ubatã',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932408,
                'nome_municipio' => 'Uibaí',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932457,
                'nome_municipio' => 'Umburanas',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932507,
                'nome_municipio' => 'Una',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932606,
                'nome_municipio' => 'Urandi',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932705,
                'nome_municipio' => 'Uruçuca',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932804,
                'nome_municipio' => 'Utinga',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2932903,
                'nome_municipio' => 'Valença',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933000,
                'nome_municipio' => 'Valente',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933059,
                'nome_municipio' => 'Várzea da Roça',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933109,
                'nome_municipio' => 'Várzea do Poço',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933158,
                'nome_municipio' => 'Várzea Nova',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933174,
                'nome_municipio' => 'Varzedo',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933208,
                'nome_municipio' => 'Vera Cruz',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933257,
                'nome_municipio' => 'Vereda',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933307,
                'nome_municipio' => 'Vitória da Conquista',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933406,
                'nome_municipio' => 'Wagner',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933455,
                'nome_municipio' => 'Wanderley',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933505,
                'nome_municipio' => 'Wenceslau Guimarães',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 2933604,
                'nome_municipio' => 'Xique-Xique',
                'uf' => 'BA',
            ],
            [
                'id_municipio' => 3100104,
                'nome_municipio' => 'Abadia dos Dourados',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3100203,
                'nome_municipio' => 'Abaeté',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3100302,
                'nome_municipio' => 'Abre Campo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3100401,
                'nome_municipio' => 'Acaiaca',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3100500,
                'nome_municipio' => 'Açucena',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3100609,
                'nome_municipio' => 'Água Boa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3100708,
                'nome_municipio' => 'Água Comprida',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3100807,
                'nome_municipio' => 'Aguanil',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3100906,
                'nome_municipio' => 'Águas Formosas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101003,
                'nome_municipio' => 'Águas Vermelhas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101102,
                'nome_municipio' => 'Aimorés',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101201,
                'nome_municipio' => 'Aiuruoca',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101300,
                'nome_municipio' => 'Alagoa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101409,
                'nome_municipio' => 'Albertina',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101508,
                'nome_municipio' => 'Além Paraíba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101607,
                'nome_municipio' => 'Alfenas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101631,
                'nome_municipio' => 'Alfredo Vasconcelos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101706,
                'nome_municipio' => 'Almenara',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101805,
                'nome_municipio' => 'Alpercata',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3101904,
                'nome_municipio' => 'Alpinópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102001,
                'nome_municipio' => 'Alterosa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102050,
                'nome_municipio' => 'Alto Caparaó',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102100,
                'nome_municipio' => 'Alto Rio Doce',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102209,
                'nome_municipio' => 'Alvarenga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102308,
                'nome_municipio' => 'Alvinópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102407,
                'nome_municipio' => 'Alvorada de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102506,
                'nome_municipio' => 'Amparo do Serra',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102605,
                'nome_municipio' => 'Andradas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102704,
                'nome_municipio' => 'Cachoeira de Pajeú',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102803,
                'nome_municipio' => 'Andrelândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102852,
                'nome_municipio' => 'Angelândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3102902,
                'nome_municipio' => 'Antônio Carlos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103009,
                'nome_municipio' => 'Antônio Dias',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103108,
                'nome_municipio' => 'Antônio Prado de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103207,
                'nome_municipio' => 'Araçaí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103306,
                'nome_municipio' => 'Aracitaba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103405,
                'nome_municipio' => 'Araçuaí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103504,
                'nome_municipio' => 'Araguari',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103603,
                'nome_municipio' => 'Arantina',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103702,
                'nome_municipio' => 'Araponga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103751,
                'nome_municipio' => 'Araporã',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103801,
                'nome_municipio' => 'Arapuá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3103900,
                'nome_municipio' => 'Araújos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104007,
                'nome_municipio' => 'Araxá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104106,
                'nome_municipio' => 'Arceburgo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104205,
                'nome_municipio' => 'Arcos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104304,
                'nome_municipio' => 'Areado',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104403,
                'nome_municipio' => 'Argirita',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104452,
                'nome_municipio' => 'Aricanduva',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104502,
                'nome_municipio' => 'Arinos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104601,
                'nome_municipio' => 'Astolfo Dutra',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104700,
                'nome_municipio' => 'Ataléia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104809,
                'nome_municipio' => 'Augusto de Lima',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3104908,
                'nome_municipio' => 'Baependi',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3105004,
                'nome_municipio' => 'Baldim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3105103,
                'nome_municipio' => 'Bambuí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3105202,
                'nome_municipio' => 'Bandeira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3105301,
                'nome_municipio' => 'Bandeira do Sul',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3105400,
                'nome_municipio' => 'Barão de Cocais',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3105509,
                'nome_municipio' => 'Barão do Monte Alto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3105608,
                'nome_municipio' => 'Barbacena',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3105707,
                'nome_municipio' => 'Barra Longa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3105905,
                'nome_municipio' => 'Barroso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106002,
                'nome_municipio' => 'Bela Vista de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106101,
                'nome_municipio' => 'Belmiro Braga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106200,
                'nome_municipio' => 'Belo Horizonte',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106309,
                'nome_municipio' => 'Belo Oriente',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106408,
                'nome_municipio' => 'Belo Vale',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106507,
                'nome_municipio' => 'Berilo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106606,
                'nome_municipio' => 'Bertópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106655,
                'nome_municipio' => 'Berizal',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106705,
                'nome_municipio' => 'Betim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106804,
                'nome_municipio' => 'Bias Fortes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3106903,
                'nome_municipio' => 'Bicas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3107000,
                'nome_municipio' => 'Biquinhas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3107109,
                'nome_municipio' => 'Boa Esperança',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3107208,
                'nome_municipio' => 'Bocaina de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3107307,
                'nome_municipio' => 'Bocaiúva',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3107406,
                'nome_municipio' => 'Bom Despacho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3107505,
                'nome_municipio' => 'Bom Jardim de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3107604,
                'nome_municipio' => 'Bom Jesus da Penha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3107703,
                'nome_municipio' => 'Bom Jesus do Amparo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3107802,
                'nome_municipio' => 'Bom Jesus do Galho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3107901,
                'nome_municipio' => 'Bom Repouso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108008,
                'nome_municipio' => 'Bom Sucesso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108107,
                'nome_municipio' => 'Bonfim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108206,
                'nome_municipio' => 'Bonfinópolis de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108255,
                'nome_municipio' => 'Bonito de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108305,
                'nome_municipio' => 'Borda da Mata',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108404,
                'nome_municipio' => 'Botelhos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108503,
                'nome_municipio' => 'Botumirim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108552,
                'nome_municipio' => 'Brasilândia de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108602,
                'nome_municipio' => 'Brasília de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108701,
                'nome_municipio' => 'Brás Pires',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108800,
                'nome_municipio' => 'Braúnas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3108909,
                'nome_municipio' => 'Brazópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109006,
                'nome_municipio' => 'Brumadinho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109105,
                'nome_municipio' => 'Bueno Brandão',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109204,
                'nome_municipio' => 'Buenópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109253,
                'nome_municipio' => 'Bugre',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109303,
                'nome_municipio' => 'Buritis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109402,
                'nome_municipio' => 'Buritizeiro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109451,
                'nome_municipio' => 'Cabeceira Grande',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109501,
                'nome_municipio' => 'Cabo Verde',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109600,
                'nome_municipio' => 'Cachoeira da Prata',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109709,
                'nome_municipio' => 'Cachoeira de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109808,
                'nome_municipio' => 'Cachoeira Dourada',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3109907,
                'nome_municipio' => 'Caetanópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3110004,
                'nome_municipio' => 'Caeté',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3110103,
                'nome_municipio' => 'Caiana',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3110202,
                'nome_municipio' => 'Cajuri',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3110301,
                'nome_municipio' => 'Caldas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3110400,
                'nome_municipio' => 'Camacho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3110509,
                'nome_municipio' => 'Camanducaia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3110608,
                'nome_municipio' => 'Cambuí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3110707,
                'nome_municipio' => 'Cambuquira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3110806,
                'nome_municipio' => 'Campanário',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3110905,
                'nome_municipio' => 'Campanha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111002,
                'nome_municipio' => 'Campestre',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111101,
                'nome_municipio' => 'Campina Verde',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111150,
                'nome_municipio' => 'Campo Azul',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111200,
                'nome_municipio' => 'Campo Belo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111309,
                'nome_municipio' => 'Campo do Meio',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111408,
                'nome_municipio' => 'Campo Florido',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111507,
                'nome_municipio' => 'Campos Altos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111606,
                'nome_municipio' => 'Campos Gerais',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111705,
                'nome_municipio' => 'Canaã',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111804,
                'nome_municipio' => 'Canápolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3111903,
                'nome_municipio' => 'Cana Verde',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112000,
                'nome_municipio' => 'Candeias',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112059,
                'nome_municipio' => 'Cantagalo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112109,
                'nome_municipio' => 'Caparaó',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112208,
                'nome_municipio' => 'Capela Nova',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112307,
                'nome_municipio' => 'Capelinha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112406,
                'nome_municipio' => 'Capetinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112505,
                'nome_municipio' => 'Capim Branco',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112604,
                'nome_municipio' => 'Capinópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112653,
                'nome_municipio' => 'Capitão Andrade',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112703,
                'nome_municipio' => 'Capitão Enéas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112802,
                'nome_municipio' => 'Capitólio',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3112901,
                'nome_municipio' => 'Caputira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3113008,
                'nome_municipio' => 'Caraí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3113107,
                'nome_municipio' => 'Caranaíba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3113206,
                'nome_municipio' => 'Carandaí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3113305,
                'nome_municipio' => 'Carangola',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3113404,
                'nome_municipio' => 'Caratinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3113503,
                'nome_municipio' => 'Carbonita',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3113602,
                'nome_municipio' => 'Careaçu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3113701,
                'nome_municipio' => 'Carlos Chagas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3113800,
                'nome_municipio' => 'Carmésia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3113909,
                'nome_municipio' => 'Carmo da Cachoeira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114006,
                'nome_municipio' => 'Carmo da Mata',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114105,
                'nome_municipio' => 'Carmo de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114204,
                'nome_municipio' => 'Carmo do Cajuru',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114303,
                'nome_municipio' => 'Carmo do Paranaíba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114402,
                'nome_municipio' => 'Carmo do Rio Claro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114501,
                'nome_municipio' => 'Carmópolis de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114550,
                'nome_municipio' => 'Carneirinho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114600,
                'nome_municipio' => 'Carrancas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114709,
                'nome_municipio' => 'Carvalhópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114808,
                'nome_municipio' => 'Carvalhos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3114907,
                'nome_municipio' => 'Casa Grande',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115003,
                'nome_municipio' => 'Cascalho Rico',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115102,
                'nome_municipio' => 'Cássia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115201,
                'nome_municipio' => 'Conceição da Barra de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115300,
                'nome_municipio' => 'Cataguases',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115359,
                'nome_municipio' => 'Catas Altas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115409,
                'nome_municipio' => 'Catas Altas da Noruega',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115458,
                'nome_municipio' => 'Catuji',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115474,
                'nome_municipio' => 'Catuti',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115508,
                'nome_municipio' => 'Caxambu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115607,
                'nome_municipio' => 'Cedro do Abaeté',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115706,
                'nome_municipio' => 'Central de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115805,
                'nome_municipio' => 'Centralina',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3115904,
                'nome_municipio' => 'Chácara',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116001,
                'nome_municipio' => 'Chalé',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116100,
                'nome_municipio' => 'Chapada do Norte',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116159,
                'nome_municipio' => 'Chapada Gaúcha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116209,
                'nome_municipio' => 'Chiador',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116308,
                'nome_municipio' => 'Cipotânea',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116407,
                'nome_municipio' => 'Claraval',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116506,
                'nome_municipio' => 'Claro dos Poções',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116605,
                'nome_municipio' => 'Cláudio',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116704,
                'nome_municipio' => 'Coimbra',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116803,
                'nome_municipio' => 'Coluna',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3116902,
                'nome_municipio' => 'Comendador Gomes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117009,
                'nome_municipio' => 'Comercinho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117108,
                'nome_municipio' => 'Conceição da Aparecida',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117207,
                'nome_municipio' => 'Conceição das Pedras',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117306,
                'nome_municipio' => 'Conceição das Alagoas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117405,
                'nome_municipio' => 'Conceição de Ipanema',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117504,
                'nome_municipio' => 'Conceição do Mato Dentro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117603,
                'nome_municipio' => 'Conceição do Pará',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117702,
                'nome_municipio' => 'Conceição do Rio Verde',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117801,
                'nome_municipio' => 'Conceição dos Ouros',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117836,
                'nome_municipio' => 'Cônego Marinho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117876,
                'nome_municipio' => 'Confins',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3117900,
                'nome_municipio' => 'Congonhal',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3118007,
                'nome_municipio' => 'Congonhas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3118106,
                'nome_municipio' => 'Congonhas do Norte',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3118205,
                'nome_municipio' => 'Conquista',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3118304,
                'nome_municipio' => 'Conselheiro Lafaiete',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3118403,
                'nome_municipio' => 'Conselheiro Pena',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3118502,
                'nome_municipio' => 'Consolação',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3118601,
                'nome_municipio' => 'Contagem',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3118700,
                'nome_municipio' => 'Coqueiral',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3118809,
                'nome_municipio' => 'Coração de Jesus',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3118908,
                'nome_municipio' => 'Cordisburgo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119005,
                'nome_municipio' => 'Cordislândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119104,
                'nome_municipio' => 'Corinto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119203,
                'nome_municipio' => 'Coroaci',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119302,
                'nome_municipio' => 'Coromandel',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119401,
                'nome_municipio' => 'Coronel Fabriciano',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119500,
                'nome_municipio' => 'Coronel Murta',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119609,
                'nome_municipio' => 'Coronel Pacheco',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119708,
                'nome_municipio' => 'Coronel Xavier Chaves',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119807,
                'nome_municipio' => 'Córrego Danta',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119906,
                'nome_municipio' => 'Córrego do Bom Jesus',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3119955,
                'nome_municipio' => 'Córrego Fundo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120003,
                'nome_municipio' => 'Córrego Novo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120102,
                'nome_municipio' => 'Couto de Magalhães de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120151,
                'nome_municipio' => 'Crisólita',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120201,
                'nome_municipio' => 'Cristais',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120300,
                'nome_municipio' => 'Cristália',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120409,
                'nome_municipio' => 'Cristiano Otoni',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120508,
                'nome_municipio' => 'Cristina',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120607,
                'nome_municipio' => 'Crucilândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120706,
                'nome_municipio' => 'Cruzeiro da Fortaleza',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120805,
                'nome_municipio' => 'Cruzília',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120839,
                'nome_municipio' => 'Cuparaque',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120870,
                'nome_municipio' => 'Curral de Dentro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3120904,
                'nome_municipio' => 'Curvelo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121001,
                'nome_municipio' => 'Datas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121100,
                'nome_municipio' => 'Delfim Moreira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121209,
                'nome_municipio' => 'Delfinópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121258,
                'nome_municipio' => 'Delta',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121308,
                'nome_municipio' => 'Descoberto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121407,
                'nome_municipio' => 'Desterro de Entre Rios',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121506,
                'nome_municipio' => 'Desterro do Melo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121605,
                'nome_municipio' => 'Diamantina',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121704,
                'nome_municipio' => 'Diogo de Vasconcelos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121803,
                'nome_municipio' => 'Dionísio',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3121902,
                'nome_municipio' => 'Divinésia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122009,
                'nome_municipio' => 'Divino',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122108,
                'nome_municipio' => 'Divino das Laranjeiras',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122207,
                'nome_municipio' => 'Divinolândia de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122306,
                'nome_municipio' => 'Divinópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122355,
                'nome_municipio' => 'Divisa Alegre',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122405,
                'nome_municipio' => 'Divisa Nova',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122454,
                'nome_municipio' => 'Divisópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122470,
                'nome_municipio' => 'Dom Bosco',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122504,
                'nome_municipio' => 'Dom Cavati',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122603,
                'nome_municipio' => 'Dom Joaquim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122702,
                'nome_municipio' => 'Dom Silvério',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122801,
                'nome_municipio' => 'Dom Viçoso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3122900,
                'nome_municipio' => 'Dona Euzébia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123007,
                'nome_municipio' => 'Dores de Campos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123106,
                'nome_municipio' => 'Dores de Guanhães',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123205,
                'nome_municipio' => 'Dores do Indaiá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123304,
                'nome_municipio' => 'Dores do Turvo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123403,
                'nome_municipio' => 'Doresópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123502,
                'nome_municipio' => 'Douradoquara',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123528,
                'nome_municipio' => 'Durandé',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123601,
                'nome_municipio' => 'Elói Mendes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123700,
                'nome_municipio' => 'Engenheiro Caldas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123809,
                'nome_municipio' => 'Engenheiro Navarro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123858,
                'nome_municipio' => 'Entre Folhas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3123908,
                'nome_municipio' => 'Entre Rios de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3124005,
                'nome_municipio' => 'Ervália',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3124104,
                'nome_municipio' => 'Esmeraldas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3124203,
                'nome_municipio' => 'Espera Feliz',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3124302,
                'nome_municipio' => 'Espinosa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3124401,
                'nome_municipio' => 'Espírito Santo do Dourado',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3124500,
                'nome_municipio' => 'Estiva',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3124609,
                'nome_municipio' => 'Estrela Dalva',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3124708,
                'nome_municipio' => 'Estrela do Indaiá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3124807,
                'nome_municipio' => 'Estrela do Sul',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3124906,
                'nome_municipio' => 'Eugenópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125002,
                'nome_municipio' => 'Ewbank da Câmara',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125101,
                'nome_municipio' => 'Extrema',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125200,
                'nome_municipio' => 'Fama',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125309,
                'nome_municipio' => 'Faria Lemos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125408,
                'nome_municipio' => 'Felício dos Santos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125507,
                'nome_municipio' => 'São Gonçalo do Rio Preto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125606,
                'nome_municipio' => 'Felisburgo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125705,
                'nome_municipio' => 'Felixlândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125804,
                'nome_municipio' => 'Fernandes Tourinho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125903,
                'nome_municipio' => 'Ferros',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3125952,
                'nome_municipio' => 'Fervedouro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126000,
                'nome_municipio' => 'Florestal',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126109,
                'nome_municipio' => 'Formiga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126208,
                'nome_municipio' => 'Formoso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126307,
                'nome_municipio' => 'Fortaleza de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126406,
                'nome_municipio' => 'Fortuna de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126505,
                'nome_municipio' => 'Francisco Badaró',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126604,
                'nome_municipio' => 'Francisco Dumont',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126703,
                'nome_municipio' => 'Francisco Sá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126752,
                'nome_municipio' => 'Franciscópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126802,
                'nome_municipio' => 'Frei Gaspar',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126901,
                'nome_municipio' => 'Frei Inocêncio',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3126950,
                'nome_municipio' => 'Frei Lagonegro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127008,
                'nome_municipio' => 'Fronteira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127057,
                'nome_municipio' => 'Fronteira dos Vales',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127073,
                'nome_municipio' => 'Fruta de Leite',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127107,
                'nome_municipio' => 'Frutal',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127206,
                'nome_municipio' => 'Funilândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127305,
                'nome_municipio' => 'Galiléia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127339,
                'nome_municipio' => 'Gameleiras',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127354,
                'nome_municipio' => 'Glaucilândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127370,
                'nome_municipio' => 'Goiabeira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127388,
                'nome_municipio' => 'Goianá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127404,
                'nome_municipio' => 'Gonçalves',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127503,
                'nome_municipio' => 'Gonzaga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127602,
                'nome_municipio' => 'Gouveia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127701,
                'nome_municipio' => 'Governador Valadares',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127800,
                'nome_municipio' => 'Grão Mogol',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3127909,
                'nome_municipio' => 'Grupiara',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128006,
                'nome_municipio' => 'Guanhães',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128105,
                'nome_municipio' => 'Guapé',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128204,
                'nome_municipio' => 'Guaraciaba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128253,
                'nome_municipio' => 'Guaraciama',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128303,
                'nome_municipio' => 'Guaranésia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128402,
                'nome_municipio' => 'Guarani',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128501,
                'nome_municipio' => 'Guarará',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128600,
                'nome_municipio' => 'Guarda-Mor',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128709,
                'nome_municipio' => 'Guaxupé',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128808,
                'nome_municipio' => 'Guidoval',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3128907,
                'nome_municipio' => 'Guimarânia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129004,
                'nome_municipio' => 'Guiricema',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129103,
                'nome_municipio' => 'Gurinhatã',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129202,
                'nome_municipio' => 'Heliodora',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129301,
                'nome_municipio' => 'Iapu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129400,
                'nome_municipio' => 'Ibertioga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129509,
                'nome_municipio' => 'Ibiá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129608,
                'nome_municipio' => 'Ibiaí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129657,
                'nome_municipio' => 'Ibiracatu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129707,
                'nome_municipio' => 'Ibiraci',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129806,
                'nome_municipio' => 'Ibirité',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3129905,
                'nome_municipio' => 'Ibitiúra de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130002,
                'nome_municipio' => 'Ibituruna',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130051,
                'nome_municipio' => 'Icaraí de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130101,
                'nome_municipio' => 'Igarapé',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130200,
                'nome_municipio' => 'Igaratinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130309,
                'nome_municipio' => 'Iguatama',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130408,
                'nome_municipio' => 'Ijaci',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130507,
                'nome_municipio' => 'Ilicínea',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130556,
                'nome_municipio' => 'Imbé de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130606,
                'nome_municipio' => 'Inconfidentes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130655,
                'nome_municipio' => 'Indaiabira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130705,
                'nome_municipio' => 'Indianópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130804,
                'nome_municipio' => 'Ingaí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3130903,
                'nome_municipio' => 'Inhapim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131000,
                'nome_municipio' => 'Inhaúma',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131109,
                'nome_municipio' => 'Inimutaba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131158,
                'nome_municipio' => 'Ipaba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131208,
                'nome_municipio' => 'Ipanema',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131307,
                'nome_municipio' => 'Ipatinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131406,
                'nome_municipio' => 'Ipiaçu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131505,
                'nome_municipio' => 'Ipuiúna',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131604,
                'nome_municipio' => 'Iraí de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131703,
                'nome_municipio' => 'Itabira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131802,
                'nome_municipio' => 'Itabirinha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3131901,
                'nome_municipio' => 'Itabirito',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3132008,
                'nome_municipio' => 'Itacambira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3132107,
                'nome_municipio' => 'Itacarambi',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3132206,
                'nome_municipio' => 'Itaguara',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3132305,
                'nome_municipio' => 'Itaipé',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3132404,
                'nome_municipio' => 'Itajubá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3132503,
                'nome_municipio' => 'Itamarandiba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3132602,
                'nome_municipio' => 'Itamarati de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3132701,
                'nome_municipio' => 'Itambacuri',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3132800,
                'nome_municipio' => 'Itambé do Mato Dentro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3132909,
                'nome_municipio' => 'Itamogi',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133006,
                'nome_municipio' => 'Itamonte',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133105,
                'nome_municipio' => 'Itanhandu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133204,
                'nome_municipio' => 'Itanhomi',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133303,
                'nome_municipio' => 'Itaobim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133402,
                'nome_municipio' => 'Itapagipe',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133501,
                'nome_municipio' => 'Itapecerica',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133600,
                'nome_municipio' => 'Itapeva',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133709,
                'nome_municipio' => 'Itatiaiuçu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133758,
                'nome_municipio' => 'Itaú de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133808,
                'nome_municipio' => 'Itaúna',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3133907,
                'nome_municipio' => 'Itaverava',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3134004,
                'nome_municipio' => 'Itinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3134103,
                'nome_municipio' => 'Itueta',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3134202,
                'nome_municipio' => 'Ituiutaba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3134301,
                'nome_municipio' => 'Itumirim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3134400,
                'nome_municipio' => 'Iturama',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3134509,
                'nome_municipio' => 'Itutinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3134608,
                'nome_municipio' => 'Jaboticatubas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3134707,
                'nome_municipio' => 'Jacinto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3134806,
                'nome_municipio' => 'Jacuí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3134905,
                'nome_municipio' => 'Jacutinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135001,
                'nome_municipio' => 'Jaguaraçu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135050,
                'nome_municipio' => 'Jaíba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135076,
                'nome_municipio' => 'Jampruca',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135100,
                'nome_municipio' => 'Janaúba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135209,
                'nome_municipio' => 'Januária',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135308,
                'nome_municipio' => 'Japaraíba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135357,
                'nome_municipio' => 'Japonvar',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135407,
                'nome_municipio' => 'Jeceaba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135456,
                'nome_municipio' => 'Jenipapo de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135506,
                'nome_municipio' => 'Jequeri',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135605,
                'nome_municipio' => 'Jequitaí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135704,
                'nome_municipio' => 'Jequitibá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135803,
                'nome_municipio' => 'Jequitinhonha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3135902,
                'nome_municipio' => 'Jesuânia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136009,
                'nome_municipio' => 'Joaíma',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136108,
                'nome_municipio' => 'Joanésia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136207,
                'nome_municipio' => 'João Monlevade',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136306,
                'nome_municipio' => 'João Pinheiro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136405,
                'nome_municipio' => 'Joaquim Felício',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136504,
                'nome_municipio' => 'Jordânia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136520,
                'nome_municipio' => 'José Gonçalves de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136553,
                'nome_municipio' => 'José Raydan',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136579,
                'nome_municipio' => 'Josenópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136603,
                'nome_municipio' => 'Nova União',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136652,
                'nome_municipio' => 'Juatuba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136702,
                'nome_municipio' => 'Juiz de Fora',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136801,
                'nome_municipio' => 'Juramento',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136900,
                'nome_municipio' => 'Juruaia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3136959,
                'nome_municipio' => 'Juvenília',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137007,
                'nome_municipio' => 'Ladainha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137106,
                'nome_municipio' => 'Lagamar',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137205,
                'nome_municipio' => 'Lagoa da Prata',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137304,
                'nome_municipio' => 'Lagoa dos Patos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137403,
                'nome_municipio' => 'Lagoa Dourada',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137502,
                'nome_municipio' => 'Lagoa Formosa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137536,
                'nome_municipio' => 'Lagoa Grande',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137601,
                'nome_municipio' => 'Lagoa Santa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137700,
                'nome_municipio' => 'Lajinha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137809,
                'nome_municipio' => 'Lambari',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3137908,
                'nome_municipio' => 'Lamim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138005,
                'nome_municipio' => 'Laranjal',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138104,
                'nome_municipio' => 'Lassance',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138203,
                'nome_municipio' => 'Lavras',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138302,
                'nome_municipio' => 'Leandro Ferreira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138351,
                'nome_municipio' => 'Leme do Prado',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138401,
                'nome_municipio' => 'Leopoldina',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138500,
                'nome_municipio' => 'Liberdade',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138609,
                'nome_municipio' => 'Lima Duarte',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138625,
                'nome_municipio' => 'Limeira do Oeste',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138658,
                'nome_municipio' => 'Lontra',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138674,
                'nome_municipio' => 'Luisburgo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138682,
                'nome_municipio' => 'Luislândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138708,
                'nome_municipio' => 'Luminárias',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138807,
                'nome_municipio' => 'Luz',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3138906,
                'nome_municipio' => 'Machacalis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139003,
                'nome_municipio' => 'Machado',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139102,
                'nome_municipio' => 'Madre de Deus de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139201,
                'nome_municipio' => 'Malacacheta',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139250,
                'nome_municipio' => 'Mamonas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139300,
                'nome_municipio' => 'Manga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139409,
                'nome_municipio' => 'Manhuaçu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139508,
                'nome_municipio' => 'Manhumirim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139607,
                'nome_municipio' => 'Mantena',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139706,
                'nome_municipio' => 'Maravilhas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139805,
                'nome_municipio' => 'Mar de Espanha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3139904,
                'nome_municipio' => 'Maria da Fé',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140001,
                'nome_municipio' => 'Mariana',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140100,
                'nome_municipio' => 'Marilac',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140159,
                'nome_municipio' => 'Mário Campos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140209,
                'nome_municipio' => 'Maripá de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140308,
                'nome_municipio' => 'Marliéria',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140407,
                'nome_municipio' => 'Marmelópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140506,
                'nome_municipio' => 'Martinho Campos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140530,
                'nome_municipio' => 'Martins Soares',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140555,
                'nome_municipio' => 'Mata Verde',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140605,
                'nome_municipio' => 'Materlândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140704,
                'nome_municipio' => 'Mateus Leme',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140803,
                'nome_municipio' => 'Matias Barbosa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140852,
                'nome_municipio' => 'Matias Cardoso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3140902,
                'nome_municipio' => 'Matipó',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3141009,
                'nome_municipio' => 'Mato Verde',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3141108,
                'nome_municipio' => 'Matozinhos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3141207,
                'nome_municipio' => 'Matutina',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3141306,
                'nome_municipio' => 'Medeiros',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3141405,
                'nome_municipio' => 'Medina',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3141504,
                'nome_municipio' => 'Mendes Pimentel',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3141603,
                'nome_municipio' => 'Mercês',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3141702,
                'nome_municipio' => 'Mesquita',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3141801,
                'nome_municipio' => 'Minas Novas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3141900,
                'nome_municipio' => 'Minduri',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142007,
                'nome_municipio' => 'Mirabela',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142106,
                'nome_municipio' => 'Miradouro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142205,
                'nome_municipio' => 'Miraí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142254,
                'nome_municipio' => 'Miravânia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142304,
                'nome_municipio' => 'Moeda',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142403,
                'nome_municipio' => 'Moema',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142502,
                'nome_municipio' => 'Monjolos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142601,
                'nome_municipio' => 'Monsenhor Paulo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142700,
                'nome_municipio' => 'Montalvânia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142809,
                'nome_municipio' => 'Monte Alegre de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3142908,
                'nome_municipio' => 'Monte Azul',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143005,
                'nome_municipio' => 'Monte Belo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143104,
                'nome_municipio' => 'Monte Carmelo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143153,
                'nome_municipio' => 'Monte Formoso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143203,
                'nome_municipio' => 'Monte Santo de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143302,
                'nome_municipio' => 'Montes Claros',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143401,
                'nome_municipio' => 'Monte Sião',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143450,
                'nome_municipio' => 'Montezuma',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143500,
                'nome_municipio' => 'Morada Nova de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143609,
                'nome_municipio' => 'Morro da Garça',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143708,
                'nome_municipio' => 'Morro do Pilar',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143807,
                'nome_municipio' => 'Munhoz',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3143906,
                'nome_municipio' => 'Muriaé',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144003,
                'nome_municipio' => 'Mutum',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144102,
                'nome_municipio' => 'Muzambinho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144201,
                'nome_municipio' => 'Nacip Raydan',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144300,
                'nome_municipio' => 'Nanuque',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144359,
                'nome_municipio' => 'Naque',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144375,
                'nome_municipio' => 'Natalândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144409,
                'nome_municipio' => 'Natércia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144508,
                'nome_municipio' => 'Nazareno',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144607,
                'nome_municipio' => 'Nepomuceno',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144656,
                'nome_municipio' => 'Ninheira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144672,
                'nome_municipio' => 'Nova Belém',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144706,
                'nome_municipio' => 'Nova Era',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144805,
                'nome_municipio' => 'Nova Lima',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3144904,
                'nome_municipio' => 'Nova Módica',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145000,
                'nome_municipio' => 'Nova Ponte',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145059,
                'nome_municipio' => 'Nova Porteirinha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145109,
                'nome_municipio' => 'Nova Resende',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145208,
                'nome_municipio' => 'Nova Serrana',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145307,
                'nome_municipio' => 'Novo Cruzeiro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145356,
                'nome_municipio' => 'Novo Oriente de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145372,
                'nome_municipio' => 'Novorizonte',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145406,
                'nome_municipio' => 'Olaria',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145455,
                'nome_municipio' => 'Olhos-d\'Água',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145505,
                'nome_municipio' => 'Olímpio Noronha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145604,
                'nome_municipio' => 'Oliveira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145703,
                'nome_municipio' => 'Oliveira Fortes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145802,
                'nome_municipio' => 'Onça de Pitangui',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145851,
                'nome_municipio' => 'Oratórios',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145877,
                'nome_municipio' => 'Orizânia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3145901,
                'nome_municipio' => 'Ouro Branco',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146008,
                'nome_municipio' => 'Ouro Fino',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146107,
                'nome_municipio' => 'Ouro Preto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146206,
                'nome_municipio' => 'Ouro Verde de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146255,
                'nome_municipio' => 'Padre Carvalho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146305,
                'nome_municipio' => 'Padre Paraíso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146404,
                'nome_municipio' => 'Paineiras',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146503,
                'nome_municipio' => 'Pains',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146552,
                'nome_municipio' => 'Pai Pedro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146602,
                'nome_municipio' => 'Paiva',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146701,
                'nome_municipio' => 'Palma',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146750,
                'nome_municipio' => 'Palmópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3146909,
                'nome_municipio' => 'Papagaios',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147006,
                'nome_municipio' => 'Paracatu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147105,
                'nome_municipio' => 'Pará de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147204,
                'nome_municipio' => 'Paraguaçu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147303,
                'nome_municipio' => 'Paraisópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147402,
                'nome_municipio' => 'Paraopeba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147501,
                'nome_municipio' => 'Passabém',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147600,
                'nome_municipio' => 'Passa Quatro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147709,
                'nome_municipio' => 'Passa Tempo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147808,
                'nome_municipio' => 'Passa Vinte',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147907,
                'nome_municipio' => 'Passos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3147956,
                'nome_municipio' => 'Patis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148004,
                'nome_municipio' => 'Patos de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148103,
                'nome_municipio' => 'Patrocínio',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148202,
                'nome_municipio' => 'Patrocínio do Muriaé',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148301,
                'nome_municipio' => 'Paula Cândido',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148400,
                'nome_municipio' => 'Paulistas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148509,
                'nome_municipio' => 'Pavão',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148608,
                'nome_municipio' => 'Peçanha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148707,
                'nome_municipio' => 'Pedra Azul',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148756,
                'nome_municipio' => 'Pedra Bonita',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148806,
                'nome_municipio' => 'Pedra do Anta',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3148905,
                'nome_municipio' => 'Pedra do Indaiá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149002,
                'nome_municipio' => 'Pedra Dourada',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149101,
                'nome_municipio' => 'Pedralva',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149150,
                'nome_municipio' => 'Pedras de Maria da Cruz',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149200,
                'nome_municipio' => 'Pedrinópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149309,
                'nome_municipio' => 'Pedro Leopoldo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149408,
                'nome_municipio' => 'Pedro Teixeira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149507,
                'nome_municipio' => 'Pequeri',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149606,
                'nome_municipio' => 'Pequi',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149705,
                'nome_municipio' => 'Perdigão',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149804,
                'nome_municipio' => 'Perdizes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149903,
                'nome_municipio' => 'Perdões',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3149952,
                'nome_municipio' => 'Periquito',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150000,
                'nome_municipio' => 'Pescador',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150109,
                'nome_municipio' => 'Piau',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150158,
                'nome_municipio' => 'Piedade de Caratinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150208,
                'nome_municipio' => 'Piedade de Ponte Nova',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150307,
                'nome_municipio' => 'Piedade do Rio Grande',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150406,
                'nome_municipio' => 'Piedade dos Gerais',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150505,
                'nome_municipio' => 'Pimenta',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150539,
                'nome_municipio' => 'Pingo-d\'Água',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150570,
                'nome_municipio' => 'Pintópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150604,
                'nome_municipio' => 'Piracema',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150703,
                'nome_municipio' => 'Pirajuba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150802,
                'nome_municipio' => 'Piranga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3150901,
                'nome_municipio' => 'Piranguçu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3151008,
                'nome_municipio' => 'Piranguinho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3151107,
                'nome_municipio' => 'Pirapetinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3151206,
                'nome_municipio' => 'Pirapora',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3151305,
                'nome_municipio' => 'Piraúba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3151404,
                'nome_municipio' => 'Pitangui',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3151503,
                'nome_municipio' => 'Piumhi',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3151602,
                'nome_municipio' => 'Planura',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3151701,
                'nome_municipio' => 'Poço Fundo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3151800,
                'nome_municipio' => 'Poços de Caldas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3151909,
                'nome_municipio' => 'Pocrane',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152006,
                'nome_municipio' => 'Pompéu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152105,
                'nome_municipio' => 'Ponte Nova',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152131,
                'nome_municipio' => 'Ponto Chique',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152170,
                'nome_municipio' => 'Ponto dos Volantes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152204,
                'nome_municipio' => 'Porteirinha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152303,
                'nome_municipio' => 'Porto Firme',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152402,
                'nome_municipio' => 'Poté',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152501,
                'nome_municipio' => 'Pouso Alegre',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152600,
                'nome_municipio' => 'Pouso Alto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152709,
                'nome_municipio' => 'Prados',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152808,
                'nome_municipio' => 'Prata',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3152907,
                'nome_municipio' => 'Pratápolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3153004,
                'nome_municipio' => 'Pratinha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3153103,
                'nome_municipio' => 'Presidente Bernardes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3153202,
                'nome_municipio' => 'Presidente Juscelino',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3153301,
                'nome_municipio' => 'Presidente Kubitschek',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3153400,
                'nome_municipio' => 'Presidente Olegário',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3153509,
                'nome_municipio' => 'Alto Jequitibá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3153608,
                'nome_municipio' => 'Prudente de Morais',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3153707,
                'nome_municipio' => 'Quartel Geral',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3153806,
                'nome_municipio' => 'Queluzito',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3153905,
                'nome_municipio' => 'Raposos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154002,
                'nome_municipio' => 'Raul Soares',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154101,
                'nome_municipio' => 'Recreio',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154150,
                'nome_municipio' => 'Reduto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154200,
                'nome_municipio' => 'Resende Costa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154309,
                'nome_municipio' => 'Resplendor',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154408,
                'nome_municipio' => 'Ressaquinha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154457,
                'nome_municipio' => 'Riachinho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154507,
                'nome_municipio' => 'Riacho dos Machados',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154606,
                'nome_municipio' => 'Ribeirão das Neves',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154705,
                'nome_municipio' => 'Ribeirão Vermelho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154804,
                'nome_municipio' => 'Rio Acima',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3154903,
                'nome_municipio' => 'Rio Casca',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3155009,
                'nome_municipio' => 'Rio Doce',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3155108,
                'nome_municipio' => 'Rio do Prado',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3155207,
                'nome_municipio' => 'Rio Espera',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3155306,
                'nome_municipio' => 'Rio Manso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3155405,
                'nome_municipio' => 'Rio Novo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3155504,
                'nome_municipio' => 'Rio Paranaíba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3155603,
                'nome_municipio' => 'Rio Pardo de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3155702,
                'nome_municipio' => 'Rio Piracicaba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3155801,
                'nome_municipio' => 'Rio Pomba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3155900,
                'nome_municipio' => 'Rio Preto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156007,
                'nome_municipio' => 'Rio Vermelho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156106,
                'nome_municipio' => 'Ritápolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156205,
                'nome_municipio' => 'Rochedo de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156304,
                'nome_municipio' => 'Rodeiro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156403,
                'nome_municipio' => 'Romaria',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156452,
                'nome_municipio' => 'Rosário da Limeira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156502,
                'nome_municipio' => 'Rubelita',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156601,
                'nome_municipio' => 'Rubim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156700,
                'nome_municipio' => 'Sabará',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156809,
                'nome_municipio' => 'Sabinópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3156908,
                'nome_municipio' => 'Sacramento',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157005,
                'nome_municipio' => 'Salinas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157104,
                'nome_municipio' => 'Salto da Divisa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157203,
                'nome_municipio' => 'Santa Bárbara',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157252,
                'nome_municipio' => 'Santa Bárbara do Leste',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157278,
                'nome_municipio' => 'Santa Bárbara do Monte Verde',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157302,
                'nome_municipio' => 'Santa Bárbara do Tugúrio',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157336,
                'nome_municipio' => 'Santa Cruz de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157377,
                'nome_municipio' => 'Santa Cruz de Salinas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157401,
                'nome_municipio' => 'Santa Cruz do Escalvado',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157500,
                'nome_municipio' => 'Santa Efigênia de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157609,
                'nome_municipio' => 'Santa Fé de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157658,
                'nome_municipio' => 'Santa Helena de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157708,
                'nome_municipio' => 'Santa Juliana',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157807,
                'nome_municipio' => 'Santa Luzia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3157906,
                'nome_municipio' => 'Santa Margarida',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158003,
                'nome_municipio' => 'Santa Maria de Itabira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158102,
                'nome_municipio' => 'Santa Maria do Salto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158201,
                'nome_municipio' => 'Santa Maria do Suaçuí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158300,
                'nome_municipio' => 'Santana da Vargem',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158409,
                'nome_municipio' => 'Santana de Cataguases',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158508,
                'nome_municipio' => 'Santana de Pirapama',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158607,
                'nome_municipio' => 'Santana do Deserto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158706,
                'nome_municipio' => 'Santana do Garambéu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158805,
                'nome_municipio' => 'Santana do Jacaré',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158904,
                'nome_municipio' => 'Santana do Manhuaçu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3158953,
                'nome_municipio' => 'Santana do Paraíso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159001,
                'nome_municipio' => 'Santana do Riacho',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159100,
                'nome_municipio' => 'Santana dos Montes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159209,
                'nome_municipio' => 'Santa Rita de Caldas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159308,
                'nome_municipio' => 'Santa Rita de Jacutinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159357,
                'nome_municipio' => 'Santa Rita de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159407,
                'nome_municipio' => 'Santa Rita de Ibitipoca',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159506,
                'nome_municipio' => 'Santa Rita do Itueto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159605,
                'nome_municipio' => 'Santa Rita do Sapucaí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159704,
                'nome_municipio' => 'Santa Rosa da Serra',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159803,
                'nome_municipio' => 'Santa Vitória',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3159902,
                'nome_municipio' => 'Santo Antônio do Amparo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160009,
                'nome_municipio' => 'Santo Antônio do Aventureiro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160108,
                'nome_municipio' => 'Santo Antônio do Grama',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160207,
                'nome_municipio' => 'Santo Antônio do Itambé',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160306,
                'nome_municipio' => 'Santo Antônio do Jacinto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160405,
                'nome_municipio' => 'Santo Antônio do Monte',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160454,
                'nome_municipio' => 'Santo Antônio do Retiro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160504,
                'nome_municipio' => 'Santo Antônio do Rio Abaixo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160603,
                'nome_municipio' => 'Santo Hipólito',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160702,
                'nome_municipio' => 'Santos Dumont',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160801,
                'nome_municipio' => 'São Bento Abade',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160900,
                'nome_municipio' => 'São Brás do Suaçuí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3160959,
                'nome_municipio' => 'São Domingos das Dores',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161007,
                'nome_municipio' => 'São Domingos do Prata',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161056,
                'nome_municipio' => 'São Félix de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161106,
                'nome_municipio' => 'São Francisco',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161205,
                'nome_municipio' => 'São Francisco de Paula',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161304,
                'nome_municipio' => 'São Francisco de Sales',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161403,
                'nome_municipio' => 'São Francisco do Glória',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161502,
                'nome_municipio' => 'São Geraldo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161601,
                'nome_municipio' => 'São Geraldo da Piedade',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161650,
                'nome_municipio' => 'São Geraldo do Baixio',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161700,
                'nome_municipio' => 'São Gonçalo do Abaeté',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161809,
                'nome_municipio' => 'São Gonçalo do Pará',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3161908,
                'nome_municipio' => 'São Gonçalo do Rio Abaixo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162005,
                'nome_municipio' => 'São Gonçalo do Sapucaí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162104,
                'nome_municipio' => 'São Gotardo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162203,
                'nome_municipio' => 'São João Batista do Glória',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162252,
                'nome_municipio' => 'São João da Lagoa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162302,
                'nome_municipio' => 'São João da Mata',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162401,
                'nome_municipio' => 'São João da Ponte',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162450,
                'nome_municipio' => 'São João das Missões',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162500,
                'nome_municipio' => 'São João del Rei',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162559,
                'nome_municipio' => 'São João do Manhuaçu',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162575,
                'nome_municipio' => 'São João do Manteninha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162609,
                'nome_municipio' => 'São João do Oriente',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162658,
                'nome_municipio' => 'São João do Pacuí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162708,
                'nome_municipio' => 'São João do Paraíso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162807,
                'nome_municipio' => 'São João Evangelista',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162906,
                'nome_municipio' => 'São João Nepomuceno',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162922,
                'nome_municipio' => 'São Joaquim de Bicas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162948,
                'nome_municipio' => 'São José da Barra',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3162955,
                'nome_municipio' => 'São José da Lapa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3163003,
                'nome_municipio' => 'São José da Safira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3163102,
                'nome_municipio' => 'São José da Varginha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3163201,
                'nome_municipio' => 'São José do Alegre',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3163300,
                'nome_municipio' => 'São José do Divino',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3163409,
                'nome_municipio' => 'São José do Goiabal',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3163508,
                'nome_municipio' => 'São José do Jacuri',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3163607,
                'nome_municipio' => 'São José do Mantimento',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3163706,
                'nome_municipio' => 'São Lourenço',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3163805,
                'nome_municipio' => 'São Miguel do Anta',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3163904,
                'nome_municipio' => 'São Pedro da União',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164001,
                'nome_municipio' => 'São Pedro dos Ferros',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164100,
                'nome_municipio' => 'São Pedro do Suaçuí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164209,
                'nome_municipio' => 'São Romão',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164308,
                'nome_municipio' => 'São Roque de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164407,
                'nome_municipio' => 'São Sebastião da Bela Vista',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164431,
                'nome_municipio' => 'São Sebastião da Vargem Alegre',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164472,
                'nome_municipio' => 'São Sebastião do Anta',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164506,
                'nome_municipio' => 'São Sebastião do Maranhão',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164605,
                'nome_municipio' => 'São Sebastião do Oeste',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164704,
                'nome_municipio' => 'São Sebastião do Paraíso',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164803,
                'nome_municipio' => 'São Sebastião do Rio Preto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3164902,
                'nome_municipio' => 'São Sebastião do Rio Verde',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165008,
                'nome_municipio' => 'São Tiago',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165107,
                'nome_municipio' => 'São Tomás de Aquino',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165206,
                'nome_municipio' => 'São Tomé das Letras',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165305,
                'nome_municipio' => 'São Vicente de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165404,
                'nome_municipio' => 'Sapucaí-Mirim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165503,
                'nome_municipio' => 'Sardoá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165537,
                'nome_municipio' => 'Sarzedo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165552,
                'nome_municipio' => 'Setubinha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165560,
                'nome_municipio' => 'Sem-Peixe',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165578,
                'nome_municipio' => 'Senador Amaral',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165602,
                'nome_municipio' => 'Senador Cortes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165701,
                'nome_municipio' => 'Senador Firmino',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165800,
                'nome_municipio' => 'Senador José Bento',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3165909,
                'nome_municipio' => 'Senador Modestino Gonçalves',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166006,
                'nome_municipio' => 'Senhora de Oliveira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166105,
                'nome_municipio' => 'Senhora do Porto',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166204,
                'nome_municipio' => 'Senhora dos Remédios',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166303,
                'nome_municipio' => 'Sericita',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166402,
                'nome_municipio' => 'Seritinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166501,
                'nome_municipio' => 'Serra Azul de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166600,
                'nome_municipio' => 'Serra da Saudade',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166709,
                'nome_municipio' => 'Serra dos Aimorés',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166808,
                'nome_municipio' => 'Serra do Salitre',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166907,
                'nome_municipio' => 'Serrania',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3166956,
                'nome_municipio' => 'Serranópolis de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3167004,
                'nome_municipio' => 'Serranos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3167103,
                'nome_municipio' => 'Serro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3167202,
                'nome_municipio' => 'Sete Lagoas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3167301,
                'nome_municipio' => 'Silveirânia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3167400,
                'nome_municipio' => 'Silvianópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3167509,
                'nome_municipio' => 'Simão Pereira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3167608,
                'nome_municipio' => 'Simonésia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3167707,
                'nome_municipio' => 'Sobrália',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3167806,
                'nome_municipio' => 'Soledade de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3167905,
                'nome_municipio' => 'Tabuleiro',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168002,
                'nome_municipio' => 'Taiobeiras',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168051,
                'nome_municipio' => 'Taparuba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168101,
                'nome_municipio' => 'Tapira',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168200,
                'nome_municipio' => 'Tapiraí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168309,
                'nome_municipio' => 'Taquaraçu de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168408,
                'nome_municipio' => 'Tarumirim',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168507,
                'nome_municipio' => 'Teixeiras',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168606,
                'nome_municipio' => 'Teófilo Otoni',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168705,
                'nome_municipio' => 'Timóteo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168804,
                'nome_municipio' => 'Tiradentes',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3168903,
                'nome_municipio' => 'Tiros',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169000,
                'nome_municipio' => 'Tocantins',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169059,
                'nome_municipio' => 'Tocos do Moji',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169109,
                'nome_municipio' => 'Toledo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169208,
                'nome_municipio' => 'Tombos',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169307,
                'nome_municipio' => 'Três Corações',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169356,
                'nome_municipio' => 'Três Marias',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169406,
                'nome_municipio' => 'Três Pontas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169505,
                'nome_municipio' => 'Tumiritinga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169604,
                'nome_municipio' => 'Tupaciguara',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169703,
                'nome_municipio' => 'Turmalina',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169802,
                'nome_municipio' => 'Turvolândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3169901,
                'nome_municipio' => 'Ubá',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170008,
                'nome_municipio' => 'Ubaí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170057,
                'nome_municipio' => 'Ubaporanga',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170107,
                'nome_municipio' => 'Uberaba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170206,
                'nome_municipio' => 'Uberlândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170305,
                'nome_municipio' => 'Umburatiba',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170404,
                'nome_municipio' => 'Unaí',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170438,
                'nome_municipio' => 'União de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170479,
                'nome_municipio' => 'Uruana de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170503,
                'nome_municipio' => 'Urucânia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170529,
                'nome_municipio' => 'Urucuia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170578,
                'nome_municipio' => 'Vargem Alegre',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170602,
                'nome_municipio' => 'Vargem Bonita',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170651,
                'nome_municipio' => 'Vargem Grande do Rio Pardo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170701,
                'nome_municipio' => 'Varginha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170750,
                'nome_municipio' => 'Varjão de Minas',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170800,
                'nome_municipio' => 'Várzea da Palma',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3170909,
                'nome_municipio' => 'Varzelândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171006,
                'nome_municipio' => 'Vazante',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171030,
                'nome_municipio' => 'Verdelândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171071,
                'nome_municipio' => 'Veredinha',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171105,
                'nome_municipio' => 'Veríssimo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171154,
                'nome_municipio' => 'Vermelho Novo',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171204,
                'nome_municipio' => 'Vespasiano',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171303,
                'nome_municipio' => 'Viçosa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171402,
                'nome_municipio' => 'Vieiras',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171501,
                'nome_municipio' => 'Mathias Lobato',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171600,
                'nome_municipio' => 'Virgem da Lapa',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171709,
                'nome_municipio' => 'Virgínia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171808,
                'nome_municipio' => 'Virginópolis',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3171907,
                'nome_municipio' => 'Virgolândia',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3172004,
                'nome_municipio' => 'Visconde do Rio Branco',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3172103,
                'nome_municipio' => 'Volta Grande',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3172202,
                'nome_municipio' => 'Wenceslau Braz',
                'uf' => 'MG',
            ],
            [
                'id_municipio' => 3200102,
                'nome_municipio' => 'Afonso Cláudio',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200136,
                'nome_municipio' => 'Águia Branca',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200169,
                'nome_municipio' => 'Água Doce do Norte',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200201,
                'nome_municipio' => 'Alegre',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200300,
                'nome_municipio' => 'Alfredo Chaves',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200359,
                'nome_municipio' => 'Alto Rio Novo',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200409,
                'nome_municipio' => 'Anchieta',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200508,
                'nome_municipio' => 'Apiacá',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200607,
                'nome_municipio' => 'Aracruz',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200706,
                'nome_municipio' => 'Atílio Vivácqua',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200805,
                'nome_municipio' => 'Baixo Guandu',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3200904,
                'nome_municipio' => 'Barra de São Francisco',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201001,
                'nome_municipio' => 'Boa Esperança',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201100,
                'nome_municipio' => 'Bom Jesus do Norte',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201159,
                'nome_municipio' => 'Brejetuba',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201209,
                'nome_municipio' => 'Cachoeiro de Itapemirim',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201308,
                'nome_municipio' => 'Cariacica',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201407,
                'nome_municipio' => 'Castelo',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201506,
                'nome_municipio' => 'Colatina',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201605,
                'nome_municipio' => 'Conceição da Barra',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201704,
                'nome_municipio' => 'Conceição do Castelo',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201803,
                'nome_municipio' => 'Divino de São Lourenço',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3201902,
                'nome_municipio' => 'Domingos Martins',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202009,
                'nome_municipio' => 'Dores do Rio Preto',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202108,
                'nome_municipio' => 'Ecoporanga',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202207,
                'nome_municipio' => 'Fundão',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202256,
                'nome_municipio' => 'Governador Lindenberg',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202306,
                'nome_municipio' => 'Guaçuí',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202405,
                'nome_municipio' => 'Guarapari',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202454,
                'nome_municipio' => 'Ibatiba',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202504,
                'nome_municipio' => 'Ibiraçu',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202553,
                'nome_municipio' => 'Ibitirama',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202603,
                'nome_municipio' => 'Iconha',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202652,
                'nome_municipio' => 'Irupi',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202702,
                'nome_municipio' => 'Itaguaçu',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202801,
                'nome_municipio' => 'Itapemirim',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3202900,
                'nome_municipio' => 'Itarana',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203007,
                'nome_municipio' => 'Iúna',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203056,
                'nome_municipio' => 'Jaguaré',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203106,
                'nome_municipio' => 'Jerônimo Monteiro',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203130,
                'nome_municipio' => 'João Neiva',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203163,
                'nome_municipio' => 'Laranja da Terra',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203205,
                'nome_municipio' => 'Linhares',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203304,
                'nome_municipio' => 'Mantenópolis',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203320,
                'nome_municipio' => 'Marataízes',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203346,
                'nome_municipio' => 'Marechal Floriano',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203353,
                'nome_municipio' => 'Marilândia',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203403,
                'nome_municipio' => 'Mimoso do Sul',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203502,
                'nome_municipio' => 'Montanha',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203601,
                'nome_municipio' => 'Mucurici',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203700,
                'nome_municipio' => 'Muniz Freire',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203809,
                'nome_municipio' => 'Muqui',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3203908,
                'nome_municipio' => 'Nova Venécia',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204005,
                'nome_municipio' => 'Pancas',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204054,
                'nome_municipio' => 'Pedro Canário',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204104,
                'nome_municipio' => 'Pinheiros',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204203,
                'nome_municipio' => 'Piúma',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204252,
                'nome_municipio' => 'Ponto Belo',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204302,
                'nome_municipio' => 'Presidente Kennedy',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204351,
                'nome_municipio' => 'Rio Bananal',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204401,
                'nome_municipio' => 'Rio Novo do Sul',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204500,
                'nome_municipio' => 'Santa Leopoldina',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204559,
                'nome_municipio' => 'Santa Maria de Jetibá',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204609,
                'nome_municipio' => 'Santa Teresa',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204658,
                'nome_municipio' => 'São Domingos do Norte',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204708,
                'nome_municipio' => 'São Gabriel da Palha',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204807,
                'nome_municipio' => 'São José do Calçado',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204906,
                'nome_municipio' => 'São Mateus',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3204955,
                'nome_municipio' => 'São Roque do Canaã',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3205002,
                'nome_municipio' => 'Serra',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3205010,
                'nome_municipio' => 'Sooretama',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3205036,
                'nome_municipio' => 'Vargem Alta',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3205069,
                'nome_municipio' => 'Venda Nova do Imigrante',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3205101,
                'nome_municipio' => 'Viana',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3205150,
                'nome_municipio' => 'Vila Pavão',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3205176,
                'nome_municipio' => 'Vila Valério',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3205200,
                'nome_municipio' => 'Vila Velha',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3205309,
                'nome_municipio' => 'Vitória',
                'uf' => 'ES',
            ],
            [
                'id_municipio' => 3300100,
                'nome_municipio' => 'Angra dos Reis',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300159,
                'nome_municipio' => 'Aperibé',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300209,
                'nome_municipio' => 'Araruama',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300225,
                'nome_municipio' => 'Areal',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300233,
                'nome_municipio' => 'Armação dos Búzios',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300258,
                'nome_municipio' => 'Arraial do Cabo',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300308,
                'nome_municipio' => 'Barra do Piraí',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300407,
                'nome_municipio' => 'Barra Mansa',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300456,
                'nome_municipio' => 'Belford Roxo',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300506,
                'nome_municipio' => 'Bom Jardim',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300605,
                'nome_municipio' => 'Bom Jesus do Itabapoana',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300704,
                'nome_municipio' => 'Cabo Frio',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300803,
                'nome_municipio' => 'Cachoeiras de Macacu',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300902,
                'nome_municipio' => 'Cambuci',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300936,
                'nome_municipio' => 'Carapebus',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3300951,
                'nome_municipio' => 'Comendador Levy Gasparian',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301009,
                'nome_municipio' => 'Campos dos Goytacazes',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301108,
                'nome_municipio' => 'Cantagalo',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301157,
                'nome_municipio' => 'Cardoso Moreira',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301207,
                'nome_municipio' => 'Carmo',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301306,
                'nome_municipio' => 'Casimiro de Abreu',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301405,
                'nome_municipio' => 'Conceição de Macabu',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301504,
                'nome_municipio' => 'Cordeiro',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301603,
                'nome_municipio' => 'Duas Barras',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301702,
                'nome_municipio' => 'Duque de Caxias',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301801,
                'nome_municipio' => 'Engenheiro Paulo de Frontin',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301850,
                'nome_municipio' => 'Guapimirim',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301876,
                'nome_municipio' => 'Iguaba Grande',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3301900,
                'nome_municipio' => 'Itaboraí',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302007,
                'nome_municipio' => 'Itaguaí',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302056,
                'nome_municipio' => 'Italva',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302106,
                'nome_municipio' => 'Itaocara',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302205,
                'nome_municipio' => 'Itaperuna',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302254,
                'nome_municipio' => 'Itatiaia',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302270,
                'nome_municipio' => 'Japeri',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302304,
                'nome_municipio' => 'Laje do Muriaé',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302403,
                'nome_municipio' => 'Macaé',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302452,
                'nome_municipio' => 'Macuco',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302502,
                'nome_municipio' => 'Magé',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302601,
                'nome_municipio' => 'Mangaratiba',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302700,
                'nome_municipio' => 'Maricá',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302809,
                'nome_municipio' => 'Mendes',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302858,
                'nome_municipio' => 'Mesquita',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3302908,
                'nome_municipio' => 'Miguel Pereira',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303005,
                'nome_municipio' => 'Miracema',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303104,
                'nome_municipio' => 'Natividade',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303203,
                'nome_municipio' => 'Nilópolis',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303302,
                'nome_municipio' => 'Niterói',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303401,
                'nome_municipio' => 'Nova Friburgo',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303500,
                'nome_municipio' => 'Nova Iguaçu',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303609,
                'nome_municipio' => 'Paracambi',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303708,
                'nome_municipio' => 'Paraíba do Sul',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303807,
                'nome_municipio' => 'Paraty',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303856,
                'nome_municipio' => 'Paty do Alferes',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303906,
                'nome_municipio' => 'Petrópolis',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3303955,
                'nome_municipio' => 'Pinheiral',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304003,
                'nome_municipio' => 'Piraí',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304102,
                'nome_municipio' => 'Porciúncula',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304110,
                'nome_municipio' => 'Porto Real',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304128,
                'nome_municipio' => 'Quatis',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304144,
                'nome_municipio' => 'Queimados',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304151,
                'nome_municipio' => 'Quissamã',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304201,
                'nome_municipio' => 'Resende',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304300,
                'nome_municipio' => 'Rio Bonito',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304409,
                'nome_municipio' => 'Rio Claro',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304508,
                'nome_municipio' => 'Rio das Flores',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304524,
                'nome_municipio' => 'Rio das Ostras',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304557,
                'nome_municipio' => 'Rio de Janeiro',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304607,
                'nome_municipio' => 'Santa Maria Madalena',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304706,
                'nome_municipio' => 'Santo Antônio de Pádua',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304755,
                'nome_municipio' => 'São Francisco de Itabapoana',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304805,
                'nome_municipio' => 'São Fidélis',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3304904,
                'nome_municipio' => 'São Gonçalo',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305000,
                'nome_municipio' => 'São João da Barra',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305109,
                'nome_municipio' => 'São João de Meriti',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305133,
                'nome_municipio' => 'São José de Ubá',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305158,
                'nome_municipio' => 'São José do Vale do Rio Preto',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305208,
                'nome_municipio' => 'São Pedro da Aldeia',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305307,
                'nome_municipio' => 'São Sebastião do Alto',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305406,
                'nome_municipio' => 'Sapucaia',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305505,
                'nome_municipio' => 'Saquarema',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305554,
                'nome_municipio' => 'Seropédica',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305604,
                'nome_municipio' => 'Silva Jardim',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305703,
                'nome_municipio' => 'Sumidouro',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305752,
                'nome_municipio' => 'Tanguá',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305802,
                'nome_municipio' => 'Teresópolis',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3305901,
                'nome_municipio' => 'Trajano de Moraes',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3306008,
                'nome_municipio' => 'Três Rios',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3306107,
                'nome_municipio' => 'Valença',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3306156,
                'nome_municipio' => 'Varre-Sai',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3306206,
                'nome_municipio' => 'Vassouras',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3306305,
                'nome_municipio' => 'Volta Redonda',
                'uf' => 'RJ',
            ],
            [
                'id_municipio' => 3500105,
                'nome_municipio' => 'Adamantina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3500204,
                'nome_municipio' => 'Adolfo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3500303,
                'nome_municipio' => 'Aguaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3500402,
                'nome_municipio' => 'Águas da Prata',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3500501,
                'nome_municipio' => 'Águas de Lindóia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3500550,
                'nome_municipio' => 'Águas de Santa Bárbara',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3500600,
                'nome_municipio' => 'Águas de São Pedro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3500709,
                'nome_municipio' => 'Agudos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3500758,
                'nome_municipio' => 'Alambari',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3500808,
                'nome_municipio' => 'Alfredo Marcondes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3500907,
                'nome_municipio' => 'Altair',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501004,
                'nome_municipio' => 'Altinópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501103,
                'nome_municipio' => 'Alto Alegre',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501152,
                'nome_municipio' => 'Alumínio',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501202,
                'nome_municipio' => 'Álvares Florence',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501301,
                'nome_municipio' => 'Álvares Machado',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501400,
                'nome_municipio' => 'Álvaro de Carvalho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501509,
                'nome_municipio' => 'Alvinlândia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501608,
                'nome_municipio' => 'Americana',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501707,
                'nome_municipio' => 'Américo Brasiliense',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501806,
                'nome_municipio' => 'Américo de Campos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3501905,
                'nome_municipio' => 'Amparo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502002,
                'nome_municipio' => 'Analândia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502101,
                'nome_municipio' => 'Andradina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502200,
                'nome_municipio' => 'Angatuba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502309,
                'nome_municipio' => 'Anhembi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502408,
                'nome_municipio' => 'Anhumas',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502507,
                'nome_municipio' => 'Aparecida',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502606,
                'nome_municipio' => 'Aparecida d\'Oeste',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502705,
                'nome_municipio' => 'Apiaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502754,
                'nome_municipio' => 'Araçariguama',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502804,
                'nome_municipio' => 'Araçatuba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3502903,
                'nome_municipio' => 'Araçoiaba da Serra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503000,
                'nome_municipio' => 'Aramina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503109,
                'nome_municipio' => 'Arandu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503158,
                'nome_municipio' => 'Arapeí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503208,
                'nome_municipio' => 'Araraquara',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503307,
                'nome_municipio' => 'Araras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503356,
                'nome_municipio' => 'Arco-Íris',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503406,
                'nome_municipio' => 'Arealva',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503505,
                'nome_municipio' => 'Areias',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503604,
                'nome_municipio' => 'Areiópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503703,
                'nome_municipio' => 'Ariranha',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503802,
                'nome_municipio' => 'Artur Nogueira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503901,
                'nome_municipio' => 'Arujá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3503950,
                'nome_municipio' => 'Aspásia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3504008,
                'nome_municipio' => 'Assis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3504107,
                'nome_municipio' => 'Atibaia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3504206,
                'nome_municipio' => 'Auriflama',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3504305,
                'nome_municipio' => 'Avaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3504404,
                'nome_municipio' => 'Avanhandava',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3504503,
                'nome_municipio' => 'Avaré',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3504602,
                'nome_municipio' => 'Bady Bassitt',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3504701,
                'nome_municipio' => 'Balbinos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3504800,
                'nome_municipio' => 'Bálsamo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3504909,
                'nome_municipio' => 'Bananal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505005,
                'nome_municipio' => 'Barão de Antonina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505104,
                'nome_municipio' => 'Barbosa',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505203,
                'nome_municipio' => 'Bariri',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505302,
                'nome_municipio' => 'Barra Bonita',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505351,
                'nome_municipio' => 'Barra do Chapéu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505401,
                'nome_municipio' => 'Barra do Turvo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505500,
                'nome_municipio' => 'Barretos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505609,
                'nome_municipio' => 'Barrinha',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505708,
                'nome_municipio' => 'Barueri',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505807,
                'nome_municipio' => 'Bastos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3505906,
                'nome_municipio' => 'Batatais',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506003,
                'nome_municipio' => 'Bauru',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506102,
                'nome_municipio' => 'Bebedouro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506201,
                'nome_municipio' => 'Bento de Abreu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506300,
                'nome_municipio' => 'Bernardino de Campos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506359,
                'nome_municipio' => 'Bertioga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506409,
                'nome_municipio' => 'Bilac',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506508,
                'nome_municipio' => 'Birigui',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506607,
                'nome_municipio' => 'Biritiba Mirim',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506706,
                'nome_municipio' => 'Boa Esperança do Sul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506805,
                'nome_municipio' => 'Bocaina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3506904,
                'nome_municipio' => 'Bofete',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507001,
                'nome_municipio' => 'Boituva',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507100,
                'nome_municipio' => 'Bom Jesus dos Perdões',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507159,
                'nome_municipio' => 'Bom Sucesso de Itararé',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507209,
                'nome_municipio' => 'Borá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507308,
                'nome_municipio' => 'Boracéia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507407,
                'nome_municipio' => 'Borborema',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507456,
                'nome_municipio' => 'Borebi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507506,
                'nome_municipio' => 'Botucatu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507605,
                'nome_municipio' => 'Bragança Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507704,
                'nome_municipio' => 'Braúna',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507753,
                'nome_municipio' => 'Brejo Alegre',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507803,
                'nome_municipio' => 'Brodowski',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3507902,
                'nome_municipio' => 'Brotas',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3508009,
                'nome_municipio' => 'Buri',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3508108,
                'nome_municipio' => 'Buritama',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3508207,
                'nome_municipio' => 'Buritizal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3508306,
                'nome_municipio' => 'Cabrália Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3508405,
                'nome_municipio' => 'Cabreúva',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3508504,
                'nome_municipio' => 'Caçapava',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3508603,
                'nome_municipio' => 'Cachoeira Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3508702,
                'nome_municipio' => 'Caconde',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3508801,
                'nome_municipio' => 'Cafelândia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3508900,
                'nome_municipio' => 'Caiabu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509007,
                'nome_municipio' => 'Caieiras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509106,
                'nome_municipio' => 'Caiuá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509205,
                'nome_municipio' => 'Cajamar',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509254,
                'nome_municipio' => 'Cajati',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509304,
                'nome_municipio' => 'Cajobi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509403,
                'nome_municipio' => 'Cajuru',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509452,
                'nome_municipio' => 'Campina do Monte Alegre',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509502,
                'nome_municipio' => 'Campinas',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509601,
                'nome_municipio' => 'Campo Limpo Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509700,
                'nome_municipio' => 'Campos do Jordão',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509809,
                'nome_municipio' => 'Campos Novos Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509908,
                'nome_municipio' => 'Cananéia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3509957,
                'nome_municipio' => 'Canas',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510005,
                'nome_municipio' => 'Cândido Mota',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510104,
                'nome_municipio' => 'Cândido Rodrigues',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510153,
                'nome_municipio' => 'Canitar',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510203,
                'nome_municipio' => 'Capão Bonito',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510302,
                'nome_municipio' => 'Capela do Alto',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510401,
                'nome_municipio' => 'Capivari',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510500,
                'nome_municipio' => 'Caraguatatuba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510609,
                'nome_municipio' => 'Carapicuíba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510708,
                'nome_municipio' => 'Cardoso',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510807,
                'nome_municipio' => 'Casa Branca',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3510906,
                'nome_municipio' => 'Cássia dos Coqueiros',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3511003,
                'nome_municipio' => 'Castilho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3511102,
                'nome_municipio' => 'Catanduva',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3511201,
                'nome_municipio' => 'Catiguá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3511300,
                'nome_municipio' => 'Cedral',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3511409,
                'nome_municipio' => 'Cerqueira César',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3511508,
                'nome_municipio' => 'Cerquilho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3511607,
                'nome_municipio' => 'Cesário Lange',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3511706,
                'nome_municipio' => 'Charqueada',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3511904,
                'nome_municipio' => 'Clementina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3512001,
                'nome_municipio' => 'Colina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3512100,
                'nome_municipio' => 'Colômbia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3512209,
                'nome_municipio' => 'Conchal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3512308,
                'nome_municipio' => 'Conchas',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3512407,
                'nome_municipio' => 'Cordeirópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3512506,
                'nome_municipio' => 'Coroados',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3512605,
                'nome_municipio' => 'Coronel Macedo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3512704,
                'nome_municipio' => 'Corumbataí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3512803,
                'nome_municipio' => 'Cosmópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3512902,
                'nome_municipio' => 'Cosmorama',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513009,
                'nome_municipio' => 'Cotia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513108,
                'nome_municipio' => 'Cravinhos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513207,
                'nome_municipio' => 'Cristais Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513306,
                'nome_municipio' => 'Cruzália',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513405,
                'nome_municipio' => 'Cruzeiro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513504,
                'nome_municipio' => 'Cubatão',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513603,
                'nome_municipio' => 'Cunha',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513702,
                'nome_municipio' => 'Descalvado',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513801,
                'nome_municipio' => 'Diadema',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513850,
                'nome_municipio' => 'Dirce Reis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3513900,
                'nome_municipio' => 'Divinolândia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514007,
                'nome_municipio' => 'Dobrada',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514106,
                'nome_municipio' => 'Dois Córregos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514205,
                'nome_municipio' => 'Dolcinópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514304,
                'nome_municipio' => 'Dourado',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514403,
                'nome_municipio' => 'Dracena',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514502,
                'nome_municipio' => 'Duartina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514601,
                'nome_municipio' => 'Dumont',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514700,
                'nome_municipio' => 'Echaporã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514809,
                'nome_municipio' => 'Eldorado',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514908,
                'nome_municipio' => 'Elias Fausto',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514924,
                'nome_municipio' => 'Elisiário',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3514957,
                'nome_municipio' => 'Embaúba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515004,
                'nome_municipio' => 'Embu das Artes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515103,
                'nome_municipio' => 'Embu-Guaçu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515129,
                'nome_municipio' => 'Emilianópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515152,
                'nome_municipio' => 'Engenheiro Coelho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515186,
                'nome_municipio' => 'Espírito Santo do Pinhal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515194,
                'nome_municipio' => 'Espírito Santo do Turvo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515202,
                'nome_municipio' => 'Estrela d\'Oeste',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515301,
                'nome_municipio' => 'Estrela do Norte',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515350,
                'nome_municipio' => 'Euclides da Cunha Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515400,
                'nome_municipio' => 'Fartura',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515509,
                'nome_municipio' => 'Fernandópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515608,
                'nome_municipio' => 'Fernando Prestes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515657,
                'nome_municipio' => 'Fernão',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515707,
                'nome_municipio' => 'Ferraz de Vasconcelos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515806,
                'nome_municipio' => 'Flora Rica',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3515905,
                'nome_municipio' => 'Floreal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516002,
                'nome_municipio' => 'Flórida Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516101,
                'nome_municipio' => 'Florínea',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516200,
                'nome_municipio' => 'Franca',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516309,
                'nome_municipio' => 'Francisco Morato',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516408,
                'nome_municipio' => 'Franco da Rocha',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516507,
                'nome_municipio' => 'Gabriel Monteiro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516606,
                'nome_municipio' => 'Gália',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516705,
                'nome_municipio' => 'Garça',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516804,
                'nome_municipio' => 'Gastão Vidigal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516853,
                'nome_municipio' => 'Gavião Peixoto',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3516903,
                'nome_municipio' => 'General Salgado',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3517000,
                'nome_municipio' => 'Getulina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3517109,
                'nome_municipio' => 'Glicério',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3517208,
                'nome_municipio' => 'Guaiçara',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3517307,
                'nome_municipio' => 'Guaimbê',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3517406,
                'nome_municipio' => 'Guaíra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3517505,
                'nome_municipio' => 'Guapiaçu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3517604,
                'nome_municipio' => 'Guapiara',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3517703,
                'nome_municipio' => 'Guará',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3517802,
                'nome_municipio' => 'Guaraçaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3517901,
                'nome_municipio' => 'Guaraci',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518008,
                'nome_municipio' => 'Guarani d\'Oeste',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518107,
                'nome_municipio' => 'Guarantã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518206,
                'nome_municipio' => 'Guararapes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518305,
                'nome_municipio' => 'Guararema',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518404,
                'nome_municipio' => 'Guaratinguetá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518503,
                'nome_municipio' => 'Guareí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518602,
                'nome_municipio' => 'Guariba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518701,
                'nome_municipio' => 'Guarujá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518800,
                'nome_municipio' => 'Guarulhos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518859,
                'nome_municipio' => 'Guatapará',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3518909,
                'nome_municipio' => 'Guzolândia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519006,
                'nome_municipio' => 'Herculândia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519055,
                'nome_municipio' => 'Holambra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519071,
                'nome_municipio' => 'Hortolândia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519105,
                'nome_municipio' => 'Iacanga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519204,
                'nome_municipio' => 'Iacri',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519253,
                'nome_municipio' => 'Iaras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519303,
                'nome_municipio' => 'Ibaté',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519402,
                'nome_municipio' => 'Ibirá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519501,
                'nome_municipio' => 'Ibirarema',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519600,
                'nome_municipio' => 'Ibitinga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519709,
                'nome_municipio' => 'Ibiúna',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519808,
                'nome_municipio' => 'Icém',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3519907,
                'nome_municipio' => 'Iepê',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520004,
                'nome_municipio' => 'Igaraçu do Tietê',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520103,
                'nome_municipio' => 'Igarapava',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520202,
                'nome_municipio' => 'Igaratá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520301,
                'nome_municipio' => 'Iguape',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520400,
                'nome_municipio' => 'Ilhabela',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520426,
                'nome_municipio' => 'Ilha Comprida',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520442,
                'nome_municipio' => 'Ilha Solteira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520509,
                'nome_municipio' => 'Indaiatuba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520608,
                'nome_municipio' => 'Indiana',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520707,
                'nome_municipio' => 'Indiaporã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520806,
                'nome_municipio' => 'Inúbia Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3520905,
                'nome_municipio' => 'Ipaussu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521002,
                'nome_municipio' => 'Iperó',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521101,
                'nome_municipio' => 'Ipeúna',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521150,
                'nome_municipio' => 'Ipiguá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521200,
                'nome_municipio' => 'Iporanga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521309,
                'nome_municipio' => 'Ipuã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521408,
                'nome_municipio' => 'Iracemápolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521507,
                'nome_municipio' => 'Irapuã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521606,
                'nome_municipio' => 'Irapuru',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521705,
                'nome_municipio' => 'Itaberá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521804,
                'nome_municipio' => 'Itaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3521903,
                'nome_municipio' => 'Itajobi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522000,
                'nome_municipio' => 'Itaju',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522109,
                'nome_municipio' => 'Itanhaém',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522158,
                'nome_municipio' => 'Itaoca',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522208,
                'nome_municipio' => 'Itapecerica da Serra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522307,
                'nome_municipio' => 'Itapetininga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522406,
                'nome_municipio' => 'Itapeva',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522505,
                'nome_municipio' => 'Itapevi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522604,
                'nome_municipio' => 'Itapira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522653,
                'nome_municipio' => 'Itapirapuã Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522703,
                'nome_municipio' => 'Itápolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522802,
                'nome_municipio' => 'Itaporanga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3522901,
                'nome_municipio' => 'Itapuí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3523008,
                'nome_municipio' => 'Itapura',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3523107,
                'nome_municipio' => 'Itaquaquecetuba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3523206,
                'nome_municipio' => 'Itararé',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3523305,
                'nome_municipio' => 'Itariri',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3523404,
                'nome_municipio' => 'Itatiba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3523503,
                'nome_municipio' => 'Itatinga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3523602,
                'nome_municipio' => 'Itirapina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3523701,
                'nome_municipio' => 'Itirapuã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3523800,
                'nome_municipio' => 'Itobi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3523909,
                'nome_municipio' => 'Itu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3524006,
                'nome_municipio' => 'Itupeva',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3524105,
                'nome_municipio' => 'Ituverava',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3524204,
                'nome_municipio' => 'Jaborandi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3524303,
                'nome_municipio' => 'Jaboticabal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3524402,
                'nome_municipio' => 'Jacareí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3524501,
                'nome_municipio' => 'Jaci',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3524600,
                'nome_municipio' => 'Jacupiranga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3524709,
                'nome_municipio' => 'Jaguariúna',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3524808,
                'nome_municipio' => 'Jales',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3524907,
                'nome_municipio' => 'Jambeiro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525003,
                'nome_municipio' => 'Jandira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525102,
                'nome_municipio' => 'Jardinópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525201,
                'nome_municipio' => 'Jarinu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525300,
                'nome_municipio' => 'Jaú',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525409,
                'nome_municipio' => 'Jeriquara',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525508,
                'nome_municipio' => 'Joanópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525607,
                'nome_municipio' => 'João Ramalho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525706,
                'nome_municipio' => 'José Bonifácio',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525805,
                'nome_municipio' => 'Júlio Mesquita',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525854,
                'nome_municipio' => 'Jumirim',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3525904,
                'nome_municipio' => 'Jundiaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3526001,
                'nome_municipio' => 'Junqueirópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3526100,
                'nome_municipio' => 'Juquiá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3526209,
                'nome_municipio' => 'Juquitiba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3526308,
                'nome_municipio' => 'Lagoinha',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3526407,
                'nome_municipio' => 'Laranjal Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3526506,
                'nome_municipio' => 'Lavínia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3526605,
                'nome_municipio' => 'Lavrinhas',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3526704,
                'nome_municipio' => 'Leme',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3526803,
                'nome_municipio' => 'Lençóis Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3526902,
                'nome_municipio' => 'Limeira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527009,
                'nome_municipio' => 'Lindóia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527108,
                'nome_municipio' => 'Lins',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527207,
                'nome_municipio' => 'Lorena',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527256,
                'nome_municipio' => 'Lourdes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527306,
                'nome_municipio' => 'Louveira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527405,
                'nome_municipio' => 'Lucélia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527504,
                'nome_municipio' => 'Lucianópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527603,
                'nome_municipio' => 'Luís Antônio',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527702,
                'nome_municipio' => 'Luiziânia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527801,
                'nome_municipio' => 'Lupércio',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3527900,
                'nome_municipio' => 'Lutécia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528007,
                'nome_municipio' => 'Macatuba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528106,
                'nome_municipio' => 'Macaubal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528205,
                'nome_municipio' => 'Macedônia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528304,
                'nome_municipio' => 'Magda',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528403,
                'nome_municipio' => 'Mairinque',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528502,
                'nome_municipio' => 'Mairiporã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528601,
                'nome_municipio' => 'Manduri',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528700,
                'nome_municipio' => 'Marabá Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528809,
                'nome_municipio' => 'Maracaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528858,
                'nome_municipio' => 'Marapoama',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3528908,
                'nome_municipio' => 'Mariápolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529005,
                'nome_municipio' => 'Marília',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529104,
                'nome_municipio' => 'Marinópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529203,
                'nome_municipio' => 'Martinópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529302,
                'nome_municipio' => 'Matão',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529401,
                'nome_municipio' => 'Mauá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529500,
                'nome_municipio' => 'Mendonça',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529609,
                'nome_municipio' => 'Meridiano',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529658,
                'nome_municipio' => 'Mesópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529708,
                'nome_municipio' => 'Miguelópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529807,
                'nome_municipio' => 'Mineiros do Tietê',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3529906,
                'nome_municipio' => 'Miracatu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3530003,
                'nome_municipio' => 'Mira Estrela',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3530102,
                'nome_municipio' => 'Mirandópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3530201,
                'nome_municipio' => 'Mirante do Paranapanema',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3530300,
                'nome_municipio' => 'Mirassol',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3530409,
                'nome_municipio' => 'Mirassolândia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3530508,
                'nome_municipio' => 'Mococa',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3530607,
                'nome_municipio' => 'Mogi das Cruzes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3530706,
                'nome_municipio' => 'Mogi Guaçu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3530805,
                'nome_municipio' => 'Mogi Mirim',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3530904,
                'nome_municipio' => 'Mombuca',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3531001,
                'nome_municipio' => 'Monções',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3531100,
                'nome_municipio' => 'Mongaguá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3531209,
                'nome_municipio' => 'Monte Alegre do Sul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3531308,
                'nome_municipio' => 'Monte Alto',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3531407,
                'nome_municipio' => 'Monte Aprazível',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3531506,
                'nome_municipio' => 'Monte Azul Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3531605,
                'nome_municipio' => 'Monte Castelo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3531704,
                'nome_municipio' => 'Monteiro Lobato',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3531803,
                'nome_municipio' => 'Monte Mor',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3531902,
                'nome_municipio' => 'Morro Agudo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532009,
                'nome_municipio' => 'Morungaba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532058,
                'nome_municipio' => 'Motuca',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532108,
                'nome_municipio' => 'Murutinga do Sul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532157,
                'nome_municipio' => 'Nantes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532207,
                'nome_municipio' => 'Narandiba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532306,
                'nome_municipio' => 'Natividade da Serra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532405,
                'nome_municipio' => 'Nazaré Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532504,
                'nome_municipio' => 'Neves Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532603,
                'nome_municipio' => 'Nhandeara',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532702,
                'nome_municipio' => 'Nipoã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532801,
                'nome_municipio' => 'Nova Aliança',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532827,
                'nome_municipio' => 'Nova Campina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532843,
                'nome_municipio' => 'Nova Canaã Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532868,
                'nome_municipio' => 'Nova Castilho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3532900,
                'nome_municipio' => 'Nova Europa',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533007,
                'nome_municipio' => 'Nova Granada',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533106,
                'nome_municipio' => 'Nova Guataporanga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533205,
                'nome_municipio' => 'Nova Independência',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533254,
                'nome_municipio' => 'Novais',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533304,
                'nome_municipio' => 'Nova Luzitânia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533403,
                'nome_municipio' => 'Nova Odessa',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533502,
                'nome_municipio' => 'Novo Horizonte',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533601,
                'nome_municipio' => 'Nuporanga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533700,
                'nome_municipio' => 'Ocauçu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533809,
                'nome_municipio' => 'Óleo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3533908,
                'nome_municipio' => 'Olímpia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534005,
                'nome_municipio' => 'Onda Verde',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534104,
                'nome_municipio' => 'Oriente',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534203,
                'nome_municipio' => 'Orindiúva',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534302,
                'nome_municipio' => 'Orlândia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534401,
                'nome_municipio' => 'Osasco',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534500,
                'nome_municipio' => 'Oscar Bressane',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534609,
                'nome_municipio' => 'Osvaldo Cruz',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534708,
                'nome_municipio' => 'Ourinhos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534757,
                'nome_municipio' => 'Ouroeste',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534807,
                'nome_municipio' => 'Ouro Verde',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3534906,
                'nome_municipio' => 'Pacaembu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3535002,
                'nome_municipio' => 'Palestina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3535101,
                'nome_municipio' => 'Palmares Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3535200,
                'nome_municipio' => 'Palmeira d\'Oeste',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3535309,
                'nome_municipio' => 'Palmital',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3535408,
                'nome_municipio' => 'Panorama',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3535507,
                'nome_municipio' => 'Paraguaçu Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3535606,
                'nome_municipio' => 'Paraibuna',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3535705,
                'nome_municipio' => 'Paraíso',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3535804,
                'nome_municipio' => 'Paranapanema',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3535903,
                'nome_municipio' => 'Paranapuã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536000,
                'nome_municipio' => 'Parapuã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536109,
                'nome_municipio' => 'Pardinho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536208,
                'nome_municipio' => 'Pariquera-Açu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536257,
                'nome_municipio' => 'Parisi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536307,
                'nome_municipio' => 'Patrocínio Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536406,
                'nome_municipio' => 'Paulicéia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536505,
                'nome_municipio' => 'Paulínia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536570,
                'nome_municipio' => 'Paulistânia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536604,
                'nome_municipio' => 'Paulo de Faria',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536703,
                'nome_municipio' => 'Pederneiras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536802,
                'nome_municipio' => 'Pedra Bela',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3536901,
                'nome_municipio' => 'Pedranópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537008,
                'nome_municipio' => 'Pedregulho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537107,
                'nome_municipio' => 'Pedreira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537156,
                'nome_municipio' => 'Pedrinhas Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537206,
                'nome_municipio' => 'Pedro de Toledo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537305,
                'nome_municipio' => 'Penápolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537404,
                'nome_municipio' => 'Pereira Barreto',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537503,
                'nome_municipio' => 'Pereiras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537602,
                'nome_municipio' => 'Peruíbe',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537701,
                'nome_municipio' => 'Piacatu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537800,
                'nome_municipio' => 'Piedade',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3537909,
                'nome_municipio' => 'Pilar do Sul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3538006,
                'nome_municipio' => 'Pindamonhangaba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3538105,
                'nome_municipio' => 'Pindorama',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3538204,
                'nome_municipio' => 'Pinhalzinho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3538303,
                'nome_municipio' => 'Piquerobi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3538501,
                'nome_municipio' => 'Piquete',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3538600,
                'nome_municipio' => 'Piracaia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3538709,
                'nome_municipio' => 'Piracicaba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3538808,
                'nome_municipio' => 'Piraju',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3538907,
                'nome_municipio' => 'Pirajuí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3539004,
                'nome_municipio' => 'Pirangi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3539103,
                'nome_municipio' => 'Pirapora do Bom Jesus',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3539202,
                'nome_municipio' => 'Pirapozinho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3539301,
                'nome_municipio' => 'Pirassununga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3539400,
                'nome_municipio' => 'Piratininga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3539509,
                'nome_municipio' => 'Pitangueiras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3539608,
                'nome_municipio' => 'Planalto',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3539707,
                'nome_municipio' => 'Platina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3539806,
                'nome_municipio' => 'Poá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3539905,
                'nome_municipio' => 'Poloni',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540002,
                'nome_municipio' => 'Pompéia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540101,
                'nome_municipio' => 'Pongaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540200,
                'nome_municipio' => 'Pontal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540259,
                'nome_municipio' => 'Pontalinda',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540309,
                'nome_municipio' => 'Pontes Gestal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540408,
                'nome_municipio' => 'Populina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540507,
                'nome_municipio' => 'Porangaba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540606,
                'nome_municipio' => 'Porto Feliz',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540705,
                'nome_municipio' => 'Porto Ferreira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540754,
                'nome_municipio' => 'Potim',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540804,
                'nome_municipio' => 'Potirendaba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540853,
                'nome_municipio' => 'Pracinha',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3540903,
                'nome_municipio' => 'Pradópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541000,
                'nome_municipio' => 'Praia Grande',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541059,
                'nome_municipio' => 'Pratânia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541109,
                'nome_municipio' => 'Presidente Alves',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541208,
                'nome_municipio' => 'Presidente Bernardes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541307,
                'nome_municipio' => 'Presidente Epitácio',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541406,
                'nome_municipio' => 'Presidente Prudente',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541505,
                'nome_municipio' => 'Presidente Venceslau',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541604,
                'nome_municipio' => 'Promissão',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541653,
                'nome_municipio' => 'Quadra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541703,
                'nome_municipio' => 'Quatá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541802,
                'nome_municipio' => 'Queiroz',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3541901,
                'nome_municipio' => 'Queluz',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3542008,
                'nome_municipio' => 'Quintana',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3542107,
                'nome_municipio' => 'Rafard',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3542206,
                'nome_municipio' => 'Rancharia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3542305,
                'nome_municipio' => 'Redenção da Serra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3542404,
                'nome_municipio' => 'Regente Feijó',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3542503,
                'nome_municipio' => 'Reginópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3542602,
                'nome_municipio' => 'Registro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3542701,
                'nome_municipio' => 'Restinga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3542800,
                'nome_municipio' => 'Ribeira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3542909,
                'nome_municipio' => 'Ribeirão Bonito',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543006,
                'nome_municipio' => 'Ribeirão Branco',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543105,
                'nome_municipio' => 'Ribeirão Corrente',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543204,
                'nome_municipio' => 'Ribeirão do Sul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543238,
                'nome_municipio' => 'Ribeirão dos Índios',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543253,
                'nome_municipio' => 'Ribeirão Grande',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543303,
                'nome_municipio' => 'Ribeirão Pires',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543402,
                'nome_municipio' => 'Ribeirão Preto',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543501,
                'nome_municipio' => 'Riversul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543600,
                'nome_municipio' => 'Rifaina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543709,
                'nome_municipio' => 'Rincão',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543808,
                'nome_municipio' => 'Rinópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3543907,
                'nome_municipio' => 'Rio Claro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544004,
                'nome_municipio' => 'Rio das Pedras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544103,
                'nome_municipio' => 'Rio Grande da Serra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544202,
                'nome_municipio' => 'Riolândia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544251,
                'nome_municipio' => 'Rosana',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544301,
                'nome_municipio' => 'Roseira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544400,
                'nome_municipio' => 'Rubiácea',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544509,
                'nome_municipio' => 'Rubinéia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544608,
                'nome_municipio' => 'Sabino',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544707,
                'nome_municipio' => 'Sagres',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544806,
                'nome_municipio' => 'Sales',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3544905,
                'nome_municipio' => 'Sales Oliveira',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3545001,
                'nome_municipio' => 'Salesópolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3545100,
                'nome_municipio' => 'Salmourão',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3545159,
                'nome_municipio' => 'Saltinho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3545209,
                'nome_municipio' => 'Salto',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3545308,
                'nome_municipio' => 'Salto de Pirapora',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3545407,
                'nome_municipio' => 'Salto Grande',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3545506,
                'nome_municipio' => 'Sandovalina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3545605,
                'nome_municipio' => 'Santa Adélia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3545704,
                'nome_municipio' => 'Santa Albertina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3545803,
                'nome_municipio' => 'Santa Bárbara d\'Oeste',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546009,
                'nome_municipio' => 'Santa Branca',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546108,
                'nome_municipio' => 'Santa Clara d\'Oeste',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546207,
                'nome_municipio' => 'Santa Cruz da Conceição',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546256,
                'nome_municipio' => 'Santa Cruz da Esperança',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546306,
                'nome_municipio' => 'Santa Cruz das Palmeiras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546405,
                'nome_municipio' => 'Santa Cruz do Rio Pardo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546504,
                'nome_municipio' => 'Santa Ernestina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546603,
                'nome_municipio' => 'Santa Fé do Sul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546702,
                'nome_municipio' => 'Santa Gertrudes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546801,
                'nome_municipio' => 'Santa Isabel',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3546900,
                'nome_municipio' => 'Santa Lúcia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547007,
                'nome_municipio' => 'Santa Maria da Serra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547106,
                'nome_municipio' => 'Santa Mercedes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547205,
                'nome_municipio' => 'Santana da Ponte Pensa',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547304,
                'nome_municipio' => 'Santana de Parnaíba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547403,
                'nome_municipio' => 'Santa Rita d\'Oeste',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547502,
                'nome_municipio' => 'Santa Rita do Passa Quatro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547601,
                'nome_municipio' => 'Santa Rosa de Viterbo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547650,
                'nome_municipio' => 'Santa Salete',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547700,
                'nome_municipio' => 'Santo Anastácio',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547809,
                'nome_municipio' => 'Santo André',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3547908,
                'nome_municipio' => 'Santo Antônio da Alegria',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548005,
                'nome_municipio' => 'Santo Antônio de Posse',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548054,
                'nome_municipio' => 'Santo Antônio do Aracanguá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548104,
                'nome_municipio' => 'Santo Antônio do Jardim',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548203,
                'nome_municipio' => 'Santo Antônio do Pinhal',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548302,
                'nome_municipio' => 'Santo Expedito',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548401,
                'nome_municipio' => 'Santópolis do Aguapeí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548500,
                'nome_municipio' => 'Santos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548609,
                'nome_municipio' => 'São Bento do Sapucaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548708,
                'nome_municipio' => 'São Bernardo do Campo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548807,
                'nome_municipio' => 'São Caetano do Sul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3548906,
                'nome_municipio' => 'São Carlos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549003,
                'nome_municipio' => 'São Francisco',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549102,
                'nome_municipio' => 'São João da Boa Vista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549201,
                'nome_municipio' => 'São João das Duas Pontes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549250,
                'nome_municipio' => 'São João de Iracema',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549300,
                'nome_municipio' => 'São João do Pau d\'Alho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549409,
                'nome_municipio' => 'São Joaquim da Barra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549508,
                'nome_municipio' => 'São José da Bela Vista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549607,
                'nome_municipio' => 'São José do Barreiro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549706,
                'nome_municipio' => 'São José do Rio Pardo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549805,
                'nome_municipio' => 'São José do Rio Preto',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549904,
                'nome_municipio' => 'São José dos Campos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3549953,
                'nome_municipio' => 'São Lourenço da Serra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3550001,
                'nome_municipio' => 'São Luiz do Paraitinga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3550100,
                'nome_municipio' => 'São Manuel',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3550209,
                'nome_municipio' => 'São Miguel Arcanjo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3550308,
                'nome_municipio' => 'São Paulo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3550407,
                'nome_municipio' => 'São Pedro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3550506,
                'nome_municipio' => 'São Pedro do Turvo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3550605,
                'nome_municipio' => 'São Roque',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3550704,
                'nome_municipio' => 'São Sebastião',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3550803,
                'nome_municipio' => 'São Sebastião da Grama',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3550902,
                'nome_municipio' => 'São Simão',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3551009,
                'nome_municipio' => 'São Vicente',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3551108,
                'nome_municipio' => 'Sarapuí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3551207,
                'nome_municipio' => 'Sarutaiá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3551306,
                'nome_municipio' => 'Sebastianópolis do Sul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3551405,
                'nome_municipio' => 'Serra Azul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3551504,
                'nome_municipio' => 'Serrana',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3551603,
                'nome_municipio' => 'Serra Negra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3551702,
                'nome_municipio' => 'Sertãozinho',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3551801,
                'nome_municipio' => 'Sete Barras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3551900,
                'nome_municipio' => 'Severínia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552007,
                'nome_municipio' => 'Silveiras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552106,
                'nome_municipio' => 'Socorro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552205,
                'nome_municipio' => 'Sorocaba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552304,
                'nome_municipio' => 'Sud Mennucci',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552403,
                'nome_municipio' => 'Sumaré',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552502,
                'nome_municipio' => 'Suzano',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552551,
                'nome_municipio' => 'Suzanápolis',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552601,
                'nome_municipio' => 'Tabapuã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552700,
                'nome_municipio' => 'Tabatinga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552809,
                'nome_municipio' => 'Taboão da Serra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3552908,
                'nome_municipio' => 'Taciba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553005,
                'nome_municipio' => 'Taguaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553104,
                'nome_municipio' => 'Taiaçu',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553203,
                'nome_municipio' => 'Taiúva',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553302,
                'nome_municipio' => 'Tambaú',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553401,
                'nome_municipio' => 'Tanabi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553500,
                'nome_municipio' => 'Tapiraí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553609,
                'nome_municipio' => 'Tapiratiba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553658,
                'nome_municipio' => 'Taquaral',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553708,
                'nome_municipio' => 'Taquaritinga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553807,
                'nome_municipio' => 'Taquarituba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553856,
                'nome_municipio' => 'Taquarivaí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553906,
                'nome_municipio' => 'Tarabai',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3553955,
                'nome_municipio' => 'Tarumã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554003,
                'nome_municipio' => 'Tatuí',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554102,
                'nome_municipio' => 'Taubaté',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554201,
                'nome_municipio' => 'Tejupá',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554300,
                'nome_municipio' => 'Teodoro Sampaio',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554409,
                'nome_municipio' => 'Terra Roxa',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554508,
                'nome_municipio' => 'Tietê',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554607,
                'nome_municipio' => 'Timburi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554656,
                'nome_municipio' => 'Torre de Pedra',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554706,
                'nome_municipio' => 'Torrinha',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554755,
                'nome_municipio' => 'Trabiju',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554805,
                'nome_municipio' => 'Tremembé',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554904,
                'nome_municipio' => 'Três Fronteiras',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3554953,
                'nome_municipio' => 'Tuiuti',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555000,
                'nome_municipio' => 'Tupã',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555109,
                'nome_municipio' => 'Tupi Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555208,
                'nome_municipio' => 'Turiúba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555307,
                'nome_municipio' => 'Turmalina',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555356,
                'nome_municipio' => 'Ubarana',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555406,
                'nome_municipio' => 'Ubatuba',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555505,
                'nome_municipio' => 'Ubirajara',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555604,
                'nome_municipio' => 'Uchoa',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555703,
                'nome_municipio' => 'União Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555802,
                'nome_municipio' => 'Urânia',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3555901,
                'nome_municipio' => 'Uru',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556008,
                'nome_municipio' => 'Urupês',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556107,
                'nome_municipio' => 'Valentim Gentil',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556206,
                'nome_municipio' => 'Valinhos',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556305,
                'nome_municipio' => 'Valparaíso',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556354,
                'nome_municipio' => 'Vargem',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556404,
                'nome_municipio' => 'Vargem Grande do Sul',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556453,
                'nome_municipio' => 'Vargem Grande Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556503,
                'nome_municipio' => 'Várzea Paulista',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556602,
                'nome_municipio' => 'Vera Cruz',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556701,
                'nome_municipio' => 'Vinhedo',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556800,
                'nome_municipio' => 'Viradouro',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556909,
                'nome_municipio' => 'Vista Alegre do Alto',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3556958,
                'nome_municipio' => 'Vitória Brasil',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3557006,
                'nome_municipio' => 'Votorantim',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3557105,
                'nome_municipio' => 'Votuporanga',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3557154,
                'nome_municipio' => 'Zacarias',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3557204,
                'nome_municipio' => 'Chavantes',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 3557303,
                'nome_municipio' => 'Estiva Gerbi',
                'uf' => 'SP',
            ],
            [
                'id_municipio' => 4100103,
                'nome_municipio' => 'Abatiá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4100202,
                'nome_municipio' => 'Adrianópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4100301,
                'nome_municipio' => 'Agudos do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4100400,
                'nome_municipio' => 'Almirante Tamandaré',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4100459,
                'nome_municipio' => 'Altamira do Paraná',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4100509,
                'nome_municipio' => 'Altônia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4100608,
                'nome_municipio' => 'Alto Paraná',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4100707,
                'nome_municipio' => 'Alto Piquiri',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4100806,
                'nome_municipio' => 'Alvorada do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4100905,
                'nome_municipio' => 'Amaporã',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101002,
                'nome_municipio' => 'Ampére',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101051,
                'nome_municipio' => 'Anahy',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101101,
                'nome_municipio' => 'Andirá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101150,
                'nome_municipio' => 'Ângulo',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101200,
                'nome_municipio' => 'Antonina',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101309,
                'nome_municipio' => 'Antônio Olinto',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101408,
                'nome_municipio' => 'Apucarana',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101507,
                'nome_municipio' => 'Arapongas',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101606,
                'nome_municipio' => 'Arapoti',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101655,
                'nome_municipio' => 'Arapuã',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101705,
                'nome_municipio' => 'Araruna',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101804,
                'nome_municipio' => 'Araucária',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101853,
                'nome_municipio' => 'Ariranha do Ivaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4101903,
                'nome_municipio' => 'Assaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102000,
                'nome_municipio' => 'Assis Chateaubriand',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102109,
                'nome_municipio' => 'Astorga',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102208,
                'nome_municipio' => 'Atalaia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102307,
                'nome_municipio' => 'Balsa Nova',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102406,
                'nome_municipio' => 'Bandeirantes',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102505,
                'nome_municipio' => 'Barbosa Ferraz',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102604,
                'nome_municipio' => 'Barracão',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102703,
                'nome_municipio' => 'Barra do Jacaré',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102752,
                'nome_municipio' => 'Bela Vista da Caroba',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102802,
                'nome_municipio' => 'Bela Vista do Paraíso',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4102901,
                'nome_municipio' => 'Bituruna',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103008,
                'nome_municipio' => 'Boa Esperança',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103024,
                'nome_municipio' => 'Boa Esperança do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103040,
                'nome_municipio' => 'Boa Ventura de São Roque',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103057,
                'nome_municipio' => 'Boa Vista da Aparecida',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103107,
                'nome_municipio' => 'Bocaiúva do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103156,
                'nome_municipio' => 'Bom Jesus do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103206,
                'nome_municipio' => 'Bom Sucesso',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103222,
                'nome_municipio' => 'Bom Sucesso do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103305,
                'nome_municipio' => 'Borrazópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103354,
                'nome_municipio' => 'Braganey',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103370,
                'nome_municipio' => 'Brasilândia do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103404,
                'nome_municipio' => 'Cafeara',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103453,
                'nome_municipio' => 'Cafelândia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103479,
                'nome_municipio' => 'Cafezal do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103503,
                'nome_municipio' => 'Califórnia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103602,
                'nome_municipio' => 'Cambará',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103701,
                'nome_municipio' => 'Cambé',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103800,
                'nome_municipio' => 'Cambira',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103909,
                'nome_municipio' => 'Campina da Lagoa',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4103958,
                'nome_municipio' => 'Campina do Simão',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104006,
                'nome_municipio' => 'Campina Grande do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104055,
                'nome_municipio' => 'Campo Bonito',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104105,
                'nome_municipio' => 'Campo do Tenente',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104204,
                'nome_municipio' => 'Campo Largo',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104253,
                'nome_municipio' => 'Campo Magro',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104303,
                'nome_municipio' => 'Campo Mourão',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104402,
                'nome_municipio' => 'Cândido de Abreu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104428,
                'nome_municipio' => 'Candói',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104451,
                'nome_municipio' => 'Cantagalo',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104501,
                'nome_municipio' => 'Capanema',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104600,
                'nome_municipio' => 'Capitão Leônidas Marques',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104659,
                'nome_municipio' => 'Carambeí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104709,
                'nome_municipio' => 'Carlópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104808,
                'nome_municipio' => 'Cascavel',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4104907,
                'nome_municipio' => 'Castro',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4105003,
                'nome_municipio' => 'Catanduvas',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4105102,
                'nome_municipio' => 'Centenário do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4105201,
                'nome_municipio' => 'Cerro Azul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4105300,
                'nome_municipio' => 'Céu Azul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4105409,
                'nome_municipio' => 'Chopinzinho',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4105508,
                'nome_municipio' => 'Cianorte',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4105607,
                'nome_municipio' => 'Cidade Gaúcha',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4105706,
                'nome_municipio' => 'Clevelândia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4105805,
                'nome_municipio' => 'Colombo',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4105904,
                'nome_municipio' => 'Colorado',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106001,
                'nome_municipio' => 'Congonhinhas',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106100,
                'nome_municipio' => 'Conselheiro Mairinck',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106209,
                'nome_municipio' => 'Contenda',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106308,
                'nome_municipio' => 'Corbélia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106407,
                'nome_municipio' => 'Cornélio Procópio',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106456,
                'nome_municipio' => 'Coronel Domingos Soares',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106506,
                'nome_municipio' => 'Coronel Vivida',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106555,
                'nome_municipio' => 'Corumbataí do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106571,
                'nome_municipio' => 'Cruzeiro do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106605,
                'nome_municipio' => 'Cruzeiro do Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106704,
                'nome_municipio' => 'Cruzeiro do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106803,
                'nome_municipio' => 'Cruz Machado',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106852,
                'nome_municipio' => 'Cruzmaltina',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4106902,
                'nome_municipio' => 'Curitiba',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107009,
                'nome_municipio' => 'Curiúva',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107108,
                'nome_municipio' => 'Diamante do Norte',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107124,
                'nome_municipio' => 'Diamante do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107157,
                'nome_municipio' => 'Diamante D\'Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107207,
                'nome_municipio' => 'Dois Vizinhos',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107256,
                'nome_municipio' => 'Douradina',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107306,
                'nome_municipio' => 'Doutor Camargo',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107405,
                'nome_municipio' => 'Enéas Marques',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107504,
                'nome_municipio' => 'Engenheiro Beltrão',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107520,
                'nome_municipio' => 'Esperança Nova',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107538,
                'nome_municipio' => 'Entre Rios do Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107546,
                'nome_municipio' => 'Espigão Alto do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107553,
                'nome_municipio' => 'Farol',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107603,
                'nome_municipio' => 'Faxinal',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107652,
                'nome_municipio' => 'Fazenda Rio Grande',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107702,
                'nome_municipio' => 'Fênix',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107736,
                'nome_municipio' => 'Fernandes Pinheiro',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107751,
                'nome_municipio' => 'Figueira',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107801,
                'nome_municipio' => 'Floraí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107850,
                'nome_municipio' => 'Flor da Serra do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4107900,
                'nome_municipio' => 'Floresta',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108007,
                'nome_municipio' => 'Florestópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108106,
                'nome_municipio' => 'Flórida',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108205,
                'nome_municipio' => 'Formosa do Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108304,
                'nome_municipio' => 'Foz do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108320,
                'nome_municipio' => 'Francisco Alves',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108403,
                'nome_municipio' => 'Francisco Beltrão',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108452,
                'nome_municipio' => 'Foz do Jordão',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108502,
                'nome_municipio' => 'General Carneiro',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108551,
                'nome_municipio' => 'Godoy Moreira',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108601,
                'nome_municipio' => 'Goioerê',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108650,
                'nome_municipio' => 'Goioxim',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108700,
                'nome_municipio' => 'Grandes Rios',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108809,
                'nome_municipio' => 'Guaíra',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108908,
                'nome_municipio' => 'Guairaçá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4108957,
                'nome_municipio' => 'Guamiranga',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109005,
                'nome_municipio' => 'Guapirama',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109104,
                'nome_municipio' => 'Guaporema',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109203,
                'nome_municipio' => 'Guaraci',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109302,
                'nome_municipio' => 'Guaraniaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109401,
                'nome_municipio' => 'Guarapuava',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109500,
                'nome_municipio' => 'Guaraqueçaba',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109609,
                'nome_municipio' => 'Guaratuba',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109658,
                'nome_municipio' => 'Honório Serpa',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109708,
                'nome_municipio' => 'Ibaiti',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109757,
                'nome_municipio' => 'Ibema',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109807,
                'nome_municipio' => 'Ibiporã',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4109906,
                'nome_municipio' => 'Icaraíma',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110003,
                'nome_municipio' => 'Iguaraçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110052,
                'nome_municipio' => 'Iguatu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110078,
                'nome_municipio' => 'Imbaú',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110102,
                'nome_municipio' => 'Imbituva',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110201,
                'nome_municipio' => 'Inácio Martins',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110300,
                'nome_municipio' => 'Inajá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110409,
                'nome_municipio' => 'Indianópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110508,
                'nome_municipio' => 'Ipiranga',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110607,
                'nome_municipio' => 'Iporã',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110656,
                'nome_municipio' => 'Iracema do Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110706,
                'nome_municipio' => 'Irati',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110805,
                'nome_municipio' => 'Iretama',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110904,
                'nome_municipio' => 'Itaguajé',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4110953,
                'nome_municipio' => 'Itaipulândia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111001,
                'nome_municipio' => 'Itambaracá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111100,
                'nome_municipio' => 'Itambé',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111209,
                'nome_municipio' => 'Itapejara d\'Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111258,
                'nome_municipio' => 'Itaperuçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111308,
                'nome_municipio' => 'Itaúna do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111407,
                'nome_municipio' => 'Ivaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111506,
                'nome_municipio' => 'Ivaiporã',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111555,
                'nome_municipio' => 'Ivaté',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111605,
                'nome_municipio' => 'Ivatuba',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111704,
                'nome_municipio' => 'Jaboti',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111803,
                'nome_municipio' => 'Jacarezinho',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4111902,
                'nome_municipio' => 'Jaguapitã',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112009,
                'nome_municipio' => 'Jaguariaíva',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112108,
                'nome_municipio' => 'Jandaia do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112207,
                'nome_municipio' => 'Janiópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112306,
                'nome_municipio' => 'Japira',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112405,
                'nome_municipio' => 'Japurá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112504,
                'nome_municipio' => 'Jardim Alegre',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112603,
                'nome_municipio' => 'Jardim Olinda',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112702,
                'nome_municipio' => 'Jataizinho',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112751,
                'nome_municipio' => 'Jesuítas',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112801,
                'nome_municipio' => 'Joaquim Távora',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112900,
                'nome_municipio' => 'Jundiaí do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4112959,
                'nome_municipio' => 'Juranda',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113007,
                'nome_municipio' => 'Jussara',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113106,
                'nome_municipio' => 'Kaloré',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113205,
                'nome_municipio' => 'Lapa',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113254,
                'nome_municipio' => 'Laranjal',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113304,
                'nome_municipio' => 'Laranjeiras do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113403,
                'nome_municipio' => 'Leópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113429,
                'nome_municipio' => 'Lidianópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113452,
                'nome_municipio' => 'Lindoeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113502,
                'nome_municipio' => 'Loanda',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113601,
                'nome_municipio' => 'Lobato',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113700,
                'nome_municipio' => 'Londrina',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113734,
                'nome_municipio' => 'Luiziana',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113759,
                'nome_municipio' => 'Lunardelli',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113809,
                'nome_municipio' => 'Lupionópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4113908,
                'nome_municipio' => 'Mallet',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114005,
                'nome_municipio' => 'Mamborê',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114104,
                'nome_municipio' => 'Mandaguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114203,
                'nome_municipio' => 'Mandaguari',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114302,
                'nome_municipio' => 'Mandirituba',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114351,
                'nome_municipio' => 'Manfrinópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114401,
                'nome_municipio' => 'Mangueirinha',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114500,
                'nome_municipio' => 'Manoel Ribas',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114609,
                'nome_municipio' => 'Marechal Cândido Rondon',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114708,
                'nome_municipio' => 'Maria Helena',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114807,
                'nome_municipio' => 'Marialva',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4114906,
                'nome_municipio' => 'Marilândia do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115002,
                'nome_municipio' => 'Marilena',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115101,
                'nome_municipio' => 'Mariluz',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115200,
                'nome_municipio' => 'Maringá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115309,
                'nome_municipio' => 'Mariópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115358,
                'nome_municipio' => 'Maripá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115408,
                'nome_municipio' => 'Marmeleiro',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115457,
                'nome_municipio' => 'Marquinho',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115507,
                'nome_municipio' => 'Marumbi',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115606,
                'nome_municipio' => 'Matelândia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115705,
                'nome_municipio' => 'Matinhos',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115739,
                'nome_municipio' => 'Mato Rico',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115754,
                'nome_municipio' => 'Mauá da Serra',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115804,
                'nome_municipio' => 'Medianeira',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115853,
                'nome_municipio' => 'Mercedes',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4115903,
                'nome_municipio' => 'Mirador',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116000,
                'nome_municipio' => 'Miraselva',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116059,
                'nome_municipio' => 'Missal',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116109,
                'nome_municipio' => 'Moreira Sales',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116208,
                'nome_municipio' => 'Morretes',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116307,
                'nome_municipio' => 'Munhoz de Melo',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116406,
                'nome_municipio' => 'Nossa Senhora das Graças',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116505,
                'nome_municipio' => 'Nova Aliança do Ivaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116604,
                'nome_municipio' => 'Nova América da Colina',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116703,
                'nome_municipio' => 'Nova Aurora',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116802,
                'nome_municipio' => 'Nova Cantu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116901,
                'nome_municipio' => 'Nova Esperança',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4116950,
                'nome_municipio' => 'Nova Esperança do Sudoeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117008,
                'nome_municipio' => 'Nova Fátima',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117057,
                'nome_municipio' => 'Nova Laranjeiras',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117107,
                'nome_municipio' => 'Nova Londrina',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117206,
                'nome_municipio' => 'Nova Olímpia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117214,
                'nome_municipio' => 'Nova Santa Bárbara',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117222,
                'nome_municipio' => 'Nova Santa Rosa',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117255,
                'nome_municipio' => 'Nova Prata do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117271,
                'nome_municipio' => 'Nova Tebas',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117297,
                'nome_municipio' => 'Novo Itacolomi',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117305,
                'nome_municipio' => 'Ortigueira',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117404,
                'nome_municipio' => 'Ourizona',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117453,
                'nome_municipio' => 'Ouro Verde do Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117503,
                'nome_municipio' => 'Paiçandu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117602,
                'nome_municipio' => 'Palmas',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117701,
                'nome_municipio' => 'Palmeira',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117800,
                'nome_municipio' => 'Palmital',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4117909,
                'nome_municipio' => 'Palotina',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118006,
                'nome_municipio' => 'Paraíso do Norte',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118105,
                'nome_municipio' => 'Paranacity',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118204,
                'nome_municipio' => 'Paranaguá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118303,
                'nome_municipio' => 'Paranapoema',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118402,
                'nome_municipio' => 'Paranavaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118451,
                'nome_municipio' => 'Pato Bragado',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118501,
                'nome_municipio' => 'Pato Branco',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118600,
                'nome_municipio' => 'Paula Freitas',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118709,
                'nome_municipio' => 'Paulo Frontin',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118808,
                'nome_municipio' => 'Peabiru',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118857,
                'nome_municipio' => 'Perobal',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4118907,
                'nome_municipio' => 'Pérola',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119004,
                'nome_municipio' => 'Pérola d\'Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119103,
                'nome_municipio' => 'Piên',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119152,
                'nome_municipio' => 'Pinhais',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119202,
                'nome_municipio' => 'Pinhalão',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119251,
                'nome_municipio' => 'Pinhal de São Bento',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119301,
                'nome_municipio' => 'Pinhão',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119400,
                'nome_municipio' => 'Piraí do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119509,
                'nome_municipio' => 'Piraquara',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119608,
                'nome_municipio' => 'Pitanga',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119657,
                'nome_municipio' => 'Pitangueiras',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119707,
                'nome_municipio' => 'Planaltina do Paraná',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119806,
                'nome_municipio' => 'Planalto',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119905,
                'nome_municipio' => 'Ponta Grossa',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4119954,
                'nome_municipio' => 'Pontal do Paraná',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120002,
                'nome_municipio' => 'Porecatu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120101,
                'nome_municipio' => 'Porto Amazonas',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120150,
                'nome_municipio' => 'Porto Barreiro',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120200,
                'nome_municipio' => 'Porto Rico',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120309,
                'nome_municipio' => 'Porto Vitória',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120333,
                'nome_municipio' => 'Prado Ferreira',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120358,
                'nome_municipio' => 'Pranchita',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120408,
                'nome_municipio' => 'Presidente Castelo Branco',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120507,
                'nome_municipio' => 'Primeiro de Maio',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120606,
                'nome_municipio' => 'Prudentópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120655,
                'nome_municipio' => 'Quarto Centenário',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120705,
                'nome_municipio' => 'Quatiguá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120804,
                'nome_municipio' => 'Quatro Barras',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120853,
                'nome_municipio' => 'Quatro Pontes',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4120903,
                'nome_municipio' => 'Quedas do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121000,
                'nome_municipio' => 'Querência do Norte',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121109,
                'nome_municipio' => 'Quinta do Sol',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121208,
                'nome_municipio' => 'Quitandinha',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121257,
                'nome_municipio' => 'Ramilândia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121307,
                'nome_municipio' => 'Rancho Alegre',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121356,
                'nome_municipio' => 'Rancho Alegre D\'Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121406,
                'nome_municipio' => 'Realeza',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121505,
                'nome_municipio' => 'Rebouças',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121604,
                'nome_municipio' => 'Renascença',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121703,
                'nome_municipio' => 'Reserva',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121752,
                'nome_municipio' => 'Reserva do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121802,
                'nome_municipio' => 'Ribeirão Claro',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4121901,
                'nome_municipio' => 'Ribeirão do Pinhal',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122008,
                'nome_municipio' => 'Rio Azul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122107,
                'nome_municipio' => 'Rio Bom',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122156,
                'nome_municipio' => 'Rio Bonito do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122172,
                'nome_municipio' => 'Rio Branco do Ivaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122206,
                'nome_municipio' => 'Rio Branco do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122305,
                'nome_municipio' => 'Rio Negro',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122404,
                'nome_municipio' => 'Rolândia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122503,
                'nome_municipio' => 'Roncador',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122602,
                'nome_municipio' => 'Rondon',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122651,
                'nome_municipio' => 'Rosário do Ivaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122701,
                'nome_municipio' => 'Sabáudia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122800,
                'nome_municipio' => 'Salgado Filho',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4122909,
                'nome_municipio' => 'Salto do Itararé',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123006,
                'nome_municipio' => 'Salto do Lontra',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123105,
                'nome_municipio' => 'Santa Amélia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123204,
                'nome_municipio' => 'Santa Cecília do Pavão',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123303,
                'nome_municipio' => 'Santa Cruz de Monte Castelo',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123402,
                'nome_municipio' => 'Santa Fé',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123501,
                'nome_municipio' => 'Santa Helena',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123600,
                'nome_municipio' => 'Santa Inês',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123709,
                'nome_municipio' => 'Santa Isabel do Ivaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123808,
                'nome_municipio' => 'Santa Izabel do Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123824,
                'nome_municipio' => 'Santa Lúcia',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123857,
                'nome_municipio' => 'Santa Maria do Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123907,
                'nome_municipio' => 'Santa Mariana',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4123956,
                'nome_municipio' => 'Santa Mônica',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124004,
                'nome_municipio' => 'Santana do Itararé',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124020,
                'nome_municipio' => 'Santa Tereza do Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124053,
                'nome_municipio' => 'Santa Terezinha de Itaipu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124103,
                'nome_municipio' => 'Santo Antônio da Platina',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124202,
                'nome_municipio' => 'Santo Antônio do Caiuá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124301,
                'nome_municipio' => 'Santo Antônio do Paraíso',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124400,
                'nome_municipio' => 'Santo Antônio do Sudoeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124509,
                'nome_municipio' => 'Santo Inácio',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124608,
                'nome_municipio' => 'São Carlos do Ivaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124707,
                'nome_municipio' => 'São Jerônimo da Serra',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124806,
                'nome_municipio' => 'São João',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4124905,
                'nome_municipio' => 'São João do Caiuá',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125001,
                'nome_municipio' => 'São João do Ivaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125100,
                'nome_municipio' => 'São João do Triunfo',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125209,
                'nome_municipio' => 'São Jorge d\'Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125308,
                'nome_municipio' => 'São Jorge do Ivaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125357,
                'nome_municipio' => 'São Jorge do Patrocínio',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125407,
                'nome_municipio' => 'São José da Boa Vista',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125456,
                'nome_municipio' => 'São José das Palmeiras',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125506,
                'nome_municipio' => 'São José dos Pinhais',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125555,
                'nome_municipio' => 'São Manoel do Paraná',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125605,
                'nome_municipio' => 'São Mateus do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125704,
                'nome_municipio' => 'São Miguel do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125753,
                'nome_municipio' => 'São Pedro do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125803,
                'nome_municipio' => 'São Pedro do Ivaí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4125902,
                'nome_municipio' => 'São Pedro do Paraná',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126009,
                'nome_municipio' => 'São Sebastião da Amoreira',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126108,
                'nome_municipio' => 'São Tomé',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126207,
                'nome_municipio' => 'Sapopema',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126256,
                'nome_municipio' => 'Sarandi',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126272,
                'nome_municipio' => 'Saudade do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126306,
                'nome_municipio' => 'Sengés',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126355,
                'nome_municipio' => 'Serranópolis do Iguaçu',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126405,
                'nome_municipio' => 'Sertaneja',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126504,
                'nome_municipio' => 'Sertanópolis',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126603,
                'nome_municipio' => 'Siqueira Campos',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126652,
                'nome_municipio' => 'Sulina',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126678,
                'nome_municipio' => 'Tamarana',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126702,
                'nome_municipio' => 'Tamboara',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126801,
                'nome_municipio' => 'Tapejara',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4126900,
                'nome_municipio' => 'Tapira',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127007,
                'nome_municipio' => 'Teixeira Soares',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127106,
                'nome_municipio' => 'Telêmaco Borba',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127205,
                'nome_municipio' => 'Terra Boa',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127304,
                'nome_municipio' => 'Terra Rica',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127403,
                'nome_municipio' => 'Terra Roxa',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127502,
                'nome_municipio' => 'Tibagi',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127601,
                'nome_municipio' => 'Tijucas do Sul',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127700,
                'nome_municipio' => 'Toledo',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127809,
                'nome_municipio' => 'Tomazina',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127858,
                'nome_municipio' => 'Três Barras do Paraná',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127882,
                'nome_municipio' => 'Tunas do Paraná',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127908,
                'nome_municipio' => 'Tuneiras do Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127957,
                'nome_municipio' => 'Tupãssi',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4127965,
                'nome_municipio' => 'Turvo',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128005,
                'nome_municipio' => 'Ubiratã',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128104,
                'nome_municipio' => 'Umuarama',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128203,
                'nome_municipio' => 'União da Vitória',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128302,
                'nome_municipio' => 'Uniflor',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128401,
                'nome_municipio' => 'Uraí',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128500,
                'nome_municipio' => 'Wenceslau Braz',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128534,
                'nome_municipio' => 'Ventania',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128559,
                'nome_municipio' => 'Vera Cruz do Oeste',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128609,
                'nome_municipio' => 'Verê',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128625,
                'nome_municipio' => 'Alto Paraíso',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128633,
                'nome_municipio' => 'Doutor Ulysses',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128658,
                'nome_municipio' => 'Virmond',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128708,
                'nome_municipio' => 'Vitorino',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4128807,
                'nome_municipio' => 'Xambrê',
                'uf' => 'PR',
            ],
            [
                'id_municipio' => 4200051,
                'nome_municipio' => 'Abdon Batista',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200101,
                'nome_municipio' => 'Abelardo Luz',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200200,
                'nome_municipio' => 'Agrolândia',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200309,
                'nome_municipio' => 'Agronômica',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200408,
                'nome_municipio' => 'Água Doce',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200507,
                'nome_municipio' => 'Águas de Chapecó',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200556,
                'nome_municipio' => 'Águas Frias',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200606,
                'nome_municipio' => 'Águas Mornas',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200705,
                'nome_municipio' => 'Alfredo Wagner',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200754,
                'nome_municipio' => 'Alto Bela Vista',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200804,
                'nome_municipio' => 'Anchieta',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4200903,
                'nome_municipio' => 'Angelina',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201000,
                'nome_municipio' => 'Anita Garibaldi',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201109,
                'nome_municipio' => 'Anitápolis',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201208,
                'nome_municipio' => 'Antônio Carlos',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201257,
                'nome_municipio' => 'Apiúna',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201273,
                'nome_municipio' => 'Arabutã',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201307,
                'nome_municipio' => 'Araquari',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201406,
                'nome_municipio' => 'Araranguá',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201505,
                'nome_municipio' => 'Armazém',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201604,
                'nome_municipio' => 'Arroio Trinta',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201653,
                'nome_municipio' => 'Arvoredo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201703,
                'nome_municipio' => 'Ascurra',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201802,
                'nome_municipio' => 'Atalanta',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201901,
                'nome_municipio' => 'Aurora',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4201950,
                'nome_municipio' => 'Balneário Arroio do Silva',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202008,
                'nome_municipio' => 'Balneário Camboriú',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202057,
                'nome_municipio' => 'Balneário Barra do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202073,
                'nome_municipio' => 'Balneário Gaivota',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202081,
                'nome_municipio' => 'Bandeirante',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202099,
                'nome_municipio' => 'Barra Bonita',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202107,
                'nome_municipio' => 'Barra Velha',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202131,
                'nome_municipio' => 'Bela Vista do Toldo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202156,
                'nome_municipio' => 'Belmonte',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202206,
                'nome_municipio' => 'Benedito Novo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202305,
                'nome_municipio' => 'Biguaçu',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202404,
                'nome_municipio' => 'Blumenau',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202438,
                'nome_municipio' => 'Bocaina do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202453,
                'nome_municipio' => 'Bombinhas',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202503,
                'nome_municipio' => 'Bom Jardim da Serra',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202537,
                'nome_municipio' => 'Bom Jesus',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202578,
                'nome_municipio' => 'Bom Jesus do Oeste',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202602,
                'nome_municipio' => 'Bom Retiro',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202701,
                'nome_municipio' => 'Botuverá',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202800,
                'nome_municipio' => 'Braço do Norte',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202859,
                'nome_municipio' => 'Braço do Trombudo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202875,
                'nome_municipio' => 'Brunópolis',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4202909,
                'nome_municipio' => 'Brusque',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203006,
                'nome_municipio' => 'Caçador',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203105,
                'nome_municipio' => 'Caibi',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203154,
                'nome_municipio' => 'Calmon',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203204,
                'nome_municipio' => 'Camboriú',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203253,
                'nome_municipio' => 'Capão Alto',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203303,
                'nome_municipio' => 'Campo Alegre',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203402,
                'nome_municipio' => 'Campo Belo do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203501,
                'nome_municipio' => 'Campo Erê',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203600,
                'nome_municipio' => 'Campos Novos',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203709,
                'nome_municipio' => 'Canelinha',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203808,
                'nome_municipio' => 'Canoinhas',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203907,
                'nome_municipio' => 'Capinzal',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4203956,
                'nome_municipio' => 'Capivari de Baixo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204004,
                'nome_municipio' => 'Catanduvas',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204103,
                'nome_municipio' => 'Caxambu do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204152,
                'nome_municipio' => 'Celso Ramos',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204178,
                'nome_municipio' => 'Cerro Negro',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204194,
                'nome_municipio' => 'Chapadão do Lageado',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204202,
                'nome_municipio' => 'Chapecó',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204251,
                'nome_municipio' => 'Cocal do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204301,
                'nome_municipio' => 'Concórdia',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204350,
                'nome_municipio' => 'Cordilheira Alta',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204400,
                'nome_municipio' => 'Coronel Freitas',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204459,
                'nome_municipio' => 'Coronel Martins',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204509,
                'nome_municipio' => 'Corupá',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204558,
                'nome_municipio' => 'Correia Pinto',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204608,
                'nome_municipio' => 'Criciúma',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204707,
                'nome_municipio' => 'Cunha Porã',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204756,
                'nome_municipio' => 'Cunhataí',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204806,
                'nome_municipio' => 'Curitibanos',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4204905,
                'nome_municipio' => 'Descanso',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205001,
                'nome_municipio' => 'Dionísio Cerqueira',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205100,
                'nome_municipio' => 'Dona Emma',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205159,
                'nome_municipio' => 'Doutor Pedrinho',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205175,
                'nome_municipio' => 'Entre Rios',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205191,
                'nome_municipio' => 'Ermo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205209,
                'nome_municipio' => 'Erval Velho',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205308,
                'nome_municipio' => 'Faxinal dos Guedes',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205357,
                'nome_municipio' => 'Flor do Sertão',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205407,
                'nome_municipio' => 'Florianópolis',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205431,
                'nome_municipio' => 'Formosa do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205456,
                'nome_municipio' => 'Forquilhinha',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205506,
                'nome_municipio' => 'Fraiburgo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205555,
                'nome_municipio' => 'Frei Rogério',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205605,
                'nome_municipio' => 'Galvão',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205704,
                'nome_municipio' => 'Garopaba',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205803,
                'nome_municipio' => 'Garuva',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4205902,
                'nome_municipio' => 'Gaspar',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206009,
                'nome_municipio' => 'Governador Celso Ramos',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206108,
                'nome_municipio' => 'Grão-Pará',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206207,
                'nome_municipio' => 'Gravatal',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206306,
                'nome_municipio' => 'Guabiruba',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206405,
                'nome_municipio' => 'Guaraciaba',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206504,
                'nome_municipio' => 'Guaramirim',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206603,
                'nome_municipio' => 'Guarujá do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206652,
                'nome_municipio' => 'Guatambú',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206702,
                'nome_municipio' => 'Herval d\'Oeste',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206751,
                'nome_municipio' => 'Ibiam',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206801,
                'nome_municipio' => 'Ibicaré',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4206900,
                'nome_municipio' => 'Ibirama',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207007,
                'nome_municipio' => 'Içara',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207106,
                'nome_municipio' => 'Ilhota',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207205,
                'nome_municipio' => 'Imaruí',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207304,
                'nome_municipio' => 'Imbituba',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207403,
                'nome_municipio' => 'Imbuia',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207502,
                'nome_municipio' => 'Indaial',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207577,
                'nome_municipio' => 'Iomerê',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207601,
                'nome_municipio' => 'Ipira',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207650,
                'nome_municipio' => 'Iporã do Oeste',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207684,
                'nome_municipio' => 'Ipuaçu',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207700,
                'nome_municipio' => 'Ipumirim',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207759,
                'nome_municipio' => 'Iraceminha',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207809,
                'nome_municipio' => 'Irani',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207858,
                'nome_municipio' => 'Irati',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4207908,
                'nome_municipio' => 'Irineópolis',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208005,
                'nome_municipio' => 'Itá',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208104,
                'nome_municipio' => 'Itaiópolis',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208203,
                'nome_municipio' => 'Itajaí',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208302,
                'nome_municipio' => 'Itapema',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208401,
                'nome_municipio' => 'Itapiranga',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208450,
                'nome_municipio' => 'Itapoá',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208500,
                'nome_municipio' => 'Ituporanga',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208609,
                'nome_municipio' => 'Jaborá',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208708,
                'nome_municipio' => 'Jacinto Machado',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208807,
                'nome_municipio' => 'Jaguaruna',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208906,
                'nome_municipio' => 'Jaraguá do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4208955,
                'nome_municipio' => 'Jardinópolis',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209003,
                'nome_municipio' => 'Joaçaba',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209102,
                'nome_municipio' => 'Joinville',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209151,
                'nome_municipio' => 'José Boiteux',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209177,
                'nome_municipio' => 'Jupiá',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209201,
                'nome_municipio' => 'Lacerdópolis',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209300,
                'nome_municipio' => 'Lages',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209409,
                'nome_municipio' => 'Laguna',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209458,
                'nome_municipio' => 'Lajeado Grande',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209508,
                'nome_municipio' => 'Laurentino',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209607,
                'nome_municipio' => 'Lauro Müller',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209706,
                'nome_municipio' => 'Lebon Régis',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209805,
                'nome_municipio' => 'Leoberto Leal',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209854,
                'nome_municipio' => 'Lindóia do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4209904,
                'nome_municipio' => 'Lontras',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210001,
                'nome_municipio' => 'Luiz Alves',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210035,
                'nome_municipio' => 'Luzerna',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210050,
                'nome_municipio' => 'Macieira',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210100,
                'nome_municipio' => 'Mafra',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210209,
                'nome_municipio' => 'Major Gercino',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210308,
                'nome_municipio' => 'Major Vieira',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210407,
                'nome_municipio' => 'Maracajá',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210506,
                'nome_municipio' => 'Maravilha',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210555,
                'nome_municipio' => 'Marema',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210605,
                'nome_municipio' => 'Massaranduba',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210704,
                'nome_municipio' => 'Matos Costa',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210803,
                'nome_municipio' => 'Meleiro',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210852,
                'nome_municipio' => 'Mirim Doce',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4210902,
                'nome_municipio' => 'Modelo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211009,
                'nome_municipio' => 'Mondaí',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211058,
                'nome_municipio' => 'Monte Carlo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211108,
                'nome_municipio' => 'Monte Castelo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211207,
                'nome_municipio' => 'Morro da Fumaça',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211256,
                'nome_municipio' => 'Morro Grande',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211306,
                'nome_municipio' => 'Navegantes',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211405,
                'nome_municipio' => 'Nova Erechim',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211454,
                'nome_municipio' => 'Nova Itaberaba',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211504,
                'nome_municipio' => 'Nova Trento',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211603,
                'nome_municipio' => 'Nova Veneza',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211652,
                'nome_municipio' => 'Novo Horizonte',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211702,
                'nome_municipio' => 'Orleans',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211751,
                'nome_municipio' => 'Otacílio Costa',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211801,
                'nome_municipio' => 'Ouro',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211850,
                'nome_municipio' => 'Ouro Verde',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211876,
                'nome_municipio' => 'Paial',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211892,
                'nome_municipio' => 'Painel',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4211900,
                'nome_municipio' => 'Palhoça',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212007,
                'nome_municipio' => 'Palma Sola',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212056,
                'nome_municipio' => 'Palmeira',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212106,
                'nome_municipio' => 'Palmitos',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212205,
                'nome_municipio' => 'Papanduva',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212239,
                'nome_municipio' => 'Paraíso',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212254,
                'nome_municipio' => 'Passo de Torres',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212270,
                'nome_municipio' => 'Passos Maia',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212304,
                'nome_municipio' => 'Paulo Lopes',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212403,
                'nome_municipio' => 'Pedras Grandes',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212502,
                'nome_municipio' => 'Penha',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212601,
                'nome_municipio' => 'Peritiba',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212650,
                'nome_municipio' => 'Pescaria Brava',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212700,
                'nome_municipio' => 'Petrolândia',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212809,
                'nome_municipio' => 'Balneário Piçarras',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4212908,
                'nome_municipio' => 'Pinhalzinho',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213005,
                'nome_municipio' => 'Pinheiro Preto',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213104,
                'nome_municipio' => 'Piratuba',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213153,
                'nome_municipio' => 'Planalto Alegre',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213203,
                'nome_municipio' => 'Pomerode',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213302,
                'nome_municipio' => 'Ponte Alta',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213351,
                'nome_municipio' => 'Ponte Alta do Norte',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213401,
                'nome_municipio' => 'Ponte Serrada',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213500,
                'nome_municipio' => 'Porto Belo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213609,
                'nome_municipio' => 'Porto União',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213708,
                'nome_municipio' => 'Pouso Redondo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213807,
                'nome_municipio' => 'Praia Grande',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4213906,
                'nome_municipio' => 'Presidente Castello Branco',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214003,
                'nome_municipio' => 'Presidente Getúlio',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214102,
                'nome_municipio' => 'Presidente Nereu',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214151,
                'nome_municipio' => 'Princesa',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214201,
                'nome_municipio' => 'Quilombo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214300,
                'nome_municipio' => 'Rancho Queimado',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214409,
                'nome_municipio' => 'Rio das Antas',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214508,
                'nome_municipio' => 'Rio do Campo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214607,
                'nome_municipio' => 'Rio do Oeste',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214706,
                'nome_municipio' => 'Rio dos Cedros',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214805,
                'nome_municipio' => 'Rio do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4214904,
                'nome_municipio' => 'Rio Fortuna',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215000,
                'nome_municipio' => 'Rio Negrinho',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215059,
                'nome_municipio' => 'Rio Rufino',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215075,
                'nome_municipio' => 'Riqueza',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215109,
                'nome_municipio' => 'Rodeio',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215208,
                'nome_municipio' => 'Romelândia',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215307,
                'nome_municipio' => 'Salete',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215356,
                'nome_municipio' => 'Saltinho',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215406,
                'nome_municipio' => 'Salto Veloso',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215455,
                'nome_municipio' => 'Sangão',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215505,
                'nome_municipio' => 'Santa Cecília',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215554,
                'nome_municipio' => 'Santa Helena',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215604,
                'nome_municipio' => 'Santa Rosa de Lima',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215653,
                'nome_municipio' => 'Santa Rosa do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215679,
                'nome_municipio' => 'Santa Terezinha',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215687,
                'nome_municipio' => 'Santa Terezinha do Progresso',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215695,
                'nome_municipio' => 'Santiago do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215703,
                'nome_municipio' => 'Santo Amaro da Imperatriz',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215752,
                'nome_municipio' => 'São Bernardino',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215802,
                'nome_municipio' => 'São Bento do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4215901,
                'nome_municipio' => 'São Bonifácio',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216008,
                'nome_municipio' => 'São Carlos',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216057,
                'nome_municipio' => 'São Cristóvão do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216107,
                'nome_municipio' => 'São Domingos',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216206,
                'nome_municipio' => 'São Francisco do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216255,
                'nome_municipio' => 'São João do Oeste',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216305,
                'nome_municipio' => 'São João Batista',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216354,
                'nome_municipio' => 'São João do Itaperiú',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216404,
                'nome_municipio' => 'São João do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216503,
                'nome_municipio' => 'São Joaquim',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216602,
                'nome_municipio' => 'São José',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216701,
                'nome_municipio' => 'São José do Cedro',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216800,
                'nome_municipio' => 'São José do Cerrito',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4216909,
                'nome_municipio' => 'São Lourenço do Oeste',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217006,
                'nome_municipio' => 'São Ludgero',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217105,
                'nome_municipio' => 'São Martinho',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217154,
                'nome_municipio' => 'São Miguel da Boa Vista',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217204,
                'nome_municipio' => 'São Miguel do Oeste',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217253,
                'nome_municipio' => 'São Pedro de Alcântara',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217303,
                'nome_municipio' => 'Saudades',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217402,
                'nome_municipio' => 'Schroeder',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217501,
                'nome_municipio' => 'Seara',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217550,
                'nome_municipio' => 'Serra Alta',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217600,
                'nome_municipio' => 'Siderópolis',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217709,
                'nome_municipio' => 'Sombrio',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217758,
                'nome_municipio' => 'Sul Brasil',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217808,
                'nome_municipio' => 'Taió',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217907,
                'nome_municipio' => 'Tangará',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4217956,
                'nome_municipio' => 'Tigrinhos',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218004,
                'nome_municipio' => 'Tijucas',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218103,
                'nome_municipio' => 'Timbé do Sul',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218202,
                'nome_municipio' => 'Timbó',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218251,
                'nome_municipio' => 'Timbó Grande',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218301,
                'nome_municipio' => 'Três Barras',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218350,
                'nome_municipio' => 'Treviso',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218400,
                'nome_municipio' => 'Treze de Maio',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218509,
                'nome_municipio' => 'Treze Tílias',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218608,
                'nome_municipio' => 'Trombudo Central',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218707,
                'nome_municipio' => 'Tubarão',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218756,
                'nome_municipio' => 'Tunápolis',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218806,
                'nome_municipio' => 'Turvo',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218855,
                'nome_municipio' => 'União do Oeste',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218905,
                'nome_municipio' => 'Urubici',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4218954,
                'nome_municipio' => 'Urupema',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219002,
                'nome_municipio' => 'Urussanga',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219101,
                'nome_municipio' => 'Vargeão',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219150,
                'nome_municipio' => 'Vargem',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219176,
                'nome_municipio' => 'Vargem Bonita',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219200,
                'nome_municipio' => 'Vidal Ramos',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219309,
                'nome_municipio' => 'Videira',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219358,
                'nome_municipio' => 'Vitor Meireles',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219408,
                'nome_municipio' => 'Witmarsum',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219507,
                'nome_municipio' => 'Xanxerê',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219606,
                'nome_municipio' => 'Xavantina',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219705,
                'nome_municipio' => 'Xaxim',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4219853,
                'nome_municipio' => 'Zortéa',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4220000,
                'nome_municipio' => 'Balneário Rincão',
                'uf' => 'SC',
            ],
            [
                'id_municipio' => 4300034,
                'nome_municipio' => 'Aceguá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300059,
                'nome_municipio' => 'Água Santa',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300109,
                'nome_municipio' => 'Agudo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300208,
                'nome_municipio' => 'Ajuricaba',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300307,
                'nome_municipio' => 'Alecrim',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300406,
                'nome_municipio' => 'Alegrete',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300455,
                'nome_municipio' => 'Alegria',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300471,
                'nome_municipio' => 'Almirante Tamandaré do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300505,
                'nome_municipio' => 'Alpestre',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300554,
                'nome_municipio' => 'Alto Alegre',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300570,
                'nome_municipio' => 'Alto Feliz',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300604,
                'nome_municipio' => 'Alvorada',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300638,
                'nome_municipio' => 'Amaral Ferrador',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300646,
                'nome_municipio' => 'Ametista do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300661,
                'nome_municipio' => 'André da Rocha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300703,
                'nome_municipio' => 'Anta Gorda',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300802,
                'nome_municipio' => 'Antônio Prado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300851,
                'nome_municipio' => 'Arambaré',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300877,
                'nome_municipio' => 'Araricá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4300901,
                'nome_municipio' => 'Aratiba',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301008,
                'nome_municipio' => 'Arroio do Meio',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301057,
                'nome_municipio' => 'Arroio do Sal',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301073,
                'nome_municipio' => 'Arroio do Padre',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301107,
                'nome_municipio' => 'Arroio dos Ratos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301206,
                'nome_municipio' => 'Arroio do Tigre',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301305,
                'nome_municipio' => 'Arroio Grande',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301404,
                'nome_municipio' => 'Arvorezinha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301503,
                'nome_municipio' => 'Augusto Pestana',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301552,
                'nome_municipio' => 'Áurea',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301602,
                'nome_municipio' => 'Bagé',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301636,
                'nome_municipio' => 'Balneário Pinhal',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301651,
                'nome_municipio' => 'Barão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301701,
                'nome_municipio' => 'Barão de Cotegipe',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301750,
                'nome_municipio' => 'Barão do Triunfo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301800,
                'nome_municipio' => 'Barracão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301859,
                'nome_municipio' => 'Barra do Guarita',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301875,
                'nome_municipio' => 'Barra do Quaraí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301909,
                'nome_municipio' => 'Barra do Ribeiro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301925,
                'nome_municipio' => 'Barra do Rio Azul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4301958,
                'nome_municipio' => 'Barra Funda',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302006,
                'nome_municipio' => 'Barros Cassal',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302055,
                'nome_municipio' => 'Benjamin Constant do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302105,
                'nome_municipio' => 'Bento Gonçalves',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302154,
                'nome_municipio' => 'Boa Vista das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302204,
                'nome_municipio' => 'Boa Vista do Buricá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302220,
                'nome_municipio' => 'Boa Vista do Cadeado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302238,
                'nome_municipio' => 'Boa Vista do Incra',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302253,
                'nome_municipio' => 'Boa Vista do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302303,
                'nome_municipio' => 'Bom Jesus',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302352,
                'nome_municipio' => 'Bom Princípio',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302378,
                'nome_municipio' => 'Bom Progresso',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302402,
                'nome_municipio' => 'Bom Retiro do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302451,
                'nome_municipio' => 'Boqueirão do Leão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302501,
                'nome_municipio' => 'Bossoroca',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302584,
                'nome_municipio' => 'Bozano',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302600,
                'nome_municipio' => 'Braga',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302659,
                'nome_municipio' => 'Brochier',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302709,
                'nome_municipio' => 'Butiá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302808,
                'nome_municipio' => 'Caçapava do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4302907,
                'nome_municipio' => 'Cacequi',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303004,
                'nome_municipio' => 'Cachoeira do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303103,
                'nome_municipio' => 'Cachoeirinha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303202,
                'nome_municipio' => 'Cacique Doble',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303301,
                'nome_municipio' => 'Caibaté',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303400,
                'nome_municipio' => 'Caiçara',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303509,
                'nome_municipio' => 'Camaquã',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303558,
                'nome_municipio' => 'Camargo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303608,
                'nome_municipio' => 'Cambará do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303673,
                'nome_municipio' => 'Campestre da Serra',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303707,
                'nome_municipio' => 'Campina das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303806,
                'nome_municipio' => 'Campinas do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4303905,
                'nome_municipio' => 'Campo Bom',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304002,
                'nome_municipio' => 'Campo Novo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304101,
                'nome_municipio' => 'Campos Borges',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304200,
                'nome_municipio' => 'Candelária',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304309,
                'nome_municipio' => 'Cândido Godói',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304358,
                'nome_municipio' => 'Candiota',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304408,
                'nome_municipio' => 'Canela',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304507,
                'nome_municipio' => 'Canguçu',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304606,
                'nome_municipio' => 'Canoas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304614,
                'nome_municipio' => 'Canudos do Vale',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304622,
                'nome_municipio' => 'Capão Bonito do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304630,
                'nome_municipio' => 'Capão da Canoa',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304655,
                'nome_municipio' => 'Capão do Cipó',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304663,
                'nome_municipio' => 'Capão do Leão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304671,
                'nome_municipio' => 'Capivari do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304689,
                'nome_municipio' => 'Capela de Santana',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304697,
                'nome_municipio' => 'Capitão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304705,
                'nome_municipio' => 'Carazinho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304713,
                'nome_municipio' => 'Caraá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304804,
                'nome_municipio' => 'Carlos Barbosa',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304853,
                'nome_municipio' => 'Carlos Gomes',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304903,
                'nome_municipio' => 'Casca',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4304952,
                'nome_municipio' => 'Caseiros',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305009,
                'nome_municipio' => 'Catuípe',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305108,
                'nome_municipio' => 'Caxias do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305116,
                'nome_municipio' => 'Centenário',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305124,
                'nome_municipio' => 'Cerrito',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305132,
                'nome_municipio' => 'Cerro Branco',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305157,
                'nome_municipio' => 'Cerro Grande',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305173,
                'nome_municipio' => 'Cerro Grande do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305207,
                'nome_municipio' => 'Cerro Largo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305306,
                'nome_municipio' => 'Chapada',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305355,
                'nome_municipio' => 'Charqueadas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305371,
                'nome_municipio' => 'Charrua',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305405,
                'nome_municipio' => 'Chiapetta',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305439,
                'nome_municipio' => 'Chuí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305447,
                'nome_municipio' => 'Chuvisca',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305454,
                'nome_municipio' => 'Cidreira',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305504,
                'nome_municipio' => 'Ciríaco',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305587,
                'nome_municipio' => 'Colinas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305603,
                'nome_municipio' => 'Colorado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305702,
                'nome_municipio' => 'Condor',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305801,
                'nome_municipio' => 'Constantina',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305835,
                'nome_municipio' => 'Coqueiro Baixo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305850,
                'nome_municipio' => 'Coqueiros do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305871,
                'nome_municipio' => 'Coronel Barros',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305900,
                'nome_municipio' => 'Coronel Bicaco',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305934,
                'nome_municipio' => 'Coronel Pilar',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305959,
                'nome_municipio' => 'Cotiporã',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4305975,
                'nome_municipio' => 'Coxilha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306007,
                'nome_municipio' => 'Crissiumal',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306056,
                'nome_municipio' => 'Cristal',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306072,
                'nome_municipio' => 'Cristal do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306106,
                'nome_municipio' => 'Cruz Alta',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306130,
                'nome_municipio' => 'Cruzaltense',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306205,
                'nome_municipio' => 'Cruzeiro do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306304,
                'nome_municipio' => 'David Canabarro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306320,
                'nome_municipio' => 'Derrubadas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306353,
                'nome_municipio' => 'Dezesseis de Novembro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306379,
                'nome_municipio' => 'Dilermando de Aguiar',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306403,
                'nome_municipio' => 'Dois Irmãos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306429,
                'nome_municipio' => 'Dois Irmãos das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306452,
                'nome_municipio' => 'Dois Lajeados',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306502,
                'nome_municipio' => 'Dom Feliciano',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306551,
                'nome_municipio' => 'Dom Pedro de Alcântara',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306601,
                'nome_municipio' => 'Dom Pedrito',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306700,
                'nome_municipio' => 'Dona Francisca',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306734,
                'nome_municipio' => 'Doutor Maurício Cardoso',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306759,
                'nome_municipio' => 'Doutor Ricardo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306767,
                'nome_municipio' => 'Eldorado do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306809,
                'nome_municipio' => 'Encantado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306908,
                'nome_municipio' => 'Encruzilhada do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306924,
                'nome_municipio' => 'Engenho Velho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306932,
                'nome_municipio' => 'Entre-Ijuís',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306957,
                'nome_municipio' => 'Entre Rios do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4306973,
                'nome_municipio' => 'Erebango',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307005,
                'nome_municipio' => 'Erechim',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307054,
                'nome_municipio' => 'Ernestina',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307104,
                'nome_municipio' => 'Herval',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307203,
                'nome_municipio' => 'Erval Grande',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307302,
                'nome_municipio' => 'Erval Seco',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307401,
                'nome_municipio' => 'Esmeralda',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307450,
                'nome_municipio' => 'Esperança do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307500,
                'nome_municipio' => 'Espumoso',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307559,
                'nome_municipio' => 'Estação',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307609,
                'nome_municipio' => 'Estância Velha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307708,
                'nome_municipio' => 'Esteio',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307807,
                'nome_municipio' => 'Estrela',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307815,
                'nome_municipio' => 'Estrela Velha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307831,
                'nome_municipio' => 'Eugênio de Castro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307864,
                'nome_municipio' => 'Fagundes Varela',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4307906,
                'nome_municipio' => 'Farroupilha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308003,
                'nome_municipio' => 'Faxinal do Soturno',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308052,
                'nome_municipio' => 'Faxinalzinho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308078,
                'nome_municipio' => 'Fazenda Vilanova',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308102,
                'nome_municipio' => 'Feliz',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308201,
                'nome_municipio' => 'Flores da Cunha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308250,
                'nome_municipio' => 'Floriano Peixoto',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308300,
                'nome_municipio' => 'Fontoura Xavier',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308409,
                'nome_municipio' => 'Formigueiro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308433,
                'nome_municipio' => 'Forquetinha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308458,
                'nome_municipio' => 'Fortaleza dos Valos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308508,
                'nome_municipio' => 'Frederico Westphalen',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308607,
                'nome_municipio' => 'Garibaldi',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308656,
                'nome_municipio' => 'Garruchos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308706,
                'nome_municipio' => 'Gaurama',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308805,
                'nome_municipio' => 'General Câmara',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308854,
                'nome_municipio' => 'Gentil',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4308904,
                'nome_municipio' => 'Getúlio Vargas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309001,
                'nome_municipio' => 'Giruá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309050,
                'nome_municipio' => 'Glorinha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309100,
                'nome_municipio' => 'Gramado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309126,
                'nome_municipio' => 'Gramado dos Loureiros',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309159,
                'nome_municipio' => 'Gramado Xavier',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309209,
                'nome_municipio' => 'Gravataí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309258,
                'nome_municipio' => 'Guabiju',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309308,
                'nome_municipio' => 'Guaíba',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309407,
                'nome_municipio' => 'Guaporé',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309506,
                'nome_municipio' => 'Guarani das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309555,
                'nome_municipio' => 'Harmonia',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309571,
                'nome_municipio' => 'Herveiras',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309605,
                'nome_municipio' => 'Horizontina',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309654,
                'nome_municipio' => 'Hulha Negra',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309704,
                'nome_municipio' => 'Humaitá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309753,
                'nome_municipio' => 'Ibarama',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309803,
                'nome_municipio' => 'Ibiaçá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309902,
                'nome_municipio' => 'Ibiraiaras',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4309951,
                'nome_municipio' => 'Ibirapuitã',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310009,
                'nome_municipio' => 'Ibirubá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310108,
                'nome_municipio' => 'Igrejinha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310207,
                'nome_municipio' => 'Ijuí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310306,
                'nome_municipio' => 'Ilópolis',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310330,
                'nome_municipio' => 'Imbé',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310363,
                'nome_municipio' => 'Imigrante',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310405,
                'nome_municipio' => 'Independência',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310413,
                'nome_municipio' => 'Inhacorá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310439,
                'nome_municipio' => 'Ipê',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310462,
                'nome_municipio' => 'Ipiranga do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310504,
                'nome_municipio' => 'Iraí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310538,
                'nome_municipio' => 'Itaara',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310553,
                'nome_municipio' => 'Itacurubi',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310579,
                'nome_municipio' => 'Itapuca',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310603,
                'nome_municipio' => 'Itaqui',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310652,
                'nome_municipio' => 'Itati',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310702,
                'nome_municipio' => 'Itatiba do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310751,
                'nome_municipio' => 'Ivorá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310801,
                'nome_municipio' => 'Ivoti',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310850,
                'nome_municipio' => 'Jaboticaba',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310876,
                'nome_municipio' => 'Jacuizinho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4310900,
                'nome_municipio' => 'Jacutinga',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311007,
                'nome_municipio' => 'Jaguarão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311106,
                'nome_municipio' => 'Jaguari',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311122,
                'nome_municipio' => 'Jaquirana',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311130,
                'nome_municipio' => 'Jari',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311155,
                'nome_municipio' => 'Jóia',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311205,
                'nome_municipio' => 'Júlio de Castilhos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311239,
                'nome_municipio' => 'Lagoa Bonita do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311254,
                'nome_municipio' => 'Lagoão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311270,
                'nome_municipio' => 'Lagoa dos Três Cantos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311304,
                'nome_municipio' => 'Lagoa Vermelha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311403,
                'nome_municipio' => 'Lajeado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311429,
                'nome_municipio' => 'Lajeado do Bugre',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311502,
                'nome_municipio' => 'Lavras do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311601,
                'nome_municipio' => 'Liberato Salzano',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311627,
                'nome_municipio' => 'Lindolfo Collor',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311643,
                'nome_municipio' => 'Linha Nova',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311700,
                'nome_municipio' => 'Machadinho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311718,
                'nome_municipio' => 'Maçambará',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311734,
                'nome_municipio' => 'Mampituba',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311759,
                'nome_municipio' => 'Manoel Viana',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311775,
                'nome_municipio' => 'Maquiné',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311791,
                'nome_municipio' => 'Maratá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311809,
                'nome_municipio' => 'Marau',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311908,
                'nome_municipio' => 'Marcelino Ramos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4311981,
                'nome_municipio' => 'Mariana Pimentel',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312005,
                'nome_municipio' => 'Mariano Moro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312054,
                'nome_municipio' => 'Marques de Souza',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312104,
                'nome_municipio' => 'Mata',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312138,
                'nome_municipio' => 'Mato Castelhano',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312153,
                'nome_municipio' => 'Mato Leitão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312179,
                'nome_municipio' => 'Mato Queimado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312203,
                'nome_municipio' => 'Maximiliano de Almeida',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312252,
                'nome_municipio' => 'Minas do Leão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312302,
                'nome_municipio' => 'Miraguaí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312351,
                'nome_municipio' => 'Montauri',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312377,
                'nome_municipio' => 'Monte Alegre dos Campos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312385,
                'nome_municipio' => 'Monte Belo do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312401,
                'nome_municipio' => 'Montenegro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312427,
                'nome_municipio' => 'Mormaço',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312443,
                'nome_municipio' => 'Morrinhos do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312450,
                'nome_municipio' => 'Morro Redondo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312476,
                'nome_municipio' => 'Morro Reuter',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312500,
                'nome_municipio' => 'Mostardas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312609,
                'nome_municipio' => 'Muçum',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312617,
                'nome_municipio' => 'Muitos Capões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312625,
                'nome_municipio' => 'Muliterno',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312658,
                'nome_municipio' => 'Não-Me-Toque',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312674,
                'nome_municipio' => 'Nicolau Vergueiro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312708,
                'nome_municipio' => 'Nonoai',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312757,
                'nome_municipio' => 'Nova Alvorada',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312807,
                'nome_municipio' => 'Nova Araçá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312906,
                'nome_municipio' => 'Nova Bassano',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4312955,
                'nome_municipio' => 'Nova Boa Vista',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313003,
                'nome_municipio' => 'Nova Bréscia',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313011,
                'nome_municipio' => 'Nova Candelária',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313037,
                'nome_municipio' => 'Nova Esperança do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313060,
                'nome_municipio' => 'Nova Hartz',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313086,
                'nome_municipio' => 'Nova Pádua',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313102,
                'nome_municipio' => 'Nova Palma',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313201,
                'nome_municipio' => 'Nova Petrópolis',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313300,
                'nome_municipio' => 'Nova Prata',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313334,
                'nome_municipio' => 'Nova Ramada',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313359,
                'nome_municipio' => 'Nova Roma do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313375,
                'nome_municipio' => 'Nova Santa Rita',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313391,
                'nome_municipio' => 'Novo Cabrais',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313409,
                'nome_municipio' => 'Novo Hamburgo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313425,
                'nome_municipio' => 'Novo Machado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313441,
                'nome_municipio' => 'Novo Tiradentes',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313466,
                'nome_municipio' => 'Novo Xingu',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313490,
                'nome_municipio' => 'Novo Barreiro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313508,
                'nome_municipio' => 'Osório',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313607,
                'nome_municipio' => 'Paim Filho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313656,
                'nome_municipio' => 'Palmares do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313706,
                'nome_municipio' => 'Palmeira das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313805,
                'nome_municipio' => 'Palmitinho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313904,
                'nome_municipio' => 'Panambi',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4313953,
                'nome_municipio' => 'Pantano Grande',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314001,
                'nome_municipio' => 'Paraí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314027,
                'nome_municipio' => 'Paraíso do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314035,
                'nome_municipio' => 'Pareci Novo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314050,
                'nome_municipio' => 'Parobé',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314068,
                'nome_municipio' => 'Passa Sete',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314076,
                'nome_municipio' => 'Passo do Sobrado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314100,
                'nome_municipio' => 'Passo Fundo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314134,
                'nome_municipio' => 'Paulo Bento',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314159,
                'nome_municipio' => 'Paverama',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314175,
                'nome_municipio' => 'Pedras Altas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314209,
                'nome_municipio' => 'Pedro Osório',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314308,
                'nome_municipio' => 'Pejuçara',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314407,
                'nome_municipio' => 'Pelotas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314423,
                'nome_municipio' => 'Picada Café',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314456,
                'nome_municipio' => 'Pinhal',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314464,
                'nome_municipio' => 'Pinhal da Serra',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314472,
                'nome_municipio' => 'Pinhal Grande',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314498,
                'nome_municipio' => 'Pinheirinho do Vale',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314506,
                'nome_municipio' => 'Pinheiro Machado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314548,
                'nome_municipio' => 'Pinto Bandeira',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314555,
                'nome_municipio' => 'Pirapó',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314605,
                'nome_municipio' => 'Piratini',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314704,
                'nome_municipio' => 'Planalto',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314753,
                'nome_municipio' => 'Poço das Antas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314779,
                'nome_municipio' => 'Pontão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314787,
                'nome_municipio' => 'Ponte Preta',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314803,
                'nome_municipio' => 'Portão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4314902,
                'nome_municipio' => 'Porto Alegre',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315008,
                'nome_municipio' => 'Porto Lucena',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315057,
                'nome_municipio' => 'Porto Mauá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315073,
                'nome_municipio' => 'Porto Vera Cruz',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315107,
                'nome_municipio' => 'Porto Xavier',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315131,
                'nome_municipio' => 'Pouso Novo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315149,
                'nome_municipio' => 'Presidente Lucena',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315156,
                'nome_municipio' => 'Progresso',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315172,
                'nome_municipio' => 'Protásio Alves',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315206,
                'nome_municipio' => 'Putinga',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315305,
                'nome_municipio' => 'Quaraí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315313,
                'nome_municipio' => 'Quatro Irmãos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315321,
                'nome_municipio' => 'Quevedos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315354,
                'nome_municipio' => 'Quinze de Novembro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315404,
                'nome_municipio' => 'Redentora',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315453,
                'nome_municipio' => 'Relvado',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315503,
                'nome_municipio' => 'Restinga Sêca',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315552,
                'nome_municipio' => 'Rio dos Índios',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315602,
                'nome_municipio' => 'Rio Grande',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315701,
                'nome_municipio' => 'Rio Pardo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315750,
                'nome_municipio' => 'Riozinho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315800,
                'nome_municipio' => 'Roca Sales',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315909,
                'nome_municipio' => 'Rodeio Bonito',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4315958,
                'nome_municipio' => 'Rolador',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316006,
                'nome_municipio' => 'Rolante',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316105,
                'nome_municipio' => 'Ronda Alta',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316204,
                'nome_municipio' => 'Rondinha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316303,
                'nome_municipio' => 'Roque Gonzales',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316402,
                'nome_municipio' => 'Rosário do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316428,
                'nome_municipio' => 'Sagrada Família',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316436,
                'nome_municipio' => 'Saldanha Marinho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316451,
                'nome_municipio' => 'Salto do Jacuí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316477,
                'nome_municipio' => 'Salvador das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316501,
                'nome_municipio' => 'Salvador do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316600,
                'nome_municipio' => 'Sananduva',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316709,
                'nome_municipio' => 'Santa Bárbara do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316733,
                'nome_municipio' => 'Santa Cecília do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316758,
                'nome_municipio' => 'Santa Clara do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316808,
                'nome_municipio' => 'Santa Cruz do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316907,
                'nome_municipio' => 'Santa Maria',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316956,
                'nome_municipio' => 'Santa Maria do Herval',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4316972,
                'nome_municipio' => 'Santa Margarida do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317004,
                'nome_municipio' => 'Santana da Boa Vista',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317103,
                'nome_municipio' => 'Sant\'Ana do Livramento',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317202,
                'nome_municipio' => 'Santa Rosa',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317251,
                'nome_municipio' => 'Santa Tereza',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317301,
                'nome_municipio' => 'Santa Vitória do Palmar',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317400,
                'nome_municipio' => 'Santiago',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317509,
                'nome_municipio' => 'Santo Ângelo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317558,
                'nome_municipio' => 'Santo Antônio do Palma',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317608,
                'nome_municipio' => 'Santo Antônio da Patrulha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317707,
                'nome_municipio' => 'Santo Antônio das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317756,
                'nome_municipio' => 'Santo Antônio do Planalto',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317806,
                'nome_municipio' => 'Santo Augusto',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317905,
                'nome_municipio' => 'Santo Cristo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4317954,
                'nome_municipio' => 'Santo Expedito do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318002,
                'nome_municipio' => 'São Borja',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318051,
                'nome_municipio' => 'São Domingos do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318101,
                'nome_municipio' => 'São Francisco de Assis',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318200,
                'nome_municipio' => 'São Francisco de Paula',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318309,
                'nome_municipio' => 'São Gabriel',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318408,
                'nome_municipio' => 'São Jerônimo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318424,
                'nome_municipio' => 'São João da Urtiga',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318432,
                'nome_municipio' => 'São João do Polêsine',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318440,
                'nome_municipio' => 'São Jorge',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318457,
                'nome_municipio' => 'São José das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318465,
                'nome_municipio' => 'São José do Herval',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318481,
                'nome_municipio' => 'São José do Hortêncio',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318499,
                'nome_municipio' => 'São José do Inhacorá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318507,
                'nome_municipio' => 'São José do Norte',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318606,
                'nome_municipio' => 'São José do Ouro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318614,
                'nome_municipio' => 'São José do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318622,
                'nome_municipio' => 'São José dos Ausentes',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318705,
                'nome_municipio' => 'São Leopoldo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318804,
                'nome_municipio' => 'São Lourenço do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4318903,
                'nome_municipio' => 'São Luiz Gonzaga',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319000,
                'nome_municipio' => 'São Marcos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319109,
                'nome_municipio' => 'São Martinho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319125,
                'nome_municipio' => 'São Martinho da Serra',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319158,
                'nome_municipio' => 'São Miguel das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319208,
                'nome_municipio' => 'São Nicolau',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319307,
                'nome_municipio' => 'São Paulo das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319356,
                'nome_municipio' => 'São Pedro da Serra',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319364,
                'nome_municipio' => 'São Pedro das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319372,
                'nome_municipio' => 'São Pedro do Butiá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319406,
                'nome_municipio' => 'São Pedro do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319505,
                'nome_municipio' => 'São Sebastião do Caí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319604,
                'nome_municipio' => 'São Sepé',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319703,
                'nome_municipio' => 'São Valentim',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319711,
                'nome_municipio' => 'São Valentim do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319737,
                'nome_municipio' => 'São Valério do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319752,
                'nome_municipio' => 'São Vendelino',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319802,
                'nome_municipio' => 'São Vicente do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4319901,
                'nome_municipio' => 'Sapiranga',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320008,
                'nome_municipio' => 'Sapucaia do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320107,
                'nome_municipio' => 'Sarandi',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320206,
                'nome_municipio' => 'Seberi',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320230,
                'nome_municipio' => 'Sede Nova',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320263,
                'nome_municipio' => 'Segredo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320305,
                'nome_municipio' => 'Selbach',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320321,
                'nome_municipio' => 'Senador Salgado Filho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320354,
                'nome_municipio' => 'Sentinela do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320404,
                'nome_municipio' => 'Serafina Corrêa',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320453,
                'nome_municipio' => 'Sério',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320503,
                'nome_municipio' => 'Sertão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320552,
                'nome_municipio' => 'Sertão Santana',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320578,
                'nome_municipio' => 'Sete de Setembro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320602,
                'nome_municipio' => 'Severiano de Almeida',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320651,
                'nome_municipio' => 'Silveira Martins',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320677,
                'nome_municipio' => 'Sinimbu',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320701,
                'nome_municipio' => 'Sobradinho',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320800,
                'nome_municipio' => 'Soledade',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320859,
                'nome_municipio' => 'Tabaí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4320909,
                'nome_municipio' => 'Tapejara',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321006,
                'nome_municipio' => 'Tapera',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321105,
                'nome_municipio' => 'Tapes',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321204,
                'nome_municipio' => 'Taquara',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321303,
                'nome_municipio' => 'Taquari',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321329,
                'nome_municipio' => 'Taquaruçu do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321352,
                'nome_municipio' => 'Tavares',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321402,
                'nome_municipio' => 'Tenente Portela',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321436,
                'nome_municipio' => 'Terra de Areia',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321451,
                'nome_municipio' => 'Teutônia',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321469,
                'nome_municipio' => 'Tio Hugo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321477,
                'nome_municipio' => 'Tiradentes do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321493,
                'nome_municipio' => 'Toropi',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321501,
                'nome_municipio' => 'Torres',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321600,
                'nome_municipio' => 'Tramandaí',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321626,
                'nome_municipio' => 'Travesseiro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321634,
                'nome_municipio' => 'Três Arroios',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321667,
                'nome_municipio' => 'Três Cachoeiras',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321709,
                'nome_municipio' => 'Três Coroas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321808,
                'nome_municipio' => 'Três de Maio',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321832,
                'nome_municipio' => 'Três Forquilhas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321857,
                'nome_municipio' => 'Três Palmeiras',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321907,
                'nome_municipio' => 'Três Passos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4321956,
                'nome_municipio' => 'Trindade do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322004,
                'nome_municipio' => 'Triunfo',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322103,
                'nome_municipio' => 'Tucunduva',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322152,
                'nome_municipio' => 'Tunas',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322186,
                'nome_municipio' => 'Tupanci do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322202,
                'nome_municipio' => 'Tupanciretã',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322251,
                'nome_municipio' => 'Tupandi',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322301,
                'nome_municipio' => 'Tuparendi',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322327,
                'nome_municipio' => 'Turuçu',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322343,
                'nome_municipio' => 'Ubiretama',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322350,
                'nome_municipio' => 'União da Serra',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322376,
                'nome_municipio' => 'Unistalda',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322400,
                'nome_municipio' => 'Uruguaiana',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322509,
                'nome_municipio' => 'Vacaria',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322525,
                'nome_municipio' => 'Vale Verde',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322533,
                'nome_municipio' => 'Vale do Sol',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322541,
                'nome_municipio' => 'Vale Real',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322558,
                'nome_municipio' => 'Vanini',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322608,
                'nome_municipio' => 'Venâncio Aires',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322707,
                'nome_municipio' => 'Vera Cruz',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322806,
                'nome_municipio' => 'Veranópolis',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322855,
                'nome_municipio' => 'Vespasiano Corrêa',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4322905,
                'nome_municipio' => 'Viadutos',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323002,
                'nome_municipio' => 'Viamão',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323101,
                'nome_municipio' => 'Vicente Dutra',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323200,
                'nome_municipio' => 'Victor Graeff',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323309,
                'nome_municipio' => 'Vila Flores',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323358,
                'nome_municipio' => 'Vila Lângaro',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323408,
                'nome_municipio' => 'Vila Maria',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323457,
                'nome_municipio' => 'Vila Nova do Sul',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323507,
                'nome_municipio' => 'Vista Alegre',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323606,
                'nome_municipio' => 'Vista Alegre do Prata',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323705,
                'nome_municipio' => 'Vista Gaúcha',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323754,
                'nome_municipio' => 'Vitória das Missões',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323770,
                'nome_municipio' => 'Westfália',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 4323804,
                'nome_municipio' => 'Xangri-lá',
                'uf' => 'RS',
            ],
            [
                'id_municipio' => 5000203,
                'nome_municipio' => 'Água Clara',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5000252,
                'nome_municipio' => 'Alcinópolis',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5000609,
                'nome_municipio' => 'Amambai',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5000708,
                'nome_municipio' => 'Anastácio',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5000807,
                'nome_municipio' => 'Anaurilândia',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5000856,
                'nome_municipio' => 'Angélica',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5000906,
                'nome_municipio' => 'Antônio João',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5001003,
                'nome_municipio' => 'Aparecida do Taboado',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5001102,
                'nome_municipio' => 'Aquidauana',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5001243,
                'nome_municipio' => 'Aral Moreira',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5001508,
                'nome_municipio' => 'Bandeirantes',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5001904,
                'nome_municipio' => 'Bataguassu',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002001,
                'nome_municipio' => 'Batayporã',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002100,
                'nome_municipio' => 'Bela Vista',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002159,
                'nome_municipio' => 'Bodoquena',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002209,
                'nome_municipio' => 'Bonito',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002308,
                'nome_municipio' => 'Brasilândia',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002407,
                'nome_municipio' => 'Caarapó',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002605,
                'nome_municipio' => 'Camapuã',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002704,
                'nome_municipio' => 'Campo Grande',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002803,
                'nome_municipio' => 'Caracol',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002902,
                'nome_municipio' => 'Cassilândia',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5002951,
                'nome_municipio' => 'Chapadão do Sul',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003108,
                'nome_municipio' => 'Corguinho',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003157,
                'nome_municipio' => 'Coronel Sapucaia',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003207,
                'nome_municipio' => 'Corumbá',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003256,
                'nome_municipio' => 'Costa Rica',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003306,
                'nome_municipio' => 'Coxim',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003454,
                'nome_municipio' => 'Deodápolis',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003488,
                'nome_municipio' => 'Dois Irmãos do Buriti',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003504,
                'nome_municipio' => 'Douradina',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003702,
                'nome_municipio' => 'Dourados',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003751,
                'nome_municipio' => 'Eldorado',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003801,
                'nome_municipio' => 'Fátima do Sul',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5003900,
                'nome_municipio' => 'Figueirão',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5004007,
                'nome_municipio' => 'Glória de Dourados',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5004106,
                'nome_municipio' => 'Guia Lopes da Laguna',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5004304,
                'nome_municipio' => 'Iguatemi',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5004403,
                'nome_municipio' => 'Inocência',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5004502,
                'nome_municipio' => 'Itaporã',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5004601,
                'nome_municipio' => 'Itaquiraí',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5004700,
                'nome_municipio' => 'Ivinhema',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5004809,
                'nome_municipio' => 'Japorã',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5004908,
                'nome_municipio' => 'Jaraguari',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5005004,
                'nome_municipio' => 'Jardim',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5005103,
                'nome_municipio' => 'Jateí',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5005152,
                'nome_municipio' => 'Juti',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5005202,
                'nome_municipio' => 'Ladário',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5005251,
                'nome_municipio' => 'Laguna Carapã',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5005400,
                'nome_municipio' => 'Maracaju',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5005608,
                'nome_municipio' => 'Miranda',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5005681,
                'nome_municipio' => 'Mundo Novo',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5005707,
                'nome_municipio' => 'Naviraí',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5005806,
                'nome_municipio' => 'Nioaque',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5006002,
                'nome_municipio' => 'Nova Alvorada do Sul',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5006200,
                'nome_municipio' => 'Nova Andradina',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5006259,
                'nome_municipio' => 'Novo Horizonte do Sul',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5006275,
                'nome_municipio' => 'Paraíso das Águas',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5006309,
                'nome_municipio' => 'Paranaíba',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5006358,
                'nome_municipio' => 'Paranhos',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5006408,
                'nome_municipio' => 'Pedro Gomes',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5006606,
                'nome_municipio' => 'Ponta Porã',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5006903,
                'nome_municipio' => 'Porto Murtinho',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007109,
                'nome_municipio' => 'Ribas do Rio Pardo',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007208,
                'nome_municipio' => 'Rio Brilhante',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007307,
                'nome_municipio' => 'Rio Negro',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007406,
                'nome_municipio' => 'Rio Verde de Mato Grosso',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007505,
                'nome_municipio' => 'Rochedo',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007554,
                'nome_municipio' => 'Santa Rita do Pardo',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007695,
                'nome_municipio' => 'São Gabriel do Oeste',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007703,
                'nome_municipio' => 'Sete Quedas',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007802,
                'nome_municipio' => 'Selvíria',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007901,
                'nome_municipio' => 'Sidrolândia',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007935,
                'nome_municipio' => 'Sonora',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007950,
                'nome_municipio' => 'Tacuru',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5007976,
                'nome_municipio' => 'Taquarussu',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5008008,
                'nome_municipio' => 'Terenos',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5008305,
                'nome_municipio' => 'Três Lagoas',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5008404,
                'nome_municipio' => 'Vicentina',
                'uf' => 'MS',
            ],
            [
                'id_municipio' => 5100102,
                'nome_municipio' => 'Acorizal',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5100201,
                'nome_municipio' => 'Água Boa',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5100250,
                'nome_municipio' => 'Alta Floresta',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5100300,
                'nome_municipio' => 'Alto Araguaia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5100359,
                'nome_municipio' => 'Alto Boa Vista',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5100409,
                'nome_municipio' => 'Alto Garças',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5100508,
                'nome_municipio' => 'Alto Paraguai',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5100607,
                'nome_municipio' => 'Alto Taquari',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5100805,
                'nome_municipio' => 'Apiacás',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5101001,
                'nome_municipio' => 'Araguaiana',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5101209,
                'nome_municipio' => 'Araguainha',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5101258,
                'nome_municipio' => 'Araputanga',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5101308,
                'nome_municipio' => 'Arenápolis',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5101407,
                'nome_municipio' => 'Aripuanã',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5101605,
                'nome_municipio' => 'Barão de Melgaço',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5101704,
                'nome_municipio' => 'Barra do Bugres',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5101803,
                'nome_municipio' => 'Barra do Garças',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5101837,
                'nome_municipio' => 'Boa Esperança do Norte',
                'uf' => '',
            ],
            [
                'id_municipio' => 5101852,
                'nome_municipio' => 'Bom Jesus do Araguaia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5101902,
                'nome_municipio' => 'Brasnorte',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5102504,
                'nome_municipio' => 'Cáceres',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5102603,
                'nome_municipio' => 'Campinápolis',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5102637,
                'nome_municipio' => 'Campo Novo do Parecis',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5102678,
                'nome_municipio' => 'Campo Verde',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5102686,
                'nome_municipio' => 'Campos de Júlio',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5102694,
                'nome_municipio' => 'Canabrava do Norte',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5102702,
                'nome_municipio' => 'Canarana',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5102793,
                'nome_municipio' => 'Carlinda',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5102850,
                'nome_municipio' => 'Castanheira',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103007,
                'nome_municipio' => 'Chapada dos Guimarães',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103056,
                'nome_municipio' => 'Cláudia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103106,
                'nome_municipio' => 'Cocalinho',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103205,
                'nome_municipio' => 'Colíder',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103254,
                'nome_municipio' => 'Colniza',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103304,
                'nome_municipio' => 'Comodoro',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103353,
                'nome_municipio' => 'Confresa',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103361,
                'nome_municipio' => 'Conquista D\'Oeste',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103379,
                'nome_municipio' => 'Cotriguaçu',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103403,
                'nome_municipio' => 'Cuiabá',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103437,
                'nome_municipio' => 'Curvelândia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103452,
                'nome_municipio' => 'Denise',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103502,
                'nome_municipio' => 'Diamantino',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103601,
                'nome_municipio' => 'Dom Aquino',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103700,
                'nome_municipio' => 'Feliz Natal',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103809,
                'nome_municipio' => 'Figueirópolis D\'Oeste',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103858,
                'nome_municipio' => 'Gaúcha do Norte',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103908,
                'nome_municipio' => 'General Carneiro',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5103957,
                'nome_municipio' => 'Glória D\'Oeste',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5104104,
                'nome_municipio' => 'Guarantã do Norte',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5104203,
                'nome_municipio' => 'Guiratinga',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5104500,
                'nome_municipio' => 'Indiavaí',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5104526,
                'nome_municipio' => 'Ipiranga do Norte',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5104542,
                'nome_municipio' => 'Itanhangá',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5104559,
                'nome_municipio' => 'Itaúba',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5104609,
                'nome_municipio' => 'Itiquira',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5104807,
                'nome_municipio' => 'Jaciara',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5104906,
                'nome_municipio' => 'Jangada',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105002,
                'nome_municipio' => 'Jauru',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105101,
                'nome_municipio' => 'Juara',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105150,
                'nome_municipio' => 'Juína',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105176,
                'nome_municipio' => 'Juruena',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105200,
                'nome_municipio' => 'Juscimeira',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105234,
                'nome_municipio' => 'Lambari D\'Oeste',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105259,
                'nome_municipio' => 'Lucas do Rio Verde',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105309,
                'nome_municipio' => 'Luciara',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105507,
                'nome_municipio' => 'Vila Bela da Santíssima Trindade',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105580,
                'nome_municipio' => 'Marcelândia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105606,
                'nome_municipio' => 'Matupá',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105622,
                'nome_municipio' => 'Mirassol d\'Oeste',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5105903,
                'nome_municipio' => 'Nobres',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106000,
                'nome_municipio' => 'Nortelândia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106109,
                'nome_municipio' => 'Nossa Senhora do Livramento',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106158,
                'nome_municipio' => 'Nova Bandeirantes',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106174,
                'nome_municipio' => 'Nova Nazaré',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106182,
                'nome_municipio' => 'Nova Lacerda',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106190,
                'nome_municipio' => 'Nova Santa Helena',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106208,
                'nome_municipio' => 'Nova Brasilândia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106216,
                'nome_municipio' => 'Nova Canaã do Norte',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106224,
                'nome_municipio' => 'Nova Mutum',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106232,
                'nome_municipio' => 'Nova Olímpia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106240,
                'nome_municipio' => 'Nova Ubiratã',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106257,
                'nome_municipio' => 'Nova Xavantina',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106265,
                'nome_municipio' => 'Novo Mundo',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106273,
                'nome_municipio' => 'Novo Horizonte do Norte',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106281,
                'nome_municipio' => 'Novo São Joaquim',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106299,
                'nome_municipio' => 'Paranaíta',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106307,
                'nome_municipio' => 'Paranatinga',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106315,
                'nome_municipio' => 'Novo Santo Antônio',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106372,
                'nome_municipio' => 'Pedra Preta',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106422,
                'nome_municipio' => 'Peixoto de Azevedo',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106455,
                'nome_municipio' => 'Planalto da Serra',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106505,
                'nome_municipio' => 'Poconé',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106653,
                'nome_municipio' => 'Pontal do Araguaia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106703,
                'nome_municipio' => 'Ponte Branca',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106752,
                'nome_municipio' => 'Pontes e Lacerda',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106778,
                'nome_municipio' => 'Porto Alegre do Norte',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106802,
                'nome_municipio' => 'Porto dos Gaúchos',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106828,
                'nome_municipio' => 'Porto Esperidião',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5106851,
                'nome_municipio' => 'Porto Estrela',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107008,
                'nome_municipio' => 'Poxoréu',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107040,
                'nome_municipio' => 'Primavera do Leste',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107065,
                'nome_municipio' => 'Querência',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107107,
                'nome_municipio' => 'São José dos Quatro Marcos',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107156,
                'nome_municipio' => 'Reserva do Cabaçal',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107180,
                'nome_municipio' => 'Ribeirão Cascalheira',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107198,
                'nome_municipio' => 'Ribeirãozinho',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107206,
                'nome_municipio' => 'Rio Branco',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107248,
                'nome_municipio' => 'Santa Carmem',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107263,
                'nome_municipio' => 'Santo Afonso',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107297,
                'nome_municipio' => 'São José do Povo',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107305,
                'nome_municipio' => 'São José do Rio Claro',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107354,
                'nome_municipio' => 'São José do Xingu',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107404,
                'nome_municipio' => 'São Pedro da Cipa',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107578,
                'nome_municipio' => 'Rondolândia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107602,
                'nome_municipio' => 'Rondonópolis',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107701,
                'nome_municipio' => 'Rosário Oeste',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107743,
                'nome_municipio' => 'Santa Cruz do Xingu',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107750,
                'nome_municipio' => 'Salto do Céu',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107768,
                'nome_municipio' => 'Santa Rita do Trivelato',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107776,
                'nome_municipio' => 'Santa Terezinha',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107792,
                'nome_municipio' => 'Santo Antônio do Leste',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107800,
                'nome_municipio' => 'Santo Antônio de Leverger',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107859,
                'nome_municipio' => 'São Félix do Araguaia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107875,
                'nome_municipio' => 'Sapezal',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107883,
                'nome_municipio' => 'Serra Nova Dourada',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107909,
                'nome_municipio' => 'Sinop',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107925,
                'nome_municipio' => 'Sorriso',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107941,
                'nome_municipio' => 'Tabaporã',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5107958,
                'nome_municipio' => 'Tangará da Serra',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108006,
                'nome_municipio' => 'Tapurah',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108055,
                'nome_municipio' => 'Terra Nova do Norte',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108105,
                'nome_municipio' => 'Tesouro',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108204,
                'nome_municipio' => 'Torixoréu',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108303,
                'nome_municipio' => 'União do Sul',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108352,
                'nome_municipio' => 'Vale de São Domingos',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108402,
                'nome_municipio' => 'Várzea Grande',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108501,
                'nome_municipio' => 'Vera',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108600,
                'nome_municipio' => 'Vila Rica',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108808,
                'nome_municipio' => 'Nova Guarita',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108857,
                'nome_municipio' => 'Nova Marilândia',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108907,
                'nome_municipio' => 'Nova Maringá',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5108956,
                'nome_municipio' => 'Nova Monte Verde',
                'uf' => 'MT',
            ],
            [
                'id_municipio' => 5200050,
                'nome_municipio' => 'Abadia de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200100,
                'nome_municipio' => 'Abadiânia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200134,
                'nome_municipio' => 'Acreúna',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200159,
                'nome_municipio' => 'Adelândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200175,
                'nome_municipio' => 'Água Fria de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200209,
                'nome_municipio' => 'Água Limpa',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200258,
                'nome_municipio' => 'Águas Lindas de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200308,
                'nome_municipio' => 'Alexânia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200506,
                'nome_municipio' => 'Aloândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200555,
                'nome_municipio' => 'Alto Horizonte',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200605,
                'nome_municipio' => 'Alto Paraíso de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200803,
                'nome_municipio' => 'Alvorada do Norte',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200829,
                'nome_municipio' => 'Amaralina',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200852,
                'nome_municipio' => 'Americano do Brasil',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5200902,
                'nome_municipio' => 'Amorinópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5201108,
                'nome_municipio' => 'Anápolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5201207,
                'nome_municipio' => 'Anhanguera',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5201306,
                'nome_municipio' => 'Anicuns',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5201405,
                'nome_municipio' => 'Aparecida de Goiânia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5201454,
                'nome_municipio' => 'Aparecida do Rio Doce',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5201504,
                'nome_municipio' => 'Aporé',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5201603,
                'nome_municipio' => 'Araçu',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5201702,
                'nome_municipio' => 'Aragarças',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5201801,
                'nome_municipio' => 'Aragoiânia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5202155,
                'nome_municipio' => 'Araguapaz',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5202353,
                'nome_municipio' => 'Arenópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5202502,
                'nome_municipio' => 'Aruanã',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5202601,
                'nome_municipio' => 'Aurilândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5202809,
                'nome_municipio' => 'Avelinópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203104,
                'nome_municipio' => 'Baliza',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203203,
                'nome_municipio' => 'Barro Alto',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203302,
                'nome_municipio' => 'Bela Vista de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203401,
                'nome_municipio' => 'Bom Jardim de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203500,
                'nome_municipio' => 'Bom Jesus de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203559,
                'nome_municipio' => 'Bonfinópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203575,
                'nome_municipio' => 'Bonópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203609,
                'nome_municipio' => 'Brazabrantes',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203807,
                'nome_municipio' => 'Britânia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203906,
                'nome_municipio' => 'Buriti Alegre',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203939,
                'nome_municipio' => 'Buriti de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5203962,
                'nome_municipio' => 'Buritinópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204003,
                'nome_municipio' => 'Cabeceiras',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204102,
                'nome_municipio' => 'Cachoeira Alta',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204201,
                'nome_municipio' => 'Cachoeira de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204250,
                'nome_municipio' => 'Cachoeira Dourada',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204300,
                'nome_municipio' => 'Caçu',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204409,
                'nome_municipio' => 'Caiapônia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204508,
                'nome_municipio' => 'Caldas Novas',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204557,
                'nome_municipio' => 'Caldazinha',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204607,
                'nome_municipio' => 'Campestre de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204656,
                'nome_municipio' => 'Campinaçu',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204706,
                'nome_municipio' => 'Campinorte',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204805,
                'nome_municipio' => 'Campo Alegre de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204854,
                'nome_municipio' => 'Campo Limpo de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204904,
                'nome_municipio' => 'Campos Belos',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5204953,
                'nome_municipio' => 'Campos Verdes',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205000,
                'nome_municipio' => 'Carmo do Rio Verde',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205059,
                'nome_municipio' => 'Castelândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205109,
                'nome_municipio' => 'Catalão',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205208,
                'nome_municipio' => 'Caturaí',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205307,
                'nome_municipio' => 'Cavalcante',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205406,
                'nome_municipio' => 'Ceres',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205455,
                'nome_municipio' => 'Cezarina',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205471,
                'nome_municipio' => 'Chapadão do Céu',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205497,
                'nome_municipio' => 'Cidade Ocidental',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205513,
                'nome_municipio' => 'Cocalzinho de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205521,
                'nome_municipio' => 'Colinas do Sul',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205703,
                'nome_municipio' => 'Córrego do Ouro',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205802,
                'nome_municipio' => 'Corumbá de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5205901,
                'nome_municipio' => 'Corumbaíba',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5206206,
                'nome_municipio' => 'Cristalina',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5206305,
                'nome_municipio' => 'Cristianópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5206404,
                'nome_municipio' => 'Crixás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5206503,
                'nome_municipio' => 'Cromínia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5206602,
                'nome_municipio' => 'Cumari',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5206701,
                'nome_municipio' => 'Damianópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5206800,
                'nome_municipio' => 'Damolândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5206909,
                'nome_municipio' => 'Davinópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5207105,
                'nome_municipio' => 'Diorama',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5207253,
                'nome_municipio' => 'Doverlândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5207352,
                'nome_municipio' => 'Edealina',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5207402,
                'nome_municipio' => 'Edéia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5207501,
                'nome_municipio' => 'Estrela do Norte',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5207535,
                'nome_municipio' => 'Faina',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5207600,
                'nome_municipio' => 'Fazenda Nova',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5207808,
                'nome_municipio' => 'Firminópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5207907,
                'nome_municipio' => 'Flores de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5208004,
                'nome_municipio' => 'Formosa',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5208103,
                'nome_municipio' => 'Formoso',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5208152,
                'nome_municipio' => 'Gameleira de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5208301,
                'nome_municipio' => 'Divinópolis de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5208400,
                'nome_municipio' => 'Goianápolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5208509,
                'nome_municipio' => 'Goiandira',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5208608,
                'nome_municipio' => 'Goianésia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5208707,
                'nome_municipio' => 'Goiânia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5208806,
                'nome_municipio' => 'Goianira',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5208905,
                'nome_municipio' => 'Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209101,
                'nome_municipio' => 'Goiatuba',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209150,
                'nome_municipio' => 'Gouvelândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209200,
                'nome_municipio' => 'Guapó',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209291,
                'nome_municipio' => 'Guaraíta',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209408,
                'nome_municipio' => 'Guarani de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209457,
                'nome_municipio' => 'Guarinos',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209606,
                'nome_municipio' => 'Heitoraí',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209705,
                'nome_municipio' => 'Hidrolândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209804,
                'nome_municipio' => 'Hidrolina',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209903,
                'nome_municipio' => 'Iaciara',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209937,
                'nome_municipio' => 'Inaciolândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5209952,
                'nome_municipio' => 'Indiara',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5210000,
                'nome_municipio' => 'Inhumas',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5210109,
                'nome_municipio' => 'Ipameri',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5210158,
                'nome_municipio' => 'Ipiranga de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5210208,
                'nome_municipio' => 'Iporá',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5210307,
                'nome_municipio' => 'Israelândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5210406,
                'nome_municipio' => 'Itaberaí',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5210562,
                'nome_municipio' => 'Itaguari',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5210604,
                'nome_municipio' => 'Itaguaru',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5210802,
                'nome_municipio' => 'Itajá',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5210901,
                'nome_municipio' => 'Itapaci',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5211008,
                'nome_municipio' => 'Itapirapuã',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5211206,
                'nome_municipio' => 'Itapuranga',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5211305,
                'nome_municipio' => 'Itarumã',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5211404,
                'nome_municipio' => 'Itauçu',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5211503,
                'nome_municipio' => 'Itumbiara',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5211602,
                'nome_municipio' => 'Ivolândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5211701,
                'nome_municipio' => 'Jandaia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5211800,
                'nome_municipio' => 'Jaraguá',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5211909,
                'nome_municipio' => 'Jataí',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212006,
                'nome_municipio' => 'Jaupaci',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212055,
                'nome_municipio' => 'Jesúpolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212105,
                'nome_municipio' => 'Joviânia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212204,
                'nome_municipio' => 'Jussara',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212253,
                'nome_municipio' => 'Lagoa Santa',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212303,
                'nome_municipio' => 'Leopoldo de Bulhões',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212501,
                'nome_municipio' => 'Luziânia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212600,
                'nome_municipio' => 'Mairipotaba',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212709,
                'nome_municipio' => 'Mambaí',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212808,
                'nome_municipio' => 'Mara Rosa',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212907,
                'nome_municipio' => 'Marzagão',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5212956,
                'nome_municipio' => 'Matrinchã',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213004,
                'nome_municipio' => 'Maurilândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213053,
                'nome_municipio' => 'Mimoso de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213087,
                'nome_municipio' => 'Minaçu',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213103,
                'nome_municipio' => 'Mineiros',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213400,
                'nome_municipio' => 'Moiporá',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213509,
                'nome_municipio' => 'Monte Alegre de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213707,
                'nome_municipio' => 'Montes Claros de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213756,
                'nome_municipio' => 'Montividiu',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213772,
                'nome_municipio' => 'Montividiu do Norte',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213806,
                'nome_municipio' => 'Morrinhos',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213855,
                'nome_municipio' => 'Morro Agudo de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5213905,
                'nome_municipio' => 'Mossâmedes',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214002,
                'nome_municipio' => 'Mozarlândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214051,
                'nome_municipio' => 'Mundo Novo',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214101,
                'nome_municipio' => 'Mutunópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214408,
                'nome_municipio' => 'Nazário',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214507,
                'nome_municipio' => 'Nerópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214606,
                'nome_municipio' => 'Niquelândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214705,
                'nome_municipio' => 'Nova América',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214804,
                'nome_municipio' => 'Nova Aurora',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214838,
                'nome_municipio' => 'Nova Crixás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214861,
                'nome_municipio' => 'Nova Glória',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214879,
                'nome_municipio' => 'Nova Iguaçu de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5214903,
                'nome_municipio' => 'Nova Roma',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215009,
                'nome_municipio' => 'Nova Veneza',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215207,
                'nome_municipio' => 'Novo Brasil',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215231,
                'nome_municipio' => 'Novo Gama',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215256,
                'nome_municipio' => 'Novo Planalto',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215306,
                'nome_municipio' => 'Orizona',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215405,
                'nome_municipio' => 'Ouro Verde de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215504,
                'nome_municipio' => 'Ouvidor',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215603,
                'nome_municipio' => 'Padre Bernardo',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215652,
                'nome_municipio' => 'Palestina de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215702,
                'nome_municipio' => 'Palmeiras de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215801,
                'nome_municipio' => 'Palmelo',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5215900,
                'nome_municipio' => 'Palminópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5216007,
                'nome_municipio' => 'Panamá',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5216304,
                'nome_municipio' => 'Paranaiguara',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5216403,
                'nome_municipio' => 'Paraúna',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5216452,
                'nome_municipio' => 'Perolândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5216809,
                'nome_municipio' => 'Petrolina de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5216908,
                'nome_municipio' => 'Pilar de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5217104,
                'nome_municipio' => 'Piracanjuba',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5217203,
                'nome_municipio' => 'Piranhas',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5217302,
                'nome_municipio' => 'Pirenópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5217401,
                'nome_municipio' => 'Pires do Rio',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5217609,
                'nome_municipio' => 'Planaltina',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5217708,
                'nome_municipio' => 'Pontalina',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218003,
                'nome_municipio' => 'Porangatu',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218052,
                'nome_municipio' => 'Porteirão',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218102,
                'nome_municipio' => 'Portelândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218300,
                'nome_municipio' => 'Posse',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218391,
                'nome_municipio' => 'Professor Jamil',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218508,
                'nome_municipio' => 'Quirinópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218607,
                'nome_municipio' => 'Rialma',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218706,
                'nome_municipio' => 'Rianápolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218789,
                'nome_municipio' => 'Rio Quente',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218805,
                'nome_municipio' => 'Rio Verde',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5218904,
                'nome_municipio' => 'Rubiataba',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219001,
                'nome_municipio' => 'Sanclerlândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219100,
                'nome_municipio' => 'Santa Bárbara de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219209,
                'nome_municipio' => 'Santa Cruz de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219258,
                'nome_municipio' => 'Santa Fé de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219308,
                'nome_municipio' => 'Santa Helena de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219357,
                'nome_municipio' => 'Santa Isabel',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219407,
                'nome_municipio' => 'Santa Rita do Araguaia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219456,
                'nome_municipio' => 'Santa Rita do Novo Destino',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219506,
                'nome_municipio' => 'Santa Rosa de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219605,
                'nome_municipio' => 'Santa Tereza de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219704,
                'nome_municipio' => 'Santa Terezinha de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219712,
                'nome_municipio' => 'Santo Antônio da Barra',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219738,
                'nome_municipio' => 'Santo Antônio de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219753,
                'nome_municipio' => 'Santo Antônio do Descoberto',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219803,
                'nome_municipio' => 'São Domingos',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5219902,
                'nome_municipio' => 'São Francisco de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220009,
                'nome_municipio' => 'São João d\'Aliança',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220058,
                'nome_municipio' => 'São João da Paraúna',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220108,
                'nome_municipio' => 'São Luís de Montes Belos',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220157,
                'nome_municipio' => 'São Luiz do Norte',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220207,
                'nome_municipio' => 'São Miguel do Araguaia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220264,
                'nome_municipio' => 'São Miguel do Passa Quatro',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220280,
                'nome_municipio' => 'São Patrício',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220405,
                'nome_municipio' => 'São Simão',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220454,
                'nome_municipio' => 'Senador Canedo',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220504,
                'nome_municipio' => 'Serranópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220603,
                'nome_municipio' => 'Silvânia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220686,
                'nome_municipio' => 'Simolândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5220702,
                'nome_municipio' => 'Sítio d\'Abadia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221007,
                'nome_municipio' => 'Taquaral de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221080,
                'nome_municipio' => 'Teresina de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221197,
                'nome_municipio' => 'Terezópolis de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221304,
                'nome_municipio' => 'Três Ranchos',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221403,
                'nome_municipio' => 'Trindade',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221452,
                'nome_municipio' => 'Trombas',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221502,
                'nome_municipio' => 'Turvânia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221551,
                'nome_municipio' => 'Turvelândia',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221577,
                'nome_municipio' => 'Uirapuru',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221601,
                'nome_municipio' => 'Uruaçu',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221700,
                'nome_municipio' => 'Uruana',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221809,
                'nome_municipio' => 'Urutaí',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221858,
                'nome_municipio' => 'Valparaíso de Goiás',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5221908,
                'nome_municipio' => 'Varjão',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5222005,
                'nome_municipio' => 'Vianópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5222054,
                'nome_municipio' => 'Vicentinópolis',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5222203,
                'nome_municipio' => 'Vila Boa',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5222302,
                'nome_municipio' => 'Vila Propício',
                'uf' => 'GO',
            ],
            [
                'id_municipio' => 5300108,
                'nome_municipio' => 'Brasília',
                'uf' => 'DF',
            ]
        ];

        foreach (array_chunk($dados, 500) as $lote) {
            DB::table('municipio')->insert($lote);
        }
    }
}
