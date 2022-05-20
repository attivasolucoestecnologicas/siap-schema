<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class Carreira extends Base
{
    protected $elements = [
        'Codigo', 'Nome', 'DataCriacao', 'DataAtoCriacao', 'AtoCriacao',
        'VeiculoPublicacaoAtoCriacao', 'AlteracaoNomenclatura',
        'DataAlteracao', 'DataAtoAlteracao', 'AtoAlteracao', 'VeiculoPublicacaoAtoAlteracao',
        'DataExtincao', 'DataAtoExtincao', 'AtoExtincao', 'VeiculoPublicacaoAtoExtincao'
    ];
}