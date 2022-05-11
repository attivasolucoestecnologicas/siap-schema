<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Vinculo extends Base
{
    protected $elements = [
        'CPF', 'Matricula', 'CodigoOrgao', 'CodigoCarreira', 'CodigoCargo', 'DataExercicio',
        'DataPosse', 'DataNomeacao', 'DataExoneracao', 'TipoVinculo', 'CodigoFG', 'DataInicioFG',
        'Ocupacao', 'Jornada', 'PercentualComissionado', 'SalarioCargoEfetivo'
    ];

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
            $content = $this->xml->createElement('Vinculo');
            $siap->appendChild($content);

            foreach ($this->elements as $attribute) {
                $el = $this->xml->createElement($attribute, @$dado[$attribute]);
                $content->appendChild($el);
            }
        }

        $this->xml->appendChild($siap);

        return $this;
    }
}