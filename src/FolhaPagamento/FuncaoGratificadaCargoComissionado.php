<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class FuncaoGratificadaCargoComissionado extends Base
{
    protected $elements = [
        'Codigo', 'Nome', 'CodigoOrgao', 'DataCriacaoFG', 'DataAtoCriacaoFG', 'AtoCriacaoFG',
        'VeiculoPublicacaoAtoCriacao', 'DataExtincao', 'DataAtoExtincao', 'AtoExtincao',
        'VeiculoPublicacaoAtoExtincao', 'ValorGratificacao', 'Percentual'
    ];
}