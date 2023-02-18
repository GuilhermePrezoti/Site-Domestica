<?php
    namespace siteDomestica\HTML;

    require_once('../PHP/Cliente/Conexao.php');
    require_once('../PHP/Cliente/DeletarAnuncio.php');

    use siteDomestica\PHP\Cliente\Conexao;
    use siteDomestica\PHP\Cliente\Deletar;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Anúncio</title>
</head>
<body>
    <form method="POST">
    <label>Informe seu CPF para excluir o Anúncio: </label>
    <input type="number" name="tCpf" placeholder="Informe o seu CPF" required /><br><br> 

    <button>Excluir</button><br>

    <?php
        if($_POST['tCpf'] != ""){
            $conexao = new Conexao();
            $dela     = new Deletar();
            echo $dela->deletarAnuncio($conexao, "anuncios", $_POST['tCpf']);
            return;
        }//fim do if
         echo "Dado digitado não encontrado!";
    ?>
    </form>
    <a href="AtualizarCliente.php"><button>Atualizar Perfil</button></a>
    <a href="ConsultarCliente.php"><button>Consultar Perfil</button></a>
    <a href="ExcluirCliente.php"><button>Excluir Perfil</button></a>
    <a href="InserirAnuncio.php"><button>Inserir Anúncio</button></a>
    
</body>
</html>