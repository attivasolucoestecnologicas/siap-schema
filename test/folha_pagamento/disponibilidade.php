<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Disponibilidade;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'data_inicio' => '2021-06-06',
    ],
    [
        'cpf' => '42857134037',
        'matricula' => 'qwertyuiopasdfgh',
        'processo' => '01/2021',
        'numero_ato' => '30/2021',
        'data_ato' => '2021-01-03',
        'veiculo_publicacao' => '1',
        'data_inicio' => '2021-02-03',
    ]
];

$xml = new Disponibilidade('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');