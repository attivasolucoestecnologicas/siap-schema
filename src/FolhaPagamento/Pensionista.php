<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Pensionista extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao',
        'CPFPensionista', 'NomePensionista', 'DataNascimento', 'GrauParentesco',
        'TipoBeneficio', 'DataInicio', 'DataFim', 'Percentual', 'Responsavel', 'Revisao',
    ];
}