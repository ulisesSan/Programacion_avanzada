<?php
include ("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" 
    crossorigin="anonymous">
</head>
<body>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id provedor</th>
                <th>Id Nombre</th>
                <th>Descripcion</th>
                <th>rfc</th>
            </tr>
            <tbody>
                <?php
                    $consulta = "select * from provedor where nombre like'%b%'";
                    $resultado = mysqli_query($connector,$consulta);
                    while($tab = mysqli_fetch_array($resultado)){?>
                    <tr>
                        <td><?php echo $tab['id_provedor']; ?></td>
                        <td><?php echo $tab['nombre']; ?></td>
                        <td><?php echo $tab['descripcion']; ?></td>
                        <td><?php echo $tab['rfc']; ?></td>
                    </tr>            
                <?php } ?>
            </tbody>
        </thead>
    </table>
    <button onclik.location="href''"></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" 
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>