<?php 
include('cabecera.php');
include("conexion/conexion.php");
session_start();
$usuId=$_SESSION['usuarioId'];
$querry="select * from comedor";
$enviar=mysqli_query($db,$querry);
$ver=mysqli_fetch_array($enviar);
if (isset($_POST['enviar'])) {
    $comedor=$_POST['comedor'];
    $fecha=$_POST['fecha'];
    $query="insert into visitas values(0,'$usuId','$comedor','$fecha','EN PROCESO')";
    $enviar=mysqli_query($db,$query);
}
 ?>
 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registro Visitas</title>
  <link rel="stylesheet" href="./style2.css">
<style type="text/css">
  
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Visitas</h3>
    <h4>Registro de Visitas!</h4>
    <fieldset>
      <select class="form-control" name="comedor" id="comedor">
       <option>Seleccione Comedor</option>
        <?php
        do {
          $id=$ver['id'];
           $nombre=$ver['nombre'];
           echo "<option value='$id'>$nombre</option>";
         } while ($ver=mysqli_fetch_array($enviar)); 
 ?>
      </select> 
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="date" class="form-control" name="fecha" required>
    </fieldset>
    <fieldset>
    </fieldset>
    <fieldset>
      <button name="enviar" type="submit" id="enviar" data-submit="...Sending">Guardar</button>
    </fieldset>
  </form>
 
  
</div>
<!-- partial -->
  
</body>
</html>

