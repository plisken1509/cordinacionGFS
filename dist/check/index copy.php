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
            <!-- select tipo solicitud -->
            <div class="row">
                <div class="col-md-12 form-group mb-3">
                <label for="budget" class="col-form-label">Uniforme y comportamiento del personal</label>
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                </div>
            </div>
            <!-- FIN select tipo solicitud -->
              <!-- select tipo solicitud -->
            <div class="row">
                <div class="col-md-12 form-group mb-3">
                <label for="budget" class="col-form-label">Instalaciones</label>
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                </div>
            </div>
            <!-- FIN select tipo solicitud -->
           <!-- select tipo solicitud -->
           <div class="row">
                <div class="col-md-12 form-group mb-3">
                <label for="budget" class="col-form-label">Almacenamiento de alimentos</label>
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                </div>
            </div>
            
            <!-- FIN select tipo solicitud -->
            <!-- select tipo solicitud -->
           <div class="row">
                <div class="col-md-12 form-group mb-3">
                <label for="budget" class="col-form-label">Operaciones de producción</label>
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                </div>
            </div>
            
            <!-- FIN select tipo solicitud -->
             <!-- select tipo solicitud -->
           <div class="row">
                <div class="col-md-12 form-group mb-3">
                <label for="budget" class="col-form-label">Controles de limpieza</label>
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                </div>
            </div>
            
            <!-- FIN select tipo solicitud -->
            <!-- select tipo solicitud -->
           <div class="row">
                <div class="col-md-12 form-group mb-3">
                <label for="budget" class="col-form-label">Desechos líquidos y sólidos.</label>
                <select class="form-control" name="solicitud" required>
                    <option disabled="disabled" selected="selected" value="">Elija:</option>
                    <option value="SI">SI</option>
                    <option value="NO">NO</option>
                </select>
                </div>
            </div>            
            <!-- FIN select tipo solicitud -->
              <div class="mb-3" id="carga" style="display: none;">
                            <label for="formFile" class="form-label">Cargar el arhivo de la novedad:</label>
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
</html>