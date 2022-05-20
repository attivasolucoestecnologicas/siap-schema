<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class Admissao extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao',
        'DataInicio', 'Tipo', 'NumeroEdital', 'NumeroInscricao', 'CodigoCargo',
        'CodigoCarreira', 'CodigoOrgao', 'Salario'
    ];
}