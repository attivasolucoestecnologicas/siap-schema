<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Cargo;


$dados = [
    [
        'codigo' => '145',
        'nome' => 'Motorista',
        'data_criacao' => '1998-10-05',
        'data_ato_criacao' => '2003-11-02',
        'ato_criacao' => '145/2000',
        'veiculo_publicacao_ato_criacao' => '5',
        'data_extincao' => '',
        'data_ato_extincao' => '',
        'ato_extincao' => '',
        'veiculo_publicacao_ato_extincao' => '',
        'tipo_cargo' => '1',
        'acumulavel' => '1',
        'contagem_especial' => '1',
        'habilitacao_legal' => '1',
        'dedicacao_exclusiva' => '1',
        'aposentadoria_especial' => '1',
        'escolaridade_minima' => '3',
        'salario' => '3000.00',
        'percentual' => '5.45',
        'codigo_carreira' => '287',
    ],
];

$adicional = new Cargo('60', '2022', '01', $dados);
$adicional->processar()->save('/../xml/Vida Funcional');