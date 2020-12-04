
<?php

$usuario = "root"; //en ste caso root por ser localhost
$password = "";  //contraseña por si tiene algun servicio de hosting 
$servidor = "localhost"; //localhost por lo del xampp
$basededatos ="proyecto"; //nombre de la base de datos


$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 



$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");



$nombre=$_POST['nombre']; 
$apellidos=$_POST['apellidos'];
$ci=$_POST['ci'];
$telefono=$_POST['telefono'];
$destino=$_POST['destino'];
$hora=$_POST['hora'];
$fecha=$_POST['fecha'];
$precio=$_POST['precio']; 

//sentencia sql
 $sql="INSERT INTO reservas VALUES ('$nombre','$apellidos','$ci','$telefono','$destino','$hora','$fecha','$precio')"; 

$ejecutar=mysqli_query($conexion, $sql);



if(!$ejecutar){
     echo '<script>alert("huvo algun error")</script> ';
     echo "<script>location.href='precios.php'</script>";	
}else{
    echo '<script>alert("Su reserva se a realizado correctamente ")</script> ';
    
    echo "<script>location.href='index.php'</script>";	
}
 
?>