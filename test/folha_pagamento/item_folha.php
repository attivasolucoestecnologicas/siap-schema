<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\ItemFolha;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'mhtngrbhuvcxwedo',
        'mes_competencia' => '11',
        'ano' => '2022',
        'cnpj_fonte_pagadora' => '74035267000150',
        'natureza' => '1003',
        'tipo' => '3',
        'descricao' => 'Valor correspondente à hora extraordinária de trabalho, acrescido de percentual de no mínimo 50%',
        'incide_contribuicao_rpps' => '4',
        'incide_irrf' => '11',
        'teto_remuneratorio' => '2',
        'incide_contribuicao_rgps' => '00',
        'incide_fgts' => '11',
        'valor' => '3135.25',
    ]
];

$xml = new ItemFolha('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');