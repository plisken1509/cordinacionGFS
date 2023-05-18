<?php
include '../conexion/conexion.php';
header("Content-type: application/vnd.ms-excel;charset=utf-8");
header("Content-Disposition: attachment; filename=reporte_".time().".xls");
header("Pragma: no-cache");
header("Expires: 0");  


$sentencia=$_REQUEST['fechaini'];
$sentencia2=$_REQUEST['fechafin'];



$resultados=mysqli_query($db,"select v.id,c.nombre as comedor,e.nombre as cliente,v.fecha,v.estado as vestado from visitas v 
                              JOIN empleados e ON v.empId=e.id 
                              JOIN comedor c ON c.id=v.comId
                              where v.fecha between '$sentencia' and '$sentencia2';");
   
echo 
"
   
  <table width=\"100%\" border=\"1\">
    <tr>
      <td><b><center>ID</center></b></td>
      <td><b><center>Comedor</center></b></td>
      <td><b><center>Empleado</center></b></td>
      <td><b><center>Fecha</center></b></td>
      <td><b><center>Estado</center></b></td>
    </tr>";
while($consulta = mysqli_fetch_array($resultados))
{
echo 
"
    <tr>
      <td>".$consulta['id']."</td>
      <td>".$consulta['comedor']."</td>
      <td>".$consulta['cliente']."</td>
      <td>".$consulta['fecha']."</td>
      <td>".$consulta['vestado']."</td>
    </tr>
  
";
}
echo "</table>";
