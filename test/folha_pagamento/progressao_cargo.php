<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\ProgressaoCargo;


$dados = [
    [
        'Codigo' => '56',
        'Nome' => 'Especial A III',
        'CodigoCargo' => '154',
        'CodigoClasse' => '567',
        'CodigoNivel' => '001',
        'ValorSalario' => '3798.75',
    ]
];

$xml = new ProgressaoCargo('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');