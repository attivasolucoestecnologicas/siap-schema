<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\ProgressaoFuncional;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'classe_anterior' => '565',
        'nivel_anterior' => '003',
        'classe' => '566',
        'nivel' => '002',
    ]
];

$xml = new ProgressaoFuncional('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');