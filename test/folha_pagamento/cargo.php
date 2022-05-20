<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\Cargo;


$dados = [
    [
        'Codigo' => '145',
        'Nome' => 'Motorista',
        'DataCriacao' => '1998-10-05',
        'DataAtoCriacao' => '2003-11-02',
        'AtoCriacao' => '145/2000',
        'VeiculoPublicacaoAtoCriacao' => '5',
        'DataExtincao' => '',
        'DataAtoExtincao' => '',
        'AtoExtincao' => '',
        'VeiculoPublicacaoAtoExtincao' => '',
        'TipoCargo' => '1',
        'Acumulavel' => '1',
        'ContagemEspecial' => '1',
        'HabilitacaoLegal' => '1',
        'DedicacaoExclusiva' => '1',
        'AposentadoriaEspecial' => '1',
        'EscolaridadeMinima' => '3',
        'Salario' => '3000.00',
        'Percentual' => '5.45',
        'CodigoCarreira' => '287',
    ],
];

$xml = new Cargo('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');