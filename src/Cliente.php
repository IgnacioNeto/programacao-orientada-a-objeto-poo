<?php

/* Classes abstratas NÃO PODEM SER INSTANCIADAS.
Ou seja, não é possível criar um objeto/ variável a 
partir desta classe */

abstract class Cliente {
    private string $nome;
    private string $email;
    private string $senha;

    private string $situacao = "a definir";

    // Métodos getters e setters
    public function getNome():string {
        return $this->nome;

    }
    // $nome (e o parametro). $this->nome (e a propriedade)
    public function setNome(string $nome) {
        $this->nome = $nome;

    }
// __________________________________________________________________________
    public function getEmail():string {
        return $this->email;

    }
    public function setEmail(string $email) {
        $this->email = $email;

    }
// __________________________________________________________________________
    public function getSenha():string {
        return $this->senha;

    }
    public function setSenha(string $senha) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);

    }
// __________________________________________________________________________
    public function getSituacao(): string
    {
        return $this->situacao;
    }

    public function setSituacao(string $situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }
}