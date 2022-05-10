<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class AlteracaoJornadaDeTrabalho extends Base
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
            $content = $this->xml->createElement('AlteracaoJornadaDeTrabalho');
            $siap->appendChild($content);

            $cpf = $this->xml->createElement('CPF', @$dado['cpf']);
            $matricula = $this->xml->createElement('Matricula', @$dado['matricula']);
            $processo = $this->xml->createElement('Processo', @$dado['processo']);
            $n_ato = $this->xml->createElement('NumeroAto', @$dado['numero_ato']);
            $dt_ato = $this->xml->createElement('DataAto', @$dado['data_ato']);
            $v_publicacao = $this->xml->createElement('VeiculoPublicacao', @$dado['veiculo_publicacao']);
            $dt_inicio = $this->xml->createElement('DataInicio', @$dado['data_inicio']);
            $cargo = $this->xml->createElement('Cargo', @$dado['cargo']);
            $carreira = $this->xml->createElement('Carreira', @$dado['carreira']);
            $jornada_anterior = $this->xml->createElement('JornadaAnterior', @$dado['jornada_anterior']);
            $jornada = $this->xml->createElement('Jornada', @$dado['jornada']);
            $base_legal = $this->xml->createElement('BaseLegal', @$dado['base_legal']);
            $altera_salario = $this->xml->createElement('AlteraSalario', @$dado['alteracao_salario']);
            $percentual = $this->xml->createElement('Percentual', @$dado['percentual']);
            $salario = $this->xml->createElement('Salario', @$dado['salario']);

            $content->appendChild($cpf);
            $content->appendChild($matricula);
            $content->appendChild($processo);
            $content->appendChild($n_ato);
            $content->appendChild($dt_ato);
            $content->appendChild($v_publicacao);
            $content->appendChild($dt_inicio);
            $content->appendChild($cargo);
            $content->appendChild($carreira);
            $content->appendChild($jornada_anterior);
            $content->appendChild($jornada);
            $content->appendChild($base_legal);
            $content->appendChild($altera_salario);
            $content->appendChild($percentual);
            $content->appendChild($salario);
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}