<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Adicional extends Base
{
    public function processar($path = '/')
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
            $adicional = $this->xml->createElement('Adicional');
            $siap->appendChild($adicional);

            $cpf = $this->xml->createElement('CPF', $dado['cpf']);
            $matricula = $this->xml->createElement('Matricula', $dado['matricula']);
            $processo = $this->xml->createElement('Processo', $dado['processo']);
            $n_ato = $this->xml->createElement('NumeroAto', $dado['numero_ato']);
            $dt_ato = $this->xml->createElement('DataAto', $dado['data_ato']);
            $v_publicacao = $this->xml->createElement('VeiculoPublicacao', $dado['veiculo_publicacao']);
            $dt_inicio = $this->xml->createElement('DataInicio', $dado['data_inicio']);
            $tipo = $this->xml->createElement('Tipo', $dado['tipo']);
            $percentual = $this->xml->createElement('Percentual', $dado['percentual']);
            $valor = $this->xml->createElement('Valor', $dado['valor']);

            $adicional->appendChild($cpf);
            $adicional->appendChild($matricula);
            $adicional->appendChild($processo);
            $adicional->appendChild($n_ato);
            $adicional->appendChild($dt_ato);
            $adicional->appendChild($v_publicacao);
            $adicional->appendChild($dt_inicio);
            $adicional->appendChild($tipo);
            $adicional->appendChild($percentual);
            $adicional->appendChild($valor);
        }

        $this->xml->appendChild($siap);

        $path = __DIR__ . $path;

        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        $path = $path . '/' . $this->className() . '.xml';
        $this->xml->save($path);
    }
}