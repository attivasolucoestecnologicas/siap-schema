<?php

namespace Attiva\SiapSchema\Educacao;

use Attiva\SiapSchema\Base;

class VinculoProfissionalEducacao extends Base
{
    protected $elements = [
        'INEP', 'CPF', 'Matricula', 'CargaHoraria', 'Funcao', 'TipoVinculo',
        'DataInicio'
    ];
}