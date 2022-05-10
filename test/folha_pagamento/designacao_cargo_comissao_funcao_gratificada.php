<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\Siapxml\FolhaPagamento\DesignacaoCargoComissaoFuncaoGratificada;


$dados = [
    [
        'cpf' => '21208138090',
        'matricula' => 'jWBmuGXpYGuTmRqv',
        'processo' => '06/2021',
        'numero_ato' => '25/2021',
        'data_ato' => '2021-05-08',
        'veiculo_publicacao' => '4',
        'data_inicio' => '2021-06-06',
        'funcao_gratificada' => '314',
        'cargo_comissao' => '154',
        'percentual_salario_efetivo' => '98.00',
        'percentual_salario_comissionado' => '01.00',
        'valor_funcao_gratificada' => '889.72',
        'percentual_funcao_gratificada' => '01.00',
    ]
];

$adicional = new DesignacaoCargoComissaoFuncaoGratificada('60', '2022', '01', $dados);
$adicional->processar()->save('/../xml/Vida Funcional');