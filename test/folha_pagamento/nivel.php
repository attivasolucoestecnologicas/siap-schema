<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Nivel;

$dados = [
    [
        'codigo' => '567',
        'nome' => 'A',
        'escolaridade_minima' => '5475',
    ],
    [
        'codigo' => '566',
        'nome' => 'B',
        'escolaridade_minima' => '5475',
    ],
    [
        'codigo' => '565',
        'nome' => 'C',
        'escolaridade_minima' => '1825',
    ]
];

$xml = new Nivel('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');