<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Library -->
    <link rel="stylesheet" href="./owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./owlcarousel/owl.theme.default.min.css">

    <!--flexslider-->
    <link rel = "stylesheet" href = "./style/flexslider.css" type = "text / css">


    <!-- Custom Style -->
    <link rel="stylesheet" href="./style/normalize.css">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    
    <title>Expofer</title>
</head>
<body>
    
    <header class="header">
        <div class="header-barraSuperio">
            <div class="header-barraSuperio-social">
                <img class="iconHeader" src="img/facebook.png" alt="facebook">
                <img class="iconHeader" src="img/instagram.png" alt="instagram">
                <img class="iconHeader" src="img/whatsapp.png" alt="whatsapp">
            </div>
            
            <div class="header-barraSuperio-log">
                <div class="">
                    <div class="header-barraSuperio-log-elemento"> 
                        <div class="header-barraSuperio-log-btn"><button id="btnLogin"><img class="iconHeader" src="img/usuario.png" alt="icono-persona">INGRESAR</button>
                            <div id="login" class="login-cerrado">
                                <form class="contendor-form-login" action="">
                                    <h5>MI CUENTA</h5>
                                    <div class="form-login-inputs">
                                            <label for="usuario">USUARIO</label>
                                            <input type="text" name="usuario" id="usuario">
                                            <label for="password">CONTRASEÑA</label>
                                            <input type="password" name="password" id="password">
                                            <ul>
                                                <li><a href="/">OLVIDE MI CONTRASEÑA</a></li>
                                                <li><a href="/">CREAR UNA CUENTA</a></li>
                                            </ul>
                                    </div>
                                    <div>
                                        <button class="btn-ingresar">INGRESAR</button>
                                    </div>
                                </form>
                            </div>
                        </div> 
                        <div><a id="btnCarrito" class="header-barraSuperio-log-btn" href="" ><img class="iconHeader" src="img/carrito-de-compras.png" alt="icono-carrito">CARRITO (3)</a>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-barraInferio">
            <div>
                <img src="img/logo.png" alt="logo Expofer">
            </div>
            <img class="menu-icon" src="./img/menu.png" alt="menu">
            <ul id="contenedorNav" class="nav">
                <li id="btnInicio" class="link-nav">
                    <a class="" href="index.php"><strong>INICIO</strong></a>
                </li>
                <li id="btnProductos" class="link-nav">
                    <a class="" href="productos.php"><strong>PRODUCTOS</strong></a>
                </li>
                <li id="btnServicioTecnico" class="link-nav">
                    <a class="" href="#"><strong>SERVICIO TÉCNICO</strong></a>
                </li>
                <li id="btnNosotros" class="link-nav">
                    <a class="link-nav" href="#"><strong>NOSOTROS</strong></a>
                </li>
                <li id="btnAccesorios" class="link-nav">
                    <a class="" href="#"><strong>ACCESORIOS</strong></a>
                </li>
                <div id="navMenu" class="nav-inactivo">
                    <div class="contenedor-nav-activo">
                        <div class="contenedor-nav-activo-primera">
                            <h5 class="link-nav-activo">PRODUCTOS</h5>
                            <div class="contenedor-nav-activo-primera-lista">
                                <ul><h6>CATEGORIAS</h6>
                                    <li><a href="/">Hidrolavadoras</a></li>
                                    <li><a href="">Compresores</a></li>
                                    <li><a href="">Bombas</a></li>
                                    <li><a href="">Plantas eléctricas</a></li>
                                    <li><a href="">Aspiradoras</a></li>
                                    <li><a href="">Guadañadoras</a></li>
                                    <li><a href="">Motosierras</a></li>
                                    <li><a href="">Cortasetos</a></li>
                                    <li><a href="">Fumigadoras</a></li>
                                    <li><a href="">Sopladora</a></li>
                                    <li><a href="">Cortasesped</a></li>
                                    <li><a href="">Teractores</a></li>
                                    <li><a href="">Limpiadores a vapor</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="contenedor-nav-activo-segunda">
                            <h6>PRODUCTOS DESTACADOS</h6>
                            <div class="menu-cards">
                                <div class="menu-card">
                                    <img class="imagen-menu-abierto" src="./img/bidon.png" alt="Prducto Bidon">
                                    <h6>BIDON</h6>
                                    <p>Accesorios para Motosierras </p>
                                    <div class="card-precio">
                                        <p class="signo-pesos">$</p>
                                        <p class="menu-card-valor">230.000</p>
                                    </div>
                                </div>
                                <div class="menu-card">
                                    <img class="imagen-menu-abierto" src="./img/bidon.png" alt="bidon">
                                    <h6>BIDON</h6>
                                    <p>Accesorios para Motosierras </p>
                                    <div class="card-precio">
                                        <p class="signo-pesos">$</p>
                                        <p class="menu-card-valor">230.000</p>
                                    </div>
                                </div>
                                <div class="menu-card">
                                    <img class="imagen-menu-abierto" src="./img/bidon.png" alt="bidon">
                                    <h6>BIDON</h6>
                                    <p>Accesorios para Motosierras </p>
                                    <div class="card-precio">
                                        <p class="signo-pesos">$</p>
                                        <p class="menu-card-valor">230.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
            <form action="#" id="search" class="search">
                <input id="searchInput" type="text" class="search-input" label="search" placeholder="Buscar">
                <button id="buscarBtn" type="submit" class="search-btn"><img src="img/buscar.png" alt="buscar"></button>
            </form>
        </div>
    </header>