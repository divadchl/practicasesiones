<?php
    session_start();
    require_once ('../layout/Header.php');
    require_once ('../layout/nav.php');
    
    if (isset($_SESSION['autenticado']) && $_SESSION['autenticado'] == true  && ($_SESSION['usuario']=="Autorizado" 
||$_SESSION['usuario']=="Administrador")) {
        echo "<h1>Esta en página de datos.</h1><br><br>";
        echo "<h2>Usted a ingresado ".$_SESSION["paginaDatos"]++." veces a la página.</h2>";
    }else{
        session_destroy();
        header('Location: http://practicas.com.mx:8080/login.php');
    }
    
    $now = time();

    if($now > $_SESSION['expira']) {
        session_destroy();
        echo "Su sesion a terminado,
        <a href='login.php'>Necesita Hacer Login</a>";
        exit;
    }
?>

