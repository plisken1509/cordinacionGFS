<?php 
include('../conexion/conexion.php');
include('../cabecera.php');
session_start();
 ?>

    <script type="text/javascript">
        function ConfirmarEliminar()
        {
            var respuesta= confirm("Esta seguro de Eliminar La Categoria");
            if(respuesta==true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    </script>

<?php
    $query="select c.nombre,v.fecha,e.ruta,v.estado as vestado,emp.nombre as cliente,v.id as vid from visitas v,comedor c, evidencias e, empleados emp where v.comId=c.id and e.visId=v.id and emp.id=v.empId";
    $enviar=mysqli_query($db,$query);
    $ver=mysqli_fetch_array($enviar);
    echo "<center><h1>Listado de Visitas</h1></center>";
    echo "<div class=container><center><table class=table >
        <thead>
    <tr>
      <th scope=col>ID</th>
      <th scope=col>Comedor</th>
      <th scope=col>Empleado</th>
      <th scope=col>Fecha</th>
      <th scope=col>Estado</th>
      <th scope=col>Accion</th>
    </tr>
  </thead>";
    do{
    $id=$ver['vid'];
    $nombre=$ver['nombre'];
    $fecha=$ver['fecha'];
    $estado=$ver['vestado'];
    $ruta=$ver['ruta'];
    $cliente=$ver['cliente'];
    $query2="select * from visitas where id=$id and estado='Completo'";
    
    $enviar2=mysqli_query($db,$query2);
    $ver2=mysqli_num_rows($enviar2);

  
    
        echo '
        <tbody>
        <tr>
        <td>'.$id.'</td>
        <td>'.$nombre.'</td>
        <td>'.$cliente.'</td>
        <td>'.$fecha.'</td>
        <td>'.$estado.'</td>
        <td><a class="btn" href="../'.$ruta.'" target="_BLANK">Descargar</a>
        </td>
        </tr>

    ';
    
    }while ($ver=mysqli_fetch_array($enviar)); 
        echo '</tbody></table></center></div>';
?>

