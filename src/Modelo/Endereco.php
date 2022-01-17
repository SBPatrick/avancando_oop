<?php

namespace Alura\Banco\Modelo;
/**
 * @property string $cidade
 * @property string $bairro
 * @property string $rua
 * @property string $numero
 *
 */
class Endereco
{
    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    /**
     * @param string $cidade
     * @param string $bairro
     * @param string $rua
     * @param string $numero
     */
    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function setBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function setRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string
    {
        return "$this->rua, $this->numero, $this->bairro, $this->cidade";
    }

    public function __set(string $nomeAtributo, $valor): void
    {
        $metodo = 'set' . ucfirst($nomeAtributo);
        $this->$metodo($valor);
    }
}

