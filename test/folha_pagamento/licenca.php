<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Licenca;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'data_inicio' => '2021-06-06',
        'data_fim' => '2021-06-06',
        'motivo' => '1',
        'remunerada' => '2',
    ]
];

$xml = new Licenca('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');