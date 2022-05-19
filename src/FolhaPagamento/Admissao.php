<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Admissao extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao',
        'DataInicio', 'Tipo', 'NumeroEdital', 'NumeroInscricao', 'CodigoCargo',
        'CodigoCarreira', 'CodigoOrgao', 'Salario'
    ];
}