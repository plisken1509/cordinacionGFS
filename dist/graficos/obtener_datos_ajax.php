<?php
include '../conexion/conexion.php';
$query="select * from empleados";
$enviar=mysqli_query($db,$query);
$ver=mysqli_fetch_array($enviar);

do {
    $id=$ver['id'];
    
} while ($ver=mysqli_fetch_array($enviar));
// Valores con PHP. Estos podrían venir de una base de datos o de cualquier lugar del servidor
$etiquetas = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Septiembre","Septiembre","Septiembre"];
$datosVentas = [0,5,10,15,20,25,30];
// Ahora las imprimimos como JSON para pasarlas a AJAX, pero las agrupamos
$respuesta = [
    "etiquetas" => $etiquetas,
    "datos8" => $datosVentas,
];
echo json_encode($respuesta);
