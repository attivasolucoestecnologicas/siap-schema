<?php

namespace Attiva\SiapSchema\Previdencia;

use Attiva\SiapSchema\Base;

class ItemFolhaRPPS extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'MesCompetencia', 'Ano', 'CNPJFontePagadora', 'Natureza',
        'Tipo', 'Descricao', 'IncideContribuicaoRPPS', 'IncideIRRF', 'TetoRemuneratorio',
        'IncideContribuicaoRGPS', 'IncideFGTS', 'Valor'
    ];
}