<?php
    // Incluimos los datos de conexión y las funciones:
    include("conexion/conexion.php");
    if(isset($_POST["enviar"])){
        $solicitud = $_POST["solicitud"];
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $motivo = $_POST["motivo"];
        $fecha=date('Y-m-d');
        echo($fecha);

        // get details of the uploaded file
        $upload_dir = "/images/documentos/";
        $fileTmpPath = $_FILES['archivo']['tmp_name'];
        $fileName = $_FILES['archivo']['name'];
        $fileSize = $_FILES['archivo']['size'];
        $fileType = $_FILES['archivo']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $direccion=$upload_dir.$fileName;
        move_uploaded_file($_FILES['archivo']['tmp_name'],'images/documentos/'.$_FILES['archivo']['name']);
   
		

        $query="INSERT INTO buzon (id, nombre, correo, fecha, solicitud, motivo, imagen) VALUES (NULL, '$nombre', '$correo', '$fecha', '$solicitud', '$motivo', '$direccion');";
        $enviar=mysqli_query($db,$query);
        header('location:index.php');
    }