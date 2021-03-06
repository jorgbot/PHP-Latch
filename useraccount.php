<?php
//INICIAMOS SESSION
session_start();
//ACCESO SIN LOGIN RESTRINGIDO
if(isset($_SESSION['id_usuario'])){

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Configuracion | Latch</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-title" content="Jorge Botello-Books">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="google" value="notranslate"/>
    <meta name="author" content="Jorge Botello, @RootKzero"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Books">
    <meta property="og:site_name" content="Books">
    <meta property="og:url" content="http://mrjorgebotello.pe.hu/">
    <!--Acerca, CSS, Favicon-->
    <link rel="acerca" type="application/json" href="app/config/about.json">
    <link type="text/css" rel="stylesheet" href="app/assets/css/form.css"  media="screen,projection"/>
    <link rel="icon" href="app/assets/images/favicon.png" type="image/x-icon" />
</head>
<body>
    <div class="form--books">
        <div class="logo">
            <img src="app/assets/images/logo-latch.png" alt="Books"/>
        </div>
            <h1>Has iniciado sesion como <?php echo $_SESSION['nombre']; ?></h1>
			<?php 
				if(isset( $_SESSION['status'] ) ){
					
					echo '<h5>'.$_SESSION['status'].'</h5>'; 

				}
				if(isset( $_SESSION['omitido'] ) ){
			?>
            <input href="paring.php" class="ingresar" type="submit"  value="Parea tu cuenta con Latch">
            <br><center>
                <p><a href="paring.php"><img src="app/assets/images/Parear.jpg" alt="" width="50%"></a></p>
            </center>
			<?php
				}
				if(isset( $_SESSION['desparear'] ) ){
			?>
            <input href="unparing.php" class="registrarme" type="submit" value="Desparea tu cuenta de Latch">
            <br><center>
                <p><a href="unparing.php"><img src="app/assets/images/Desparear.jpg" alt="" width="50%"></a></p>
            </center>
			<?php
				}
				unset($_SESSION['status']);	
			?>
           
    </div>
    <!-- Google Analytics -->
    <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create',$gAnalytics);ga('send','pageview');
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--script-->
    <script src="assets/js/prefixfree.min.js"></script>
</body>
</html>
<?php
}
//ACCESO SIN LOGIN RESTRINGIDO
else{
	header('location: index.php');
}
?>