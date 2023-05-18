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
    $query="select *,v.estado as vestado,v.id as vid from visitas v,comedor c where v.comId=c.id";
    $enviar=mysqli_query($db,$query);
    $ver=mysqli_fetch_array($enviar);
    echo "<center><h1>Listado de Visitas</h1></center>";
    echo "<div class=container><center><table class=table >
        <thead>
    <tr>
      <th scope=col>ID</th>
      <th scope=col>Comedor</th>
      <th scope=col>Fecha</th>
      <th scope=col>Estado</th>
      <th scope=col>Evidencia</th>
      <th scope=col>Accion</th>
    </tr>
  </thead>";
    do{
    $id=$ver['vid'];
    $nombre=$ver['nombre'];
    $fecha=$ver['fecha'];
    $estado=$ver['vestado'];
    $query2="select * from visitas where id=$id and estado='Completo'";
    $enviar2=mysqli_query($db,$query2);
    $ver2=mysqli_num_rows($enviar2);

  
    if($ver2>0){
        echo '
        <tbody>
        <tr>
        <td>'.$id.'</td>
        <td>'.$nombre.'</td>
        <td>'.$fecha.'</td>
        <td>'.$estado.'</td>
        <td>Completo
                        </td>
        <td><a href="eliminarCategoria.php?id='.$id.'"><input type="button" value="Eliminar" name="Eliminar"class="btn btn-sm btn-danger" onclick="return ConfirmarEliminar()"></a>
        </td>
        </tr>

    ';
    }else{
        echo '
        <tbody>
        <tr>
        <td>'.$id.'</td>
        <td>'.$nombre.'</td>
        <td>'.$fecha.'</td>
        <td>'.$estado.'</td>
        <td><form name="form1" id="form1" method="post" action="guardarEvidencias.php" enctype="multipart/form-data">
                            <center>
                            <input type="hidden" class="form-control"style="width:200px;" name="id" value="'.$id.'">
                                <input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="" style="width:200px;">
                                <button type="submit" class="btn btn-primary" style="white-space: nowrap;">Cargar</button>
                            </center>                            
            </form>
                        </td>
        <td><a href="eliminarCategoria.php?id='.$id.'"><input type="button" value="Eliminar" name="Eliminar"class="btn btn-sm btn-danger" onclick="return ConfirmarEliminar()"></a>
        </td>
        </tr>
    ';
    }
    
    }while ($ver=mysqli_fetch_array($enviar)); 
        echo '</tbody></table></center></div>';
?>

