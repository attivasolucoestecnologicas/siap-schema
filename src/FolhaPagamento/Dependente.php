<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class Dependente extends Base
{
    protected $elements = [
        'CPF', 'CPFDependente', 'NomeDependente', 'DataNascimento', 'GrauParentesco'
    ];
}