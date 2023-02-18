<?php

    namespace siteDomestica\HTML;

    require_once('../PHP/Cliente/Conexao.php');
    require_once('../PHP/Cliente/Consultar.php');

    use siteDomestica\PHP\Cliente\Conexao;
    use siteDomestica\PHP\Cliente\Consultar;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>
    <form method="POST">
    <label>Informe seu CPF para Consultar seus dados: </label>
    <input type="number" name="tCpf"/><br><br>

    <button>Consultar</button>

    <?php
        if($_POST['tCpf'] != ""){
            $conn   = new Conexao();
            $consu  = new Consultar();
            echo $consu->Consult($conn, "cliente", $_POST['tCpf']);
            return;
        }//fim do if
    ?>
    </form>
        <a href="ExcluirAnuncio.php"><button>Excluir Anúncio</button></a>
        <a href="AtualizarCliente.php"><button>Atualizar Perfil</button></a>
        <a href="ExcluirCliente.php"><button>Excluir Perfil</button></a>
        <a href="InserirAnuncio.php"><button>Inserir Anúncio</button></a>
</body>
</html>