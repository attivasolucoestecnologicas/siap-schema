<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class FuncaoGratificadaCargoComissionado extends Base
{
    protected $elements = [
        'Codigo', 'Nome', 'CodigoOrgao', 'DataCriacaoFG', 'DataAtoCriacaoFG', 'AtoCriacaoFG',
        'VeiculoPublicacaoAtoCriacao', 'DataExtincao', 'DataAtoExtincao', 'AtoExtincao',
        'VeiculoPublicacaoAtoExtincao', 'ValorGratificacao', 'Percentual'
    ];
}