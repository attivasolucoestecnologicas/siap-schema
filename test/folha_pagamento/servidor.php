<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Attiva\SiapSchema\FolhaPagamento\Servidor;


$dados = [
    [
        'CPF' => '21208138090',
        'Nome' => 'Jose Fulano de Tal',
        'NomeSocial' => 'Jose Fulano de Tal',
        'RG' => '328478076',
        'DataExpedicaoRG' => '2003-04-04',
        'NumeroCTPS' => '227729723',
        'NumeroPISPasep' => '53511253033',
        'NumeroTituloEleitor' => '308951456112',
        'TituloEleitorZona' => '6247797805',
        'TituloEleitorSecao' => '7890769387',
        'TituloEleitorUF' => 'MS',
        'DataNascimento' => '1996-02-15',
        'UFNascimento' => 'MS',
        'CidadeNascimento' => 'Campo Grande',
        'Escolaridade' => '3',
        'Sexo' => 'M',
        'EstadoCivil' => '3',
        'NomeMae' => 'Dona Mae Fulano de Tal',
        'NomePai' => 'Seu Pai Fulano de Tal',
        'Email' => 'emailfulano@email.com.br',
        'TelefoneFixo' => '8238251444',
        'TelefoneCelular' => '82988117711',
    ]
];

$xml = new Servidor('60', '2022', '01', $dados);
$xml->processar()->save('/../xml/Vida Funcional');