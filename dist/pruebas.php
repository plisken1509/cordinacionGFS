
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body >
<div class="container-fluid " >
    <div class="row flex-nowrap " style="height:710px">
        <div class="col-auto col-md- col-xl-2 px-sm-2 px-0 bg-primary ">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu Farmacia</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item active">
                     <a class="nav-link px-0 align-middle text-white" href="Principal.jsp"><i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link px-0 align-middle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                       <i class="fas fa-id-card"></i> Clientes
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="ControladorClientes?accion=listar">Administrar</a>
                        <a class="dropdown-item" href="#">Nuevo</a>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link px-0 align-middle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                       <i class="fas fa-briefcase-medical"></i> Productos
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="ControladorProductos?accion=listar">Administrar</a>
                        <a class="dropdown-item" href="#">Nuevo</a>
                        
                        
                    </div>
                    </li>
                 <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link px-0 align-middle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                       <i class="fas fa-money-check"></i> Ventas
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Listado</a>
                        <a class="dropdown-item" href="#">Nueva Venta</a>
                        
                        
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link px-0 align-middle text-white" href="#" id="navbardrop" data-toggle="dropdown">
                       <i class="fas fa-address-book"></i> Reportes
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Reporte Clientes</a>
                        <a class="dropdown-item" href="#">Reporte Ventas</a>     
                    </div>
                    </li>
                    <li class="nav-item active ">
                     <a class="nav-link nav-link px-0 align-middle text-white" href="ControladorLogin?accion=logout"><i class="fas fa-door-open"></i> Salir <span class="sr-only">(current)</span></a>
                 </li>
                    
                   
                    
                            

            </div>
        </div>
        <div class="col py-3" >
            Content area...
        </div>
    </div>
</div>

</body>
</html>
