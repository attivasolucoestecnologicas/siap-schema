<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class Vinculo extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'CodigoOrgao', 'CodigoCarreira', 'CodigoCargo', 'DataExercicio',
        'DataPosse', 'DataNomeacao', 'DataExoneracao', 'TipoVinculo', 'CodigoFG', 'DataInicioFG',
        'Ocupacao', 'Jornada', 'PercentualComissionado', 'SalarioCargoEfetivo'
    ];
}