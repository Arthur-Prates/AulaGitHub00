<?php
include_once('config/conexao.php');
include_once('config/constantes.php');
include_once('func/funcoes.php');

if (isset($_SESSION["nome"]) && $_SESSION["nome"]) {
  $nome = $_SESSION['nome'];
}
if (isset($_SESSION["email"]) && $_SESSION["email"]) {
  $email = $_SESSION['email'];
}
if (isset($_SESSION["senha"]) && $_SESSION["senha"]) {
  $senha = $_SESSION['senha'];
}

if (isset($_SESSION['produto']) && $_SESSION['produto']) {
  $produtoasd = $_SESSION["produto"];
}
if (isset($_POST['itemcarrinho']) && $_POST['itemcarrinho']) {
  $_SESSION['itemcarrinho'][] = $_POST["itemcarrinho"];
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Lanches</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css" &gt;>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./css/style.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg  pretao border-bottom border-body mb-0 " data-bs-theme="dark">
    <div class="container-fluid " id='nave'>
      <a class="navbar-brand logo" href="index.php">
        <font style='color:#FFC107'>PHP Lanches</font>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">




        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Depoimentos</a>
          </li>
          <li class="nav-item dropdown text-white pretao">
            <a class="nav-link text-white  pretao" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <span class='mdi mdi-account'> </span>
              <?php
              if (isset($_SESSION["nome"]) && !empty($_SESSION["nome"])) {
                echo 'Conta ';
                ?>
              </a>
              <ul class="dropdown-menu pretao ">
                <li><a class="dropdown-item" href="#">Configurações</a></li>
                <li><a class="dropdown-item" href="index.php?page=carrinho">
                    <?php
                    if(isset($_SESSION['listar']) && $_SESSION['listar']){
                      $contar = count($_SESSION['itemcarrinho']);
                      $contar = $contar-1;
                      echo " Carrinho ($contar)";
                    }else{
                    if (isset($_SESSION['itemcarrinho']) && $_SESSION['itemcarrinho']) {
                      $contar = count($_SESSION['itemcarrinho']);
                      if ($contar == 1) {
                        echo " Carrinho (1)";
                      } else {
                        if ($contar == '0') {
                          echo " Carrinho Vazio";
                        } else {
                         
                          echo " Carrinho ($contar)";
                        }
                      }
                      ;
                    } else {
                      echo " Carrinho Vazio";
                    }} ?>
                  </a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item pretao" href="login.php">Sair</a></li>
              </ul>
            </li>
            <?php
              } else {
                echo 'Conta ';
                ?>
            </a>
            <ul class="dropdown-menu pretao">
              <li><a class="dropdown-item pretao" href="login.php">Login</a></li>

            </ul>
            </li>
            <?php
              }

              ?>
          <li class="nav-item dropdown d-md-none d-sm-block d-lg-none pretao">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Comidas
            </a>
            <ul class="dropdown-menu pretao">
              <li> <a class="dropdown-item" href="index.php?page=lanches">Lanches</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li> <a class="dropdown-item" href="index.php?page=porcao">Porções</a></li>
            </ul>
          </li>

          <li class="nav-item  d-md-none d-sm-block d-lg-none pretao">
            <a class="nav-link " aria-current="page" href="index.php?page=bebida">Bebidas</a>
          </li>

          <li class="nav-item d-md-none d-sm-block d-lg-none pretao">
            <a class="nav-link " aria-current="page" href="index.php?page=ajuda" data-bs-toggle="modal"
              data-bs-target="#ajuda">Ajuda</a>
          </li>
          <?php
          if (isset($_SESSION["nome"]) && !empty($_SESSION["nome"]) && ($_SESSION["senha"] == 'php123')) {
            ?>
            <li class="nav-item d-md-none d-sm-block d-lg-none pretao">
              <a class="nav-link " aria-current="page" href="index.php?page=administrador">Administrador</a>
            </li>
            <?php
          }
          ?>
        </ul>

        <form class="d-flex" role="Procurar">
          <input class="form-control me-2 pretao" type="search" placeholder="Procurar" aria-label="Procurar">
          <button class="btn btn-outline-warning" type="Procurar">Procurar</button>
        </form>
      </div>

    </div>
  </nav>
  <div class="wrapper ">
    <!-- Sidebar  -->

    <nav id="sidebar">
      <div class="sidebar-header">
        <p><b>
            <?php
            if (isset($_SESSION["nome"]) && !empty($_SESSION["nome"])) {
              echo "Bem vindo, " . $nome;
            } else {
              echo "Olá, <br> Registre-se e Ganhe Beneficios!";
            }
            ?>
          </b></p>
      </div>

      <ul class="list-unstyled ">

        <li class="">
          <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Comidas</a>
          <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
              <a href="index.php?page=lanches">Lanches</a>

            </li>

            <li>
              <a href="index.php?page=porcao">Porções</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="index.php?page=bebida">Bebidas</a>
        </li>

        <li>
          <a href="index.php?page=ajuda" data-bs-toggle="modal" data-bs-target="#ajuda"> Ajuda</a>
        </li>
        <?php

        if (isset($_SESSION["nome"]) && !empty($_SESSION["nome"]) && ($_SESSION["senha"] == 'php123')) {
          ?>
          <li>
            <a href="index.php?page=administrador">Administrador</a>
          </li>
          <?php
        }
        ?>
      </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content" class='px-0 mx-0'>

      <?php
      $produtoa = listarTabela('idproduto,foto', 'produto', 'idproduto');
      $produto = listarTabela('*', 'produto', 'idproduto');
      foreach ($produtoa as $item) {
        $t = $item->foto;
        $id = $item->idproduto;

      }
      ?>


      <?php

      if (isset($_GET['page']) && !empty($_GET['page'])) {
        $page = $_GET['page'];


        if ($page == 'bebida') {
          include_once "bebida.php";
        } else if ($page == 'lanches') {
          include_once "hamburguer.php";
        } else if ($page == 'porcao') {
          include_once "porcao.php";
        } else if ($page == 'ajuda') {
          include_once "ajuda.php";
        } else if ($page == 'administrador') {
          include_once "administrador.php";
        } else if ($page == 'carrinho') {
          include_once "carrinho.php";
          
        } else if ($page == 'pagamento') {
          include_once "pagamento.php";
        }else {
          echo 'ERRO 404';
        }
        ;
      } else {
        ?>
        <div class="container-fluid m-0 p-0">

          <div class="div">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center" style='align-items: center;'>
                <h1> Escolha Sua <br>Comida <font style="color:#FFC107">Favorita</font>
                  <div class="d-flex justify-content-center d-lg-flex  d-none" style='align-items: center;'>
                    <h4 class="numero_telefone mt-3"> <span class='mdi mdi-phone px-1'></span> (33) 94002-8922</h4>
                  </div>
                </h1>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-center" style='align-items: center;'>
                <img src="./img/promocao/test400.png" alt="" class="img-fluid w-50"
                  style='filter: drop-shadow(100px -20px 4px #FFC107);'>

              </div>
              <div class="d-flex justify-content-center d-lg-none d-md-flex d-sm-flex" style='align-items: center;'>
                <h4 class="numero_telefone mt-3"> <span class='mdi mdi-phone px-1'></span> (33) 94002-8922</h4>
              </div>
            </div>
          </div>

          <div class="alert text-white text-center w-100 mt-5" role="alert"
            style='background-color:#0F0F0F;border-radius:0px'>
            <h3>Hambúrgueres</h3>
          </div>
          <div class="row mt-4 d-flex" style=' justify-content: center; align-items: center;'>
            <?php

            foreach ($produto as $produtos) {
              $id = $produtos->idproduto;
              $foto = $produtos->foto;
              $produtooo = $produtos->nomeproduto;
              $exibir = $produtos->inicio;
              $preco = $produtos->preco;
              $tipo = $produtos->tipo;
              if ($tipo == 'lanche') {
                if ($exibir == 'S') {
                  ?>

                  <div class="col-lg-2 col-md-6 col-sm-12 mt-4 ">
                    <form action="index.php" method='post'>
                      <div class="card d-flex " id='carde'>
                        <img src="./img/lanche/<?php echo $foto ?>" class="card-img-top img-fluid  d-flex ">
                        <div class="card-body text-center">
                          <h5 class="card-title">
                            <div class="row mb-3">
                              <div class="col-12">
                                <?php echo $produtooo ?>
                              </div>
                              <div class="col-12">
                                <?php echo "R$ $preco" ?>
                              </div>
                            </div>
                            <input type="text" value='<?php echo $id ?>' hidden name='itemcarrinho'>
                          </h5>

                          <?php
                          if (isset($_SESSION["nome"]) && !empty($_SESSION["nome"])) {
                            ?>
                            <button type="submit" class="btn btn-outline-warning">Adicionar ao Carrinho</button>
                            <?php
                          } else {
                            ?>
                            <a href='login.php' class="btn btn-outline-warning">Adicionar ao Carrinho</a>
                            <?php
                          }
                          ?>
                        </div>
                      </div>
                    </form>
                  </div>

                  <?php
                }
              }
            }
            ?>
            <div class="alert text-white text-center w-100 mt-5" role="alert"
              style='background-color:#0F0F0F;border-radius:0px'>
              <h3>Bebidas</h3>
            </div>
            <?php
            foreach ($produto as $produtos) {
              $id = $produtos->idproduto;
              $foto = $produtos->foto;
              $produtooo = $produtos->nomeproduto;
              $exibir = $produtos->inicio;
              $preco = $produtos->preco;
              $tipo = $produtos->tipo;
              if ($tipo == 'bebida') {
                if ($exibir == 'S') {
                  ?>
                  <div class="col-lg-2 col-md-6 col-sm-12 mt-4 ">
                    <div class="card d-flex " id='carde'>
                      <img src="./img/bebida/<?php echo $foto ?>" class="card-img-top img-fluid  d-flex ">
                      <div class="card-body text-center">
                        <h5 class="card-title">
                          <div class="row mb-3">
                            <div class="col-12">
                              <?php echo $produtooo ?>
                            </div>
                            <div class="col-12">
                              <?php echo "R$ $preco" ?>
                            </div>
                          </div>
                          <input type="text" value='<?php echo $id ?>' hidden name='itemcarrinho'>
                        </h5>
                        <?php
                        if (isset($_SESSION["nome"]) && !empty($_SESSION["nome"])) {
                          ?>
                          <button type="submit" class="btn btn-outline-warning">Adicionar ao Carrinho</button>
                          <?php
                        } else {
                          ?>
                          <a href='login.php' class="btn btn-outline-warning">Adicionar ao Carrinho</a>
                          <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              }
            }
            ?>
            <div class="alert text-white text-center w-100 mt-5" role="alert"
              style='background-color:#0F0F0F;border-radius:0px'>
              <h3>Porções</h3>
            </div>
            <?php
            foreach ($produto as $produtos) {
              $id = $produtos->idproduto;
              $foto = $produtos->foto;
              $produtooo = $produtos->nomeproduto;
              $exibir = $produtos->inicio;
              $preco = $produtos->preco;
              $tipo = $produtos->tipo;
              if ($tipo == 'porção') {
                if ($exibir == 'S') {
                  ?>
                  <div class="col-lg-2 col-md-6 col-sm-12 mt-4 ">
                    <div class="card d-flex " id='carde'>
                      <img src="./img/porcao/<?php echo $foto ?>" class="card-img-top img-fluid  d-flex ">
                      <div class="card-body text-center">
                        <h5 class="card-title">
                          <div class="row mb-3">
                            <div class="col-12">
                              <?php echo $produtooo ?>
                            </div>
                            <div class="col-12">
                              <?php echo "R$ $preco" ?>
                            </div>
                          </div>
                          <input type="text" value='<?php echo $id ?>' hidden name='itemcarrinho'>
                        </h5>
                        <?php
                        if (isset($_SESSION["nome"]) && !empty($_SESSION["nome"])) {
                          ?>
                          <button type="submit" class="btn btn-outline-warning">Adicionar ao Carrinho</button>
                          <?php
                        } else {
                          ?>
                          <a href='login.php' class="btn btn-outline-warning">Adicionar ao Carrinho</a>
                          <?php
                        }
                        ?>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              }
            }
      }
      ;
      ?>
        </div>
      </div>
    </div>
  </div>

  <div>
    <?php include_once("footer.php") ?>
  </div>

  <!-- Modal Ajuda -->
  <div class="modal fade" id="ajuda" tabindex="-1" aria-labelledby="ajudaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center">
      <div class="modal-content text-center">
        <div class="modal-header text-center">
          <h1 class="modal-title fs-5 text-center" id="ajudaLabel"><span class='mdi mdi-help'></span>
            Central de Ajuda
            <span class='mdi mdi-help'></span>
          </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center">
          Precisando de Ajuda?<br>
          Contate-nos em <font class='text-primary'>Ademir.suporte@phplanches.com.br</font> <br> ou em <font
            class='text-primary'> (20) 94002-8922</font>
          <br>
          <font style='font-size:250px'>
            <span class='mdi mdi-account-question'></span>
          </font>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js"
    integrity="sha512-oJCa6FS2+zO3EitUSj+xeiEN9UTr+AjqlBZO58OPadb2RfqwxHpjTU8ckIC8F4nKvom7iru2s8Jwdo+Z8zm0Vg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
    integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
    crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
    integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>

  <script src="js/script.js"></script>
</body>

</html>