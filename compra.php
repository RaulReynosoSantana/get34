<?php
$productos = array(
    array("Manzanas", 1.00),
    array("Peras", 1.20),
    array("Bananas", 0.80),
    array("Naranjas", 1.50),
    array("Uvas", 2.50),
    array("Melocotones", 1.70),
    array("Piñas", 3.00),
    array("Mangos", 2.80),
    array("Fresas", 2.00),
    array("Cerezas", 2.30)
);

if (isset($_POST['producto'])) {
    $seleccionados = $_POST['producto'];
    echo "<h1>Ticket de Compra</h1>";
    echo "<ul>";
    $total = 0;
    foreach ($seleccionados as $indice) {
        $cantidad = $_POST['cantidad_'.$indice];
        $precioTotal = $cantidad * $productos[$indice][1];
        echo "<li>Producto: " . $productos[$indice][0] . ", Precio: " . $productos[$indice][1] . ", Cantidad: " . $cantidad . ", Total: " . $precioTotal . "</li>";
        $total += $precioTotal;
    }
    echo "</ul>";
    echo "<h2>Total a Pagar: " . $total . "</h2>";
} else {
    echo "No seleccionaste ningún producto.";
}
?>