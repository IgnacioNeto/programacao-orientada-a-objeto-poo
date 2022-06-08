<?php

class Cliente {
    public string $nome;
    public string $email;
    public string $senha = ""; // Valor inicial padrão (Para quando a variável não for inicializada)
    public array $telefones;

    public function exibirDados() {
        echo "<h3> $this->nome </h3>";
        echo "<ul>";
        echo "<li> $this->email</li>";
        echo "<li>" .implode(', ', $this->telefones). "</li>";
        echo "</ul>";
    }


}