<?php
    require_once ('layout/Header.php');
?>
<form action="inicio.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" name="usuario" placeholder="Ingrese el usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" name="contraseña" placeholder="Ingrese la Contraseña">
  </div>
  <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
<?php
    require_once ('layout/Header.php');
?>