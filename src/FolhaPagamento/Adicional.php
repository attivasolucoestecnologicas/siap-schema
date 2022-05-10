<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Adicional extends Base
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
            $content = $this->xml->createElement('Adicional');
            $siap->appendChild($content);

            $cpf = $this->xml->createElement('CPF', @$dado['cpf']);
            $matricula = $this->xml->createElement('Matricula', @$dado['matricula']);
            $processo = $this->xml->createElement('Processo', @$dado['processo']);
            $n_ato = $this->xml->createElement('NumeroAto', @$dado['numero_ato']);
            $dt_ato = $this->xml->createElement('DataAto', @$dado['data_ato']);
            $v_publicacao = $this->xml->createElement('VeiculoPublicacao', @$dado['veiculo_publicacao']);
            $dt_inicio = $this->xml->createElement('DataInicio', @$dado['data_inicio']);
            $tipo = $this->xml->createElement('Tipo', @$dado['tipo']);
            $percentual = $this->xml->createElement('Percentual', @$dado['percentual']);
            $valor = $this->xml->createElement('Valor', @$dado['valor']);

            $content->appendChild($cpf);
            $content->appendChild($matricula);
            $content->appendChild($processo);
            $content->appendChild($n_ato);
            $content->appendChild($dt_ato);
            $content->appendChild($v_publicacao);
            $content->appendChild($dt_inicio);
            $content->appendChild($tipo);
            $content->appendChild($percentual);
            $content->appendChild($valor);
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}