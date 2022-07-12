<?php
 include 'conexao.php';
 $id = $_POST['id'];
 $querypessoas = mysqli_query($conexao, "SELECT * FROM pessoas1 WHERE id = '$id'");
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Editar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <header>
        <h1 class="header-title">Editar</h1>
    </header>
    <main>
        <?php
            while($receberpessoas = mysqli_fetch_array($querypessoas)){
                $id = $receberpessoas['id'];
                $nome = $receberpessoas['nome'];
                $idade = $receberpessoas['idade'];
                $genero = $receberpessoas['genero'];
                $telefone = $receberpessoas['telefone'];
                $estadocivil = $receberpessoas['estado civil'];

        ?>
            <form action="editar2.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input class="edit" type="text" name="nome" value="<?php echo $nome; ?>">
                <input class="edit" type="number" name="idade" value="<?php echo $idade; ?>">
                <input class="edit" type="text" name="genero" value="<?php echo $genero; ?>">
                <input class="edit" type="number" name="telefone" value="<?php echo $telefone; ?>">
                <input class="edit" type="text" name="estadocivil" value="<?php echo $estadocivil; ?>">
                <input class="button editar" type="submit" value="Editar">
            </form>
            <form action="index.php">
                <input class="button excluir" type="submit" value="Cancelar">
            </form>
        <?php
            }
        ?>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>