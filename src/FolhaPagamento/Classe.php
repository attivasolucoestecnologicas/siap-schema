<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Classe extends Base
{
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
            $content = $this->xml->createElement('Classe');
            $siap->appendChild($content);

            $elements = [
                $this->xml->createElement('Codigo', @$dado['codigo']),
                $this->xml->createElement('Nome', @$dado['nome']),
                $this->xml->createElement('TempoServicoMinimo', @$dado['tempo_servico_minimo']),
            ];

            foreach ($elements as $el) {
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}