<?php
$veiculos =
    [
        [
            'fabricante' => 'PORSCHE',
            'modelo' => '911',
            'ano' => '2020',
            'cor' => 'azul',
            'tipo' => 'p',
            'tipomarcha' => 'automatico',
            'combustivel' => 'gasolina',
            'cv' => '480',
            'preco' => 'R$ 849.900',
            'foto' => "porsche-911.png",
            'ativo' => 'A',
        ],
        [
            'fabricante' => 'BMW',
            'modelo' => '430i',
            'ano' => '2023',
            'cor' => 'prata',
            'tipo' => 'p',
            'tipomarcha' => 'automatico',
            'combustivel' => 'gasolina',
            'cv' => '252',
            'preco' => 'R$ 439.900',
            'foto' => "bmw-430i.png",
            'ativo' => 'A',
        ],
        [
            'fabricante' => 'JEEP',
            'modelo' => 'Commander',
            'ano' => '2005',
            'cor' => 'verde',
            'tipo' => 'p',
            'tipomarcha' => 'automatico',
            'combustivel' => 'diesel',
            'cv' => '170',
            'preco' => 'R$ 239.900',
            'foto' => "jeep-commander.png",
            'ativo' => 'D',
        ],
        [
            'fabricante' => 'AUDI',
            'modelo' => 'R8',
            'ano' => '2023',
            'cor' => 'marrom',
            'tipo' => 'p',
            'tipomarcha' => 'automatico',
            'combustivel' => 'gasolina',
            'cv' => '525',
            'preco' => 'R$ 749.900',
            'foto' => "audi-r8.png",
            'ativo' => 'A',
        ],
        [
            'fabricante' => 'FIAT',
            'modelo' => 'Toro',
            'ano' => '2021',
            'cor' => 'branco',
            'tipo' => 'g',
            'tipomarcha' => 'automatico',
            'combustivel' => 'diesel',
            'cv' => '170',
            'preco' => 'R$ 154.900',
            'foto' => "fiat-toro.png",
            'ativo' => 'A',
        ],
        [
            'fabricante' => 'DOGGE',
            'modelo' => 'Ram Classic',
            'ano' => '2023',
            'cor' => 'preto',
            'tipo' => 'g',
            'tipomarcha' => 'automatico',
            'combustivel' => 'gasolina',
            'cv' => '400',
            'preco' => 'R$ 319.900',
            'foto' => "dodge-ram-classic.png",
            'ativo' => 'A',
        ]
    ];



function insert($fabri, $model, $ano, $cor, $tipomarcha, $tipo, $combustivel, $cv, $preco,$ativo)
{
    $insertVeiculo = [
        'fabricante' => $fabri,
        'modelo' => $model,
        'ano' => $ano,
        'cor' => $cor,
        '$tipomarcha' => $tipomarcha,
        'tipo' => $tipo,
        'combustivel' => $combustivel,
        'cv' => $cv,
        'preco' => $preco,
        'foto' => "$fabri-$model.png",
        'ativo' => $ativo
    ];
    return $insertVeiculo;
}
;





?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Top Drive | Inicio</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
        &gt;>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-black border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand logo pb-0" href="#">Top Drive</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categoria
                        </a>
                        <ul class="dropdown-menu bg-black">
                            <li><a class="dropdown-item" href="#">Esportivos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Econômicos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Dia-a-dia</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fale Conosco</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Procurar</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="row t">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="./img/suv2.png" alt="" class='img-fluid'>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 text-white d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>FIAT SUV</h1>
                </div>
                <div class="col-12">
                    <h4 style='text-shadow: 0px 0px 10px black'>
                        <font class='vermelholegal'>Viva a aventura</font> com a SUV Fiat: Conquiste estradas, <font
                            class='vermelholegal'>supere limites</font>, e descubra o poder da
                        liberdade sobre
                        quatro rodas!
                    </h4>
                </div>
                <div class="col-12 text-center mt-5">
                    <button class="botao_banner"> Ver Mais Detalhes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <?php

            foreach ($veiculos as $veiculoItem) {
                $foto = $veiculoItem['foto'];
                $preco = $veiculoItem['preco'];
                $modelo = $veiculoItem['modelo'];
                $fabricante = $veiculoItem['fabricante'];
                $tipomarcha = $veiculoItem['tipomarcha'];
                $tipo = $veiculoItem['tipo'];
                $combustivel = $veiculoItem['combustivel'];
                $cv = $veiculoItem['cv'];
                $ativo = $veiculoItem['ativo'];
                if ($tipo == 'p') {
                    if ($ativo == 'A') {
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                        <div class="card" style="width: 18rem;">
                            <img src="./img/<?php echo $foto ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-6 m-0 p-0">
                                        <h5 class="card-title fw-bold">
                                            <?php echo $modelo ?>
                                        </h5>
                                    </div>
                                    <div class="col-6">
                                        <p class="card_preco fw-light text-center ">
                                            <?php echo $preco ?>
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <p>
                                            <?php echo $fabricante ?>
                                        </p> <span class="mdi mdi-star star"></span> <span>5.0</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center ">
                                        <span class="mdi mdi-speedometer"></span>
                                        <p class="p_card m-0 p-0">
                                            <?php echo $cv . 'CV' ?>
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center ">
                                        <span class="mdi mdi-car-shift-pattern"></span>
                                        <p class="p_card m-0 p-0">
                                            <?php echo $tipomarcha ?>
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center ">
                                        <span class="mdi mdi-fuel "></span>
                                        <p class="p_card m-0 p-0 ">
                                            <?php echo $combustivel ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-3">
                                    <button class="button_card">Ver Detalhes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }}
            }
            ?>

        </div>
    </div>
    <div class="container mt-5">

        <div class="row">
            <?php
            foreach ($veiculos as $veiculoItem) {
                $foto = $veiculoItem['foto'];
                $preco = $veiculoItem['preco'];
                $modelo = $veiculoItem['modelo'];
                $fabricante = $veiculoItem['fabricante'];
                $tipomarcha = $veiculoItem['tipomarcha'];
                $tipo = $veiculoItem['tipo'];
                $combustivel = $veiculoItem['combustivel'];
                $cv = $veiculoItem['cv'];
                if ($tipo == 'g') {
                    ?>
                    <div class="col-lg-6 col-md-12 col-sm-12 bg-black d-flex text-white justify-content-between align-items-center p-0"
                        style='border: white 10px solid;'>
                        <div class="row">
                            <div class="col-6 text-center mt-3">
                                <div class="row ">
                                    <div class="col-6 text-center">
                                        <h5 class="card-title fw-bold">
                                            <?php echo $modelo ?>
                                        </h5>
                                    </div>
                                    <div class="col-6">
                                        <p class="card_preco fw-light text-center ">
                                            <?php echo $preco ?>
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <p>
                                            <?php echo $fabricante ?>
                                        </p> <span class="mdi mdi-star star"></span> <span>5.0</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center ">
                                        <span class="mdi mdi-speedometer"></span>
                                        <p class="p_card m-0 p-0">
                                            <?php echo $cv . 'CV' ?>
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center ">
                                        <span class="mdi mdi-car-shift-pattern"></span>
                                        <p class="p_card m-0 p-0">
                                            <?php echo $tipomarcha ?>
                                        </p>
                                    </div>
                                    <div class="col-4 d-flex justify-content-center align-items-center ">
                                        <span class="mdi mdi-fuel "></span>
                                        <p class="p_card m-0 p-0 ">
                                            <?php echo $combustivel ?>
                                        </p>
                                    </div>
                                    <div class="col-12 text-center mt-3">
                                        <button class="branco_button_card">Ver Detalhes</button>
                                    </div>
                                </div>

                            </div>
                            <div class="col-6">
                                <img src="./img/<?php echo $foto ?>" alt="" class='img-fluid w-100 '>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>