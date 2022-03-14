
<?php
$pg="proyectos";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Proyecto</title>
     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilo1.css">
        <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
      
    </head>
</head>

<body id="Proyecto">
 
<?php include_once "header.php"; 
?>
      <main class="container">
        <div class="row">
            <div class="col-12 pt-5">
                <h1> Proyectos</h1>
            </div>
        </div>

            <div class="row">
            <div class="col-12 col-sm-6">
                <p>Los siguientes son algunas de los trabajos que vemos en clase:</p>
            </div>
            </div>

        <div class="row"> <!--empieza-->
            <div class="col-12 col-sm-4 proyecto">
                <div class="m-1 border bg-white">
                        <img src="images/abmclientes.png" alt="" class="img-fluid">
                    <div class="col-12 py-2 color-gradiente ps-3">
                        <p class="titulo">ABM CLIENTES</p>
                    </div>
                    <div class="px-3 py-2">
                        <p>Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json. <br><br>
                        <br></p>
                    </div>
                    <div class="row pb-3 text-center">
                        <div class="col-6 p-0 ps-4">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 p-0  text-center">
                            <a href="" class="codigorojo">Código<br> fuente</a>
                        </div>
                    </div>
                </div><!--termina-->
            </div>
            <div class="col-12 col-sm-4 proyecto"><!--empieza-->
                <div class="m-1 border bg-white">
                        <img src="images/abmventas.png" alt="" class="img-fluid">
                    <div class="col-12 py-2 color-gradiente ps-3">
                        <p class="titulo">SISTEMA DE GESTIÓN DE VENTAS</p>
                    </div>
                    <div class="px-3 py-2">
                        <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row pb-3 text-center">
                        <div class="col-6 p-0 ps-4">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <a href="" class="codigorojo">Código <br> fuente</a>
                        </div>
                    </div>
                </div><!--termina-->
            </div>
            <div class="col-12 col-sm-4 proyecto"><!--empieza-->
                <div class="m-1 border bg-white">
                        <img src="images/proyecto-integrador.png" alt="" class="img-fluid">
                    <div class="col-12 py-2 color-gradiente ps-3">
                        <p class="titulo">PROYECTO INTEGRADOR</p>
                    </div>
                    <div class="px-3 py-2">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.

                        </p>
                    </div>
                    <div class="row pb-3 text-center">
                        <div class="col-6 p-0 ps-4">
                            <a href="" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 p-0 text-center">
                            <a href="" class="codigorojo">Código<br> fuente</a>
                        </div>
                    </div>
                </div><!--termina-->
            </div>
           

    

</main>
<footer class="container  my-5">
    <div class="row ">
        <div class="col-12 col-sm-3 text-center tex-sm-start">
            <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/zoe-seoane-92a3b7191/" target="_blank" title="Linkedin"><i
                    class="fab fa-linkedin-in"></i></a>
                    
        </div>
        <div class="col-12  text-danger col-sm-3 text-center">
            Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
        </div>
        <div class="col-12 col-sm-3 text-danger text-center">
            <a href="zoeabigailseoane@gmail.com">zoeabigailseoane@gmai.com</a>
        </div>
    </div>
    <div class="bloque-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541162423341" title="Whatsapp"><i class="fab fa-whatsapp pb-4 pt-4 px-4"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</footer>
</body>
<script src="css/boostrap/js/bootstrap.bundle.min.js"></script>
</html>

