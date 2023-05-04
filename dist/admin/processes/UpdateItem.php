<?
include "../../config/db.php";
$conexionBD = BD::crearInstancia();

$IDproducto = intval($_GET['ID']);
$miProducto = mysqli_query($conexionBD, "Select * from products where IDproducto = $IDproducto");
$miProducto = mysqli_fetch_assoc($miProducto);
$productos = mysqli_fetch_all($productos);
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  $nombre = $_POST["nombre"];
  $Precio = $_POST["Precio"];
  $categoria = intval($_POST["categoria"]);
  $sql = "Update products set Nombre = '$nombre', Precio = $Precio, IDcategoria = $categoria where IDproducto = $IDproducto";
  mysqli_query($conexionBD, $sql);
  echo "<script>alert('Producto editado!');  window.location.href = '../../admin/views/productos_admin.php' </script>";
 
}

?>