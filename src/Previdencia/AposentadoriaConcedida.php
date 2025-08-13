<?php

namespace Attiva\SiapSchema\Previdencia;

use Attiva\SiapSchema\Base;

class AposentadoriaConcedida extends Base
{
    protected $elements = [
        'Nome', 'CPF', 'Matricula', 'NumeroProcesso', 'Cargo', 'Classe',
        'Nivel', 'CNPJOrgao', 'Orgao', 'DataIngresso', 'DataAberturaProcesso', 'DataConcessao',
        'DataInicio', 'TipoAposentadoria', 'BaseLegal', 'ValorUltimaRemuneracao', 'ValorBeneficioConcedido',
        'FormaReajuste', 'FormaCalculo', 'DiasTempoAnterior', 'DiasTempoEfetivo', 'DiasTempoAfastado',
        'DiasTempoComissionado', 'DiasAverbacaoPrivado', 'DiasAverbacaoPublica', 'DiasTempoCargo', 'DiasTempoCarreira',
        'Reversao', 'AtoReversao', 'DataPublicacaoReversao', 'VeiculoPublicacaoReversao', 'Revisao',
        'AtoRevisao', 'DataPublicacaoRevisao', 'VeiculoPublicacaoRevisao'
    ];
}