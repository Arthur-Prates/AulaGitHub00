<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="./img/applelogo.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.min.css"
        &gt;>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>


<body style="background-color: #FBFBFD;">
    <nav class="navbar navbar-expand-lg bg-white  ">
        <div class="container-fluid ">
            <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt style="width: 40px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                <div class="row">
                    <div class="col-md-11">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item px-2">
                                <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                    aria-controls="offcanvasTopLoja">Loja</a>
                            </li>
                            <li class="nav-item px-2">
                                <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                    aria-controls="offcanvasTopMac">Mac</a>
                            </li>
                            <li class="nav-item px-2">
                                <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                    aria-controls="offcanvasTopiPad">iPad</a>
                            </li>
                            </li>
                            <li class="nav-item px-2">
                                <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                    aria-controls="offcanvasTopWatch">Watch</a>
                            </li>
                            <li class="nav-item px-2">
                                <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                    aria-controls="offcanvasTopAir">AirPods</a>
                            </li>
                            <li class="nav-item px-2">
                                <a id="Tvmenu" class="nav-link active" aria-current="page" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                    aria-controls="offcanvasTopTv">TV e Casa</a>
                            </li>
                            <li class="nav-item px-2">
                                <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                    aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                            </li>
                            <li class="nav-item px-2">
                                <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                    aria-controls="offcanvasTopAcessorios">Acessórios</a>
                            </li>
                            <li class="nav-item px-2">
                                <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                    aria-controls="offcanvasTop1">Suporte</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item px-2">
                                <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                        class="mdi mdi-card-search mdi-24px"></span></a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                        class="mdi mdi-shopping mdi-24px"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>





    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white  ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent2">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                            aria-controls="offcanvasTopLoja">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                            aria-controls="offcanvasTopMac">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                            aria-controls="offcanvasTopiPad">iPad</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                            aria-controls="offcanvasTopWatch">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                            aria-controls="offcanvasTopAir">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                            aria-controls="offcanvasTopTv">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                            aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                            aria-controls="offcanvasTopAcessorios">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                            aria-controls="offcanvasTop1">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                    <div>
                    </div>
            </nav>

        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form class="d-flex" role="search">
                            <span class="mdi mdi-magnify mt-2"></span>
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row">
                    <div class="col-md-4 "></div>
                    <div class="col-md-4 ">
                        <h6 class="text-dark mt-3"><span class="mdi mdi-circle-small"></span>Links Rápidos</h6>
                        <div class="houver">
                            <p class="text-body-secondary hoveritem mt-3"><span
                                    class="mdi mdi-arrow-right "></span>Encontrar uma Loja
                            </p>
                        </div>
                        <div class="houver">
                            <p class="text-body-secondary hoveritem mt-3"><span
                                    class="mdi mdi-arrow-right "></span>Acessórios</p>
                        </div>
                        <div class="houver">
                            <p class="text-body-secondary hoveritem mt-3"><span
                                    class="mdi mdi-arrow-right "></span>AirPods
                            </p>
                        </div>
                        <div class="houver">
                            <p class="text-body-secondary hoveritem mt-3"><span
                                    class="mdi mdi-arrow-right "></span>AirTag
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop1" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent2">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                            aria-controls="offcanvasTopLoja">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                            aria-controls="offcanvasTopMac">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                            aria-controls="offcanvasTopiPad">iPad</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                            aria-controls="offcanvasTopWatch">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                            aria-controls="offcanvasTopAir">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                            aria-controls="offcanvasTopTv">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                            aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                            aria-controls="offcanvasTopAcessorios">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" aria-current="page" href="#">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 ">
                        <p class="text-body-secondary">Explorar Suporte</p>
                        <div>
                            <h2 class="hoveritem">iPhone</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">iMac</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Watch</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">AirPods</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">TV</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Ajuda</p>
                        <div>
                            <p class="text-dark hoveritem">Comunidade</p>
                        </div>
                        <div>
                            <p class="text-dark hoveritem">Reparos</p>
                        </div>
                        <div>
                            <p class="text-dark hoveritem">Verificar Cobertura</p>
                        </div>
                        <div>
                            <p class="text-dark hoveritem">Fale com a gente</p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Tópicos Úteis</p>
                        <div>
                            <p class="text-dark hoveritem">Comprar produtos AppleCare</p>
                        </div>
                        <div>
                            <p class="text-dark hoveritem">Apple Id e Senha</p>
                        </div>
                        <div>
                            <p class="text-dark hoveritem">Cobranças e assinaturas</p>
                        </div>
                        <div>
                            <p class="text-dark hoveritem">Fale com a gente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTopAcessorios" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent2">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                            aria-controls="offcanvasTopLoja">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                            aria-controls="offcanvasTopMac">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                            aria-controls="offcanvasTopiPad">iPad</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                            aria-controls="offcanvasTopWatch">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                            aria-controls="offcanvasTopAir">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                            aria-controls="offcanvasTopTv">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                            aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" aria-current="page" href="#">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                            aria-controls="offcanvasTop1">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-body-secondary">Comprar Acessórios</p>
                        <div>
                            <h2 class="hoveritem">Ver todos os acessórios</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">iPhone</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">iMac</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Watch</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">AirPods</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">TV e Casa</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="text-body-secondary">Explorar Acessórios</p>
                        <div>
                            <p class="hoveritem">Criados pela Apple</p>
                        </div>
                        <div>
                            <p class="hoveritem">Air Tag</p>
                        </div>
                        <div>
                            <p class="hoveritem">Beats By Dr. Dre</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTopEntreterimento"
        aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent2">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                            aria-controls="offcanvasTopLoja">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                            aria-controls="offcanvasTopMac">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                            aria-controls="offcanvasTopiPad">iPad</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                            aria-controls="offcanvasTopWatch">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                            aria-controls="offcanvasTopAir">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                            aria-controls="offcanvasTopTv">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" aria-current="page" href="#">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                            aria-controls="offcanvasTopAcessorios">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                            aria-controls="offcanvasTop1">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-body-secondary">Explorar</p>
                        <div>
                            <h2 class="hoveritem">Ver todos os acessórios</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple One</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Tv+ </h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Music </h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Arcade</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Fitness+</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Podcast</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Books</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Store</h2>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <p class="text-body-secondary">Suporte</p>
                        <div>
                            <p class="hoveritem">Suporte para Apple TV+</p>
                        </div>
                        <div>
                            <p class="hoveritem">Suporte para Apple Music</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTopTv" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white  ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                            aria-controls="offcanvasTopLoja">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                            aria-controls="offcanvasTopMac">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                            aria-controls="offcanvasTopiPad">iPad</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                            aria-controls="offcanvasTopWatch">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                            aria-controls="offcanvasTopAir">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" aria-current="page" href="#">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                            aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                            aria-controls="offcanvasTopAcessorios">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                            aria-controls="offcanvasTop1">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-body-secondary">Explorar TV e Casa</p>
                        <div>
                            <h2 class="hoveritem">Explorar TV e Casa</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Tv 4K</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Comprar TV e Casa</p>
                        <div>
                            <p class="hoveritem">Comprar Apple TV 4K</p>
                        </div>
                        <div>
                            <p class="hoveritem">Comprar Siri Remote</p>
                        </div>
                        <div>
                            <p class="hoveritem">Acessórios para TV e Casa</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <p class="text-body-secondary">Mais para TV e Casa</p>
                        <div>
                            <p class="hoveritem">Suporte para Apple TV</p>
                        </div>
                        <div>
                            <p class="hoveritem">Produtos AppleCare</p>
                        </div>
                        <div>
                            <p class="hoveritem">App Apple Tv+</p>
                        </div>
                        <div>
                            <p class="hoveritem">App Casa</p>
                        </div>
                        <div>
                            <p class="hoveritem">Apple Music</p>
                        </div>
                        <div>
                            <p class="hoveritem">Siri</p>
                        </div>
                        <div>
                            <p class="hoveritem">Air Play</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTopAir" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white  ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                            aria-controls="offcanvasTopLoja">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                            aria-controls="offcanvasTopMac">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                            aria-controls="offcanvasTopiPad">iPad</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                            aria-controls="offcanvasTopWatch">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" aria-current="page" href="#">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Tvmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                            aria-controls="offcanvasTopTv">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                            aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                            aria-controls="offcanvasTopAcessorios">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                            aria-controls="offcanvasTop1">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-body-secondary">Explorar AirPods</p>
                        <div>
                            <h2 class="hoveritem">Explorar modelos de AirPods</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">AirPods Pro 2ª geração</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">AirPods 2ª geração</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">AirPods 3ª geração</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">AirPods Max</h2>
                        </div>
                        <div>
                            <p class="text-body-secondary hoveritem">Comparar AirPods</p>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Comprar AirPods</p>
                        <div>
                            <p class="hoveritem">Comprar AirPods</p>
                        </div>
                        <div>
                            <p class="hoveritem">Acessórios paara AirPods</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Mais para os AirPods</p>
                        <div>
                            <p class="hoveritem">Suporte para AirPods</p>
                        </div>
                        <div>
                            <p class="hoveritem">Apple Music</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTopWatch" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white  ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                            aria-controls="offcanvasTopLoja">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                            aria-controls="offcanvasTopMac">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                            aria-controls="offcanvasTopiPad">iPad</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" aria-current="page" href="#">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                            aria-controls="offcanvasTopAir">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Tvmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                            aria-controls="offcanvasTopTv">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                            aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                            aria-controls="offcanvasTopAcessorios">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                            aria-controls="offcanvasTop1">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-body-secondary">Explorar Apple Watch</p>
                        <div>
                            <h2 class="hoveritem">Explorar modelos de Apple Watch</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Watch Series 9</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Watch Ultra 2</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Watch SE</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Watch Nike</h2>
                        </div>
                        <div>
                            <p class="text-body-secondary hoveritem">Comparar Apple Watch</p>
                        </div>
                        <div>
                            <p class="text-body-secondary hoveritem">Por que Apple Watch</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Comprar Apple Watch</p>
                        <div>
                            <p class="hoveritem">Comprar Apple Watch</p>
                        </div>
                        <div>
                            <p class="hoveritem">Pulseiras para Apple Watch</p>
                        </div>
                        <div>
                            <p class="hoveritem">Acessórios para Apple Watch</p>
                        </div>
                        <div>
                            <p class="hoveritem">Financiamento</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Mais para Apple Watch</p>
                        <div>
                            <p class="hoveritem">Suporte para Apple Watch</p>
                        </div>
                        <div>
                            <p class="hoveritem">watchOS 10</p>
                        </div>
                        <div>
                            <p class="hoveritem">Apple Fitness+</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTopiPad" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white  ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                            aria-controls="offcanvasTopLoja">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                            aria-controls="offcanvasTopMac">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" aria-current="page" href="#">iPad</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                            aria-controls="offcanvasTopWatch">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                            aria-controls="offcanvasTopAir">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Tvmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                            aria-controls="offcanvasTopTv">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                            aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                            aria-controls="offcanvasTopAcessorios">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                            aria-controls="offcanvasTop1">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-body-secondary">Explorar iPad</p>
                        <div>
                            <h2 class="hoveritem">Explorar modelos de iPad</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">iPad Pro</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">iPad Air</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">iPad</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">iPad Mini</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Pencil</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Teclados</h2>
                        </div>
                        <div>
                            <p class="text-body-secondary hoveritem">Comparar iPad</p>
                        </div>
                        <div>
                            <p class="text-body-secondary hoveritem">Por que iPad</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Comprar iPad</p>
                        <div>
                            <p class="hoveritem">Comprar iPad</p>
                        </div>
                        <div>
                            <p class="hoveritem">Acessórios para iPad</p>
                        </div>
                        <div>
                            <p class="hoveritem">Financiamento</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Mais para o iPad</p>
                        <div>
                            <p class="hoveritem">Suporte para o iPad</p>
                        </div>
                        <div>
                            <p class="hoveritem">Produtos AppleCare</p>
                        </div>
                        <div>
                            <p class="hoveritem">iPadOS 17</p>
                        </div>
                        <div>
                            <p class="hoveritem">Final cut Pro para o iPad</p>
                        </div>
                        <div>
                            <p class="hoveritem">Logic Pro para o iPad</p>
                        </div>
                        <div>
                            <p class="hoveritem">iCloud+</p>
                        </div>
                        <div>
                            <p class="hoveritem">Educação</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTopMac" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white  ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                            aria-controls="offcanvasTopLoja">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="idloja" class="nav-link active" aria-current="page" href="#">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                            aria-controls="offcanvasTopiPad">iPad</a>
                                    </li>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                            aria-controls="offcanvasTopWatch">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                            aria-controls="offcanvasTopAir">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Tvmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                            aria-controls="offcanvasTopTv">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                            aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                            aria-controls="offcanvasTopAcessorios">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                            aria-controls="offcanvasTop1">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-body-secondary">Explorar Mac</p>
                        <div>
                            <h2 class="hoveritem">Explorar modelos de Mac</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">MacBook Air</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">MacBook Pro</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">iMac</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Mac mini</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Mac Studio</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Mac Pro</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Monitores</h2>
                        </div>
                        <div>
                            <p class="text-body-secondary hoveritem">Comparar Mac</p>
                        </div>
                        <div>
                            <p class="text-body-secondary hoveritem">O Mac Resolve</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Comprar Mac</p>
                        <div>
                            <p class="hoveritem">Comprar Mac</p>
                        </div>
                        <div>
                            <p class="hoveritem">Acessórios para Mac</p>
                        </div>
                        <div>
                            <p class="hoveritem">Financiamento</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Mais para o Mac</p>
                        <div>
                            <p class="hoveritem">Suporte para o Mac</p>
                        </div>
                        <div>
                            <p class="hoveritem">Produtos AppleCare</p>
                        </div>
                        <div>
                            <p class="hoveritem">MacOS Sonoma</p>
                        </div>
                        <div>
                            <p class="hoveritem">Final Cut Pro</p>
                        </div>
                        <div>
                            <p class="hoveritem">Logic Pro</p>
                        </div>
                        <div>
                            <p class="hoveritem">Continuidade</p>
                        </div>
                        <div>
                            <p class="hoveritem">iCloud+</p>
                        </div>
                        <div>
                            <p class="hoveritem">Mac nos negócios</p>
                        </div>
                        <div>
                            <p class="hoveritem">Educação</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTopLoja" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white  ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" aria-current="page" href="#">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                            aria-controls="offcanvasTopMac">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                            aria-controls="offcanvasTopiPad">iPad</a>
                                    </li>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                            aria-controls="offcanvasTopWatch">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                            aria-controls="offcanvasTopAir">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Tvmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                            aria-controls="offcanvasTopTv">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                            aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                            aria-controls="offcanvasTopAcessorios">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                            aria-controls="offcanvasTop1">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="sacolamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTopSacola" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <p class="text-body-secondary">Comprar</p>
                        <div>
                            <h2 class="hoveritem">Comprar os lançamentos</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Mac</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">iPad</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">iPhone</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Apple Wacth</h2>
                        </div>
                        <div>
                            <h2 class="hoveritem">Acessórios</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Links Rápidos</p>
                        <div>
                            <p class="hoveritem">Encontre uma loja</p>
                        </div>
                        <div>
                            <p class="hoveritem">Status do Pedido</p>
                        </div>
                        <div>
                            <p class="hoveritem">Financiamento</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="text-body-secondary">Comprar nas lojas especias</p>
                        <div>
                            <p class="hoveritem">Educação</p>
                        </div>
                        <div>
                            <p class="hoveritem">Negócios</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTopSacola" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <nav class="navbar navbar-expand-lg bg-white  ">
                <div class="container-fluid ">
                    <a class="navbar-brand" href="./index.php"><img src="./img/applelogo.png" alt
                            style="width: 40px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse container" id="navbarSupportedContent">
                        <div class="row">
                            <div class="col-11">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a id="lojamenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLoja"
                                            aria-controls="offcanvasTopLoja">Loja</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="macmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopMac"
                                            aria-controls="offcanvasTopMac">Mac</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="iPadmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopiPad"
                                            aria-controls="offcanvasTopiPad">iPad</a>
                                    </li>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Watchmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopWatch"
                                            aria-controls="offcanvasTopWatch">Watch</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Airmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAir"
                                            aria-controls="offcanvasTopAir">AirPods</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="Tvmenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopTv"
                                            aria-controls="offcanvasTopTv">TV e Casa</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="entreterimentomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopEntreterimento"
                                            aria-controls="offcanvasTopEntreterimento">Entretenimento</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="acessoriomenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopAcessorios"
                                            aria-controls="offcanvasTopAcessorios">Acessórios</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a id="suportemenu" class="nav-link active" aria-current="page" href="#"
                                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop1"
                                            aria-controls="offcanvasTop1">Suporte</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-1">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="btnLupamenu" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasTop" aria-current="page" href="#"> <span
                                                class="mdi mdi-card-search mdi-24px"></span></a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" aria-current="page" href="#"><span
                                                class="mdi mdi-shopping mdi-24px"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h1>Sua sacola está vazia.</h1>
                        <h6 class="mt-5"><a href="./index.php?page=login">inicie sessão </a><span class="p-2">para ver
                                se você
                                tem itens salvos</span></h6>
                        <P class="text-body-secondary mt-5">Meu Perfil</P>
                        <div class="houver">
                            <p class="text-body-secondary hoveritem mt-3"><span class="mdi mdi-mailbox"></span>Pedidos
                            </p>
                        </div>
                        <div class="houver">
                            <p class="text-body-secondary hoveritem mt-3"><span
                                    class="mdi mdi-flag-variant"></span>Itens
                                Salvos</p>
                        </div>
                        <div class="houver">
                            <p class="text-body-secondary hoveritem mt-3"><span class="mdi mdi-lock"></span>Conta</p>
                        </div>
                        <div class="houver">
                            <a href="./login.php" style="text-decoration: none;">
                                <p class="text-body-secondary hoveritem mt-3"><span class="mdi mdi-login"></span>Entrar
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>

    <?php

    if (isset($_GET["page"]) && !empty($_GET["page"])) {
        $page = $_GET["page"];
        if ($page == 'login') {
            include_once('login.php');
        } else if ($page == 'auth') {
            include_once('auth.php');
        } else if ($page == 'applebuy') {
            include_once('applebuy.php');
        } else {
            echo 'Error';
        }
    } else {
        include_once('menu.php');
    }

    ?>


</body>

</html>