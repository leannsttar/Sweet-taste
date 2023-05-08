<?php include './templates/header.php' ?>
<?php include './historial-carrito.php' ?>

<div class="h-screen w-[87%] flex flex-col">
    <div class="w-[95%] flex flex-col mt-[55px] space-y-16">
        <div class="flex justify-between w-full">
            <p class="text-5xl border-b-[5px] border-b-[#FA8F88] pb-2">HISTORIAL</p>
            <div class="flex items-center space-x-3">
                <p class="text-2xl">Rodrigo Pineda</p>
                <img src="../images/user.svg" alt="">
            </div>
        </div>
        <div>
            <?php if (!empty($misProductos)) { ?>
            <div class="flex flex-wrap gap-10">
                <?php foreach ($misProductos as $producto) { ?>
                <div class="flex bg-[#FA8F88] p-6 rounded-xl w-[400px]">
                    <img src="../images/" alt="" class="rounded-full w-20 h-20 object-cover mr-8">
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
            <p>No hay nada</p>
            <?php } ?>
        </div>
    </div>
</div>

</body>
</html>
