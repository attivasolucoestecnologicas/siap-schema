<?php

namespace Attiva\SiapSchema;


abstract class Base
{
    public $xml;
    protected $codigo;
    protected $exercicio;
    protected $mes;
    protected $dados;
    protected $elements = [];

    public function __construct($codigo, $exercicio, $mes, array $dados)
    {
        $this->codigo = $codigo;
        $this->exercicio = $exercicio;
        $this->mes = $mes;
        $this->dados = $dados;

        $this->xml = new \DOMDocument("1.0", 'UTF-8');

        $this->checkAttributes();
    }

    public function processar()
    {
        $siap = $this->xml->createElement("SIAP");
        $this->xml->appendChild($siap);

        $codigo = $this->xml->createElement('Codigo', $this->codigo);
        $exercicio = $this->xml->createElement('Exercicio', $this->exercicio);
        $mes = $this->xml->createElement('Mes', $this->mes);

        $siap->appendChild($codigo);
        $siap->appendChild($exercicio);
        $siap->appendChild($mes);

        foreach ($this->dados as $dado) {
            $content = $this->xml->createElement($this->className());
            $siap->appendChild($content);

            foreach ($this->elements as $attribute) {
                $el = $this->xml->createElement($attribute, @$dado[$attribute]);
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }

    public function save($path = '/tmp')
    {
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $path = $path . '/' . $this->className() . '.xml';
        $result =  $this->xml->save($path);
        if ($result !== false) {
            return true;
        }
        return false;
    }

    protected function className()
    {
        return (new \ReflectionClass($this))->getShortName();
    }

    private function checkAttributes()
    {
        foreach ($this->dados as $dado) {
            $res1 = array_diff_assoc($this->elements, array_keys($dado));
            $res2 = array_diff_assoc(array_keys($dado), $this->elements);
            $res = array_merge($res1, $res2);
            if (!empty($res)) {
                throw new \Exception("Existe algum atributo invalido.");
            }
        }
    }
}