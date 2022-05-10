<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\ProgressaoCargo;


$dados = [
    [
        'codigo' => '56',
        'nome' => 'Especial A III',
        'codigo_cargo' => '154',
        'codigo_classe' => '567',
        'codigo_nivel' => '001',
        'valor_salario' => '3798.75',
    ]
];

$xml = new ProgressaoCargo('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');