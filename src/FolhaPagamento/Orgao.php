<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Orgao extends Base
{
    protected $elements = [
        'Codigo', 'CNPJ', 'Nome', 'Sigla', 'DataCriacao', 'DataAtoCriacao', 'AtoCriacao',
        'VeiculoPublicacaoAtoCriacao', 'DataExtincao', 'DataAtoExtincao', 'AtoExtincao',
        'VeiculoPublicacaoAtoExtincao', 'CodigoOrgaoPai'
    ];
}