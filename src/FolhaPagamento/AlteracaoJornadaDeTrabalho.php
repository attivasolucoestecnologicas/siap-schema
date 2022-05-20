<?php

namespace Attiva\SiapSchema\FolhaPagamento;

use Attiva\SiapSchema\Base;

class AlteracaoJornadaDeTrabalho extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'Processo', 'NumeroAto', 'DataAto', 'VeiculoPublicacao',
        'DataInicio', 'Cargo', 'Carreira', 'JornadaAnterior', 'Jornada', 'BaseLegal',
        'AlteraSalario', 'Percentual', 'Salario'
    ];
}