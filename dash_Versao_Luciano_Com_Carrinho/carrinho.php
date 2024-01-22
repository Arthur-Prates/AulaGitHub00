<?php


$valorTotalCarrinho = 0;
$contaritens = 1;
$_SESSION['totalitens'] = 0;


?>
<div class="container">
    <?php
    $c = 0;
    if (isset($_SESSION['itemcarrinho']) and !empty($_SESSION['itemcarrinho'])) {
        $carrinho = $_SESSION['itemcarrinho'];
        $arrayAntBug = array("40028922");

        if ($carrinho[0] <> '40028922') {
            array_splice($carrinho, 0, 0, $arrayAntBug);
           
        }
        $contagemModal = 0;
        $carrinho = array_values($carrinho);
        if (isset($_POST['removerCarrinhoBencao']) && !empty($_POST['removerCarrinhoBencao'])) {
            unset($carrinho[0]);
            $carrinho = array_values($carrinho);
        }
        if (isset($_POST['removerCarrinho']) && !empty($_POST['removerCarrinho'])) {
            $removerCarrinho = $_POST['removerCarrinho'];
            unset($carrinho[$removerCarrinho]);
            $carrinho = array_values($carrinho);
            $_SESSION["itemcarrinho"] = $carrinho;
        }
        ?>
        <div class="container px-5 text-center mb-5">
            <h1>Comprar</h1>
            <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 25%">Escolhendo Produtos
                </div>
            </div>
        </div>
        <?php

        foreach ($carrinho as $carrinhos) {
            $valor = $carrinhos;

            foreach ($produto as $produtos) {
                $id = $produtos->idproduto;
                $foto = $produtos->foto;
                $produtooo = $produtos->nomeproduto;
                $exibir = $produtos->inicio;
                $preco = $produtos->preco;
                $tipo = $produtos->tipo;

                if ($id == $valor) {
                    $valorTotalCarrinho = $preco + $valorTotalCarrinho;


                    ?>
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1 d-flex justify-content-center align-items-center">
                            <h3>
                                <?php
                                echo $contaritens;
                                $contaritens = $contaritens + 1;
                                ?>
                            </h3>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3 d-flex justify-content-center">
                            <img src="./img\lanche\<?php echo $foto ?>" alt="" class='img-fluid w-50  '>
                        </div>
                        <div class="col-lg-5 col-md-2 col-sm-2 d-flex align-items-center">
                            <h3>
                                <?php echo $produtooo ?>
                            </h3>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3 d-flex align-items-center">

                            <form action="index.php?page=carrinho" method="post">
                         
                             <div class="form-floating flex-fill"  hidden>
                                    <select class="form-select " aria-label="Default select example " id="selectValor"
                                        name='valortotal<?php echo $produtooo ?>'>
                                        <?php
                                        if (isset($_POST["valortotal$produtooo"]) and !empty($_POST["valortotal$produtooo"])) {
                                            $valorTotalCarrinho = $_POST["valortotal$produtooo"] + $valorTotalCarrinho;
                                            echo $valorTotalCarrinho;
                                        }
                                        ?>
                                        <?php
                                        $contadorDeUnidade = 0;

                                        while ($contadorDeUnidade < 25) {
                                            $contadorDeUnidade = $contadorDeUnidade + 1;
                                            $valorDeUnidade = $preco * $contadorDeUnidade;
                                            ?>
                                            <option value='<?php echo $valorDeUnidade ?>'>
                                                <?php echo $contadorDeUnidade . ' Un. = ' . $valorDeUnidade ?>
                                            </option>
                                            <?php
                                        }
                                        ;
                                        ?>
                                    </select>
                                    <label for="texte">Quantidade</label>

                                </div>
                            
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-3 d-flex align-items-center">
                            <h3>
                                <form action="index.php?page=carrinho" method='post'>
                                    <button type="submit" class="btn btn-outline-danger">Remover Item</button>
                                    <input type="number" min="0" id='removerCarrinho' class="form-control mt-1" name='removerCarrinho'
                                        value='<?php echo $contaritens - 1 ?>' hidden='hidden'>
                                </form>
                            </h3>
                        </div>
                        <hr class='hr mt-3'>
                    </div>
                    <?php
                    $contagemModal = $contagemModal + 1;
                }

            }

        }

        ?>


<div class="container mt-5 ">
    <div class="row d-flex justify-content-center align-items-center mb-2 ">
        <div class="col-12 w-50">

            <div class="row p-0 m-0">

                <div class=" p-0 m-0 col-4 d-flex justify-content-start align-items-center">
               


                </div>
                <div class=" p-0 m-0 col-4 d-flex justify-content-center align-items-center">
                    <h5 class='text-center'>
                        TOTAL:
                        <?php
                        echo 'R$' . $valorTotalCarrinho ;
                        $_SESSION['$valorTotalCarrinho'] = $valorTotalCarrinho;
                        ?>
                    </h5>
                </div>
                <div class=" p-0 m-0 col-4 d-flex justify-content-end align-items-center">
                    <a href="index.php?page=pagamento" class="btn btn-outline-primary" type="button">Próximo</a>

                </div>
            </div>
        </div>
    </div>
</div>
       
    </div>
    <?php
    } else {
        echo 'Carrinho vazio!';


    }
    ?>


