
    var inputBusqueda = document.getElementById("search");
    
    inputBusqueda.addEventListener("input", filtrarProductos);
    
    function filtrarProductos() {
        var textoBusqueda = inputBusqueda.value.toLowerCase(); 
        var productos = document.getElementsByClassName("producto");
        
        
        for (var i = 0; i < productos.length; i++) {
            var producto = productos[i];
            var titulo = producto.getElementsByTagName("h3")[0].textContent.toLowerCase(); 
            if (titulo.includes(textoBusqueda)) {
                producto.style.display = "block"; 
            } else {
                producto.style.display = "none"; 
            }
        }
    }

//No lo toquen xd, que hay que adaptarlo aún, pero sí funca