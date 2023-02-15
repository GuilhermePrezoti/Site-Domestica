<?php
    namespace Projeto\siteDomestica\HTML;

    require_once('../PHP/Conexao.php');
    require_once('../PHP/Atualizar.php');

    use Projeto\siteDomestica\PHP\Conexao;
    use Projeto\siteDomestica\PHP\Update;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form method="POST">

        <select name="tCampo">
            <option value="telefone">Telefone</option>
            <option value="rua">Rua</option>
            <option value="cidade">Cidade</option>
            <option value="numero">Número</option>
        </select>
        <input type="text" name="tCampo" placeholder="Exemplo: TELEFONE, ENDEREÇO">
        <button>Atualizar</button>

        <?php
            if($_POST['tCampo'] == $_POST['tCampo']){
                $conexao = new Conexao();
                $atu     = new Update();
                echo $atu->atualizarCli($conexao, "cliente", $_POST['tCampo']);
                return;
            }//fim do if
            echo "Dado NÃO Atualizado!";
        ?>
        </form>
</body>
</html>