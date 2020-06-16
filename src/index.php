<?php 
  $value = "aplicacion facturacion";
  $ser = "192.168.99.100";
  $usuario = "myuser";
  $password = "secret";
  $bd = "mydb";
  echo "preparando conexion";
  $conexion = mysqli_connect($ser, $usuario, $password, $bd);
  if ($conexion){
    echo "conectado";
  }
  else {
    echo "no conectado";
  }
?> 
<html>
  <body>
    <h1> <?= $value ?>!</h1>
  </body>
</html>