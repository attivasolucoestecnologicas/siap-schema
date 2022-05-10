<?php

require_once '../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\AlteracaoJornadaDeTrabalho;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'data_inicio' => '2021-06-06',
        'cargo' => '154',
        'carreira' => '287',
        'jornada_anterior' => '30',
        'jornada' => '40',
        'base_legal' => '',
        'alteracao_salario' => '1',
        'percentual' => '20.02',
        'salario' => '1500.00',
    ],
    [
        'cpf' => '42857134037',
        'matricula' => 'qwertyuiopasdfgh',
        'processo' => '01/2021',
        'numero_ato' => '30/2021',
        'data_ato' => '2021-01-03',
        'veiculo_publicacao' => '1',
        'data_inicio' => '2021-02-03',
        'cargo' => '154',
        'carreira' => '287',
        'jornada_anterior' => '30',
        'jornada' => '40',
//        'base_legal' => '',
        'alteracao_salario' => '1',
        'percentual' => '12.00',
        'salario' => '600.00',
    ]
];

$adicional = new AlteracaoJornadaDeTrabalho('60', '2022', '01', $dados);
$adicional->processar()->save('/../xml/Vida Funcional');