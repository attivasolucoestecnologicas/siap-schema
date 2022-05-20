<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\Admissao;


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
        'NumeroEdital' => '05455486389977026118581995468925',
        'NumeroInscricao' => '92713676795625210665089289080521',
        'CodigoCargo' => '145',
        'CodigoCarreira' => '287',
        'CodigoOrgao' => '9985',
        'Salario' => '3000.00',
    ]
];

$xml = new Admissao('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');