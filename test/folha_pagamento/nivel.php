<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Nivel;

$dados = [
    [
        'Codigo' => '567',
        'Nome' => 'A',
        'EscolaridadeMinima' => '5475',
    ],
    [
        'Codigo' => '566',
        'Nome' => 'B',
        'EscolaridadeMinima' => '5475',
    ],
    [
        'Codigo' => '565',
        'Nome' => 'C',
        'EscolaridadeMinima' => '1825',
    ]
];

$xml = new Nivel('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');