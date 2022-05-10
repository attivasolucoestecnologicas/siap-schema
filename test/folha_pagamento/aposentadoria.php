<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Aposentadoria;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'data_inicio' => '2021-06-06',
        'tipo' => '2',
        'base_legal' => 'art. 84 da Lei Organica Municipal No 05/2006 de 11 de dezembro de 2006',
        'dias_tempo_anterior' => '2555',
        'dias_tempo_efetivo' => '10950',
        'dias_tempo_afastado' => '30',
        'dias_tempo_comissionado' => '7300',
        'dias_averbacao_privado' => '2555',
        'dias_averbacao_publica' => '3650',
        'reversao' => '2',
        'ato_reversao' => '',
        'data_publicacao_reversao' => '',
        'veiculo_publicacao_reversao' => '',
        'revisao' => '2',
        'ato_revisao' => '',
        'data_publicacao_revisao' => '',
        'veiculo_publicacao_revisao' => '',
    ],
    [
        'cpf' => '42857134037',
        'matricula' => 'qwertyuiopasdfgh',
        'processo' => '01/2021',
        'numero_ato' => '30/2021',
        'data_ato' => '2021-01-03',
        'veiculo_publicacao' => '1',
        'data_inicio' => '2021-02-03',
        'tipo' => '6',
        'base_legal' => 'art. 84 da Lei Organica Municipal No 05/2006 de 11 de dezembro de 2006',
        'dias_tempo_anterior' => '2555',
        'dias_tempo_efetivo' => '10950',
        'dias_tempo_afastado' => '30',
        'dias_tempo_comissionado' => '7300',
        'dias_averbacao_privado' => '2555',
        'dias_averbacao_publica' => '3650',
        'reversao' => '2',
        'ato_reversao' => '',
        'data_publicacao_reversao' => '',
        'veiculo_publicacao_reversao' => '',
        'revisao' => '2',
        'ato_revisao' => '',
        'data_publicacao_revisao' => '',
        'veiculo_publicacao_revisao' => '',
    ]
];

$xml = new Aposentadoria('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');