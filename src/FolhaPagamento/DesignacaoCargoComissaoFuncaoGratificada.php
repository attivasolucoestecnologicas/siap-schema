<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class DesignacaoCargoComissaoFuncaoGratificada extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao', 'DataInicio',
        'FuncaoGratificada', 'CargoComissao', 'PercentalSalarioEfeitvo', 'PercentalSalarioComissionado',
        'ValorFuncaoGratificada', 'PercentalFuncaoGratificada'
    ];
}