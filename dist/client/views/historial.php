<?php include './templates/header.php' ?>
<?php include './historial-carrito.php' ?>

<div class="h-screen w-[87%] flex flex-col">
    <div class="w-[95%] flex flex-col mt-[55px] space-y-16">
        <div class="flex justify-between w-full">
            <p class="text-5xl border-b-[5px] border-b-[#FA8F88] pb-2">HISTORIAL</p>
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
        <div>
            <?php if (!empty($misProductos)) { ?>
            <div class="flex flex-wrap gap-10">
                <?php foreach ($misProductos as $producto) { ?>
                <div class="flex bg-[#FA8F88] p-6 rounded-xl w-[400px]">
                    <img src="../images/chef.png" alt="" class="rounded-full w-20 h-20 object-cover mr-8">
                    <div class="flex space-x-16 items-center justify-between w-full">
                        <div class="space-y-2">
                            <p class="text-2xl font-semibold"><?php echo $producto['nombre']; ?></p>
                            <p class="text-lg">$<?php echo $producto['precio']; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } else { ?>
            <p>No hay productos añadidos en el carrito</p>
            <?php } ?>
        </div>
    </div>
</div>

</body>
</html>
