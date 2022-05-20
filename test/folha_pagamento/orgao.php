<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\Orgao;

$dados = [
    [
        'Codigo' => '9985',
        'CNPJ' => '44400709000150',
        'Nome' => 'Serviços',
        'Sigla' => 'SER',
        'DataCriacao' => '2000-04-03',
        'DataAtoCriacao' => '2002-07-06',
        'AtoCriacao' => '230/2000',
        'VeiculoPublicacaoAtoCriacao' => '1',
        'DataExtincao' => '',
        'DataAtoExtincao' => '',
        'AtoExtincao' => '',
        'VeiculoPublicacaoAtoExtincao' => '',
        'CodigoOrgaoPai' => '',
    ],
];

$xml = new Orgao('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');