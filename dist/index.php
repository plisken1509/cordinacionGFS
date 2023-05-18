<?php

include("conexion/conexion.php");
session_start();
if (isset($_POST['enviar'])) {
    $usuario=$_POST['username'];
    $clave=$_POST['password'];
    $query="select * from empleados where cedula='$usuario' and clave='$clave'";
    $enviar=mysqli_query($db,$query);
    $ver=mysqli_num_rows($enviar);
    if($ver>0){
    $_SESSION['usuario']=$usuario;

    $enviar=mysqli_query($db,$query);
    $ver=mysqli_fetch_array($enviar);
    $_SESSION['usuario']=$ver['nombre'];
    $_SESSION['usuarioId']=$ver['id'];
    $_SESSION['perfil']=$ver['perfil'];
    $perfil=$ver['perfil'];
    header('location:principalC.php');
    
}else{
    echo '<script> alert("Datos Erroneos")</script>';
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Coordinacion GFS</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/estiloIndex3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            
</head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image:url('f2.jpg');
background-size: 100% 100%;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 80%;
align-content: center;
}

.card{
height: 300px;
margin-top: 200px;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color:  #202020;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #46e702;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #46e702;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>
<body>
<div class="container">
    
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <br>
                <h3>Coordinacion GFS</h3>
            </div>
            <div class="card-body">
                <form method="post" name="frmUsuarios">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Cedula" name="username" maxlength="30" required>
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <br><span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" maxlength="30" id="password" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="enviar" value="Ingresar" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            
        </div>
        
    </div>
    
</div>
</body>
</html>
