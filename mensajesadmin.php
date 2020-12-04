<?php include("include/EncabezadoAdmin.php") ?>

					

		

	<div class="formulario">
			<center>
			<h2> Mensajes de Clientes</h2>
		<?php

				require("conexion.php");
				$sql=("SELECT * FROM mensajes");
	
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='10'; class='btn btn-primary';>";
					echo "<tr class='warning'>";
					    echo "<td><font  size='5'>Nombre<br></font></td>";
						echo "<td><font  size='5'>Correo<br></font></td>";
						echo "<td><font  size='5'>Mensaje<br></font></td>";
						echo "<td><font  size='5'>-----<br></font></td>";

					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
						echo "<td>$arreglo[3]</td>";
						?>
						<td><a href="eliminarMensaje.php?id=<?php echo $arreglo['id'] ?>">eliminar</a></td>
						<?php

					echo "</tr>";
				}

				echo "</table>";

				
				
			?>
		</center>
	</div>



<?php include("include/footer.php") ?>