<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\AlteracaoJornadaDeTrabalho;


$dados = [
    [
        'CPF' => '21208138090',
        'Matricula' => 'jWBmuGXpYGuTmRqv',
        'Processo' => '06/2021',
        'NumeroAto' => '25/2021',
        'DataAto' => '2021-05-08',
        'VeiculoPublicacao' => '4',
        'DataInicio' => '2021-06-06',
        'Cargo' => '154',
        'Carreira' => '287',
        'JornadaAnterior' => '30',
        'Jornada' => '40',
        'BaseLegal' => '',
        'AlteraSalario' => '1',
        'Percentual' => '20.02',
        'Salario' => '1500.00',
    ]
];

$xml = new AlteracaoJornadaDeTrabalho('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');