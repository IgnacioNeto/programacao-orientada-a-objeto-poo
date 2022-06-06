<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <h1>PHP POO - Exemplo 1</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Criação dos objetos</li>
        <li>Uso do método construtor</li>
        <li>Uso do método <code>$this</code> para acessar propriedades</li>
    </ul>

<?php
require_once "src/Cliente.php";

// Criação dos objetos
$clienteA = new Cliente('Tiago', 'tiago@gmail.com');
$clienteB = new Cliente('Jon Oliva', 'savatage@msn.com');

?>

<!-- Teste -->
<pre><?=var_dump($clienteA, $clienteB)?></pre>

    
</body>
</html>