<?php

include("conexion.php");
if (isset($_POST['enviar'])){
    
    
    $Nombre = $_POST['Nombre'];
    $Descripción = $_POST['Descripción'];
    $Precio = $_POST['Precio'];
    $Imagen = $_POST['Imagen'];
    
    $consulta = "insert into productos(Nombre, Descripción, Precio, Imagen) values('$Nombre', '$Descripción', '$Precio', '$Imagen')";
    $Resultado = mysqli_query($conexion, $consulta); 
    
}

?>