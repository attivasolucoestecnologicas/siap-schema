<?php

namespace Attiva\SiapSchema\Previdencia;

use Attiva\SiapSchema\Base;

class Beneficiario extends Base
{
    protected $elements = [
        'CPF', 'Nome', 'NomeSocial', 'RG', 'DataExpedicaoRG',
        'DataNascimento', 'UFNascimento', 'CidadeNascimento',
        'Sexo', 'EstadoCivil', 'NomeMae', 'NomePai', 'Email', 'TelefoneFixo', 'TelefoneCelular'
    ];
}