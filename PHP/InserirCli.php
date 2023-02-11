<?php

    require_once('Conexao.php');

    class Inserir{
        
        public function cadastrar(
            Conexao $conexao, 
            string $nomeDaTabela, 
            int $cpf,
            string $nome,
            string $rua,
            string $cidade,
            int $numero,
            string $dataDeNascimento,
            string $senha,
            string $email,
            string $avaliacao, 
            string $anuncio)
        {
            try{
                $conn = $conexao->conectar();//Abrindo a conexão com o banco
                $sql  = "insert into $nomeDaTabela (cpf, nome, rua, cidade, numero, dataDeNascimento, senha, email, avaliacao, anuncio) 
                values ('$cpf','$nome','$rua', '$cidade', '$numero', '$dataDeNascimento', '$senha', '$email', '$avaliacao', '$anuncio')";//Escrevi o script
                $result = mysqli_query($conn,$sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!
                
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do cadastrar
    }//fim da classe

?>