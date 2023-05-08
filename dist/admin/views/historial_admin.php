<?php include './templates/header.php';

include "../../config/db.php";
$conexionBD = BD::crearInstancia();

$sql = "SELECT * FROM `historial_producto` INNER JOIN `products` ON historial_producto.id_producto = products.Id INNER JOIN `historial` ON historial_producto.id = historial.id_historial";
$productos = $conexionBD->query($sql);
$allhistory = $productos->fetchAll();

// print_r($allhistory);

?>

    
    <div class="h-screen w-[87%] flex flex-col">
        <div class="w-[95%] flex flex-col mt-[55px]">
            <div class="flex justify-between w-full">
                <p class="text-5xl border-b-[5px] border-b-[#FA8F88] pb-2">HISTORIAL</p>
                <div class="flex items-center space-x-3">
                    <p class="text-2xl">Administrador</p>
                    <img src="../images/user.svg" alt="">
                </div>
            </div>
            <div class="space-y-10 mt-20">
                <?php foreach ($allhistory as $producto) { ?>
                    <div class="flex items-center justify-between border-b-4 pb-4">
                        <div class="flex items-center gap-x-16">
                            <p class="text-3xl font-bold"><?php echo $producto['id'] ?></p>
                            <img src="../../client/images/chococake.png" alt="" class="w-20 h-20 object-cover">
                            <p class="text-3xl font-bold mr-52 w-52"><?php echo $producto['nombre'] ?></p>
                            <p class="text-3xl text-[#666666] font-bold"><?php echo $producto['precio'] ?></p>
                        </div>
                        <div class="flex items-center gap-x-10">
                            <div class="flex items-center space-x-3">
                                <!-- <img src="../images/user.svg" alt="" class="h-14 w-14"> -->
                                <p class="text-2xl"><?php echo $producto['fecha'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="mt-24 space-y-10">

            </div>
        </div>
    </div>
</body>
</html>