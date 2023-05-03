<!-- Mostrar productos disponibles -->
<div id="productos">
    <div class="producto">
        <h3>Producto 1</h3>
        <p>Descripción del producto 1</p>
        <span class="precio">10.99</span>
        <button class="agregar-carrito" data-nombre="Producto 1" data-precio="10.99">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h3>Producto 2</h3>
        <p>Descripción del producto 2</p>
        <span class="precio">12.99</span>
        <button class="agregar-carrito" data-nombre="Producto 2" data-precio="12.99">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h3>Producto 3</h3>
        <p>Descripción del producto 3</p>
        <span class="precio">1.99</span>
        <button class="agregar-carrito" data-nombre="Producto 3" data-precio="1.99">Agregar al carrito</button>
    </div>
    <!-- Agregar más productos aquí -->
</div>

<!-- Mostrar carrito de compra -->
<div id="carrito">
    <h2>Carrito de compra</h2>
    <ul id="lista-carrito">
        <!-- Aquí se mostrarán los productos agregados al carrito -->
    </ul>
    <p id="total-carrito">Total: <span id="total-precio">0</span></p>
    <button id="vaciar-carrito">Vaciar carrito</button>
</div>

<input type="text" id="search" placeholder="Buscar producto">

<div id="productos">
</div>

<script src="../processes/js/carrito.js"></script>
<script src="../processes/js/buscador.js"></script>
