<?php 
include('../conexion/conexion.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Check List Control del Comedor</title>
</head>
<body>
<div class="content">
    
    <div class="container">
       
      <div class="row align-items-stretch justify-content-center no-gutters">
      
        <div class="col-md-7">
        
          <div class="form h-100 contact-wrap p-5">
          <img src="./images/dhl.jpg" alt=""  width="100%">
          <br><br><br>
            <h3 class="text-center">Check List Control del Comedor</h3>
            <form method="POST" action="guardar.php" enctype="multipart/form-data" id="usrform">
            <div class="row">
                <div class="col-md-12 form-group mb-3">
                
                <div class="alert alert-primary" role="alert">
  Comedor
  <select class="form-control" name="comedor" id="comedor">
       <option>Seleccione Comedor</option>
        <?php
        $querry="select * from comedor";
$enviar=mysqli_query($db,$querry);
$ver=mysqli_fetch_array($enviar);
        do {
          $id=$ver['id'];
           $nombre=$ver['nombre'];
           echo "<option value='$id'>$nombre</option>";
         } while ($ver=mysqli_fetch_array($enviar)); 
 ?>
      </select>
</div>
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                
                </div>
                <form method='post' action='' enctype="multipart/form-data">
   <input type="file" id='files' name="files[]" multiple><br>
   
</form>
            </div>    
            <!-- select tipo solicitud -->
            <div class="row">
                <div class="col-md-12 form-group mb-3">
                
                <div class="alert alert-primary" role="alert">
  Uniforme y comportamiento del personal
</div>
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                
                </div>
                <form method='post' action='' enctype="multipart/form-data">
   <input type="file" id='files' name="files[]" multiple><br>
   
</form>
            </div>
            <!-- FIN select tipo solicitud -->
              <!-- select tipo solicitud -->
            <div class="row">
                <div class="col-md-12 form-group mb-3">
                <div class="alert alert-primary" role="alert">
Instalaciones</div>
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                </div>
                <form method='post' action='' enctype="multipart/form-data">
   <input type="file" id='files' name="files[]" multiple><br>
   
</form>
            </div>
            <!-- FIN select tipo solicitud -->
           <!-- select tipo solicitud -->
           <div class="row">
                <div class="col-md-12 form-group mb-3">
                    <div class="alert alert-primary" role="alert">
  Almacenamiento de alimentos
</div>
               
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                </div>
                <form method='post' action='' enctype="multipart/form-data">
   <input type="file" id='files' name="files[]" multiple><br>

</form>
            </div>
            
            <!-- FIN select tipo solicitud -->
            <!-- select tipo solicitud -->
           <div class="row">
                <div class="col-md-12 form-group mb-3">
                    <div class="alert alert-primary" role="alert">
  Operaciones de producción
</div>
                
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>                
                </div>
                <form method='post' action='' enctype="multipart/form-data">
   <input type="file" id='files' name="files[]" multiple><br>

</form>
            </div>
            
            <!-- FIN select tipo solicitud -->
             <!-- select tipo solicitud -->
           <div class="row">
                <div class="col-md-12 form-group mb-3">
                <div class="alert alert-primary" role="alert">
  Controles de Limpieza
</div>
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                </div>
                <form method='post' action='' enctype="multipart/form-data">
   <input type="file" id='files' name="files[]" multiple><br>
 
</form>
            </div>
            
            <!-- FIN select tipo solicitud -->
            <!-- select tipo solicitud -->
           <div class="row">
                <div class="col-md-12 form-group mb-3">
                <div class="alert alert-primary" role="alert">
  Operaciones de producción
Desechos líquidos y sólidos</div>                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                </div>
                <form method='post' action='' enctype="multipart/form-data">
   <input type="file" id='files' name="files[]" multiple><br>
  
</form>
            </div>            
            <!-- FIN select tipo solicitud -->
              <div class="mb-3" id="carga" style="display: none;">
                           <div class="alert alert-primary" role="alert">
  Archivo de Novedades
</div>
                            <input class="form-control" name="archivo" type="file" id="formFile" accept="image/*">
                          </div>
              <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                <button class="btn btn-block btn-primary rounded-0 py-2 px-4" name="enviar" type="submit">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function mostrar(id) {
            if (id == "si") {
                $("#carga").show();
            } 
            if (id == "no") {
                $("#carga").hide();
            }        
        }
    </script>
</body>
<script>
$(document).ready(function(){
$('#submit').click(function(){
   var form_data = new FormData();
   // Read selected files
   var totalfiles = document.getElementById('files').files.length;
   for (var index = 0; index < totalfiles; index++) {
      form_data.append("files[]", document.getElementById('files').files[index]);
 $('#preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
   }
   // AJAX request
   $.ajax({
     url: 'ajaxUpload.php', 
     type: 'post',
     data: form_data,
     dataType: 'json',
     contentType: false,
     processData: false,
     success: function (response) {
        alert("Uploaded SuccessFully");
        console.log(response);
     }
   });
});
});
</script>
</html>