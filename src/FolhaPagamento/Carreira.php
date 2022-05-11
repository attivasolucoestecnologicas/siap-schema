<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Carreira extends Base
{
    protected $elements = [
        'Codigo', 'Nome', 'DataCriacao', 'DataAtoCriacao', 'AtoCriacao',
        'VeiculoPublicacaoAtoCriacao', 'AlteracaoNomenclatura',
        'DataAlteracao', 'DataAtoAlteracao', 'AtoAlteracao', 'VeiculoPublicacaoAtoAlteracao',
        'DataExtincao', 'DataAtoExtincao', 'AtoExtincao', 'VeiculoPublicacaoAtoExtincao'
    ];
}