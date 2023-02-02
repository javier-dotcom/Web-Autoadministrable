<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
    p {
        color: white;
    }

    body {
        background-color: black;
    }

    .primera {
        display: flex;
        justify-content: space-between;
    }

    /*RESPONSIVE*/
    @media (max-width: 700px) {
        .primera {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .texto1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50%;
        }

        .texto {
            display: flex;
            flex-direction: row;
            width: 30px;
        }

        img {
            width: 100%;

        }

        .foto {
            width: 90%;


        }
    }

    /* Fin   RESPONSive*/

    .botoncito {
        /*border: 1px solid gray;*/
        width: 150px;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 3px;
        padding-bottom: 3px;
        text-decoration: none;
        color: antiquewhite;
        background-color: rgb(255, 255, 255, 0.1);
        border-radius: 6px;
        border: 2px transparent solid;


    }

    .botoncito:hover {
        cursor: pointer;
        background-color: rgb(255, 255, 255, 0.3);
        border: 2px rgb(255, 255, 255, 1.0) solid;

        color: black;
        border-radius: 6px;


    }

    .svg {
        stroke: green;
    }

    button {
        background-color: transparent;
        border: none;
        color: antiquewhite;
    }

    .sin {
        text-decoration: none;
        color: white;

    }

    .sin:hover {
        color: white;

    }

    .foto {
        width: 10%;
    }

    .texto {
        display: flex;
        width: 20px;
        justify-content: space-evenly;
        padding: 2px;

    }

    .texto1 {
        display: flex;
        flex-direction: row;
        width: 80%;
        justify-content: flex-start;
        margin-left: 20%;
    }

    .deco {
        text-decoration: none;
        color: white;
    }

    .deco:hover {
        color: black;
    }

    .mt-50 {
        margin: 0 10%;

    }

    @media (max-width: 700px) {
        .mt-50 {
            margin: auto;

        }
    }

    .mb-50 {
        margin-bottom: 50px;
    }




    a {
        text-decoration: none !important;
    }


    .fa {
        color: red;
    }

    .b {
        background-color: black !important;
        align-items: center;

    }

    .mb-3 {
        color: white;
    }

    .ini {

        background-color: white;
        padding: 4px;
        padding-left: 8px;
        padding-right: 9px;
        color: black;
    }

    .v {
        background-color: white;
        width: 200px;
        margin: 20px auto;
        padding-bottom: 15px;
        font-size: 20px;
        border-radius: 20px;
    }

    .h {
        color: white;
    }

    .re:hover {
        background-color: white;
        border-radius: 50%;
        padding: 3px;

    }

    .inputenfila {
        display: flex;
        justify-content: space-between;
        padding-left: 8px;
        padding-top: 8px;
        padding-right: 8px;
        border-radius: 8px;
        border: solid 1px transparent;
    }

    .inputenfila:hover {
        background-color: rgba(255, 255, 255, 0.1);
        cursor: pointer;
        border: solid 1px rgba(255, 255, 255, 0.8);

    }
    </style>
</head>

<body>
    <?php
    session_start();

             if(isset($_SESSION['carro'])){
                $carro=$_SESSION['carro'];
            }else{
                $carro=FALSE;
            }
           error_reporting(0);

    require "conectar.php";

$id=$_GET['id'];

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
    <div class="container d-flex justify-content-center mt-50 mb-50 ">

        <div class="row ">
            <div class="col-md-10 ">

                <div class="card card-body b">
                    <div class="media align-items-center align-items-lg-start text-center  flex-column flex-lg-row">
                        <div class="mr-2 mb-3 mb-lg-0 ">

                            <img class="img" width="320"
                                src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen"])?> ">


                        </div>

                        <div class="media-body">
                            <h6 class="media-title font-weight-semibold v">
                                <br>
                                <a href="#" data-abc="true">
                                    <?php echo strtoupper($tipo); ?>
                                </a>
                                <a href="#" data-abc="true">
                                    <?php echo strtoupper($marca); ?>
                                </a>


                            </h6>

                            <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                <li class="list-inline-item"> <input class="volver" type="button" value="Vover"
                                        onClick="javascript:history.go(-1)">

                                </li>
                                <li class="list-inline-item"> <a class="ini" href="ndex.html">
                                        Inicio</a>

                                </li>

                            </ul>

                            <p class="mb-3">Elegi talle
                            <p class="mb-3">
                            <form action="detalles1.php" method="get">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <div class="inputenfila">
                                    <div>
                                        <input type="radio" value="s" name="talle">
                                        <p class="h">S</p>
                                    </div>
                                    <div>
                                        <input type="radio" value="m" name="talle">
                                        <p class="h">M</p>
                                    </div>
                                    <div>
                                        <input type="radio" value="l" name="talle">
                                        <p class="h">L</p>
                                    </div>
                                    <div>
                                        <input type="radio" value="xl" name="talle">
                                        <p class="h">XL</p>
                                    </div>
                                    <div>
                                        <input type="radio" value="xxl" name="talle">
                                        <p class="h">XXL</p>
                                    </div>
                                </div>
                                <p class="mb-3">Elegi color

                                <div class="inputenfila">
                                    <div>
                                        <input type="radio" value="Blanco" name="color">
                                        <p class="h">Blanco</p>
                                    </div>
                                    <div>
                                        <input type="radio" value="Negro" name="color">
                                        <p class="h">Negro</p>
                                    </div>
                                    <div>
                                        <input type="radio" value="Rojo" name="color">
                                        <p class="h">Rojo</p>
                                    </div>
                                    <div>
                                        <input type="radio" value="Azul" name="color">
                                        <p class="h">AzuL</p>
                                    </div>
                                    <div>
                                        <input type="radio" value="Gris" name="color">
                                        <p class="h">Gris</p>
                                    </div>
                                </div>
                                <input type="submit" name="talleycolor" value="Confirmar Color y Talle">
                            </form>
                            </p>
                            <?php
                            if(isset($_GET['talleycolor'])){

$t=$_GET["talle"];
$c=$_GET["color"];

                            }
                            ?>
                            <p class="mb-3">Nuestras redes
                            <ul class="list-inline list-inline-dotted mb-0">
                                <li class="list-inline-item">
                                    <p>Facebook</p> <a href="#" data-abc="true"><svg class="re"
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                        </svg></a>
                                </li>

                                <li class="list-inline-item">
                                    <p>Instagram</p>
                                    <a href="#" data-abc="true"> <svg class="re" xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#fd0061" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <rect x="4" y="4" width="16" height="16" rx="4" />
                                            <circle cx="12" cy="12" r="3" />
                                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                                        </svg></a>
                                </li>
                                <li class="list-inline-item">
                                    <p>Whatsapp</p>
                                    <a href="#" data-abc="true"> <svg class="re" xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-brand-whatsapp" width="44" height="44"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                                            <path
                                                d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                                        </svg></a>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                            <h3 class="mb-0 font-weight-semibold h">Precio $
                                <?php echo $precio ." <br>Color : " . $c . "<br>Talle : " . $t?></h3>

                            <div>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>

                            </div>
                            <br>

                            <h6 class="botoncito btn btn-warning mt-4">
                                <?php 
                        if(!$carro || !isset($carro[md5($fila["id"])]['identificador'])|| $carro[md5($fila['id'])]['identificador']!= md5($fila['id'])){
?>

                                <a class="deco"
                                    href="agregacar.php?<?php echo SID ?>& id=<?php echo $fila['id'];?> & c=<?php echo $c ?>& t=<?php echo $t ?>"><svg
                                        class="svg" xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-shopping-cart" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <circle cx="6" cy="19" r="2" />
                                        <circle cx="17" cy="19" r="2" />
                                        <path d="M17 17h-11v-14h-2" />
                                        <path d="M6 5l14 1l-1 7h-13" />
                                    </svg><br>Agregar.
                                </a>

                                <?php 
                     
                     
                     }else{
                                  
                                  ?>
                                <a class="sin" href="borrarcar.php?<?php echo SID ?>& id=<?php echo $fila['id']?>">
                                    Borrar
                                    del carrito</a>
                                <?php 
                            }
                            ?>

                            </h6>
                            <!--<button type="button" class="btn btn-warning mt-4 text-white"><i
                            
                            class="icon-cart-add mr-2"></i> Add to cart</button>-->

                        </div>
                    </div>
                </div>










            </div>
        </div>
    </div>
    <!--
    <h1>Detalles productos</h1>
    <div class="primera">
        <div class="foto">

            <img class="img" src="data:image/jpg;base64,<?php echo base64_encode($fila["imagen"])?>">
        </div>

        <div class="texto1">

            <div class="texto">

                <h2 class="botoncito"> <?php echo strtoupper($tipo); ?></h2>
                <h2 class="botoncito"> <?php echo strtoupper($marca); ?></h2>


            </div>

            <div class="texto">


                <h2 class="botoncito">PRECIO : </h2>
                <h2 class="botoncito"> <?php echo $precio; ?></h2>


            </div>








            <div class="texto">



                <h2 class="botoncito">
                    <?php 
                        if(!$carro || !isset($carro[md5($fila["id"])]['identificador'])|| $carro[md5($fila['id'])]['identificador']!= md5($fila['id'])){
?>

                    <a class="deco" href="agregacar.php?<?php echo SID ?>& id=<?php echo $fila['id']?>"><svg class="svg"
                            xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                            width="34" height="34" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00b341" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="6" cy="19" r="2" />
                            <circle cx="17" cy="19" r="2" />
                            <path d="M17 17h-11v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                        </svg><br>Agregar.
                    </a>

                    <?php 
                     
                     
                     }else{
                                  
                                  ?>
                    <a class="sin" href="borrarcar.php?<?php echo SID ?>& id=<?php echo $fila['id']?>"> Borrar
                        del carrito</a>
                    <?php 
                            }
                            ?>

                </h2>




                <button type="button" onClick="javascript:history.go(-1)">
                    <h2 class="botoncito"><svg class="svg" xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-arrow-back" width="34" height="34" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" />
                        </svg><br> Volver</h2>
                </button>


            </div>
            <div class="texto ">

                <svg class="botoncito b" xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg>
                <svg class="botoncito c" xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#fd0061" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <rect x="4" y="4" width="16" height="16" rx="4" />
                    <circle cx="12" cy="12" r="3" />
                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                </svg>
                <svg class="botoncito d" xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-brand-whatsapp" width="44" height="44" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                    <path
                        d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                </svg>

            </div>

        </div>
    </div>

                        -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
</body>

</html>