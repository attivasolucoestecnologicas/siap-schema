<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class DesignacaoCargoComissaoFuncaoGratificada extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao', 'DataInicio',
        'FuncaoGratificada', 'CargoComissao', 'PercentalSalarioEfeitvo', 'PercentalSalarioComissionado',
        'ValorFuncaoGratificada', 'PercentalFuncaoGratificada'
    ];
}