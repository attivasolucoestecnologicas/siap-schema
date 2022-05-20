<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class ProgressaoCargo extends Base
{
    protected $elements = [
        'Codigo', 'Nome', 'CodigoCargo', 'CodigoClasse', 'CodigoNivel', 'ValorSalario'
    ];
}