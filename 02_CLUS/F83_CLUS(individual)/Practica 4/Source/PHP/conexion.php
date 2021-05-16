<?php
$connector = mysqli_connect(
    'localhost',
    'root',
    '',
    'f83_15'
);
if(isset($connector)){
    echo '<h1>La base de datos a sido conectada</h2>';
}
?>
