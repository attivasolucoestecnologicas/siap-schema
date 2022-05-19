<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\DesignacaoCargoComissaoFuncaoGratificada;


$dados = [
    [
        'CPF' => '21208138090',
        'Matricula' => 'jWBmuGXpYGuTmRqv',
        'Processo' => '06/2021',
        'NumeroAto' => '25/2021',
        'DataAto' => '2021-05-08',
        'VeiculoPublicacao' => '4',
        'DataInicio' => '2021-06-06',
        'FuncaoGratificada' => '314',
        'CargoComissao' => '154',
        'PercentalSalarioEfeitvo' => '98.00',
        'PercentalSalarioComissionado' => '01.00',
        'ValorFuncaoGratificada' => '889.72',
        'PercentalFuncaoGratificada' => '01.00',
    ]
];

$xml = new DesignacaoCargoComissaoFuncaoGratificada('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');