var inputBusqueda = document.getElementById("search");

inputBusqueda.addEventListener("input", filtrarProductos);

function filtrarProductos() {
    var textoBusqueda = inputBusqueda.value.toLowerCase();
    var productos = document.querySelectorAll('p.p-3');
    for (var i = 0; i < productos.length; i++) {
        var nombreProducto = productos[i].textContent.trim();
        if (nombreProducto.toLowerCase().includes(textoBusqueda)) {
            productos[i].style.display = "block";
            
        } else {
            productos[i].style.display = "none";
        }
    }
}
