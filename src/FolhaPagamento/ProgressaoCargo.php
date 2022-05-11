<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class ProgressaoCargo extends Base
{
    protected $elements = [
        'Codigo', 'Nome', 'CodigoCargo', 'CodigoClasse', 'CodigoNivel', 'ValorSalario'
    ];
}