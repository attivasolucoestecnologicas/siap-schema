<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class Orgao extends Base
{
    protected $elements = [
        'Codigo', 'CNPJ', 'Nome', 'Sigla', 'DataCriacao', 'DataAtoCriacao', 'AtoCriacao',
        'VeiculoPublicacaoAtoCriacao', 'DataExtincao', 'DataAtoExtincao', 'AtoExtincao',
        'VeiculoPublicacaoAtoExtincao', 'CodigoOrgaoPai'
    ];
}