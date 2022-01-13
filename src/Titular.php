<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function getCpf()
    {
        return $this->cpf->getCpf();
    }
}