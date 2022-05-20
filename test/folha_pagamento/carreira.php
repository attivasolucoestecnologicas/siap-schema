<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\Carreira;


$dados = [
    [
        'Codigo' => '287',
        'Nome' => 'Servidor',
        'DataCriacao' => '1998-10-05',
        'DataAtoCriacao' => '2003-11-02',
        'AtoCriacao' => '145/2000',
        'VeiculoPublicacaoAtoCriacao' => '1',
        'AlteracaoNomenclatura' => '',
        'DataAlteracao' => '',
        'DataAtoAlteracao' => '',
        'AtoAlteracao' => '',
        'VeiculoPublicacaoAtoAlteracao' => '',
        'DataExtincao' => '',
        'DataAtoExtincao' => '',
        'AtoExtincao' => '',
        'VeiculoPublicacaoAtoExtincao' => '',
    ],
];

$xml = new Carreira('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');