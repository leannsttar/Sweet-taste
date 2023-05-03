var carrito = [];

function agregarAlCarrito(nombre, precio, descripcion) {
    var producto = {
        nombre: nombre,
        precio: precio,
        descripcion: descripcion
    };
    carrito.push(producto);
    actualizarCarrito();
    guardarCarritoEnSesion();
}

function actualizarCarrito() {
    var listaCarrito = document.getElementById("lista-carrito");
    var totalCarrito = document.getElementById("total-precio");
    listaCarrito.innerHTML = "";
    var total = 0;
    for (var i = 0; i < carrito.length; i++) {
        var producto = carrito[i];
        var li = document.createElement("li");
        li.textContent = producto.nombre + " - Precio: $" + producto.precio.toFixed(2);
        listaCarrito.appendChild(li);
        total += producto.precio;
    }
    totalCarrito.textContent = total.toFixed(2);
}

function guardarCarritoEnSesion() {
    // Convierte el carrito a una cadena JSON y guárdalo en localStorage
    localStorage.setItem("carrito", JSON.stringify(carrito));
}

function mostrarProductosDelCarrito() {
    var carritoGuardado = localStorage.getItem("carrito");
    if (carritoGuardado) {
        carrito = JSON.parse(carritoGuardado);
        actualizarCarrito();
    }
}

mostrarProductosDelCarrito();

// Event listeners para los botones de agregar al carrito y vaciar carrito
var agregarBotones = document.getElementsByClassName("agregar-carrito");

for (var i = 0; i < agregarBotones.length; i++) {
    agregarBotones[i].addEventListener("click", function () {
        var nombre = this.getAttribute("data-nombre");
        var precio = parseFloat(this.getAttribute("data-precio"));
        var descripcion = this.getAttribute("data-descripcion");
        agregarAlCarrito(nombre, precio, descripcion);
    });
}

var vaciarBoton = document.getElementById("vaciar-carrito");

vaciarBoton.addEventListener("click", function () {
    vaciarCarrito();
});

function vaciarCarrito() {
    carrito = [];
    actualizarCarrito();
    guardarCarritoEnSesion();
}

// //Guardar datos

// var carrito = [];

// function agregarAlCarrito(nombre, precio, descripcion) {
//     var producto = {
//         nombre: nombre,
//         precio: precio,
//         descripcion: descripcion
//     };
//     carrito.push(producto);
//     actualizarCarrito();
//     guardarCarritoEnLocalStorage();
// }

// function guardarCarritoEnLocalStorage() {
//     localStorage.setItem("carrito", JSON.stringify(carrito));
// }




