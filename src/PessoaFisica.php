<?php
require_once "Cliente.php";
class PessoaFisica extends Cliente {
    private string $cpf;
    private int $idade;
// _____________________________________________________
    // Propriedade estática (Não depende de um objeto)
    public static string $cidade;

    public static function verificaIdade(int $idade):string {
        return $idade >=60 ? "prioridade" : "normal";
    }
// _____________________________________________________
    // Já entra em funcionamento automaticamente
    public function __construct(){
        $this->setSituacao("normal");
    }
// _____________________________________________________
    public function exibirDados() {
        echo "<h3>".$this->getNome()."</h3>";
        echo "<p>Idade: ".$this->idade."</p>";
        echo "<p>Situação: ".$this->getSituacao()."</p>";

    }
// _____________________________________________________
    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
// _____________________________________________________

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;

        return $this;
    }
}