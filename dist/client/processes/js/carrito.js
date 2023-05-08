// var productos = [
//     { nombre: "Producto 1", descripcion: "Descripción del producto 1", precio: 10.50 },
//     { nombre: "Producto 2", descripcion: "Descripción del producto 2", precio: 12.75 },
//     { nombre: "Producto 3", descripcion: "Descripción del producto 3", precio: 15.00 }
// ];

// var carrito = [];

// function agregarAlCarrito(nombre, precio) {
//     var producto = {
//         nombre: nombre,  
//         precio: precio,
//         cantidad: 1
//     };
//     carrito.push(producto);
//     localStorage.setItem("carrito", JSON.stringify(carrito));
//     printCartItems();
// }

// const addToCartBtn = document.querySelector(".agregar-carrito");

// addToCartBtn.addEventListener("click", function () {
//     agregarAlCarrito(productos[0].nombre, productos[0].precio);
// });

// const cartItemsContainer = document.querySelector("#cart-items-container");

// function printCartItems() {
//     const cart = JSON.parse(localStorage.getItem("carrito")) || [];

//     let html = "";

//     for (let i = 0; i < cart.length; i++) {
//         const product = cart[i];

//         html += `
//             <div class="flex bg-[#FA8F88] p-6 rounded-xl w-full">
//                 <img src="../images/chococake.png" alt="" class="rounded-full w-20 h-20 object-cover mr-8">
//                 <div class="flex space-x-16 items-center justify-between w-full">
//                     <div class="space-y-2">
//                         <p class="text-2xl font-semibold">${product.nombre}</p>
//                         <p class="text-lg">$${product.precio.toFixed(2)}</p>
//                     </div>
//                     <div class="flex w-full justify-end items-center space-x-16">
//                         <div class="flex space-x-3 items-center">
//                             <p class="font-bold text-xl"></p>
//                             <p class="bg-white px-4 py-1 rounded-md">${product.cantidad}</p>
//                             <p class="font-bold text-xl"></p>
//                         </div>
//                         <button class="cursor-pointer"><img src="../images/x.svg" alt="" class="w-5 h-5 "></button>
//                     </div>
//                 </div>
//             // </div>
//         `;
//     }

//     cartItemsContainer.innerHTML = html;
// }

// function actualizarCarrito() {
//     var listaCarrito = document.getElementById("lista-carrito");
//     var totalCarrito = document.getElementById("total-precio");
//     listaCarrito.innerHTML = "";
//     var total = 0;
//     for (var i = 0; i < carrito.length; i++) {
//         var producto = carrito[i];
//         var li = document.createElement("li");
//         li.textContent = producto.nombre + " - Precio: $" + producto.precio.toFixed(2);
//         listaCarrito.appendChild(li);
//         total += producto.precio;
//     }
//     totalCarrito.textContent = total.toFixed(2);
//     localStorage.setItem("carrito", JSON.stringify(carrito)); // Ahora se actualiza el carrito en el almacenamiento local
// }


// function vaciarCarrito() {
//     carrito = [];
//     actualizarCarrito();
// }

// var agregarBotones = document.getElementsByClassName("agregar-carrito");

// for (var i = 0; i < agregarBotones.length; i++) {
//     agregarBotones[i].addEventListener("click", function () {
//         var nombre = this.getAttribute("data-nombre");
//         var precio = parseFloat(this.getAttribute("data-precio"));
//         agregarAlCarrito(nombre, precio);

// });
// }

// printCartItems(); //Para que se muestre el carrito al cargar la página