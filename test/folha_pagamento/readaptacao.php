<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Readaptacao;


$dados = [
    [
        'CPF' => '21208138090',
        'Matricula' => 'jWBmuGXpYGuTmRqv',
        'Processo' => '06/2021',
        'NumeroAto' => '25/2021',
        'DataAto' => '2021-05-08',
        'VeiculoPublicacao' => '4',
        'DataInicio' => '2021-06-09',
        'Tipo' => '1',
        'Motivo' => 'Licenca medica de acidente de trabalho',
    ]
];

$xml = new Readaptacao('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');