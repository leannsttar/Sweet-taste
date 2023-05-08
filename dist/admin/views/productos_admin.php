<?php
// include "../../config/db.php";
// $conexionBD = BD::crearInstancia();

include "../processes/AddItem.php";
include "../processes/DeleteItem.php";
include "../processes/UpdateItem.php";

// $misproductos = mysqli_query($conexionBD, "Select * from productos");
// $productosdp = [];

// while ($pasteles = mysqli_fetch_assoc($misproductos)){
//     $productosdp[] = $pasteles;
// }


//abajo un foreach, para mostrar las cards y los productos disponibles :D (cuando ya te terminado todo)

include "./templates/header.php"
?>

<script>
var inputBusqueda = document.getElementById("search");

inputBusqueda.addEventListener("input", filtrarProductos);

function filtrarProductos() {
    var textoBusqueda = inputBusqueda.value.toLowerCase();
    var productos = document.getElementsByClassName("p-3");
    for (var i = 0; i < productos.length; i++) {
    var producto = productos[i];
    var titulo = producto.getElementsByTagName("p")[0].textContent.toLowerCase();
    if (titulo.includes(textoBusqueda)) {
        producto.style.display = "block";
      } else {
        producto.style.display = "none";
      }
    }
  }
</script>


    <div class="h-screen w-[87%] flex flex-col">
        <div class="w-[95%] flex flex-col mt-[55px]">
            <div class="flex justify-between w-full">
                <p class="text-5xl border-b-[5px] border-b-[#FA8F88] pb-2">PRODUCTOS</p>
                <div class="flex items-center space-x-3">
                    <p class="text-2xl">Administrador</p>
                    <img src="../images/user.svg" alt="">
                </div>
            </div>
            <div class="flex w-full my-14 items-center">
                <div class="">
                <input type="text" id="search" placeholder="Buscar" class="bg-[#e9e8e8] w-96 rounded-lg outline-none px-3 py-1">
                </div>
            </div>
            <div>
                <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="mb-10 bg-black text-white font-semibold px-7 h-12 rounded-md text-lg hover:bg-white hover:text-black transition-all ease-in-out duration-300 " type="button" data-modal-toggle="authentication-modal">Agregar producto</button>
                <div id="authentication-modal" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="bg-white rounded-lg shadow relative dark:bg-[#000]">
                            <div class="flex justify-end p-2">
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                </button>
                            </div>
                            <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="../processes/AddItem.php" method="post">
                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Agregar producto</h3>
                                <div>
                                    <label for="nombre" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nombre del producto" required="">
                                </div>
                                <div>
                                    <label for="descripcion" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Descripción</label>
                                    <input type="text" name="descripcion" id="descripcion" placeholder="Pan relampago" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                </div>
                                <div>
                                    <label for="precio" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Precio</label>
                                    <input type="number" name="precio" id="precio" min="0.01" max="100" step="0.01" placeholder="$20.00" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                </div>
                                <button name="accion" value="agregar" type="submit" class="w-full text-white bg-[#FA8F88] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#FA8F88] dark:hover:bg-[#FF5146] dark:focus:ring-blue-800">Agregar producto</button>
                            </form>
                        </div>
                    </div>
                </div> 
                <div class="space-y-10">
                    <?php foreach ($allproducts as $product) { ?>
                    <div class="flex items-center justify-between border-b-4 pb-4">

                        <div class="flex items-center justify-start gap-x-16 w-full">
                            <p class="text-3xl font-bold"><?php echo $product['Id'] ?></p>
                            <img src="../../client/images/chococake.png" alt="" class="w-20 h-20 object-cover">
                            <p class="p-3 text-3xl font-bold mr-52 w-52"><?php echo $product['nombre'] ?></p>
                            <div>
                                <p class="text-3xl text-[#666666] font-bold">$<?php echo $product['precio'] ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-x-10">
                        <button type="button" data-modal-target="edit-modal<?php echo $product['Id']?>" data-modal-toggle="edit-modal<?php echo $product['Id']?>"><img src="../images/edit.svg" alt=""></button>
                        <div id="edit-modal<?php echo $product['Id']?>" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
                            <div class="relative w-full max-w-md px-4 h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="bg-white rounded-lg shadow relative dark:bg-[#000]">
                                    <div class="flex justify-end p-2">
                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="edit-modal<?php echo $product['Id']?>">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                        </button>
                                    </div>
                                    <form class="space-y-6 px-6 lg:px-8 pb-4 sm:pb-6 xl:pb-8" action="" method="post">
                                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Editar producto</h3>
                                        <div>
                                            <label for="nombre" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Nombre</label>
                                            <input type="text" name="nombre" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="<?php echo $product['nombre']?>" required="">
                                        </div>
                                        <div>
                                            <label for="descripcion" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Descripción</label>
                                            <input type="text" name="descripcion" id="descripcion" value="<?php echo $product['descripcion']?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                        </div>
                                        <div>
                                            <label for="precio" class="text-sm font-medium text-gray-900 block mb-2 dark:text-gray-300">Precio</label>
                                            <input type="number" name="precio" id="precio" min="0.01" max="100" step="0.01" value="<?=$product['precio'] ?>" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required="">
                                        </div>
                                        <input type="hidden" value="<?php echo $product['Id']?>" name="Id">
                                        <button type="submit" name="accion" value="actualizar" class="w-full text-white bg-red-200 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Editar producto</button>
                                    </form>
                                </div>
                            </div>
                        </div> 

                        <button id="deleteButton" data-modal-toggle="deleteModal<?php echo $product['Id']?>" type="button"><img src="../images/delete.svg" alt=""></button>
                            <div id="deleteModal<?php echo $product['Id']?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-md h-full md:h-auto ">
                                    <!-- Modal content -->
                                    <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                        <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal<?php echo $product['Id']?>">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                        <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
                                        <div class="flex justify-center items-center space-x-4">
                                            <button data-modal-toggle="deleteModal<?php echo $product['Id']?>" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                No, cancel
                                            </button>
                                            <form action="" method="get">
                                            <input type="hidden" value="<?php echo $product['Id']?>" name="Id">
                                                <button data-modal-toggle="deleteModal<?php echo $product['Id']?>" type="submit" class="py-2 px-3 text-sm font-medium text-gray-500 bg-red-600 rounded-lg border border-gray-200 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-red-600 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-red-400 dark:focus:ring-gray-600">
                                                    Yes, sure
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../../client/processes/js/buscador-admin.js"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>
    <script>
    </script>
</body>
</html>