<?php
include_once("index.php");

if (isset($_SESSION['produto']) && $_SESSION['produto']) {
  $produtoasd = $_SESSION["produto"];
}


?>
<div class='bannerpromocao'>
  <img src="./img/promocao/promocao.png" alt="">

</div>

<div class="alert text-white text-center w-100 mt-5" role="alert" style='background-color:#0F0F0F;border-radius:0px'>
  <h3>O Melhores Lanches De Toda a Região do Rio Doce !!</h3>
</div>
<div class="row mt-4 d-flex" style=' justify-content: center; align-items: center;'>
  <?php
  foreach ($produto as $produtos) {
    $foto = $produtos->foto;
    $produtooo = $produtos->nomeproduto;
    $exibir = $produtos->inicio;
    $preco = $produtos->preco;
    $tipo = $produtos->tipo;
    if ($tipo == 'lanche') {
      ?>
      <div class="col-lg-2 col-md-6 col-sm-12 mt-4 mx-1">
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

  ;
  ?>
</div>