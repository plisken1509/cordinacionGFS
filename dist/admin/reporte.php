<?php 
include('cabecera.php');
include("../conexion/conexion.php");
session_start();

 ?>
 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registro Visitas</title>
  <link rel="stylesheet" href="../admin/style2.css">
<style type="text/css">
  
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">  
  <form id="contact" action="exportar_excel.php" method="post">
    <h3>Visitas</h3>
    <h4>Reporte de Visitas!</h4>
    <fieldset>
      <select class="form-control" name="comedor" id="comedor">
       <option>Seleccione el Coordinador</option>
        <?php
        $usuId=$_SESSION['usuarioId'];
        $querry="select * from empleados";
        $enviar=mysqli_query($db,$querry);
        $ver=mysqli_fetch_array($enviar);
        do {
          $id=$ver['id'];
           $nombre=$ver['nombre'];
           echo "<option value='$id'>$nombre</option>";
         } while ($ver=mysqli_fetch_array($enviar)); 
 ?>
      </select> 
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="date" class="form-control" name="fechaini" required>
    </fieldset>
    <fieldset>
    <input placeholder="Your Web Site starts with http://" type="date" class="form-control" name="fechafin" required>
    </fieldset>
    <fieldset>
      <button name="enviar" type="submit" id="enviar" data-submit="...Sending">Guardar</button>
    </fieldset>
  </form>
 
  
</div>
<!-- partial -->
  
</body>
</html>

