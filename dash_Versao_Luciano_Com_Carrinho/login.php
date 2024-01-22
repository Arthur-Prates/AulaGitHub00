<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lanches | Login</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
        &gt;>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
    <link rel="stylesheet" href="./css/login.css">

    <link rel="stylesheet" href="./css/style.css">
    <style>
        body {
            background: url("./img/wall2.jpg");
            background-position: cover;
            background-repeat: no-repeat;
            background-size: 100%;
            backdrop-filter: saturate(0%);
        }
    </style>
</head>
<div class="container-fluid">

    <body>
        <nav class="navbar navbar-expand-lg  pretao border-bottom border-body mb-0 " data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <font style='color:#FFC107'>PHP Lanches</font>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown text-white pretao dropstart">
                            <a class="nav-link text-white  pretao" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span class='mdi mdi-account'> </span>
                                <?php
                                if (isset($_SESSION["nome"]) && !empty($_SESSION["nome"])) {
                                    echo $_SESSION['nome'];

                                    ?>
                                </a>
                                <ul class="dropdown-menu ">
                                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                                    <li><a class="dropdown-item" href="#">Carrinho</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="login.php">Sair</a></li>
                                </ul>
                            </li>
                            <?php
                                } else {
                                    echo 'Conta ';
                                    ?>
                            </a>
                            <ul class="dropdown-menu ">
                                <li><a class="dropdown-item" href="login.php">Login</a></li>

                            </ul>
                            </li>
                            <?php
                                }
                                ?>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-lg-4 col-md-12 col-md-12"></div>
            <div class="col-lg-4 col-md-12 col-md-12">
                <div class=" mt-5 pb-5 mb-5 pt-5">

                    <div class="container text-white align-items-center">
                        <div class="card text-white" style="background:#0f0f0f;">
                            <div class="card-header text-center">
                                <h2><b>PHP Lanches | Login</b></h2>
                            </div>
                            <div class="card-body">
                                <form action="./dados.php" method="post">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" required='required' name="email">

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            required='required' name="senha">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Salvar Senha</label>
                                    </div>
                                    <button type="submit" class="btn btn-success">Entrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-md-12"></div>
        </div>


</div>
<?php include_once("footer.php") ?>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
    integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
    crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
    integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</div>

</html>