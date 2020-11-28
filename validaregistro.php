<?php

	$nombre=$_POST['nombre'];
	$apellidos=$_POST['apellidos'];
    $ci= $_POST['ci'];
    $usuario= $_POST['usuario'];
    $pass= $_POST['contraseña'];

	require("conexion.php");
	$verusuario=mysqli_query($mysqli,"SELECT usuario FROM usuarios WHERE usuario='$usuario'");
	$verusuario=mysqli_num_rows($verusuario);
		
			if($verusuario>0){
				echo ' <script language="javascript">alert("este nombre de usuario se encuentra registrado");</script> ';
					echo "<script>location.href='registro.php'</script>";	
			}else{
				
				mysqli_query($mysqli,"INSERT INTO usuarios VALUES('','$nombre','$apellidos','$ci','$usuario','$pass')");

				echo ' <script language="javascript">alert("Registro exitoso");</script> ';
				
			}
?>

<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=ListarAdmin.php">