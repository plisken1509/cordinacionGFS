<?php 
include('conexion/conexion.php');
include('cabecera.php');
session_start();
$idusu=$_SESSION['usuarioId'];
 ?>

    <script type="text/javascript">
        function ConfirmarEliminar()
        {
            var observacion=document.getElementById("observacion").value;
            if (observacion=="") 
            {
                alert("Ingrese el morivo de la cancelacion");
                return false;
            }else{
             var respuesta= confirm("Esta seguro de cancelar la Visita");
            if(respuesta==true)
            {
                return true;
            }
            else
            {
                return false;
            }   
            }
            
        }
    </script>

<?php
    $query="select *,v.estado as vestado,v.id as vid,e.nombre as enombre,c.nombre as cnombre from visitas v,comedor c,empleados e where v.comId=c.id and v.empId=e.id and e.id=$idusu";
   // echo $query;
    $enviar=mysqli_query($db,$query);
    $contar1=mysqli_num_rows($enviar);
    if ($contar1>0) {
        $ver=mysqli_fetch_array($enviar);
    echo "<center><h1>Listado de Visitas</h1></center>";
    echo "<div class=container><center><table class=table >
        <thead>
    <tr>
      <th scope=col>ID</th>
      <th scope=col>Usuario</th>
      <th scope=col>Comedor</th>
      <th scope=col>Fecha</th>
      <th scope=col>Estado</th>
      <th scope=col>Evidencia</th>
      <th scope=col>Accion</th>
    </tr>
  </thead>";
    do{
    $id=$ver['vid'];
    $enombre=$ver['enombre'];
    $nombre=$ver['cnombre'];
    $fecha=$ver['fecha'];
    $estado=$ver['vestado'];
    $query2="select * from visitas where id=$id and estado='COMPLETO'";
    $enviar2=mysqli_query($db,$query2);
    $ver2=mysqli_num_rows($enviar2);

  
    if($ver2>0){
        echo '
        <tbody>
        <tr>
        <td>'.$id.'</td>
        <td>'.$enombre.'</td>
        <td>'.$nombre.'</td>
        <td>'.$fecha.'</td>
        <td>'.$estado.'</td>
        <td>Completo
                        </td>
        <td>
        </td>
        </tr>

    ';
    }else{
        $query21="select * from visitas where id=$id and estado='EN PROCESO'";
    $enviar21=mysqli_query($db,$query21);
    $ver21=mysqli_num_rows($enviar21);

  
    if($ver21>0){
        echo '
        <tbody>
        <tr>
        <td>'.$id.'</td>
        <td>'.$enombre.'</td>
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
        
        <td><form name="form1" id="form1" method="post" action="cancelarVisita.php" >
                            <center>
                            <input type="hidden" class="form-control"style="width:200px;" name="id" value="'.$id.'">
                            <input type="text" class="form-control" name="observacion" id="observacion" requiered>
                            <a href="cancelarVisita.php?id='.$id.'"><input type="submit" value="Cancelar" name="Eliminar"class="btn btn-sm btn-danger" onclick="return ConfirmarEliminar()"></a>
                                                       
            </form>
            </center> 
        </td>
        </tr>
    ';
       
    }else{
         echo '
        <tbody>
        <tr style="background-color: red;">
        <td>'.$id.'</td>
        <td>'.$enombre.'</td>
        <td>'.$nombre.'</td>
        <td>'.$fecha.'</td>
        <td>'.$estado.'</td>
        <td>Cancelado
                        </td>
        <td>
        </td>
        </tr>

    ';
    }
        
    }
    
    }while ($ver=mysqli_fetch_array($enviar)); 
        echo '</tbody></table></center></div>';    
    }else{
        echo "<center><h1>Listado de Visitas</h1></center>";
    echo "<div class=container><center><table class=table >
        <thead>
    <tr>
      <th scope=col>ID</th>
      <th scope=col>Usuario</th>
      <th scope=col>Comedor</th>
      <th scope=col>Fecha</th>
      <th scope=col>Estado</th>
      <th scope=col>Evidencia</th>
      <th scope=col>Accion</th>
    </tr>
  </thead>";
    }
?>

