<?php 
header('Content-Type: text/html; charset=UTF-8');
 $EntradaA = $_POST['tiempo'];
 $Entradatexto = $_POST['Mes'];
 
 $Entradatexto2 = strtoupper($Entradatexto);

switch ($Entradatexto2) {

    case 'ENERO':
        $EntradaM=1;

        
        $Resultado = 0;
 $Mes = date("m");
 $Año = date("Y");

$Resultado = $Año - $EntradaA;

if ($EntradaM >= $Mes) {
    $Resultado--;
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