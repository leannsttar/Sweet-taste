<?php

$accion = isset($_POST['accion']) ? $_POST['accion'] : '';

if ($accion == 'actualizar') { 
  $id = $_POST['Id'];
  $nombre = $_POST["nombre"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];

  // include "../../config/db.php";
  // $conexionBD = BD::crearInstancia();


  $sql = "UPDATE products SET nombre=:nombre, descripcion=:descripcion, precio=:precio WHERE Id = :id";
  $consulta = $conexionBD->prepare($sql);
  $consulta->bindParam(':id', $id);
  $consulta->bindParam(':nombre', $nombre);
  $consulta->bindParam(':descripcion', $descripcion);
  $consulta->bindParam(':precio', $precio);
  $consulta->execute();
  echo "<script>alert('Producto actualizado!');  window.location.href = '../../admin/views/productos_admin.php' </script>";
} 



?>