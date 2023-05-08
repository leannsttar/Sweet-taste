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

$sql = "SELECT * FROM carrito INNER JOIN products ON carrito.id_producto=products.id";
$resultado = $conn->query($sql);
$misProductos = [];

// Verificar si hay resultados
if ($resultado->num_rows > 0) {
  // Recorrer los resultados y mostrarlos
    while ($fila = $resultado->fetch_assoc()) {
        $misProductos[] = $fila;
    }
} else {
    // echo "No se encontraron resultados";
}


// print_r($misProductos);

// Cerrar la conexión
$conn->close();


?>
<?php

include ("./templates/header.php");
$_SESSION['productos'] = $misProductos;

?>
    <div class="h-screen w-[87%] flex flex-col">
        <div class="w-[95%] flex flex-col mt-[55px] space-y-16">
            <div class="flex justify-between w-full">
                <p class="text-5xl border-b-[5px] border-b-[#FA8F88] pb-2">CARRITO</p>
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
            <div class="flex space-x-20">
                <div class="w-[60%]" id="lista-carrito">
                    <?php  foreach($misProductos as $producto){?>
                        <form method="POST" action="../processes/eliminar-carrito.php" class="flex bg-[#FA8F88] p-6 rounded-xl w-full">
                    <img src="../images/chococake.png" alt="" class="rounded-full w-20 h-20 object-cover mr-8">
                    <div class="flex space-x-16 items-center justify-between w-full">
                        <div class="space-y-2" id="cart-items-container">
                            <p class="text-2xl font-semibold"><?php echo $producto['nombre']?></p>
                            <p class="text-lg"><?php echo $producto['precio']?></p>
                        </div>
                        <div class="flex w-full justify-end items-center space-x-16">
                            <button type="submit" name="Id" value="<?php echo $producto['id_carrito']?>" class="cursor-pointer"><img src="../images/x.svg" alt="" class="w-5 h-5 "></button>
                        </div>
                    </div>
                    </form>
                    <?php }?>
                <div class="w-[40%]" >
                    <div class="bg-[#FA8F88] rounded-t-xl p-8 space-y-5">
                        <p class="text-5xl pb-3">Total</p>
                        <div class="flex space-x-7">
                        </div>
                        <form action="../processes/crear-historial.php" method="post">
                            <button type="submit" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-black border-[1px] border-[black] font-light text-2xl text-white px-4 h-16 w-full hover:bg-white hover:text-black transition-all ease-in-out duration-300">Confirmar orden</button>
                        </form>
                    </div>
                    <div id="authentication-modal" aria-hidden="true" class="payWhole hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                        <div class=" relative w-full max-w-md px-4 h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="bg-white rounded-lg relative shadow-2xl">
                                <div class="flex justify-end p-2">
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                    </button>
                                </div>
                                <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="#">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                                            <defs>
                                            </defs>
                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                <path d="M 50.582 6 H 21.926 c -2.466 0 -4.465 1.999 -4.465 4.465 V 63.86 c 0 2.466 1.999 4.465 4.465 4.465 h 4.733 h 23.269 h 0.286 c 2.669 0 4.833 -2.164 4.833 -4.833 V 46.657 V 31.769 V 10.465 C 55.047 7.999 53.048 6 50.582 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(248,218,127); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path d="M 74.794 90 H 44.75 c -0.513 0 -0.943 -0.388 -0.995 -0.898 c -0.947 -9.257 1.928 -18.204 7.716 -24.166 l -7.394 -7.114 c -0.354 -0.309 -0.796 -0.565 -1.281 -0.737 l -8.162 -1.591 c -0.043 -0.008 -0.085 -0.02 -0.126 -0.033 c -3.796 -1.272 -5.981 -5.175 -5.082 -9.077 l 0.251 -1.091 c 0.905 -3.929 4.741 -6.524 8.722 -5.911 l 7.885 0.688 c 0.971 0.147 1.847 0.499 2.601 1.023 l 15.167 10.686 c 0.451 0.318 0.56 0.941 0.241 1.394 c -0.317 0.452 -0.94 0.558 -1.394 0.241 L 47.736 42.729 c -0.5 -0.349 -1.086 -0.583 -1.691 -0.677 l -7.885 -0.688 c -3.022 -0.464 -5.862 1.461 -6.533 4.376 l -0.251 1.091 c -0.662 2.873 0.93 5.747 3.709 6.711 l 8.163 1.592 c 0.043 0.009 0.085 0.02 0.127 0.033 c 0.759 0.255 1.451 0.652 2.055 1.18 l 8.169 7.857 c 0.197 0.189 0.308 0.451 0.307 0.725 s -0.114 0.534 -0.313 0.723 c -5.644 5.34 -8.572 13.64 -7.926 22.348 h 28.133 c 0.085 -8.033 1.178 -14.344 2.146 -19.938 c 1.18 -6.814 2.198 -12.7 1.171 -19.857 c -0.609 -4.245 -3.457 -7.861 -7.431 -9.437 l -3.899 -1.761 c -0.503 -0.227 -0.727 -0.82 -0.499 -1.323 c 0.228 -0.503 0.819 -0.728 1.323 -0.5 l 3.855 1.742 c 4.596 1.821 7.919 6.04 8.631 10.993 c 1.071 7.471 0.028 13.501 -1.181 20.482 C 76.921 74.147 75.794 80.659 75.794 89 C 75.794 89.553 75.347 90 74.794 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path d="M 38.661 75.325 H 15.32 c -2.679 0 -4.859 -2.18 -4.859 -4.859 V 4.859 C 10.461 2.18 12.641 0 15.32 0 c 0.552 0 1 0.448 1 1 s -0.448 1 -1 1 c -1.576 0 -2.859 1.283 -2.859 2.859 v 65.607 c 0 1.576 1.283 2.859 2.859 2.859 h 23.34 c 0.552 0 1 0.447 1 1 S 39.213 75.325 38.661 75.325 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path d="M 60.047 51.179 c -0.553 0 -1 -0.447 -1 -1 V 4.859 C 59.047 3.283 57.765 2 56.188 2 H 23.527 c -0.552 0 -1 -0.448 -1 -1 s 0.448 -1 1 -1 h 32.661 c 2.68 0 4.859 2.18 4.859 4.859 v 45.32 C 61.047 50.731 60.6 51.179 60.047 51.179 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path d="M 45.144 22.935 c -1.737 0 -3.426 -0.613 -4.757 -1.728 c -0.423 -0.354 -0.479 -0.985 -0.125 -1.409 c 0.354 -0.424 0.984 -0.479 1.409 -0.125 c 0.971 0.813 2.204 1.261 3.473 1.261 c 2.985 0 5.414 -2.429 5.414 -5.414 c 0 -2.985 -2.429 -5.414 -5.414 -5.414 s -5.414 2.429 -5.414 5.414 c 0 0.552 -0.448 1 -1 1 s -1 -0.448 -1 -1 c 0 -4.088 3.326 -7.414 7.414 -7.414 c 4.087 0 7.414 3.326 7.414 7.414 S 49.231 22.935 45.144 22.935 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path d="M 23.527 63.539 c -0.552 0 -1 -0.447 -1 -1 V 1 c 0 -0.552 0.448 -1 1 -1 s 1 0.448 1 1 v 61.539 C 24.527 63.092 24.079 63.539 23.527 63.539 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            </g>
                                        </svg>
                                        <h3 class="text-xl font-medium text-gray-700">Llena tus datos bancarios</h3>
                                    </div>

                                    <div>
                                        <label for="cardowner" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Titular de la tarjeta</label>
                                        <input type="text" name="cardowner" id="cardowner" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Nacely Orellana" required="">
                                    </div>
                                    <div>
                                        <label for="cardnumber" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Número de tarjeta de crédito/débito</label>
                                        <input type="number" name="cardnumber" id="cardnumber" placeholder="4224 4224 4224 4224" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                                    </div>
                                    <div class="flex space-x-10">
                                        <div>
                                            <label for="cardExp" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Fecha de vencimiento</label>
                                            <input type="text" name="cardExp" id="cardExp" placeholder="04/25" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                                        </div>
                                        <div>
                                            <label for="cvc" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Código de seguridad</label>
                                            <input type="number" name="cvc" id="cvc" placeholder="843" class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                                        </div>
                                    </div>
                                    <div class="flex space-x-3 justify-end pt-7">
                                        <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="py-2 rounded-full px-4 border-[1px] border-gray-300 font-semibold hover:bg-black hover:text-white transition-all ease-in-out duration-300">Cancelar</button>
                                        <form action="../processes/crear-historial.php" method="post">
                                            <input type="hidden" name="id_producto" value="<?php echo $id_producto ?>">
                                            <button type="submit" id="pay" data-modal-target="done-modal" data-modal-toggle="done-modal" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"  class="py-2 bg-black text-white rounded-full px-8 border-[1px] border-gray-300 font-semibold hover:bg-white hover:text-black transition-all ease-in-out duration-300">Pagar</button>
                                        </form>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> 
                    <div id="done-modal" aria-hidden="true" class=" hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                        <div class="bg-white p-6  md:mx-auto shadow-2xl">
                            <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
                            <path fill="currentColor"
                                d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                            </path>
                        </svg>
                        <div class="text-center">
                            <h3 class="md:text-2xl text-base text-gray-900 font-semibold text-center">Pago hecho</h3>
                            <p class="text-gray-600 my-2">Gracias por tu preferencia</p>
                            <p> Ten un buen día.  </p>
                            <div class="cursor-pointer py-10 text-center">
                                <a onclick="location.reload()" class=" px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                                    Vuelve pronto 
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="flex flex-col border-[1px] border-[#FA8F88] rounded-b-xl p-8 space-y-7">
                        <p class="text-5xl">Código de promoción</p>
                        <input type="text" placeholder="Ingresar código" class="outline-none border-[1px] border-[#FA8F88] px-5 py-4 text-2xl font-light">
                        <button class="bg-black border-[1px] border-[black] font-light text-2xl text-white px-8 h-14 w-min hover:bg-white hover:text-black transition-all ease-in-out duration-300">Aplicar</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<!-- <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script> -->
<script>
    let pay = document.getElementById('pay');
    let payC = document.querySelector('.payWhole')

    pay.addEventListener('click', () => {
        payC.classList.add('hidden')
    })
</script>

</html>