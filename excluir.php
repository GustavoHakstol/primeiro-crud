<?php

    include 'conexao.php';

    $id = $_POST['id'];

    $recebendocadastros = "DELETE FROM pessoas1 WHERE id = '$id'";

    $querycadastros = mysqli_query($conexao, $recebendocadastros);

    header('location:index.php')
?>