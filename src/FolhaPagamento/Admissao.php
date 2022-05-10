<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Admissao extends Base
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
            $content = $this->xml->createElement('Admissao');
            $siap->appendChild($content);

            $cpf = $this->xml->createElement('CPF', @$dado['cpf']);
            $matricula = $this->xml->createElement('Matricula', @$dado['matricula']);
            $processo = $this->xml->createElement('Processo', @$dado['processo']);
            $n_ato = $this->xml->createElement('NumeroAto', @$dado['numero_ato']);
            $dt_ato = $this->xml->createElement('DataAto', @$dado['data_ato']);
            $v_publicacao = $this->xml->createElement('VeiculoPublicacao', @$dado['veiculo_publicacao']);
            $dt_inicio = $this->xml->createElement('DataInicio', @$dado['data_inicio']);
            $tipo = $this->xml->createElement('Tipo', @$dado['tipo']);
            $n_edital = $this->xml->createElement('NumeroEdital', @$dado['numero_edital']);
            $n_inscricao = $this->xml->createElement('NumeroInscricao', @$dado['numero_inscricao']);
            $cod_cargo = $this->xml->createElement('CodigoCargo', @$dado['cod_cargo']);
            $cod_carreira = $this->xml->createElement('CodigoCarreira', @$dado['cod_carreira']);
            $cod_orgao = $this->xml->createElement('CodigoOrgao', @$dado['cod_orgao']);
            $salario = $this->xml->createElement('Salario', @$dado['salario']);

            $content->appendChild($cpf);
            $content->appendChild($matricula);
            $content->appendChild($processo);
            $content->appendChild($n_ato);
            $content->appendChild($dt_ato);
            $content->appendChild($v_publicacao);
            $content->appendChild($dt_inicio);
            $content->appendChild($tipo);
            $content->appendChild($n_edital);
            $content->appendChild($n_inscricao);
            $content->appendChild($cod_cargo);
            $content->appendChild($cod_carreira);
            $content->appendChild($cod_orgao);
            $content->appendChild($salario);
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}