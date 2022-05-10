<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class DesignacaoCargoComissaoFuncaoGratificada extends Base
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
            $content = $this->xml->createElement('DesignacaoCargoComissaoFuncaoGratificada');
            $siap->appendChild($content);

            $elements = [
                $this->xml->createElement('CPF', @$dado['cpf']),
                $this->xml->createElement('Matricula', @$dado['matricula']),
                $this->xml->createElement('Processo', @$dado['processo']),
                $this->xml->createElement('NumeroAto', @$dado['numero_ato']),
                $this->xml->createElement('DataAto', @$dado['data_ato']),
                $this->xml->createElement('VeiculoPublicacao', @$dado['veiculo_publicacao']),
                $this->xml->createElement('DataInicio', @$dado['data_inicio']),
                $this->xml->createElement('FuncaoGratificada', @$dado['funcao_gratificada']),
                $this->xml->createElement('CargoComissao', @$dado['cargo_comissao']),
                $this->xml->createElement('PercentalSalarioEfeitvo', @$dado['percentual_salario_efetivo']),
                $this->xml->createElement('PercentalSalarioComissionado', @$dado['percentual_salario_comissionado']),
                $this->xml->createElement('ValorFuncaoGratificada', @$dado['valor_funcao_gratificada']),
                $this->xml->createElement('PercentalFuncaoGratificada', @$dado['percentual_funcao_gratificada']),
            ];

            foreach ($elements as $el) {
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}