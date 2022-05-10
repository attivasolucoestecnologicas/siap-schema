<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Classe;

$dados = [
    [
        'codigo' => '567',
        'nome' => 'Especial A',
        'tempo_servico_minimo' => '5475',
    ],
    [
        'codigo' => '566',
        'nome' => 'Especial B',
        'tempo_servico_minimo' => '5475',
    ],
    [
        'codigo' => '565',
        'nome' => 'Especial C',
        'tempo_servico_minimo' => '1825',
    ]
];

$xml = new Classe('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');