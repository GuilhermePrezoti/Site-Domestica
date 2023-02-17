<?php

    namespace siteDomestica\PHP\Cliente;

    require_once("Conexao.php");

    use siteDomestica\PHP\Cliente\Conexao;


    class Consultar{

        public function consultarVagas(Conexao $conexao, int $cpf){

            try{

                $conn = $conexao->Conectar();
                $sql = "select * from anuncios where cpf = '$cpf' ";
                $result = mysqli_query($conn,$sql);

                while ($dados = mysqli_fetch_Array($result)){

                    $novaData = $dados['dataPublicacao'];
                    $ano = substr($novaData, 0, 4);
                    $mes = substr($novaData, 5, 2);
                    $dia = substr($novaData, 8, 2);
                    $dataCorrigida = $dia."/".$mes."/".$ano;
                    

                    echo "<br><br>Título: ".$dados["titulo"].
                    "<br>Descrição: ".$dados["descricao"].
                    "<br>Valor R$".$dados["valor"].
                    "<br>Cidade: ".$dados["cidade"].
                    "<br>Logradouro: ".$dados["logradouro"].
                    "<br>Bairro: ".$dados["bairro"].
                    "<br>Número: ".$dados["numero"].
                    "<br>Publicado em: ".$dataCorrigida."<br><br>";
                }//Fim while



                mysqli_close($conn);

            }catch(Except $erro){
                echo $erro;
            }//Fim try catch

        }//Fim function consultarVagas

    }//Fim da classe

?>
