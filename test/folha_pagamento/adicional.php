<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\Adicional;


$dados = [
    [
        'CPF' => '21208138090',
        'Matricula' => 'jWBmuGXpYGuTmRqv',
        'Processo' => '06/2021',
        'NumeroAto' => '25/2021',
        'DataAto' => '2021-05-08',
        'VeiculoPublicacao' => '4',
        'DataInicio' => '2021-06-06',
        'Tipo' => '2',
        'Percentual' => '27.00',
        'Valor' => '1500.00',
    ],
    [
        'CPF' => '42857134037',
        'Matricula' => 'qwertyuiopasdfgh',
        'Processo' => '01/2021',
        'NumeroAto' => '30/2021',
        'DataAto' => '2021-01-03',
        'VeiculoPublicacao' => '1',
        'DataInicio' => '2021-02-03',
        'Tipo' => '6',
        'Percentual' => '12.00',
        'Valor' => '600.00',
    ]
];

$xml = new Adicional('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');