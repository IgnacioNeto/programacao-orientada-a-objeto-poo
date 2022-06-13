<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>
    <h1>PHP POO - Exemplo 5</h1>
    <hr>
    <h2>Assuntos abordados:</h2>
    <ul>
        <li>Herança</li>
        <li>Classe Abstrata - Não pode ser instanciada</li>
        <li>Classe Final (não permite herança)</li>
        <li>Métodos/ propriedades protegidos (acessíveis apenas pelas subclasses)</li>
    </ul>
<hr>

<?php
// Importando a classe
require_once "src/PessoaFisica.php"; // subclasse
// require_once "src/PessoaJuridica.php"; // subclasse
require_once "src/MEI.php"; // subclasse

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
$clientePJ-> setEmail('adventure@gmail.com');
$clientePJ-> setSenha('456abc');
$clientePJ-> setCnpj('12.345.678/0001-10');
$clientePJ-> setAnoFundacao(1998);
$clientePJ-> setNomeFantasia('Vida adventure');

$clienteMEI = new MEI;
$clienteMEI-> setNome('James Hetfield');
$clienteMEI-> setNomeFantasia('Metallica');
$clienteMEI-> setCnpj('25.388.699/0001-42');
$clienteMEI-> setAreaDeAtuacao('Música');

?>
<!-- Para testar -->
<pre><?=var_dump($clientePF, $clientePJ, $clienteMEI )?></pre>

<!-- Erro pois cliente é abstrato -->
<?php $cliente = new Cliente; ?> 
<pre><?=var_dump($cliente)?></pre>

</body>
</html>