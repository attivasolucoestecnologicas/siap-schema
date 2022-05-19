<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Cessao;

$dados = [
    [
        'CPF' => '21208138090',
        'Matricula' => 'jWBmuGXpYGuTmRqv',
        'Processo' => '06/2021',
        'NumeroAto' => '25/2021',
        'DataAto' => '2021-05-08',
        'VeiculoPublicacao' => '4',
        'DataInicio' => '2021-06-06',
        'DataFim' => '2016-02-02',
        'Onus' => '2',
        'CNPJCedente' => '08103219000128',
        'CNPJCessionario' => '87556227000104',
    ]
];

$xml = new Cessao('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');