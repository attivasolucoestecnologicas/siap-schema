<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Carreira extends Base
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
            $content = $this->xml->createElement('Carreira');
            $siap->appendChild($content);

            $elements = [
                $this->xml->createElement('Codigo', @$dado['codigo']),
                $this->xml->createElement('Nome', @$dado['nome']),
                $this->xml->createElement('DataCriacao', @$dado['data_criacao']),
                $this->xml->createElement('DataAtoCriacao', @$dado['data_ato_criacao']),
                $this->xml->createElement('AtoCriacao', @$dado['ato_criacao']),
                $this->xml->createElement('VeiculoPublicacaoAtoCriacao', @$dado['veiculo_publicacao_ato_criacao']),
                $this->xml->createElement('AlteracaoNomenclatura', @$dado['alteracao_nomeclatura']),
                $this->xml->createElement('DataAlteracao', @$dado['data_alteracao']),
                $this->xml->createElement('DataAtoAlteracao', @$dado['data_ato_alteracao']),
                $this->xml->createElement('AtoAlteracao', @$dado['ato_alteracao']),
                $this->xml->createElement('VeiculoPublicacaoAtoAlteracao', @$dado['veiculo_publicacao_ato_alteracao']),
                $this->xml->createElement('DataExtincao', @$dado['data_extincao']),
                $this->xml->createElement('DataAtoExtincao', @$dado['data_ato_extincao']),
                $this->xml->createElement('AtoExtincao', @$dado['ato_extincao']),
                $this->xml->createElement('VeiculoPublicacaoAtoExtincao', @$dado['veiculo_publicacao_ato_extincao']),
            ];

            foreach ($elements as $el) {
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}