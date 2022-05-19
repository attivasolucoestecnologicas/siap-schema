<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Servidor extends Base
{
    protected $elements = [
        'CPF', 'Nome', 'NomeSocial', 'RG', 'DataExpedicaoRG', 'NumeroCTPS',
        'NumeroPISPasep', 'NumeroTituloEleitor', 'TituloEleitorZona', 'TituloEleitorSecao',
        'TituloEleitorUF', 'DataNascimento', 'UFNascimento', 'CidadeNascimento', 'Escolaridade',
        'Sexo', 'EstadoCivil', 'NomeMae', 'NomePai', 'Email', 'TelefoneFixo', 'TelefoneCelular'
    ];
}