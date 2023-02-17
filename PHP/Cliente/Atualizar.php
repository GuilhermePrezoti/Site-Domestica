<?php

    namespace siteDomestica\PHP\Cliente;

    require_once("Conexao.php");

    use siteDomestica\PHP\Cliente\Conexao;


    class Update{
        function atualizarCli(Conexao $conexao, string $campo, string $novoDado, int $cpf, string $nomeDaTabela)
        {
            try{
               $conn    = $conexao->conectar(); 
               $sql     = "update $nomeDaTabela set $campo = '$novoDado' where cpf = '$cpf'";
               $result  = mysqli_query($conn, $sql);

               mysqli_close($conn);

               if($result){
                echo "<br>Atualizado com sucesso!";
                return;
               }//fim do if
               return "Código NÃO Atualizado!";

            }//fim do try
            catch(Exception $erro)
            {
                return $erro;
            }//fim do catch

        }//fim da função

    }//fim da class

?>