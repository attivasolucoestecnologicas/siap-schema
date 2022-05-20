<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\FuncaoGratificadaCargoComissionado;


$dados = [
    [
        'Codigo' => '287',
        'Nome' => 'Servidor',
        'CodigoOrgao' => '9985',
        'DataCriacaoFG' => '2000-08-17',
        'DataAtoCriacaoFG' => '2001-06-29',
        'AtoCriacaoFG' => '25/2001',
        'VeiculoPublicacaoAtoCriacao' => '1',
        'DataExtincao' => '',
        'DataAtoExtincao' => '',
        'AtoExtincao' => '',
        'VeiculoPublicacaoAtoExtincao' => '',
        'ValorGratificacao' => '2300.12',
        'Percentual' => '09.16',
    ],
];

$xml = new FuncaoGratificadaCargoComissionado('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');