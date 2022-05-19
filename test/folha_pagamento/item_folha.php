<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\ItemFolha;


$dados = [
    [
        'CPF' => '21208138090',
        'Matricula' => 'mhtngrbhuvcxwedo',
        'MesCompetencia' => '11',
        'Ano' => '2022',
        'CNPJFontePagadora' => '74035267000150',
        'Natureza' => '1003',
        'Tipo' => '3',
        'Descricao' => 'Valor correspondente à hora extraordinária de trabalho, acrescido de percentual de no mínimo 50%',
        'IncideContribuicaoRPPS' => '4',
        'IncideIRRF' => '11',
        'TetoRemuneratorio' => '2',
        'IncideContribuicaoRGPS' => '00',
        'IncideFGTS' => '11',
        'Valor' => '3135.25',
    ]
];

$xml = new ItemFolha('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');