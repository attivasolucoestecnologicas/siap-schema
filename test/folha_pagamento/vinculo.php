<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Vinculo;


$dados = [
    [
        'CPF' => '12363278951',
        'Matricula' => 'vxvcvzvsvdvevrvb',
        'CodigoOrgao' => '9985',
        'CodigoCarreira' => '287',
        'CodigoCargo' => '145',
        'DataExercicio' => '2003-04-04',
        'DataPosse' => '2003-04-04',
        'DataNomeacao' => '2003-03-01',
        'DataExoneracao' => '',
        'TipoVinculo' => '8',
        'CodigoFG' => '',
        'DataInicioFG' => '',
        'Ocupacao' => '654',
        'Jornada' => '40',
        'PercentualComissionado' => '',
        'SalarioCargoEfetivo' => '',
    ]
];

$xml = new Vinculo('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');