<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Pensao;


$dados = [
    [
        'CPF' => '21208138090',
        'Matricula' => 'jWBmuGXpYGuTmRqv',
        'Processo' => '06/2021',
        'NumeroAto' => '25/2021',
        'DataAto' => '2021-05-08',
        'VeiculoPublicacao' => '4',
        'DataInicio' => '2021-06-06',
        'DataObito' => '2018-12-13',
        'Revisao' => '2',
        'Valor' => '7217.00',
    ]
];

$xml = new Pensao('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');