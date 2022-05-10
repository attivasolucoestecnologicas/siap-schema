<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\Pensionista;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'cpf_pensionista' => '21125771070',
        'nome_pensionista' => 'Leonardo Alves',
        'data_nascimento' => '1997-03-25',
        'grau_parentesco' => '1',
        'tipo_beneficio' => '2',
        'data_inicio' => '2021-06-06',
        'data_fim' => '2018-12-13',
        'percentual' => '70.40',
        'responsavel' => '1',
        'revisao' => '2',
    ]
];

$xml = new Pensionista('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');