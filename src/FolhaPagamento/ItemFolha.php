<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class ItemFolha extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'MesCompetencia', 'Ano', 'CNPJFontePagadora', 'Natureza',
        'Tipo', 'Descricao', 'IncideContribuicaoRPPS', 'IncideIRRF', 'TetoRemuneratorio',
        'IncideContribuicaoRGPS', 'IncideFGTS', 'Valor'
    ];
}