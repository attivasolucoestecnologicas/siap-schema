<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Disponibilidade extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao', 'DataInicio'
    ];
}