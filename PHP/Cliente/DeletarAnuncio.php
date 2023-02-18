<?php
    namespace siteDomestica\PHP\Cliente;

    require_once("Conexao.php");

    use siteDomestica\PHP\Cliente\Conexao;


    class Deletar{
        public function deletarAnuncio(Conexao $conexao, string $nomeDaTabela, int $cpf){
            try{
                $conn   = $conexao->conectar();
                $sql    = "delete from $nomeDaTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "Deletado com sucesso!";
                    return;
                }//fim do if
                    echo "Não deu pra deletar!";
            }//fim do try
            catch(Exception $erro)
            {
                return $erro;
            }//fim do catch

        }//fim da função

    }//fim da class


?>