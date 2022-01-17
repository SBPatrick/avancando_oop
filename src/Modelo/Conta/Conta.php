<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar) : void
    {
        if($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function getNomeTitular()
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular()
    {
        return $this->titular->getCpf();
    }

    public function getSaldo(): int
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function percentualTarifa(): float;
}