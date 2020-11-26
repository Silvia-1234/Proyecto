<?php

session_start();
	require("conexion.php");

	$usuario=$_POST['usuario'];
	$con=$_POST['contraseña'];


	$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE usuario='$usuario'");
	if($f=mysqli_fetch_assoc($sql)){

		if($con==$f['pass']){
            $_SESSION['usuario']=$f['usuario'];

            echo '<script>alert("Bienvenid@")</script> ';
            echo "<script>location.href='admin.php'</script>";
        
		
		}else{
           
            
            echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
            echo "<script>location.href='sesion.php'</script>";
        }

	}


?>