<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="tarea_8.css">
    <style>
    body {
        background-color: rgba(79, 28, 13);
    }

    .tienda {
        color: beige;
    }

    .ba {
        background-color: rgb(13, 64, 79);
        padding: 10px;
    }

    .img {
        width: 100%;
        margin: 80px 0 auto;
        border-radius: 9px;
        border: 5px solid rgb(13, 64, 79);
    }

    @media screen and (min-width:600px) {
        .img {
            width: 600px;
        }
    }

    .fot {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .volver {
        border: none;
        background-color: rgb(13, 64, 79);
        color: beige;
        font-weight: bold;
    }

    .volver:hover {
        background-color: rgba(79, 28, 13);
        color: white;
        cursor: pointer;
    }

    .cos {
        display: flex;
        justify-content: space-between;
        margin: 80px;
    }

    h4 {
        font-weight: bold;
        color: beige;
        background-color: rgb(13, 64, 79);
    }

    h4:hover {
        background-color: rgba(79, 28, 13);
        color: white;
        cursor: pointer;
    }

    .h {
        height: 800px;
    }
    </style>

    <title>Potrero Digital</title>

</head>

<body>
    <nav class="navbar ba fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand tienda" href="index.html">Tienda de ropa</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon tienda"></span>MENU
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Tienda de ropa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">


                        <li class="nav-item ">
                            <a class="nav-link active " aria-current="page" href="index.html">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="todo.php">VER TODOS LOS PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="buzos.php">VER BUZOS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="remeras.php">VER REMERAS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="marcanike.php">VER ROPA NIKE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="menosde500.php">VER PRECIO MENOR A $
                                5000</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="administrador_login.html">ADMINISTRADOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3 " role="search">
                        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success " type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <?php

require_once "conectar.php";

$id=$_GET["id"];




$accion="SELECT * FROM ropa WHERE id ='$id'"; 

$hacer=mysqli_query($conexion,$accion);
$fila=mysqli_fetch_array($hacer);
$tipo=$fila['tipoDePrenda'];
$marca=$fila['marca'];
$imagen=$fila['imagen'];
$talle=$fila['talle'];
$precio=$fila['precio'];

$tipo1=$tipo;
$marca1=$marca;
$imagen1=$imagen;
$talle1=$talle;
$precio1=$precio;


?>



    <div class="fot">
        <div>
            <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen"])?>">
        </div>






        <div class="h">
            <div class="container text-center ">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    <div class="col">
                        <div class="p-3 border  volver">
                            <h4><?php echo $tipo; ?></h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border volver">
                            <h4> <?php echo $marca; ?></h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border volver">
                            <h4>$<?php echo $precio; ?></h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border volver">
                            <h4><input class="volver" type="button" value="Vover" onClick="javascript:history.go(-1)">
                            </h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border volver">
                            <h4><input class="volver" type="button" value=" + Carrito"
                                    onClick="javascript:history.go(-1)"></h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border volver">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp "
                                width="38" height="38" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                <path
                                    d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                            </svg>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border volver">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram"
                                width="38" height="38" viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="4" y="4" width="16" height="16" rx="4" />
                                <circle cx="12" cy="12" r="3" />
                                <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                            </svg>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border volver"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-facebook" width="38" height="38"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                            </svg></div>
                    </div>
                    <div class="col">
                        <div class="p-3 border volver"> <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-youtube" width="38" height="38"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <rect x="3" y="5" width="18" height="14" rx="4" />
                                <path d="M10 9l5 3l-5 3z" />
                            </svg>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border volver"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-gmail" width="38" height="38"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="#009988" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" />
                                <path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" />
                                <path d="M16 4l-4 4l-4 -4" />
                                <path d="M4 6.5l8 7.5l8 -7.5" />
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>

    </div>







    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>