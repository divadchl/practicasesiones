<?php
  $usuario=$_SESSION["usuario"];
  //echo $usuario;
?>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
      <div class='collapse navbar-collapse'>
        <ul class='navbar-nav mr-auto'>
          <li>
            <a class='nav-link' href='inicio.php'>Inicio </a>
          </li>
<?php
  
  if($usuario == "Administrador"){   
    echo      "<li class='nav-item'>";
    echo         "<a class='nav-link' href='datos.php'>Datos</a>";
    echo      "</li>";
    echo      "<li class='nav-item'>";
    echo         "<a class='nav-link' href='administracion.php'>Administración</a>";
    echo      "</li>";
    echo    "</ul>";
    echo    "<label id='lblUsuario'>Usuario: ".$usuario."</label>";
    echo    "<a href=../controller/cierreSesion.php>Cerrar Sesion X </a>";
  }elseif($usuario == "Autorizado"){
    echo      "<li class='nav-item'>";
    echo         "<a class='nav-link' href='datos.php'>Datos</a>";
    echo      "</li>";
    echo    "</ul>";
    echo    "<label id='lblUsuario'> Usuario: ".$usuario."</label>";
    echo    "<a href=../controller/cierreSesion.php>Cerrar Sesion X </a>";
  }elseif($usuario == "Invitado"){
    echo    "</ul>";
    echo    "<label id='lblUsuario'>Usuario: ".$usuario."</label>";
    echo    "<a href=../controller/cierreSesion.php>Cerrar Sesion X </a>";
  }

?>
      </div>
    </nav>
    <br>