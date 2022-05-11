<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\ProgressaoFuncional;


$dados = [
    [
        'CPF' => '21208138090',
        'Matricula' => 'jWBmuGXpYGuTmRqv',
        'Processo' => '06/2021',
        'NumeroAto' => '25/2021',
        'DataAto' => '2021-05-08',
        'VeiculoPublicacao' => '4',
        'ClasseAnterior' => '565',
        'NivelAnterior' => '003',
        'Classe' => '566',
        'Nivel' => '002',
    ]
];

$xml = new ProgressaoFuncional('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');