<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class ItemFolha extends Base
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
            $content = $this->xml->createElement('ItemFolha');
            $siap->appendChild($content);

            $elements = [
                $this->xml->createElement('CPF', @$dado['cpf']),
                $this->xml->createElement('Matricula', @$dado['matricula']),
                $this->xml->createElement('MesCompetencia', @$dado['mes_competencia']),
                $this->xml->createElement('Ano', @$dado['ano']),
                $this->xml->createElement('CNPJFontePagadora', @$dado['cnpj_fonte_pagadora']),
                $this->xml->createElement('Natureza', @$dado['natureza']),
                $this->xml->createElement('Tipo', @$dado['tipo']),
                $this->xml->createElement('Descricao', @$dado['descricao']),
                $this->xml->createElement('IncideContribuicaoRPPS', @$dado['incide_contribuicao_rpps']),
                $this->xml->createElement('IncideIRRF', @$dado['incide_irrf']),
                $this->xml->createElement('TetoRemuneratorio', @$dado['teto_remuneratorio']),
                $this->xml->createElement('IncideContribuicaoRGPS', @$dado['incide_contribuicao_rgps']),
                $this->xml->createElement('IncideFGTS', @$dado['incide_fgts']),
                $this->xml->createElement('Valor', @$dado['valor']),
            ];

            foreach ($elements as $el) {
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}