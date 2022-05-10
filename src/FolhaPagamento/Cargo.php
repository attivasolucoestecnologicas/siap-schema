<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Cargo extends Base
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
            $content = $this->xml->createElement('Cargo');
            $siap->appendChild($content);

            $elements = [
                $this->xml->createElement('Codigo', @$dado['codigo']),
                $this->xml->createElement('Nome', @$dado['nome']),
                $this->xml->createElement('DataCriacao', @$dado['data_criacao']),
                $this->xml->createElement('DataAtoCriacao', @$dado['data_ato_criacao']),
                $this->xml->createElement('AtoCriacao', @$dado['ato_criacao']),
                $this->xml->createElement('VeiculoPublicacaoAtoCriacao', @$dado['veiculo_publicacao_ato_criacao']),
                $this->xml->createElement('DataExtincao', @$dado['data_extincao']),
                $this->xml->createElement('DataAtoExtincao', @$dado['data_ato_extincao']),
                $this->xml->createElement('AtoExtincao', @$dado['ato_extincao']),
                $this->xml->createElement('VeiculoPublicacaoAtoExtincao', @$dado['veiculo_publicacao_ato_extincao']),
                $this->xml->createElement('TipoCargo', @$dado['tipo_cargo']),
                $this->xml->createElement('Acumulavel', @$dado['acumulavel']),
                $this->xml->createElement('ContagemEspecial', @$dado['contagem_especial']),
                $this->xml->createElement('HabilitacaoLegal', @$dado['habilitacao_legal']),
                $this->xml->createElement('DedicacaoExclusiva', @$dado['dedicacao_exclusiva']),
                $this->xml->createElement('AposentadoriaEspecial', @$dado['aposentadoria_especial']),
                $this->xml->createElement('EscolaridadeMinima', @$dado['escolaridade_minima']),
                $this->xml->createElement('Salario', @$dado['salario']),
                $this->xml->createElement('Percentual', @$dado['percentual']),
                $this->xml->createElement('CodigoCarreira', @$dado['codigo_carreira']),
            ];

            foreach ($elements as $el) {
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}