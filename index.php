<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin - Books</title>
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
    <link type="text/css" rel="stylesheet" href="app/assets/css/style.css"  media="screen,projection"/>
    <link rel="icon" href="app/assets/images/favicon.png" type="image/x-icon" />
</head>
<body>
    <div class="form--books">
        <div class="logo">
            <img src="app/assets/images/Logo_Latch.png" alt="Books"/>
        </div>
            <h1>Control de Seguridad | Books</h1>
        <form action="funciones.php" method="post">
            <div class="input--base">
            <input class="input-field" name="usuario" placeholder="Usuario" type="text" size="18" required="required"/>
            </div>
            <div class="input--base">
            <input class="input-field" name="password" placeholder="Password" type="password" size="18" required="required"/>
            </div>
            <input class="ingresar" type="submit" name="iniciar" value="Ingresar">
            <br><center>
				<?php 
					if( isset( $_SESSION['error'] ) ) echo $_SESSION['error']; 
					unset($_SESSION['error']);
				?>
            </center>
        </form>
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
<?php session_destroy(); ?>