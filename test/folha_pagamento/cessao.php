<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Cessao;

$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'data_inicio' => '2021-06-06',
        'data_fim' => '2016-02-02',
        'onus' => '2',
        'cnpj_cedente' => '08103219000128',
        'cnpj_cessionario' => '87556227000104',
    ]
];

$xml = new Cessao('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');