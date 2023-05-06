<?php include './templates/header.php' ?>

    <div class="h-screen w-[87%] flex flex-col">
        <div class="w-[95%] flex flex-col mt-[55px]">
            <div class="flex justify-between w-full">
                <p class="text-5xl border-b-[5px] border-b-[#FA8F88] pb-2">PRODUCTOS</p>
                <a href="../views/form-login.html"><button class="bg-black text-white font-semibold px-4 h-10 rounded-md text-lg hover:bg-white hover:text-black transition-all ease-in-out duration-300">Iniciar sesión</button></a>
            </div>
            <div class="flex w-full my-14 items-center">
                <div class="">
                    <input type="text" id="search" placeholder="Buscar" class="bg-[#e9e8e8] w-96 rounded-lg outline-none px-3 py-1">
                </div>
            </div>
            <div class="flex flex-row flex-wrap gap-10">
                <div class="p-3 border-[1px] shadow-xl rounded-xl w-64">
                    <img src="../images/chococake.png" alt="" class="rounded-xl">
                    <div class="my-5 px-4">
                        <p class="text-[#282424] text-2xl font-bold">Pastel 1</p>
                        <p class="text-[#666666] font-light">Pastel de chocolate</p>
                        <p class="text-[#282424] text-4xl font-bold">$ 10.50</p>
                    </div>
                    <button class="bg-[#282424] w-full flex justify-center py-1 rounded-3xl hover:bg-[#666666] transition-all ease-in-out duration-300 "><img src="../images/add_cart.png" alt="" class=""></button>
                </div>
                <div class="p-3 border-[1px] shadow-xl rounded-xl w-64">
                    <img src="../images/chococake.png" alt="" class="rounded-xl">
                    <div class="my-5 px-4">
                        <p class="text-[#282424] text-2xl font-bold">Pastel 2</p>
                        <p class="text-[#666666] font-light">Pastel de chocolate</p>
                        <p class="text-[#282424] text-4xl font-bold">$ 12.75</p>
                    </div>
                    <button class="bg-[#282424] w-full flex justify-center py-1 rounded-3xl hover:bg-[#666666] transition-all ease-in-out duration-300 "><img src="../images/add_cart.png" alt="" class=""></button>
                </div>
                <div class="p-3 border-[1px] shadow-xl rounded-xl w-64">
                    <img src="../images/chococake.png" alt="" class="rounded-xl">
                    <div class="my-5 px-4">
                        <p class="text-[#282424] text-2xl font-bold">Pastel 3</p>
                        <p class="text-[#666666] font-light">Pastel de chocolate</p>
                        <p class="text-[#282424] text-4xl font-bold">$ 15.00</p>
                    </div>
                    <button class="bg-[#282424] w-full flex justify-center py-1 rounded-3xl hover:bg-[#666666] transition-all ease-in-out duration-300 "><img src="../images/add_cart.png" alt="" class=""></button>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="../processes/js/buscador.js"></script>
</html>
