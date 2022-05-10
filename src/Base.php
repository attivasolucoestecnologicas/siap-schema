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

        $this->xml = new \DOMDocument("1.0", 'UTF-8');
    }

    abstract public function processar();

    public function save($path = '/')
    {
        $path = __DIR__ . $path;
        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }
        $path = $path . '/' . $this->className() . '.xml';
        $this->xml->save($path);
    }

    protected function className()
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}