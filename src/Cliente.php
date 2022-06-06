<?php

class Cliente {
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;

    // Método construtor
    public function __construct(string $nome, string $email)
    {
        // Variável especial, sempre apontando para a referência de Classe atualmente manipulada.
        $this->nome = $nome;
        $this->email = $email;
    }
}