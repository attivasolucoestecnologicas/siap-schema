<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Setor extends Base
{
    protected $elements = [
        'Codigo', 'CodigoOrgao', 'Nome', 'Sigla', 'DataCriacao', 'DataAtoCriacao',
        'AtoCriacao', 'VeiculoPublicacaoAtoCriacao', 'DataExtincao', 'DataAtoExtincao',
        'AtoExtincao', 'VeiculoPublicacaoAtoExtincao', 'CodigoSetorPai'
    ];
}