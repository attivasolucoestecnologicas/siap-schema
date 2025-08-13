<?php

namespace Attiva\SiapSchema\Previdencia;

use Attiva\SiapSchema\Base;

class PensaoConcedida extends Base
{
    protected $elements = [
        'Nome', 'CPF', 'Matricula', 'NumeroProcesso', 'Cargo', 'Classe',
        'Nivel', 'CNPJOrgao', 'Orgao', 'TipoPensao', 'DataAberturaProcesso', 'DataObito',
        'DataConcessao', 'TipoPensao', 'DataInicio', 'DataFim', 'ValorBeneficio', 'BaseLegal', 'AcumuloBeneficio', 'Revisao',
        'AtoRevisao', 'DataPublicacaoRevisao', 'VeiculoPublicacaoRevisao'
    ];
}