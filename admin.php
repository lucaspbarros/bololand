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

    <link rel="stylesheet" href="css/cores.css">
    <link rel="stylesheet" href="css/admin.css">
</head>

<script>
    function side() {
        var side = document.getElementById("side");
        var main = document.getElementById("main");
        if (side.style.display !== "none") {
            side.classList.toggle("sidebarHide");
            main.classList.toggle("main");
        }
    }
</script>

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2" href="#" onclick="side()">
            <i class="material-icons">
                menu
            </i>
            Bololand
        </a>

        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sair</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-12 col-md-2 bg-light sidebar" id="side">
                <div class="sidebar-sticky">

                    <h6 class="sidebar-heading align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Cadastros</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="side()">
                                Produtos
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Relatórios</span>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="side()">
                                Produtos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <section class="col-12 col-md-10 d-block px-4 main" id="main">
                <h2>Principal</h2>
            </section>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/cep.js"></script>
</body>

</html>