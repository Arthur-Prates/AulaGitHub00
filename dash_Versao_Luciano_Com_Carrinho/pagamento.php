<?php
$arraydeCupom = array('maiscarne15', 'aa11');


$precocartao = $_SESSION['$valorTotalCarrinho'] / 2;
$precocartao = number_format($precocartao, 2)
    ?>
<div class="container px-5 text-center mb-5">
    <h1>Comprar</h1>
    <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="50" aria-valuemin="0"
        aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%">Forma de pagamento
        </div>
    </div>
</div>
<div class="container mt-5">
    <h3 class='text-center'> Possui um Cupom de desconto?</h3>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-6">
            <form action="index.php?page=pagamento" method="post">
                <div class="input-group input-group-sm mb-3 px-5 ">
                    <span class="input-group-text" id="cupom">Insira Aqui</span>
                    <input type="text" class="form-control" aria-describedby="cupom" name='cupomAtivar'>
                    <button type="submit" class="btn btn-dark btn-sm">Ativar</button>
                </div>
            </form>
        </div>
    </div>
    <?php
    if (isset($_POST['cupomAtivar']) && !empty($_POST['cupomAtivar'])) {
        $Ativar = $_POST['cupomAtivar'];
        $Ativar = strtolower($Ativar);
        foreach ($arraydeCupom as $cupom) {
            if ($Ativar == $cupom) {
                $desconto_percentual = (int) substr($cupom, -2);
                $desconto = ($desconto_percentual / 100) * $_SESSION['$valorTotalCarrinho'];
                $preco_com_desconto = $_SESSION['$valorTotalCarrinho'] - $desconto;
                $preco_com_desconto = number_format($preco_com_desconto, 2);
                $precocartao = $preco_com_desconto / 2
                    ?>
                <form action="index.php?page=pagamento" method="post">

                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-6 ">
                            <div class="alert alert-success alert-dismissible fade show  p-1 text-center " role="alertCupom">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-8">


                                        <?php echo 'Cupom <strong>' . $cupom . '</strong> Ativado' ?>

                                    </div>
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-outline-danger btn-sm "
                                            data-bs-dismiss="alertCupom">Remover Cupom</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </form>
                <ul class='pagamento p-0 m-0'>
                    <li>
                        <div class="row d-flex justify-content-center align-items-center mb-2">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pix" id="pix">
                                                    <img src="./img/pagamento/pix.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <p class='p-0 m-0'> 6% de desconto</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="row d-flex justify-content-center align-items-center mb-2 ">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6 ">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pix" id="pix">
                                                    <img src="./img/pagamento/paypal.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <p class='p-0 m-0'> Em até 2x de <font class='precocartao'>
                                                        <?php echo $precocartao; ?>
                                                    </font>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </li>
                    <li>
                        <div class="row d-flex justify-content-center align-items-center mb-2">
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="pix" id="pix">
                                                    <span class='mdi mdi-credit-card'></span> Outro Cartão
                                                </div>
                                            </div>
                                            <div class="col-6 d-flex justify-content-center align-items-center">
                                                <p class='p-0 m-0'></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="container">

                    <?php
                    $cartao = listarTabela('*', 'cartao', 'idcartao');
                    $pessoa = listarTabela('*', 'pessoa', 'idpessoa');
                    foreach ($cartao as $cartaoCompras) {
                        $nome = $cartaoCompras->idpessoa;
                        $numeroCartao = $cartaoCompras->numero;

                        foreach ($pessoa as $clientes) {
                            $nomecliente = $clientes->nome;
                            $idcliente = $clientes->idpessoa;

                            if ($idcliente == $nome) {


                                ?>
                                <div class="row d-flex justify-content-center align-items-center mb-2">
                                    <div class="col-6 p-1 m-0">
                                        <div class="card">
                                            <div class="card-body p-1 ">
                                                <div class="row ">
                                                    <div class="col-8 ">
                                                        <div class="form-check d-flex justify-content-start align-items-center">
                                                            <input class="form-check-input" type="radio" name="pessoa" id="pessoa">
                                                            <div class='px-2'>
                                                                <span class='mdi mdi-credit-card'></span>
                                                                <?php echo $nomecliente ?>
                                                                <p class='p-0 m-0'>
                                                                    <?php echo $numeroCartao ?>
                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-4 d-flex align-items-center">
                                                        <img src="./img/pagamento/paypal.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    }
                    ?>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center mb-2">
                            <button type="button" class="btn btn-info">Inserir novo cartão</button>

                        </div>

                    </div>
                </div>

                <?php
            }
        }

    } else {
        ?>

        <ul class='pagamento p-0 m-0'>
            <li>
                <div class="row d-flex justify-content-center align-items-center mb-2">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pix" id="pix">
                                            <img src="./img/pagamento/pix.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center align-items-center">
                                        <p class='p-0 m-0'> 6% de desconto</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </li>
            <li>
                <div class="row d-flex justify-content-center align-items-center mb-2 ">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 ">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pix" id="pix">
                                            <img src="./img/pagamento/paypal.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center align-items-center">
                                        <p class='p-0 m-0'> Em até 2x de <font class='precocartao'>
                                                <?php echo $precocartao; ?>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </li>
            <li>
                <div class="row d-flex justify-content-center align-items-center mb-2">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="pix" id="pix">
                                            <span class='mdi mdi-credit-card'></span> Outro Cartão
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex justify-content-center align-items-center">
                                        <p class='p-0 m-0'></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <?php
    }
    ;
    ?>



<div class="container mt-5 ">
    <div class="row d-flex justify-content-center align-items-center mb-2 ">
        <div class="col-12 w-50">

            <div class="row p-0 m-0">

                <div class=" p-0 m-0 col-4 d-flex justify-content-start align-items-center">
                    <a href="index.php?page=carrinho" class="btn btn-outline-danger" type="button">Voltar</a>


                </div>
                <div class=" p-0 m-0 col-4 d-flex justify-content-center align-items-center">
                    <h5 class='text-center'>
                        TOTAL:
                        <?php
                        echo 'R$' . $precocartao * 2;
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