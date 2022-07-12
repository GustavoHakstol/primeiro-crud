<?php

    include 'conexao.php';

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $telefone = $_POST['telefone'];
    $estadocivil = $_POST['estadocivil'];

    $recebendocadastros = "UPDATE pessoas1 SET `nome` = '$nome', `idade` = '$idade', `genero` = '$genero', `telefone` = '$telefone', `estado civil` = '$estadocivil' WHERE `id` = $id";

    $querycadastros = mysqli_query($conexao, $recebendocadastros);

    header('location:index.php')
?>