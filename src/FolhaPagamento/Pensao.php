<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Pensao extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao',
        'DataInicio', 'DataObito', 'Revisao', 'Valor'
    ];
}