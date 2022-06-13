<?php
require_once "Cliente.php";

class PessoaJuridica extends Cliente {

    private string $cnpj;
    private int $anoFundacao;
    private string $nome;

    // Já entra em funcionamento automaticamente
    public function __construct(){
        $this->setSituacao("verificar");
    }

// _____________________________________________________
public function exibirDados() {
    echo "<h3>".$this->getNome()."</h3>";
    echo "<ul>";
    echo "<li>Ano de fundação: ".$this->anoFundacao."</li>";
    echo "<li>CNPJ: ".$this->cnpj."</li>";
    echo "<li>Situação: ".$this->getSituacao()."</li>";
    echo "</ul>";

}
// _____________________________________________________
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj)
    {
        $this->cnpj = $cnpj;

    }
// _____________________________________________________

    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function setAnoFundacao(int $anoFundacao)
    {
        $this->anoFundacao = $anoFundacao;

    }
// _____________________________________________________

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = "Empresa: ".$nome;

    }
}