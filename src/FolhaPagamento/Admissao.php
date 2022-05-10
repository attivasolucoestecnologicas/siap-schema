<?php

namespace Attiva\Siapxml\FolhaPagamento;

use Attiva\Siapxml\Base;

class Admissao extends Base
{
    public function processar($path = '/')
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
            $admissao = $this->xml->createElement('Admissao');
            $siap->appendChild($admissao);

            $cpf = $this->xml->createElement('CPF', $dado['cpf']);
            $matricula = $this->xml->createElement('Matricula', $dado['matricula']);
            $processo = $this->xml->createElement('Processo', $dado['processo']);
            $n_ato = $this->xml->createElement('NumeroAto', $dado['numero_ato']);
            $dt_ato = $this->xml->createElement('DataAto', $dado['data_ato']);
            $v_publicacao = $this->xml->createElement('VeiculoPublicacao', $dado['veiculo_publicacao']);
            $dt_inicio = $this->xml->createElement('DataInicio', $dado['data_inicio']);
            $tipo = $this->xml->createElement('Tipo', $dado['tipo']);
            $n_edital = $this->xml->createElement('NumeroEdital', $dado['numero_edital']);
            $n_inscricao = $this->xml->createElement('NumeroInscricao', $dado['numero_inscricao']);
            $cod_cargo = $this->xml->createElement('CodigoCargo', $dado['cod_cargo']);
            $cod_carreira = $this->xml->createElement('CodigoCarreira', $dado['cod_carreira']);
            $cod_orgao = $this->xml->createElement('CodigoOrgao', $dado['cod_orgao']);
            $salario = $this->xml->createElement('Salario', $dado['salario']);

            $admissao->appendChild($cpf);
            $admissao->appendChild($matricula);
            $admissao->appendChild($processo);
            $admissao->appendChild($n_ato);
            $admissao->appendChild($dt_ato);
            $admissao->appendChild($v_publicacao);
            $admissao->appendChild($dt_inicio);
            $admissao->appendChild($tipo);
            $admissao->appendChild($n_edital);
            $admissao->appendChild($n_inscricao);
            $admissao->appendChild($cod_cargo);
            $admissao->appendChild($cod_carreira);
            $admissao->appendChild($cod_orgao);
            $admissao->appendChild($salario);
        }

        $this->xml->appendChild($siap);

        $path = __DIR__ . $path;

        if (!is_dir($path)) {
            mkdir($path, 0755, true);
        }

        $path = $path . '/' . $this->className() . '.xml';
        $this->xml->save($path);
    }
}