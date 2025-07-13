<?php

namespace Attiva\SiapSchema\Educacao;

use Attiva\SiapSchema\Base;

class ProfissionalEducacao extends Base
{
    protected $elements = [
        'CPF', 'Nome', 'DataNascimento',  'NomeMae', 'NomePai',  'Sexo',  'CorRaca', 'CEP',
        'ZonaResidencia', 'LocalizacaoDiferenciada', 'Escolaridade', 'TipoEnsinoMedio'
    ];
}