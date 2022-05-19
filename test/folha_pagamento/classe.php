<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Classe;

$dados = [
    [
        'Codigo' => '567',
        'Nome' => 'Especial A',
        'TempoServicoMinimo' => '5475',
    ],
    [
        'Codigo' => '566',
        'Nome' => 'Especial B',
        'TempoServicoMinimo' => '5475',
    ],
    [
        'Codigo' => '565',
        'Nome' => 'Especial C',
        'TempoServicoMinimo' => '1825',
    ]
];

$xml = new Classe('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');