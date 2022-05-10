<?php

namespace Attiva\Siapxml;


abstract class Base
{
    public $xml;
    protected $codigo;
    protected $exercicio;
    protected $mes;
    protected $dados;

    public function __construct($codigo, $exercicio, $mes, array $dados)
    {
        $this->codigo = $codigo;
        $this->exercicio = $exercicio;
        $this->mes = $mes;
        $this->dados = $dados;

        $this->xml = new \DOMDocument("1.0", "ISO-8859-15");
    }

    protected function className()
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}