<?php

    require_once('Conexao.php');
    require_once('InserirCli.php');

    $conec = new Conexao();
    echo $conec->conectar();

    $insert = new Inserir();
    echo $insert->InserirCliente($conec, "cliente", 12343212, "Maycan DELAS", "RUA DAS DROGAS", "ANGOLA", 15, "10/02/2023", "123", "maycanfregues@gmail.com", 4, "Estou a procura de uma domestica");

    /*cpf bigint not null primary key,
    nome varchar(100) not null,
    rua varchar(100) not null,
    cidade varchar(100) not null,
    numero int not null,
    dataDeNascimento date not null,
    senha varchar(100) not null,
    email varchar(100) not null,
    avaliacao int not null,
    anuncio varchar(1000)*/
?>