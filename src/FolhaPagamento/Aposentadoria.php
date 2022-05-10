<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Aposentadoria extends Base
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
            $content = $this->xml->createElement('Aposentadoria');
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
                $this->xml->createElement('BaseLegal', @$dado['base_legal']),
                $this->xml->createElement('DiasTempoAnterior', @$dado['dias_tempo_anterior']),
                $this->xml->createElement('DiasTempoEfetivo', @$dado['dias_tempo_efetivo']),
                $this->xml->createElement('DiasTempoAfastado', @$dado['dias_tempo_afastado']),
                $this->xml->createElement('DiasTempoComissionado', @$dado['dias_tempo_comissionado']),
                $this->xml->createElement('DiasAverbacaoPrivado', @$dado['dias_averbacao_privado']),
                $this->xml->createElement('DiasAverbacaoPublica', @$dado['dias_averbacao_publica']),
                $this->xml->createElement('Reversao', @$dado['reversao']),
                $this->xml->createElement('AtoReversao', @$dado['ato_reversao']),
                $this->xml->createElement('DataPublicacaoReversao', @$dado['data_publicacao_reversao']),
                $this->xml->createElement('VeiculoPublicacaoReversao', @$dado['veiculo_publicacao_reversao']),
                $this->xml->createElement('Revisao', @$dado['revisao']),
                $this->xml->createElement('AtoRevisao', @$dado['ato_revisao']),
                $this->xml->createElement('DataPublicacaoRevisao', @$dado['data_publicacao_revisao']),
                $this->xml->createElement('VeiculoPublicacaoRevisao', @$dado['veiculo_publicacao_revisao']),
            ];

            foreach ($elements as $el) {
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}