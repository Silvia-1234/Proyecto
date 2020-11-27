<?php include("include/EncabezadoAdmin.php") ?>

					
<center>



<div >
	
		
	<div >

		<div >
		
		<div >
		<div ><h2> Contactos registrados</h2>	</div>
		<hr />
		<div >
		


			<center>

		<?php

				require("conexion.php");
				$sql=("SELECT * FROM mensajes");
	
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='10'; class='btn btn-primary';>";
					echo "<tr class='warning'>";
					    echo "<td><font color='000000' size='5'>nombre<br></font></td>";
						echo "<td><font color='6D6D71' size='5'>correo<br></font></td>";
						echo "<td><font color='000000' size='5'>mensaje<br></font></td>";


					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td><font color='000000'>$arreglo[0]</</td>";
				    	echo "<td><font color='6D6D71'>$arreglo[1]</</td>";
				    	echo "<td><font color='000000'>$arreglo[2]</</td>";

						

						
					echo "</tr>";
				}

				echo "</table>";

				
				
			?>
		</center>

	
		<br>
		<br>
		<br>	



<?php include("include/footer.php") ?>