<?php
    session_start();
    require_once ('layout/Header.php');
    require_once ('model/validarUsuario.php');

    $formulario= TRUE;
    if(isset($_REQUEST["control"])){
      $tipoUsuario = validarUsuario($_POST["usuario"],$_POST["contraseña"]);
      //echo $tipoUsuario;
      if($tipoUsuario != "Invitado"){
        $_SESSION['autenticado'] = true;
        $_SESSION['usuario'] = $tipoUsuario;
        $_SESSION['inicio'] = time();
        $_SESSION['expira'] = $_SESSION['inicio'] + (5 * 60);
        $_SESSION['paginaDatos']=1;
        $_SESSION['paginaAdmon']=1;
        $_SESSION['paginaInicio']=1;
        $formulario=FALSE;
        header("Location: view/inicio.php");
      }else{ 
        $formulario=FALSE;
        $_SESSION['autenticado'] = false;
        $_SESSION['usuario'] = $tipoUsuario;
        $_SESSION['inicio'] = time();
        $_SESSION['expira'] = $_SESSION['inicio'] + (5 * 60);
        $_SESSION['paginaInicio']=1;
      }
    }

?>
<?php
  $mostrarBloque="
    <form action='login.php' method='post'>
      <div class='form-group'>
        <label for='exampleInputEmail1'>Usuario</label>
        <input type='text' class='form-control' name='usuario' value='admin' placeholder='Ingrese el usuario'>
      </div>
      <div class='form-group'>
        <label for='exampleInputPassword1'>Contraseña</label>
        <input type='password' class='form-control' name='contraseña' value='test' placeholder='Ingrese la Contraseña'>
      </div>
      <button type='submit' class='btn btn-primary'>Ingresar</button>
      <input type='hidden' name='control' value='12345'>
    </form>
  ";
?>
<?php
  if($formulario){
    echo $mostrarBloque;
  }else{
    $mostrarBloque .="
          Username o Password estan incorrectos
          <br><br><a href='view/inicio.php'>Ingresar como invitado</a>
        "; 
      echo $mostrarBloque;
  }
?>
