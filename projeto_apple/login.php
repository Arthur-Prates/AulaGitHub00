
    <title>Login</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/stylus.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css" &gt;>


  
    <!-- Em cima -->
    <div class="container-fluid site-content">
      <h1 class="text-center mt-2" id="title">Inicie sessão para finalizar a compra com rapidez.</h1>
      <h3 class="text-center" id="subtitle">Inicie sessão na Apple Store</h3>
      <div class="row justify-content-center mt-5">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email ou número de telefone"
            aria-label="First name" style="height: 55px;">
          <a href="#" style="text-decoration: none; color: black"><span id="seta1" onclick="validarEmail()"
              style="font-size: 35px; color: rgb(180, 180, 180)"
              class="mdi mdi-arrow-right-bold-circle-outline ms-2"></span>
          </a>
        </div>
      </div>
      <form id="final" action="index.php">
        <div class="row justify-content-center d-flex ">
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <input type="password" id="cadeVc" class="form-control" placeholder="Senha" aria-label="First name"
              required="required" style="height: 55px;" required="required">
            <a onclick="document.getElementById('final').submit()" href="#" style="text-decoration: none; color: black"><span id="seta2"
                style="font-size: 35px; color: rgb(180, 180, 180)"
                class="mdi mdi-arrow-right-bold-circle-outline ms-2"></span></a>
          </div>
        </div>
      </form>
      <div class="d-flex justify-content-center">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            Lembrar ID Apple
          </label>
        </div>
      </div>
      <div class="row justify-content-center d-flex ">
        <div class="d-flex justify-content-center">
          <a class="mt-5 efeitinho" href="#">Esqueceu a senha?</a><a href="#" class="mt-5"
            style="text-decoration: none;">↗</a>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <span>Não tem um ID Apple?</span><a class="efeitinho ms-1" href="./index.php?page=auth"> Crie o seu agora.</a><a href="#"
            style="text-decoration: none;">↗</a>
        </div>
      </div>
    </div>

    <script src="./js/email.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/anything.js"></script>
