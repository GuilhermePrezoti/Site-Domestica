<?php
    namespace Projeto\siteDomestica\PHP;

    require_once('Conexao.php');

    use Projeto\siteDomestica\PHP\Conexao;

    class Delete{
        public function deletar(Conexao $conexao, string $nomeDaTabela, int $cpf){
            try{
                $conn   = $conexao->conectar();
                $sql    = "delete from $nomeDaTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "Deletado com sucesso!";
                    return;
                }//fim do if
                return "Não deu pra deletar!";
            }//fim do try
            catch(Exception $erro)
            {
                return $erro;
            }//fim do catch

        }//fim da função

    }//fim da class


?>