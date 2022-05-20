<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\Setor;


$dados = [
    [
        'Codigo' => '12363278951',
        'CodigoOrgao' => '9985',
        'Nome' => '287',
        'Sigla' => '145',
        'DataCriacao' => '2003-04-04',
        'DataAtoCriacao' => '2003-04-04',
        'AtoCriacao' => '2003-03-01',
        'VeiculoPublicacaoAtoCriacao' => '',
        'DataExtincao' => '8',
        'DataAtoExtincao' => '',
        'AtoExtincao' => '',
        'VeiculoPublicacaoAtoExtincao' => '654',
        'CodigoSetorPai' => '40',
    ]
];

$xml = new Setor('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');