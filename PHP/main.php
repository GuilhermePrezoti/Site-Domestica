<?php
    namespace Projeto\siteDomestica\PHP;

    require_once('Conexao.php');
    require_once('Inserir.php');
    require_once('Consultar.php');
    require_once('Atualizar.php');
    require_once('Excluir.php');

    use Projeto\siteDomestica\PHP\Conexao;
    use Projeto\siteDomestica\PHP\Inserir;
    use Projeto\siteDomestica\PHP\Consultar;
    use Projeto\siteDomestica\PHP\Update;
    use Projeto\siteDomestica\PHP\Delete;

    $conec = new Conexao();
    

    $insert = new Inserir();
    echo $insert->Cadastrar($conec, "cliente", 954345, 
    "Allanzinho", "Rua Roger Guedes", "Argentina", 10 , "11/06/1975", "1234567", "alanzinhoSENACSP@gmail.com", 1 , "Estou a procura de uma domestica");


    //$cons = new Consultar();
    //echo $cons->consult($conec, "cliente", 954345);

    //$atu = new Update();
    //echo $atu->atualizarCli($conec, "nome", "TONYKROSS", 954345 , "cliente");

    //$del = new Delete();
    //echo $del->deletar($conec, "cliente", 954345);

?>