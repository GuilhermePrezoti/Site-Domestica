<?php
    namespace siteDomestica\HTML;

    require_once('../PHP/Cliente/Conexao.php');
    require_once('../PHP/Cliente/Atualizar.php');

    use Projeto\siteDomestica\PHP\Cliente\Conexao;
    use Projeto\siteDomestica\PHP\Cliente\Update;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form method="POST">
        <label>Informe seu CPF: </label>
        <input type="number" name="tCpf"><br><br>
        <label>Informe o Dado que deseja atualizar</label>


        <select name="tCampo">
            <option value="telefone">Telefone</option>
            <option value="rua">Rua</option>
            <option value="cidade">Cidade</option>
            <option value="numero">Número</option>
        </select><br><br>


        <label>Novo Dado:</label>
        <input type="text" name="tNovoDado"/>

        
        <button>Atualizar</button>



        <?php
            if($_POST['tCampo'] != "" && $_POST['tNovoDado'] != "" && $_POST['tCpf'] != ""){
                $conexao = new Conexao();
                $atu     = new Update();
                echo $atu->atualizarCli($conexao,$_POST['tCampo'], $_POST['tNovoDado'], $_POST['tCpf'], "cliente");
                return;
            }//fim do if
            echo "Dado NÃO Atualizado!";
        ?>
        </form>
</body>
</html>