<?php

require_once '../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Admissao;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'data_inicio' => '2021-06-06',
        'tipo' => '2',
        'numero_edital' => '05455486389977026118581995468925',
        'numero_inscricao' => '92713676795625210665089289080521',
        'cod_cargo' => '145',
        'cod_carreira' => '287',
        'cod_orgao' => '9985',
        'salario' => '3000.00',
    ],
    [
        'cpf' => '42857134037',
        'matricula' => 'qwertyuiopasdfgh',
        'processo' => '01/2021',
        'numero_ato' => '30/2021',
        'data_ato' => '2021-01-03',
        'veiculo_publicacao' => '1',
        'data_inicio' => '2021-02-03',
        'tipo' => '6',
        'numero_edital' => '05455486389977026118581995468925',
        'numero_inscricao' => '92713676795625210665089289080521',
        'cod_cargo' => '145',
        'cod_carreira' => '287',
        'cod_orgao' => '9985',
        'salario' => '3000.00',
    ]
];

$adicional = new Admissao('60', '2022', '01', $dados);
$adicional->processar()->save('/../xml/Vida Funcional');