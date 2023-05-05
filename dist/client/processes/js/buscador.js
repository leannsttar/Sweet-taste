
var inputBusqueda = document.getElementById("search");

inputBusqueda.addEventListener("input", filtrarProductos);

function filtrarProductos() {
    var textoBusqueda = inputBusqueda.value.toLowerCase();
    var productos = document.getElementsByClassName("p-3"); // Cambié la clase de "producto" a "p-3"
    for (var i = 0; i < productos.length; i++) {
        var producto = productos[i];
        var titulo = producto.getElementsByTagName("p")[0].textContent.toLowerCase(); // Cambié la etiqueta de "h3" a "p"
        if (titulo.includes(textoBusqueda)) {
            producto.style.display = "block";
        } else {
            producto.style.display = "none";

        }
    }
}


//No lo toquen xd, que hay que adaptarlo aún, pero sí funca