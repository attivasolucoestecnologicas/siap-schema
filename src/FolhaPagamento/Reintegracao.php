<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Reintegracao extends Base
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
            $content = $this->xml->createElement('Reintegracao');
            $siap->appendChild($content);

            $elements = [
                $this->xml->createElement('CPF', @$dado['cpf']),
                $this->xml->createElement('Matricula', @$dado['matricula']),
                $this->xml->createElement('Processo', @$dado['processo']),
                $this->xml->createElement('NumeroAto', @$dado['numero_ato']),
                $this->xml->createElement('DataAto', @$dado['data_ato']),
                $this->xml->createElement('VeiculoPublicacao', @$dado['veiculo_publicacao']),
                $this->xml->createElement('DataInicio', @$dado['data_inicio']),
                $this->xml->createElement('Tipo', @$dado['tipo']),
            ];

            foreach ($elements as $el) {
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}