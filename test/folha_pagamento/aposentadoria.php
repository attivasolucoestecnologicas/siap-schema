<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Aposentadoria;


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
        'BaseLegal' => 'art. 84 da Lei Organica Municipal No 05/2006 de 11 de dezembro de 2006',
        'DiasTempoAnterior' => '2555',
        'DiasTempoEfetivo' => '10950',
        'DiasTempoAfastado' => '30',
        'DiasTempoComissionado' => '7300',
        'DiasAverbacaoPrivado' => '2555',
        'DiasAverbacaoPublica' => '3650',
        'Reversao' => '2',
        'AtoReversao' => '',
        'DataPublicacaoReversao' => '',
        'VeiculoPublicacaoReversao' => '',
        'Revisao' => '2',
        'AtoRevisao' => '',
        'DataPublicacaoRevisao' => '',
        'VeiculoPublicacaoRevisao' => '',
    ]
];

$xml = new Aposentadoria('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');