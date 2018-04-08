<?php
    if($_POST["usuario"]=="admin" && $_POST["contraseña"]=="test"){
        $_SESSION["sesion_iniciada"]="SI";
    }else{
        if($_POST["usuario"]!="admin"){
            $_SESSION["sesion_iniciada"]="ERROR_USR";
        }else{
            if($_POST["contraseña"]!="test"){
                $_SESSION["sesion_iniciada"]="ERROR_PASS";
            }
        }
    }

    if(isset($_SESSION["sesion_iniciada"])){
        $permisos=$_SESSION["sesion_iniciada"];
    }else{
        $permisos="NO";
    }

    if($permisos=="SI"){
        echo "<h1>Bienvenido tienes permisos para ver las siguientes páginas</h1>";
        echo "<ul>";
        echo "<li><a href='seccion1.php'>Sesscion 1</a></li>";
    }else{
        echo "<h1>Lo siente no tienes permisos para ver la página</h1>";
    }

    if($permisos=="ERROR_USR"){
        echo "<p>El usuario es incorrecto</p>";
    }else{
        echo "<p>La contraseña es incorrecta</p>";
    }
?>