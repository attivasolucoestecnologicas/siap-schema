<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Dependente;

$dados = [
    [
        'cpf' => '01185065016',
        'cpf_dependente' => '42367818088',
        'nome_dependente' => 'Anastacia Nantes',
        'data_nascimento' => '2010-09-29',
        'grau_parentesco' => '3',
    ]
];

$xml = new Dependente('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');