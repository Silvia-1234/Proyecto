<?php 


require("conexion.php");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    mysqli_query($mysqli,"DELETE FROM mensajes WHERE id=$id");
    header("location: mensajesadmin.php");
}
?>