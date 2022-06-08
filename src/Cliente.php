<?php

class Cliente {
    private string $nome;
    private string $email;
    private string $senha;

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

}