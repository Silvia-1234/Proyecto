<?php 


require("conexion.php");
if(isset($_GET['ci'])){
    $ci=$_GET['ci'];
    mysqli_query($mysqli,"DELETE FROM reservas WHERE ci=$ci");
    header("location: admin.php");
}
?>

