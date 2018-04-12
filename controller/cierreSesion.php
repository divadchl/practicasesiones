<?php
    session_start();
    unset ($_SESSION['autenticado']);
    unset ($_SESSION['usuario']);
    unset ($_SESSION['inicio']);
    unset ($_SESSION['expira']);
    unset ($_SESSION['paginaDatos']);
    unset ($_SESSION['paginaAdmon']);
    unset ($_SESSION['paginaInicio']);
    session_destroy();
    header('Location: http://practicas.com.mx:8080/login.php');
?>