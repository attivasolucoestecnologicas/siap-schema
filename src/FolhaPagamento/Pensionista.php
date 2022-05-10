<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Pensionista extends Base
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
            $content = $this->xml->createElement('Pensionista');
            $siap->appendChild($content);

            $elements = [
                $this->xml->createElement('CPF', @$dado['cpf']),
                $this->xml->createElement('Matricula', @$dado['matricula']),
                $this->xml->createElement('Processo', @$dado['processo']),
                $this->xml->createElement('NumeroAto', @$dado['numero_ato']),
                $this->xml->createElement('DataAto', @$dado['data_ato']),
                $this->xml->createElement('VeiculoPublicacao', @$dado['veiculo_publicacao']),
                $this->xml->createElement('CPFPensionista', @$dado['cpf_pensionista']),
                $this->xml->createElement('NomePensionista', @$dado['nome_pensionista']),
                $this->xml->createElement('DataNascimento', @$dado['data_nascimento']),
                $this->xml->createElement('GrauParentesco', @$dado['grau_parentesco']),
                $this->xml->createElement('TipoBeneficio', @$dado['tipo_beneficio']),
                $this->xml->createElement('DataInicio', @$dado['data_inicio']),
                $this->xml->createElement('DataFim', @$dado['data_fim']),
                $this->xml->createElement('Percentual', @$dado['percentual']),
                $this->xml->createElement('Responsavel', @$dado['responsavel']),
                $this->xml->createElement('Revisao', @$dado['revisao']),
            ];

            foreach ($elements as $el) {
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}