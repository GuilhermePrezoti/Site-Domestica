<?php
    namespace siteDomestica\HTML;

    require_once('../PHP/Cliente/Conexao.php');
    require_once('../PHP/Cliente/Anuncio.php');

    use siteDomestica\PHP\Cliente\Conexao;
    use siteDomestica\PHP\Cliente\Anuncios;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anunciar</title>
</head>
<body>
    <form method="POST">
        <label>Informe seu CPF: </label>
        <input type="number" name="tCpf"/><br><br>

        <label>Informe o Título: </label>
        <input type="text" name="tTitulo"/><br><br>

        <label>Descrição do Anúncio: </label>
        <input type="text" name="tDescricao"/><br><br>

        <label>Informe o valor do serviço: </label>
        <input type="number" name="tValor"/><br><br>

        <label>Informe a cidade do serviço: </label>
        <input type="text" name="tCidade"/><br><br>

        <label>Informe a Logradouro: </label>
        <input type="text" name="tLogradouro" placeholder="exemplo: RUA, AVENIDA..."><br><br>

        <label>Informe o Bairro: </label>
        <input type="text" name="tBairro"/><br><br>

        <label>Informe o número da casa: </label>
        <input type="number" name="tNumero"/><br><br>

        <label>Data da Publicação: </label>
        <input type="date" name="tDataPublicacao"/><br><br>

        <button>Anunciar</button><br>

        <?php
            if($_POST['tCpf'] != "" && $_POST['tTitulo'] != "" && $_POST['tDescricao'] != "" && $_POST['tValor'] != "" && $_POST['tCidade'] != "" && $_POST['tLogradouro'] != "" && $_POST['tBairro'] != "" && $_POST['tNumero'] != "" && $_POST['tDataPublicacao'] != ""){
                $conexao        = new Conexao();
                $insertAnun     = new Anuncios();
                echo $insertAnun->insertAnuncio($conexao, "anuncios", $_POST['tCpf'], $_POST['tTitulo'],  $_POST['tDescricao'],  $_POST['tValor'], $_POST['tCidade'], $_POST['tLogradouro'], $_POST['tBairro'], $_POST['tNumero'], $_POST['tDataPublicacao']);
            }//fim do if

        ?>
    </form>
        <a href="ExcluirAnuncio.php"><button>Excluir Anúncio</button></a>
        <a href="AtualizarCliente.php"><button>Atualizar Perfil</button></a>
        <a href="ConsultarCliente.php"><button>Consultar Perfil</button></a>
        <a href="ExcluirCliente.php"><button>Excluir Perfil</button></a>
</body>
</html>