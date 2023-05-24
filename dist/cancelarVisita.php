<?php
    include("conexion/conexion.php");
    $id=$_REQUEST['id'];
    $observacion=$_REQUEST['observacion'];
    $queryC="update visitas set estado='Cancelado $observacion' where id=$id";
    $enviarC=mysqli_query($db,$queryC);	
    header('location:listarvisitas.php');
?>