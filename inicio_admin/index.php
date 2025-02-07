<?php
    session_start();
    //include_once("../database/conexion.php");
    if(!isset($_SESSION['user'])){
      //die("Error de conexion. Talvez se deba a su conexion a internet o al acceder a un sitio con privilegios insuficientes");
      header("Location:../login_admin/");
    }else{
      //en caso de que si este definida obtenemos algun valor
    }
?>

<?php
    //conexion a la Base de datos (Servidor,usuario,password)
    $conn = mysqli_connect("boutiquedkar.cuxsffuy95k9.us-east-1.rds.amazonaws.com","admin", "admin12345678", "boutique");
    if (!$conn) {
        die("Error de conexion: " . mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>BOUTIQUE ONYX STONE</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../resources/faviconv2.png" />
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/31127b7562.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!--Bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <div class="contenedor">
            <input type="checkbox" id="menuprincipal">
            <label class="fas fa-bars" for="menuprincipal"></label>
            <nav class="menu">
                <a href="./"><i class="fal fa-home-lg" ></i>INICIO</a>
                <a href="../registrar_admin/RegistrarIngreso.php">
                    <i class="fas fa-plus"></i>AGREGAR PRENDAS
                </a>
                <a href="../salida_admin/SalidaProducto.php">
                    <i class="fas fa-minus"></i>SALIDA DE PRENDAS
                </a>
                <a href="../consultar_admin/">
                    <i class="fal fa-eye"></i> VER PRENDAS
                </a>
                <a href="../cerrar_sesion/cerrar_sesion.php">
                    CERRAR SESIÓN   
                    <i class="fal fa-sign-out"></i>
                </a>
            </nav>
        </div>
    </header>

    <main class="inicio-main">
        <div class="logo">
            <h3><a href="https://onyxstoneportal.herokuapp.com/" target="_blank">BOUTIQUE ONYX STONE</a></h3>
            <p>Lo mejor de moda para <span>ellos!</span></p>
        </div>

        <div class="container">
            <h2 class="blanquito">Manual de usuario</h2>
            <p class="blanquito">En este manual podrá resolver las dudas que tenga respecto al uso del sistema.</p>
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Ver manual
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h1 class="modal-title">Manual de usuario</h1>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <h3>¿Cómo usar el sistema?</h3>
                            <p>El sistema diseñado para la boutique Onyx stone se compone de cinco interfaces.</p><br>
                            <p>Una pantalla de <b>INICIO</b>, la cual es la primera pantalla que se muestra al ingresar al sistema y se encuentra este manual de usuario</p><br>
                            <p>Si deseas registrar la llegada de nuevas prendas al almacén pues debes navegar por la pestaña <b>AGREGAR PRENDAS</b> </p><br>
                            <p>Caso contrario, si deseas registrar la salida de prendas es necesario visitar la pestaña <b>SALIDA DE PRENDAS</b></p><br>
                            <p>Finalmente, si deseas visualizar los datos de todas la prendas que posees en el almacén pues tienes que dirigirte a la opción <b>VER PRENDAS</b></p><br>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <div class="pie">
            <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="#"><i class="fas fa-map-marked-alt fa-2x"></i></a>
            <p>Copyright © 2021, Todos los derechos reservados.</p>
        </div>
    </footer>
</body>

</html>