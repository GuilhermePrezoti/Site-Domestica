<?php
    namespace Projeto\siteDomestica\HTML;

    require_once('../PHP/Conexao.php');

    use Projeto\siteDomestica\PHP\Conexao;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>
<body>
    <form method="POST">
    <label>CPF: </label><br>
    <input type="text" name="tInserir" placeholder="Informe o seu CPF" required /><br><br> 

    </form>
</body>
</html>