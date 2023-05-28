<!DOCTYPE html>
<html>

<head>
    <title>Tienda de Frutas</title>
    <style>
    body {
        background: rgb(158, 186, 4);
        background: radial-gradient(circle, rgba(158, 186, 4, 1) 0%, rgba(14, 122, 28, 1) 100%);
        font-family: Arial, sans-serif;
    }

    h1 {
        text-align: center;
        color: white;
    }

    table {
        margin: auto;
        border-collapse: collapse;
        width: 60%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: center;
    }

    th {
        background-color: #4caf50;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    button {
        display: block;
        width: 200px;
        height: 50px;
        margin: 20px auto;
        background: linear-gradient(to right, #8dc26f, #76b852);
        color: white;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }
    </style>
</head>

<body>
    <h1 style="text-align:center; color:#ffffff;">Bienvenido a la Tienda de Frutas</h1>
    <form method="POST" action="compra.php">
        <table>
            <tr>
                <th>Seleccionar</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
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

            for ($i = 0; $i < count($productos); $i++) {
                echo "<tr>";
                echo "<td><input type='checkbox' name='producto[]' value='" . $i . "'></td>";
                echo "<td>" . $productos[$i][0] . "</td>";
                echo "<td>" . $productos[$i][1] . "</td>";
                echo "<td><input type='number' name='cantidad_" . $i . "' min='0' value='0'></td>";
                echo "</tr>";
            }
            ?>
        </table>
        <button type="submit">Comprar</button>
    </form>
</body>

</html>