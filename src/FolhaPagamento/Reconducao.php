<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Reconducao extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao',
        'DataInicio', 'Tipo'
    ];
}