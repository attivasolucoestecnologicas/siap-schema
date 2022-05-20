<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\Pensionista;


$dados = [
    [
        'CPF' => '21208138090',
        'Matricula' => 'jWBmuGXpYGuTmRqv',
        'Processo' => '06/2021',
        'NumeroAto' => '25/2021',
        'DataAto' => '2021-05-08',
        'VeiculoPublicacao' => '4',
        'CPFPensionista' => '21125771070',
        'NomePensionista' => 'Leonardo Alves',
        'DataNascimento' => '1997-03-25',
        'GrauParentesco' => '1',
        'TipoBeneficio' => '2',
        'DataInicio' => '2021-06-06',
        'DataFim' => '2018-12-13',
        'Percentual' => '70.40',
        'Responsavel' => '1',
        'Revisao' => '2',
    ]
];

$xml = new Pensionista('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');