<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class Readaptacao extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao',
        'DataInicio', 'Tipo', 'Motivo'
    ];
}