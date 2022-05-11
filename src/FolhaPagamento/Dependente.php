<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Dependente extends Base
{
    protected $elements = [
        'CPF', 'CPFDependente', 'NomeDependente', 'DataNascimento', 'GrauParentesco'
    ];
}