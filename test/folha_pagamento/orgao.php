<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Orgao;

$dados = [
    [
        'codigo' => '9985',
        'cnpj' => '44400709000150',
        'nome' => 'Serviços',
        'sigla' => 'SER',
        'data_criacao' => '2000-04-03',
        'data_ato_criacao' => '2002-07-06',
        'ato_criacao' => '230/2000',
        'veiculo_publicacao_ato_criacao' => '1',
        'data_extincao' => '',
        'data_ato_extincao' => '',
        'ato_extincao' => '',
        'veiculo_publicacao_ato_extincao' => '',
        'codigo_orgao_pai' => '',
    ],
];

$xml = new Orgao('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');