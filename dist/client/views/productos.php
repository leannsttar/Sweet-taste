<?php 

include './templates/header.php'; 

function salidaBtn()
{
    if (isset($_SESSION["usuario"])) {
        return "desaparecer";
    }
    return "";
}

function noLogged()
{
    if (isset($_SESSION["usuario"])) {
        return "../processes/enviar-carrito.php";
    }else{
        return "./form-login.php";
    }
    
}

?>

<?php
// Hacer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sweet_taste";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$resultado = $conn->query($sql);
$misProductos = [];

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
  // Recorrer los resultados y mostrarlos
    while ($fila = $resultado->fetch_assoc()) {
        $misProductos[] = $fila;
    }
} else {
    echo "No se encontraron resultados";
}


?>
    <div class="h-screen w-[87%] flex flex-col">
        <div class="w-[95%] flex flex-col mt-[55px]">
            <div class="flex justify-between w-full">
                <p class="text-5xl border-b-[5px] border-b-[#FA8F88] pb-2">PRODUCTOS</p>
                <?php if(isset($_SESSION['usuario'])) { ?>
                <div class="flex items-center space-x-3">
                        <p class="text-2xl">

                            <?php include '../../config/db.php';
                            $conexionBD = BD::crearInstancia();

                            $id = $_SESSION['usuario'];

                            $sql = "SELECT * FROM `users` WHERE id= $id ";
                            $users = $conexionBD->query($sql);
                            $allusers = $users->fetchAll();

                            print_r($allusers[0]['nombre']);

                            ?>
                        </p>
                    <img src="../images/user.svg" alt="">
                </div>
                <?php } else {  ?>
                        <a href="./form-login.php"> <button class="bg-white absolute right-14 top-10 pt-1.5 pb-1.5 pl-4 pr-4 font-semibold rounded-md text-lg hover:bg-black hover:text-white transition-all ease-in-out duration-300 button <?= salidaBtn(); ?>">Iniciar sesión</button>
                        </a>
                <?php } ?>
            </div>
            <div class="flex w-full my-14 items-center">
                <div class="">
                    <input type="text" id="search" placeholder="Buscar" class="bg-[#e9e8e8] w-96 rounded-lg outline-none px-3 py-1">
                </div>
            </div>
            
            <div class="flex flex-row flex-wrap gap-10"> 
                <?php  foreach ($misProductos as $producto) { ?>
                        
                <form method="POST" action="<?= noLogged(); ?>" class="p-3 border-[1px] flex-col shadow-xl rounded-xl w-64 justify-between">
                    <img src="../images/chef.png" alt="" class="rounded-xl">
                    <div class="my-5 px-4">
                        <p class="text-[#282424] text-2xl font-bold"><?php echo $producto['nombre'];  ?></p>
                        <p class="text-[#666666] font-light"><?php echo $producto['descripcion'];  ?></p>
                        <p class="text-[#282424] text-4xl font-bold">$ <?php echo $producto['precio'];  ?></p>
                    </div>
                    <input type="text" value=<?php echo $producto['Id']; ?> name="Id" hidden>
                    <button type="submit" class="bg-[#282424] w-full flex justify-center py-1 rounded-3xl hover:bg-[#666666] transition-all ease-in-out duration-300 cursor-pointer"><img src="../images/add_cart.png" alt="" class="agregar-carrito" data-nombre="Producto 1" data-precio="10.50"></button>
                </form>
            <?php  }?>
            </div>
        </div>
    </div>
</body>

<script src="../processes/js/buscador.js"></script>
</html>
