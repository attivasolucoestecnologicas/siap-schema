<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Pensao;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'data_inicio' => '2021-06-06',
        'data_obito' => '2018-12-13',
        'revisao' => '2',
        'valor' => '7217.00',
    ]
];

$xml = new Pensao('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');