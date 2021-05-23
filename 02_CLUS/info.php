<!DOCTYPE html>
<html>
    <head>
        <title>Conexion</title>
    </head>
    <body>
    <button onclick="location.href='F83_CLUS(individual)/Practica 1/center.html'">Regresar</button>
        <h1>
            <?php
            $mysqli = new mysqli("localhost", "root", "1234", "mysql");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            echo "Conexion Exitosa: \n";
            echo $mysqli->host_info . "\n";

            $mysqli = new mysqli("127.0.0.1", "root", "1234","mysql");
            if ($mysqli->connect_errno) {
                echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            echo $mysqli->host_info . "\n";
            
            phpinfo();
            ?>
            
</h1>

    </body>
</html>
