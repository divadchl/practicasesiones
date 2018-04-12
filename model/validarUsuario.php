<?php
    function validarUsuario($usuario, $contraseña){
        $arrayUsuarios=array
        (
            array("admin","test","Administrador"),
            array("auto", "test2", "Autorizado")
        );
        for ($row = 0; $row < 2; $row++) {
            if($arrayUsuarios[$row][0]==$usuario && $arrayUsuarios[$row][1]==$contraseña){
                echo $arrayUsuarios[$row][2];
                return $arrayUsuarios[$row][2];
            }
        }
        return "Invitado";
    }
?>