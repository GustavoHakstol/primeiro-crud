<?php
    include 'conexao.php';

    $querypessoas = mysqli_query($conexao, "SELECT * FROM pessoas1");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>CRUD</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/table.css">
  <body>
    <header>
        <h1 class="header-title">Cadastro</h1>
    </header>
    <main>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Genero</th>
                    <th>Telefone</th>
                    <th>Estado Civil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($receberpessoas = mysqli_fetch_array($querypessoas)){
                        $id = $receberpessoas['id'];
                        $nome = $receberpessoas['nome'];
                        $idade = $receberpessoas['idade'];
                        $genero = $receberpessoas['genero'];
                        $telefone = $receberpessoas['telefone'];
                        $estadocivil = $receberpessoas['estado civil'];

                ?>
                <tr class = "name">
                    <td scope="row"><?php echo $id; ?></td>
                    <td><?php echo $nome; ?></td>
                    <td><?php echo $idade; ?></td>
                    <td><?php echo $genero; ?></td>
                    <td><?php echo $telefone; ?></td>
                    <td><?php echo $estadocivil; ?></td>
                    <td>
                        <form action="editar.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input class="button editar" type="submit" value="Editar">
                        </form>
                        <form action="excluir.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input class="button excluir" type="submit" value="Excluir">
                        </form>
                    </td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <form action="cadastro.php" method="post">
                        <input class="button cadastro" type="submit" value="Cadastrar">
                    </form>
                </tr>
            </tbody>
        </table>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>