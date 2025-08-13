<?php

namespace Attiva\SiapSchema\Previdencia;

use Attiva\SiapSchema\Base;

class DependenteRPPS extends Base
{
    protected $elements = [
        'CPF', 'CPFDependente', 'NomeDependente', 'DataNascimento', 'GrauParentesco'
    ];
}