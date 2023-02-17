<?php

    namespace siteDomestica\PHP\Cliente;

    require_once("Conexao.php");

    use siteDomestica\PHP\Cliente\Conexao;


        class Anuncios{

            public function insertAnuncio(Conexao $conexao, string $nomeDaTabela, int $cpf, string $titulo, string $descricao, float $valor, string $cidade, string $logradouro, string $bairro, int $numero, string $dataPublicacao){
                try{
                    $conn = $conexao->conectar();//Abrindo a conexão com o banco
                    $sql  = "insert into $nomeDaTabela(cpf, titulo, descricao, valor, cidade, logradouro, bairro, numero, dataPublicacao) 
                    values ('$cpf', '$titulo', '$descricao', '$valor', '$cidade', '$logradouro', '$bairro', '$numero', '$dataPublicacao')";//Escrevi o script
                    $result = mysqli_query($conn,$sql);//Executa a ação do script no banco

                    mysqli_close($conn);//fechando a conexão com sucesso!
                    
                    if($result){
                        return "<br><br>Anúncio Inserido com sucesso!";
                    }//fim do if
                    return "<br><br>Não Inserido!";
                }
                catch(Exception $erro){
                    echo $erro;
            }//fim do catch

            }//fim da classe      

        }//Fim da classe





?>