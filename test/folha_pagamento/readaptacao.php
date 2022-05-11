<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Readaptacao;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'data_inicio' => '2021-06-09',
        'tipo' => '1',
        'motivo' => 'Licenca medica de acidente de trabalho',
    ]
];

$xml = new Readaptacao('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');