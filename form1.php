<?php
    if (isset($_POST["submit"])) {
        include_once("config.php");

        $nome = $_POST["nome"];
        $nascimento = $_POST["datanasc"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $identificacao = $_POST["identificacao"];

        $response = mysqli_query($conexao, "INSERT INTO cidadao(nome,datanasc,endereco,numerotelefone,email,numidentificacao) VALUES('$nome','$nascimento','$endereco','$telefone','$email','$identificacao')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <form action="form1.php" method="post">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="form1.php">Cidadão</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="form2.php">Funcionário</a>
        </li>
        </ul>
        </div>
        </div>
        </nav>
            <label for="">Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Digite o seu nome aqui">
            <label for="">Data de nascimento:</label>
            <input type="date" name="datanasc" id="datanasc"><br>
            <label for="">Endereço:</label>
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço aqui"><br>
            <label for="">Telefone:</label>
            <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone aqui"><br>
            <label for="">Email:</label>
            <input type="text" name="email" id="email" placeholder="Digite seu email aqui"><br>
            <label for="">Identificação:</label>
            <input type="text" name="identificacao" id="identificacao" placeholder="Digite um número de identificação ex:CPF,CNH...">
            <input type="submit" id="submit" name="submit">
        </form>
    </section>
    <script src="script.js"></script>
</body>
</html>