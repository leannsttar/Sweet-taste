<?php

if ($_GET) {
  echo "si";
  $id = $_GET['Id'];
  

  $sql = "DELETE FROM products WHERE id=:id";
  $consulta = $conexionBD->prepare($sql);
  $consulta->bindParam(':id', $id);
  $consulta->execute();
  echo "<script>alert('Producto eliminado!');  window.location.href = '../../admin/views/productos_admin.php' </script>";

}




?>