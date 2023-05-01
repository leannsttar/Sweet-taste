var productos = [
    {
        nombre: "Producto 1",
        descripcion: "Descripción del producto 1",
        precio: 10.99
    },
    {
        nombre: "Producto 2",
        descripcion: "Descripción del producto 2",
        precio: 12.99
    },
    {
        nombre: "Producto 3",
        descripcion: "Descripción del producto 3",
        precio: 1.99
    }
];

var carrito = [];

function agregarAlCarrito(nombre, precio) {
    var producto = {
        nombre: nombre,
        precio: precio
    };
    carrito.push(producto);
    actualizarCarrito();
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

function vaciarCarrito() {
    carrito = [];
    actualizarCarrito();
}

var agregarBotones = document.getElementsByClassName("agregar-carrito");

for (var i = 0; i < agregarBotones.length; i++) {
    agregarBotones[i].addEventListener("click", function () {
        var nombre = this.getAttribute("data-nombre");
        var precio = parseFloat(this.getAttribute("data-precio"));
        agregarAlCarrito(nombre, precio);
    });
}

var vaciarBoton = document.getElementById("vaciar-carrito");

vaciarBoton.addEventListener("click", function () {
    vaciarCarrito();
});
