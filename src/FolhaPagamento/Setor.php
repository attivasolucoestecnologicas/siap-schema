<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class Setor extends Base
{
    protected $elements = [
        'Codigo', 'CodigoOrgao', 'Nome', 'Sigla', 'DataCriacao', 'DataAtoCriacao',
        'AtoCriacao', 'VeiculoPublicacaoAtoCriacao', 'DataExtincao', 'DataAtoExtincao',
        'AtoExtincao', 'VeiculoPublicacaoAtoExtincao', 'CodigoSetorPai'
    ];
}