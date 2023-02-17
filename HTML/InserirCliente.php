<?php
   namespace siteDomestica\HTML;

    require_once('../PHP/Cliente/Conexao.php');
    require_once('../PHP/Cliente/Inserir.php');

    use Projeto\siteDomestica\PHP\Cliente\Conexao;
    use Projeto\siteDomestica\PHP\Cliente\Inserir;
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
    <input type="number" name="tCpf" placeholder="Informe o seu CPF" required /><br><br> 

    <label>Nome: </label><br>
    <input type="text" name="tNome" placeholder="Informe seu nome" required/><br><br>

    <label>Rua: </label><br>
    <input type="text" name="tRua" placeholder="Informe sua Rua" required /><br><br> 

    <label>Cidade: </label><br>
    <input type="text" name="tCidade" placeholder="Informe sua Cidade" required/><br><br>

    <label>Número da Casa: </label><br>
    <input type="number" name="tNumero" placeholder="Informe o número da Casa" required /><br><br> 

    <label>Telefone: </label><br>
    <input type="number" name="tTelefone" placeholder="Informe o seu telefone" required /><br><br>

    <label>Data de Nascimento: </label><br>
    <input type="date" name="tDataNascimento" placeholder="Informe sua data de nascimento" max="2005-02-14" required/><br>

    <label>Senha: </label><br>
    <input type="text" name="tSenha" placeholder="Informe sua Senha" required /><br><br> 

    <label>Email: </label><br>
    <input type="text" name="tEmail" placeholder="Informe seu email" required/><br><br>

    <button> Cadastrar </button>

    <?php
    if($_POST['tCpf'] != "" && $_POST['tNome'] != "" && $_POST['tRua'] != "" && $_POST['tCidade'] != "" && $_POST['tNumero'] != "" && $_POST['tTelefone'] != "" && $_POST['tDataNascimento'] != "" && $_POST['tSenha'] != "" && $_POST['tEmail'] != "" ){
        $cone       = new Conexao();
        $cad        = new Inserir();
        echo $cad->cadastrar($cone, "cliente", $_POST['tCpf'], $_POST['tNome'], $_POST['tRua'], $_POST['tCidade'], $_POST['tNumero'], $_POST['tTelefone'], $_POST['tDataNascimento'], $_POST['tSenha'], $_POST['tEmail']);
        return;
    }//fim do if
    echo "Por favor, preencher os campos obrigatórios!";

    ?>
    </form>
</body>
</html>