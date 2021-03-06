<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class Cargo extends Base
{
    protected $elements = [
        'Codigo', 'Nome', 'DataCriacao', 'DataAtoCriacao', 'AtoCriacao', 'VeiculoPublicacaoAtoCriacao',
        'DataExtincao', 'DataAtoExtincao', 'AtoExtincao', 'VeiculoPublicacaoAtoExtincao', 'TipoCargo',
        'Acumulavel', 'ContagemEspecial', 'HabilitacaoLegal', 'DedicacaoExclusiva', 'AposentadoriaEspecial',
        'EscolaridadeMinima', 'Salario', 'Percentual', 'CodigoCarreira'
    ];
}