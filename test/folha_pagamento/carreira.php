<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Carreira;


$dados = [
    [
        'codigo' => '287',
        'nome' => 'Servidor',
        'data_criacao' => '1998-10-05',
        'data_ato_criacao' => '2003-11-02',
        'ato_criacao' => '145/2000',
        'veiculo_publicacao_ato_criacao' => '1',
        'alteracao_nomeclatura' => '',
        'data_alteracao' => '',
        'data_ato_alteracao' => '',
        'ato_alteracao' => '',
        'veiculo_publicacao_ato_alteracao' => '',
        'data_extincao' => '',
        'data_ato_extincao' => '',
        'ato_extincao' => '',
        'veiculo_publicacao_ato_extincao' => '',
    ],
];

$adicional = new Carreira('60', '2022', '01', $dados);
$adicional->processar()->save('/../xml/Vida Funcional');