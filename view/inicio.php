<?php
    session_start();
    require_once ('../layout/Header.php');
    require_once ('../layout/nav.php');
    
    if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == true) {
        echo "<h1>Usted tiene permiso para navegar en el sitio.</h1><br><br>";
        echo "<h1>Usted esta en la página de inicio.</h1><br><br>";
        echo "<h2>Usted a ingresado ".$_SESSION["paginaInicio"]++." veces a la página.</h2>";
    }else{
        echo "<h1>Usted es usuario invitado.</h1><br>";
        echo "<h1>Usted esta en la página de inicio.</h1><br><br>";
        echo "<h2>Usted a ingresado ".$_SESSION["paginaInicio"]++." veces a la página.</h2>";
        exit;
    }

    $now = time();

    if($now > $_SESSION['expira']) {
        session_destroy();
        echo "Su sesion a terminado,
        <a href='../login.php'>Necesita Hacer Login</a>";
        exit;
    }
?>