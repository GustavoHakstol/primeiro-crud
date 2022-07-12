<?php

    include 'conexao.php';

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $telefone = $_POST['telefone'];
    $estadocivil = $_POST['estadocivil'];

    $recebendocadastros = "INSERT INTO pessoas1 VALUES ('', '$nome', '$idade', '$genero', '$telefone', '$estadocivil')";

    $querycadastros = mysqli_query($conexao, $recebendocadastros);

    header('location:index.php')
?>