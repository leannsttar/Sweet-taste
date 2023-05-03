<?php
session_start();

// Establecer la conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "sweet_taste");

// Función para agregar un producto al carrito en la base de datos
function agregarAlCarritoDB($nombre, $precio, $descripcion, $id_usuario) {
    global $conexion;
    $query = "INSERT INTO carrito (nombre, precio, descripcion, id_usuario) VALUES ('$nombre', $precio, '$descripcion', $id_usuario)";
    mysqli_query($conexion, $query);
}

// Función para obtener el historial del carrito desde la base de datos
function obtenerHistorialCarritoDB($id_usuario) {
    global $conexion;
    $query = "SELECT nombre, precio, descripcion FROM carrito WHERE id_usuario = $id_usuario";
    $result = mysqli_query($conexion, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Nombre: " . $row['nombre'] . "<br>";
        echo "Precio: " . $row['precio'] . "<br>";
        echo "Descripción: " . $row['descripcion'] . "<br>";
        echo "-----------------------<br>";
        }
        }
        
        // Verificar si el usuario ha iniciado sesión y obtener su ID
        if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];

        // Guardar productos en la base de datos al agregar al carrito
if (isset($_POST['nombre']) && isset($_POST['precio']) && isset($_POST['descripcion'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    agregarAlCarritoDB($nombre, $precio, $descripcion, $user_id);
}

// Mostrar historial del carrito
echo "<h2>Historial del carrito:</h2>";
obtenerHistorialCarritoDB($user_id);

} else {
    echo "Debes iniciar sesión para acceder al carrito.";
    }

//  <script>

//localStorage impresión

// function mostrarProductosDelCarrito() {
//     var carritoGuardado = localStorage.getItem("carrito");
//     if (carritoGuardado) {
//         carrito = JSON.parse(carritoGuardado);
//         var listaProductos = document.getElementById("lista-productos"); 

//         for (var i = 0; i < carrito.length; i++) {
//             var producto = carrito[i];
//             var itemProducto = document.createElement("li");
//             itemProducto.innerHTML = "<strong>Nombre:</strong> " + producto.nombre + "<br>" +
//                 "<strong>Precio:</strong> " + producto.precio + "<br>" +
//                 "<strong>Descripción:</strong> " + producto.descripcion + "<br><br>";
//             listaProductos.appendChild(itemProducto);
//         }
//     }
// }

// mostrarProductosDelCarrito();

// //Funciona pero no es 100% útil, osea falta un verificador para el usuario o alguna cosa así xd

// </script> -->