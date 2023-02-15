<?php
    namespace Projeto\siteDomestica\HTML;

    require_once('../PHP/Conexao.php');
    require_once('../PHP/Excluir.php');

    use Projeto\siteDomestica\PHP\Conexao;
    use Projeto\siteDomestica\PHP\Delete;


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
    <form method="POST">
    <label>CPF: </label><br>
    <input type="number" name="tCpf" placeholder="Informe o seu CPF" required /><br><br> 

    <button>Excluir</button>

    <?php
        if($_POST['tCpf'] == $_POST['tCpf']){
            $conexao = new Conexao();
            $del     = new Delete();
            echo $del->deletar($conexao, "cliente", $_POST['tCpf']);
            return;
        }//fim do if
        echo "Dado digitado não encontrado!";
    ?>
    </form>
</body>
</html>