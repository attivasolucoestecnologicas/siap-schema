<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

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