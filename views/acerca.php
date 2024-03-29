<?php
// Seguridad de sesiones
session_start();
error_reporting(0);
$varsesion = $_SESSION['nombre'];

if ($varsesion == null || $varsesion = '') {

    header("Location: ../includes/_sesion/login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="../js/jquery.min.js"></script>

</head>
<?php include "../includes/header.php"; ?>



<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">



        <div class="card-body">
            <div class="table-responsive">


                <h1>Sistema Administrativo de Citas Medicas "Medical PC" Version 2.0</h1>
                <br>

                <p> Medical PC es un sistema administrativo de citas medicas web <b>basico</b> su funcion principal
                    es llevar una mejor gestion sobre las operaciones administrativas que se tiene en un consultorio
                    medico, de esta manera se lleva un mejor control de las citas medicas atravez de este sistema .
                </p>
                <br>

                <h2>Sobre el Desarrollador</h2>
                <br>
                <p>Desarrollado y Mantenido por <a href="/../NKL/index.php">DESARROLLOS¡NKL! </a>.
                    Este sistema es opensource asi que puedes modificarlo segun a tus necesidades. Donde tambien diseñamos paginas web, Aplicaciones web, Aplicaciones moviles 100% Profesionales..
                </p>

                <br>

                <p><b>NOTA:</b> Si tienes alguna duda del funcionamiento del sistema solo respondemos por <b>email: <a href="https://www.google.com/search?client=firefox-b-d&q=gmail">leni30hidalgo@gmail.com</a></b> o <b>Whatsapp: 04126001614</b> Si mandas mensaje
                    a nuestro numero de <b>contacto</b> no respondemos dudas de instalacion, configuracion, etc, a menos que sean <b>propuestas de trabajo y cotizaciones.</b>
                </p>
            </div>
        </div>
    </div>


</body>
<?php include "../includes/footer.php"; ?>

</html>