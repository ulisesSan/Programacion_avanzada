<?php
include ("src/php/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
    <style type="text/css">
        .boton_personalizado{
          text-decoration: none;
          padding: 10px;
          font-weight: 600;
          font-size: 20px;
          color: #ffffff;
          background-color: #1883ba;
          border-radius: 6px;
          border: 2px solid #0016b0;
        }
      </style>
</head>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id Pedido</th>
                <th>Producto</th>
                <th>Provedor</th>
                <th>Cantidad Pedido</th>
            </tr>
            <tbody>
                <?php
                    $consulta = "select distinct pedidos.id_pedido, productos.nombre as producto, provedor.nombre as provedor, pedidos.cantidad_pedido from pedidos, productos, provedor where   provedor.id_provedor = productos.id_provedor and productos.id_prod = pedidos.id_producto order by pedidos.cantidad_pedido asc;;";
                    $resultado = mysqli_query($connector,$consulta);
                    while($tab = mysqli_fetch_array($resultado)){?>
                    <tr>
                        <td><?php echo $tab['id_pedido']; ?></td>
                        <td><?php echo $tab['producto']; ?></td>
                        <td><?php echo $tab['provedor']; ?></td>
                        <td><?php echo $tab['cantidad_pedido']; ?></td>
                    </tr>            
                <?php } ?>
            </tbody>
        </thead>
    </table>
    <hr size="20" color="ffffff">
    <a class="boton_personalizado" href="src/php/caracteres.php"target="consulta">consulta 1</a>
    <hr size="20" color="ffffff">
    <div>
    <iframe src="centro.html" width="1100" height="500" name="consulta"></iframe>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" 
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>