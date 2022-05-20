<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\Dependente;

$dados = [
    [
        'CPF' => '01185065016',
        'CPFDependente' => '42367818088',
        'NomeDependente' => 'Anastacia Nantes',
        'DataNascimento' => '2010-09-29',
        'GrauParentesco' => '3',
    ]
];

$xml = new Dependente('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');