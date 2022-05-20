<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class Aposentadoria extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao',
        'DataInicio', 'Tipo', 'BaseLegal', 'DiasTempoAnterior', 'DiasTempoEfetivo', 'DiasTempoAfastado',
        'DiasTempoComissionado', 'DiasAverbacaoPrivado', 'DiasAverbacaoPublica', 'Reversao',
        'AtoReversao', 'DataPublicacaoReversao', 'VeiculoPublicacaoReversao', 'Revisao',
        'AtoRevisao', 'DataPublicacaoRevisao', 'VeiculoPublicacaoRevisao'
    ];
}