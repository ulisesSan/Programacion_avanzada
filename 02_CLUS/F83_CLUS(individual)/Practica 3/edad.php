<?php 
//utilizar la ñ 
header('Content-Type: text/html; charset=UTF-8');
//se leen los datos por el metodo post enviados por las cajas de texto en html
 $EntradaA = $_POST['tiempo'];
 $Entradatexto = $_POST['Mes'];
 
 //convertir todos los caracteres en mayuscula para comparar 
 $Entradatexto2 = strtoupper($Entradatexto);

 //swicth para la comparacion y operaciones para mayor exactitud del mes
switch ($Entradatexto2) {

    //solo voy a documentar un mes ya que es lo mismo para todos 
    case 'ENERO':
        //valor por mes
        $EntradaM=1;

        
        $Resultado = 0;
//se lee el mes y año actual
 $Mes = date("m");
 $Año = date("Y");
//operaciones de resta 
$Resultado = $Año - $EntradaA;
//comparar para saber si ya cumplio este año
if ($EntradaM >= $Mes) {
    $Resultado--;
    //impresion con un poco formato 
}echo("<h1>Tu Edad es; $Resultado Años Cumplidos </h1> ");
        break;
    case 'FEBRERO':
        $EntradaM=2;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    case 'MARZO':
        $EntradaM=3;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    case 'ABRIL':
        $EntradaM=4;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    case 'MAYO':
        $EntradaM=5;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    case 'JUNIO':
        $EntradaM=6;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    case 'JULIO':
        $EntradaM=7;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    case 'AGOSTO':
        $EntradaM=8;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    case 'SEPTIEMBRE':
        $EntradaM=9;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    case 'COTUBRE':
        $EntradaM=10;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    case 'NOVIEMBRE':
        $EntradaM=11;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    case 'DICIEMBRE':
        $EntradaM=12;

        
        $Resultado = 0;

 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;
if ($EntradaM >= $Mes) {
    $Resultado--;
}echo("<h1>Tu Edad es; $Resultado Años Cumpldos </h1> ");
        break;
    
//mandar error 
    default:
    printf("<h1>Los datos son incorrectos </h1>");
        break;
}

 
?>