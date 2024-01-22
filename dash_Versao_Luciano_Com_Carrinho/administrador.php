<?php
include_once("index.php");


if (isset($_POST['nomeproduto']) && !empty($_POST['nomeproduto'])) {
    $nomeprodutos = $_POST['nomeproduto'];
    if (isset($_POST['tipo']) && !empty($_POST['tipo'])) {
        $tipo = $_POST['tipo'];
        if (isset($_POST['valor']) && !empty($_POST['valor'])) {
            $valor = $_POST['valor'];
            if (isset($_POST['img']) && !empty($_POST['img'])) {
                $img = $_POST['img'];
                if (isset($_POST['exibir']) && !empty($_POST['exibir'])) {
                    $exibir = $_POST['exibir'];
                    insertGlobal("produto", 'nomeproduto,foto,preco,inicio,tipo', "'$nomeprodutos', '$img', '$valor', '$exibir','$tipo'");
                    ?>
                    <div class="alert alert-success alert-dismissible fade show text-center " role="alert">
                        <strong>Tudo Certo! </strong>Saia e entre novamente para carregar as mudanças!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
            }
        }
    }
}

if (isset($_POST['codigoDelete']) && !empty($_POST['codigoDelete'])) {
    $codigoDelete = $_POST['codigoDelete'];
    deletecadastro('produto', 'idproduto', $codigoDelete);
    ?>
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong>Tudo Certo! </strong>Saia e entre novamente para carregar as mudanças!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}

if (isset($_POST['codigoUpdate']) && !empty($_POST['codigoUpdate'])) {
    $codigoUpdate = $_POST['codigoUpdate'];
    if (isset($_POST['nomeUpdate']) && !empty($_POST['nomeUpdate'])) {
        $nomeUpdate = $_POST['nomeUpdate'];
        if (isset($_POST['valor']) && !empty($_POST['valor'])) {
            $valor = $_POST['valor'];
            if (isset($_POST['img']) && !empty($_POST['img'])) {
                $img = $_POST['img'];
                if (isset($_POST['exibir']) && !empty($_POST['exibir'])) {
                    $exibir = $_POST['exibir'];
                    if (isset($_POST['tipo']) && !empty($_POST['tipo'])) {
                        $tipo = $_POST['tipo'];
                        updateproduto('produto', $nomeUpdate, $img, $valor, $exibir, $tipo, $codigoUpdate);
                        ?>
                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                            <strong>Tudo Certo! </strong>Saia e entre novamente para carregar as mudanças!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    }
                }
            }
        }
    }
}

?>


<div class="card mt-4">
    <div class="card-header">
        <div class="row d-flex" style='justify-content: space-between;'>
            <div class="col-lg-3 col-md-6 col-sm-6 d-flex" style='  align-items: center;'>
                <b>#PRODUTOS
                </b>

            </div>
            <div class="col-lg-3 d-md-none d-sm-none"></div>
            <div class="col-lg-3 d-md-none d-sm-none"></div>
            <div class="col-lg-3 col-md-6 col-sm-6 d-block">

                <button type="button" class="btn w-100 btn-outline-success " data-bs-toggle="modal"
                    data-bs-target="#cadastrar">Cadastrar</button>
            </div>
        </div>
    </div>
</div>
<div class="card-body ">
    <table class='w-100 text-center border' style='table-layout: fixed;'>
        <tr class='border bg-black text-white'>


            <th width='10%'>Codigo</th>
            <th width='25%'>Produtos</th>
            <th width='15%'>Tipo</th>
            <th width='20%'>Preço</th>
            <th width='10%'>Tela Inicial</th>
            <th width='20%'>Ação</th>

        </tr>
        <?php
        ?>
        <?php
        $contagem = 0;
        $infino = 1;
        foreach ($produto as $produtos) {
            $contagemModal = $produtos->idproduto;
            $foto = $produtos->foto;
            $produtooo = $produtos->nomeproduto;
            $exibir = $produtos->inicio;
            $preco = $produtos->preco;
            $tipo = $produtos->tipo;
          
            ?>
            <tr class='border'>
                <td class='border'>
                    <?php echo $infino ?>
                </td>
                <td class='border'>
                    <?php echo $produtooo ?>
                </td>
                <td class='border'>
                    <?php echo $tipo ?>
                </td>
                <td class='border'>
                    <?php echo   conversorDBNum($preco) ?>
                </td>
                <td class='border'>
                    <?php echo $exibir ?>
                </td>
                <td>
                    <div class="row">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col-lg-6 col-md-12 col-sm-12 p-0 m-0">
                                <button type="button" class="btn w-100 btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#update<?php $contagem += 1;
                                    echo $contagem ?>">Update</button>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 p-0 m-0">
                                <button type="button" class="btn w-100 btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete<?php echo $contagem ?>">Delete</button>
                            </div>
                        </div>
                    </div>
                </td>
                <?php

                ?>
            </tr>
            <!-- Modal #update -->
         
            <div class="modal fade" id="update<?php echo $contagem ?>" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="updateLabel">#UPDATE PRODUTO <?php  echo $contagem ?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="index.php?page=administrador" method='post' name='frmcadastroproduto'>
                                <input type="number" min="0" id='codigoUpdate' class="form-control mt-1" name='codigoUpdate'
                                    value='<?php echo $id ?>' required='required' hidden='hidden'>
                                <label for="nomeUpdate">Novo Nome do Produto:</label>
                                <input type="text" min="0" id='nomeUpdate' class="form-control mt-1" name='nomeUpdate'
                                    required='required' value='<?php echo $produtooo ?>'>
                                <label for="exibir">Exibir na Tela:</label>
                                <select name='exibir' id="exibir" class="form-select" aria-label="Default select example"
                                    required='required'>
                                    <?php
                                    if ($exibir == 'S') {
                                        ?>
                                        <option value="S" selected>Sim</option>
                                        <option value="N">Não</option>
                                        <?php
                                    } else {
                                        ?>
                                        <option value="S">Sim</option>
                                        <option value="N" selected>Não</option>
                                        <?php
                                    }
                                    ?>

                                </select>
                                <label for="tipo">Novo Tipo do Produto:</label>
                                <select name='tipo' id="tipo" class="form-select" aria-label="Default select example"
                                    required='required'>
                                    <?php
                                    if ($tipo == 'lanche') {
                                        ?>
                                        <option value="lanche" selected>Lanche</option>
                                        <option value="porção">Porção</option>
                                        <option value="bebida">Bebida</option>
                                        <?php
                                    } else if ($tipo == 'porção') {
                                        ?>
                                            <option value="lanche">Lanche</option>
                                            <option value="porção" selected>Porção</option>
                                            <option value="bebida">Bebida</option>
                                        <?php

                                    } else {
                                        ?>
                                            <option value="lanche">Lanche</option>
                                            <option value="porção">Porção</option>
                                            <option value="bebida" selected>Bebida</option>
                                        <?php
                                    }
                                    ?>

                                </select>

                                <label for="precoinput">Novo Preço do Produto:</label>
                                <input type="number" step="0.010" id='precoinput' class="form-control mt-1" name='valor'
                                    required='required' value='<?php echo $preco ?>'>

                                <label for="imginput">Nova Imagem do Produto:</label>
                                <input type="file" step="0.010" id='imginput' class="form-control mt-1" name='img'>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal #delete -->
            <div class="modal fade" id="delete<?php echo $contagem ?>" tabindex="-1" aria-labelledby="cadastrarLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="cadastrarLabel">#DELETAR PRODUTO</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="index.php?page=administrador" method='post' name='frmdeletarproduto'>

                                <input type="number" min="0" id='codigoDelete' class="form-control mt-1" name='codigoDelete'
                                    value='<?php echo $id ?>' required='required' hidden='hidden'>
                                <label for="checkDelete">Deseja Realmente Apagar o Item
                                    <?php echo $contagem ?>?
                                </label>

                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Sim, Entendo as consequências e assumo <b>Total</b> Responsabilidade!
                                    </label>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-outline-danger">Deletar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $infino = $infino + 1;
        }


        ?>
    </table>
</div>
</div>
<br>

<!-- Modal #cadastrar -->
<div class="modal fade" id="cadastrar" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="cadastrarLabel">#CADASTRO DE PRODUTO</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php?page=administrador" method='post' name='frmcadastroproduto'>
                    <label for="nomeproduto">Nome do Produto:</label>
                    <input type="text" id='nomeproduto' class="form-control mt-1" name='nomeproduto'
                        required='required'>
                    <label for="tipo">Tipo do Produto:</label>
                    <select name='tipo' id="tipo" class="form-select" aria-label="Default select example"
                        required='required'>
                        <option value="lanche">Lanche</option>
                        <option value="porção">Porção</option>
                        <option value="bebida">Bebida</option>
                    </select>
                    <label for="exibir">Exibir na Tela:</label>
                    <select name='exibir' id="exibir" class="form-select" aria-label="Default select example"
                        required='required'>
                        <option value="S">Sim</option>
                        <option value="N" selected>Não</option>

                    </select>
                    <label for="precoinput">Preço do Produto:</label>
                    <input type="number" step="0.010" id='precoinput' class="form-control mt-1" name='valor'
                        required='required'>
                    <label for="imginput">Imagem do Produto:</label>
                    <input type="file" step="0.010" id='imginput' class="form-control mt-1" name='img'
                        required='required'>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            </div>
            </form>
        </div>
    </div>
</div>



<?php





?>