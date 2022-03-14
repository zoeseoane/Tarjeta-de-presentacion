<?php
$pg="contacto";
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contacto</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilo1.css">
        <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
      
    </head>


<body id="contacto">
 
<?php include_once "header.php"; 
?>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-5">
                <h1> Contacto</h1>
            </div>


            <div class="row">
            </div>
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por whapsapp</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    
                    <div class="pb-3">
                        <input type="tel" name="txtTel" id="txtTelefono" placeholder="Telefono/whatsapp "
                        class="form-control shadow" >
                    </div>

                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escibe aqui tu mensaje" 
                        class="form-control shadow"></textarea>
                    </div>
                    <div class="pb-3">
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn btn-blanco px-3">Enviar</button>
                    </div>

                </form>
            </div>
        </div>

    </main>
    <footer class="container  my-5">
        <div class="row ">
            <div class="col-12 col-sm-3 text-center tex-sm-start">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/zoe-seoane-92a3b7191/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
                        
            </div>
            <div class="col-12 col-sm-3 text-light text-center">
                Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-12 text-light col-sm-3 text-center">
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