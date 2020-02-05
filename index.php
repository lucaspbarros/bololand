<?php
include_once("config.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="bg-azul-claro">
    <main>
        <header class="text-center">
            <img src="logo.png" alt="logotipo Bololand">
        </header>

        <nav class="navbar navbar-expand-lg bg-azul sticky-top">
            <button class="navbar-toggler bg-branco ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="material-icons azul">
                        menu
                    </i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#lojas">Lojas</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pag=cad">Cadastro</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pag=log">Entrar</a>
                    </li>
                </ul>
            </div>
        </nav>

        <?php
        if (!empty($_GET)) {
            if ($_GET["pag"] == "cad") {
                include("pages/formUser.php");
            } else if ($_GET["pag"] == "log") {
                include("pages/login.php");
            } else {
                include("pages/inicio.php");
            }
        } else {
            include("pages/inicio.php");
        }
        ?>

        <footer class="bg-azul branco container-fluid py-5">
            <div class="row">
                <div class="col-md-3">
                    <ul>
                        <li><a href="#produtos">Produtos</a></li>
                        <li><a href="#clientes">Clientes</a></li>
                        <li><a href="#lojas">Lojas</a></li>
                        <li><a href="">Referências</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul>
                        <li><a href="">Relacionamento</a></li>
                        <li><a href="">Trabalhe Conosco</a></li>
                        <li><a href="">Quen somos</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <a href=""><img src="img\social\limpos\twitter.png" alt="" class="redesocial"></a>
                    <a href=""><img src="img\social\limpos\facebook.png" alt="" class="redesocial"></a>
                    <a href=""><img src="img\social\limpos\youtube.png" alt="" class="redesocial"></a>
                </div>
                <div class="col-md-3">
                    <img src="img\pagamento.jpg" alt="" class="img-fluid">
                </div>
            </div>

        </footer>

    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>