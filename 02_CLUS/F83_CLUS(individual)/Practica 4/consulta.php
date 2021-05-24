<?php 
include ("Source/PHP/conexion.php")
?>
<html>
<head>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Id Pedidos</th>
            <th>Id Producto</th>
            <th>Cantidad</th>
            <th>Fecha</th>
        </tr>
        <tbody>
            <?php
            $consulta = "select * from pedidos";
            $resultado = mysqli_query($connector,$consulta);
            while($tab = mysqli_fetch_array($resultado)){?>
                <tr>
                    <td><?php echo $tab['id_pedido']; ?></td>
                    <td><?php echo $tab['id_producto']; ?></td>
                    <td><?php echo $tab['cantidad_pedido']; ?></td>
                    <td><?php echo $tab['fecha']; ?></td>
                </tr>            
            <?php } ?>
        </tbody>
    </thead>
</table>
<button onclick="location.href='index.php'">Regresar</button>
</body>
</html>