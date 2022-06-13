<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 6</title>
</head>
<body>
    <h1>PHP POO - Exemplo 6</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Polimorfismo</li>
    </ul>

<hr>

<?php
// Importando a classe
require_once "src/PessoaFisica.php"; // subclasse
require_once "src/PessoaJuridica.php"; // subclasse

$clientePF = new PessoaFisica;
$clientePF-> setNome('Tiago');
$clientePF-> setEmail('tiago@gmail.com');
$clientePF-> setSenha('123abc');
$clientePF-> setCpf('123.456.789-00');
$clientePF-> setIdade(38);

?>

<?php
$clientePJ = new PessoaJuridica;
$clientePJ-> setNome('Adventure, LTDA');
$clientePJ-> setCnpj('12.345.678/0001-10');
$clientePJ-> setAnoFundacao(1998);

?>

<h3>Pessoa Fisica</h3>
<p> <?=$clientePF->getNome()?> </p>
<hr>
<h3>Pessoa Juridica</h3>
<p> <?=$clientePJ->getNome()?> </p>

<!-- Exibir -->
<hr>
<section><?=$clientePF->exibirDados()?></section>

<hr>
<section><?=$clientePJ->exibirDados()?></section>

<!-- Para testar -->
<!-- <pre><?=var_dump($clientePF, $clientePJ)?></pre> -->


</body>
</html>