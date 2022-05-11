<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Licenca extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao',
        'DataInicio', 'DataFim', 'Motivo', 'Remunerada',
    ];
}