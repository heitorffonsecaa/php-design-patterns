<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
    public int $quantidadeDeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicarDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calcularDescontoExtra($this);
    }

    public function aprovar()
    {
        $this->estadoAtual->aprovar($this);
    }

    public function reprovar()
    {
        $this->estadoAtual->reprovar($this);
    }

    public function finalizar()
    {
        $this->estadoAtual->finalizar($this);
    }
}