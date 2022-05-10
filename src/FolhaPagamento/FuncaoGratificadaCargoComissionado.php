<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class FuncaoGratificadaCargoComissionado extends Base
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
            $content = $this->xml->createElement('FuncaoGratificadaCargoComissionado');
            $siap->appendChild($content);

            $elements = [
                $this->xml->createElement('Codigo', @$dado['codigo']),
                $this->xml->createElement('Nome', @$dado['nome']),
                $this->xml->createElement('CodigoOrgao', @$dado['codigo_orgao']),
                $this->xml->createElement('DataCriacaoFG', @$dado['data_criacao_fg']),
                $this->xml->createElement('DataAtoCriacaoFG', @$dado['data_ato_criacao_fg']),
                $this->xml->createElement('AtoCriacaoFG', @$dado['ato_criacao_fg']),
                $this->xml->createElement('VeiculoPublicacaoAtoCriacao', @$dado['veiculo_publicacao_ato_criacao']),
                $this->xml->createElement('DataExtincao', @$dado['data_extincao']),
                $this->xml->createElement('DataAtoExtincao', @$dado['data_ato_extincao']),
                $this->xml->createElement('AtoExtincao', @$dado['ato_extincao']),
                $this->xml->createElement('VeiculoPublicacaoAtoExtincao', @$dado['veiculo_publicacao_ato_extincao']),
                $this->xml->createElement('ValorGratificacao', @$dado['valor_gratificacao']),
                $this->xml->createElement('Percentual', @$dado['percentual']),
            ];

            foreach ($elements as $el) {
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}