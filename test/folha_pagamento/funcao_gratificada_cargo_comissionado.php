<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\FuncaoGratificadaCargoComissionado;


$dados = [
    [
        'codigo' => '287',
        'nome' => 'Servidor',
        'codigo_orgao' => '9985',
        'data_criacao_fg' => '2000-08-17',
        'data_ato_criacao_fg' => '2001-06-29',
        'ato_criacao_fg' => '25/2001',
        'veiculo_publicacao_ato_criacao' => '1',
        'data_extincao' => '',
        'data_ato_extincao' => '',
        'ato_extincao' => '',
        'veiculo_publicacao_ato_extincao' => '',
        'valor_gratificacao' => '2300.12',
        'percentual' => '09.16',
    ],
];

$xml = new FuncaoGratificadaCargoComissionado('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');