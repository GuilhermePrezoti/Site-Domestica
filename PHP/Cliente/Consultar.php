<?php
    namespace siteDomestica\PHP\Cliente;

    require_once("Conexao.php");

    use siteDomestica\PHP\Cliente\Conexao;

    

    class Consultar{

        public function Consult(Conexao $conexao, string $nomeDaTabela, int $cpf)
        {
            try{
                $conn   = $conexao->Conectar();
                $sql    = "select * from $nomeDaTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $cpf){
                        echo "<br>CPF: ".$dados["cpf"]. "<br>Nome: ".$dados["nome"]. "<br>Rua: ".$dados["rua"]. "<br>Cidade: ".$dados["cidade"]. "<br>Número: ".$dados["numero"]. "<br>Data de Nascimento: ".$dados["dataDeNascimento"]. "<br>Senha: ".$dados["senha"]. "<br>Email: ".$dados["email"]. "<br>Avaliação: ".$dados["avaliacao"];
                        return;
                    }//fim do if

                }//fim do while
                echo "CPF digitado não encontrado!";

            }//fim do try

            catch(Exception $erro)
            {
                return $erro;
            }//fim do catch

        }//fim do public

    }//fim da class
?>