<?php

namespace Attiva\SiapSchema\Previdencia;

use Attiva\SiapSchema\Base;

class VinculoRPPS extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'DataInicio', 'TipoVinculo', 'TipoFundo'
    ];
}