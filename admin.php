<?php include("include/EncabezadoAdmin.php") ?>



<div class="formulario">
			<center>
			<h2> Reservas registradas</h2>

		<?php

				require("conexion.php");
				$sql=("SELECT * FROM reservas");
	
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='10'>";
					echo "<tr>";
					    echo "<td><font  size='5'>Nombre<br></font></td>";
						echo "<td><font  size='5'>Apellidos<br></font></td>";
						echo "<td><font  size='5'>Ci<br></font></td>";
						echo "<td><font  size='5'>Telefono<br></font></td>";
						echo "<td><font  size='5'>Destino<br></font></td>";
						echo "<td><font  size='5'>Hora<br></font></td>";
						echo "<td><font  size='5'>Fecha<br></font></td>";
						echo "<td><font  size='5'>Precio<br></font></td>";
						echo "<td><font  size='5'>-----<br></font></td>";

					echo "</tr>";

			    
		?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
                        echo "<td>$arreglo[4]</td>";
						echo "<td>$arreglo[5]</td>";
						echo "<td>$arreglo[6]</td>";
						echo "<td>$arreglo[7]</td>";
						?>
							<td>
							<a style="text-decoration:underline" href="eliminaReserva.php?ci=<?php echo $arreglo['ci']?>">Eliminar</a>
							</td>
						<?php
						

					echo "</tr>";
				}

				echo "</table>";

				
				
			?>
		</center>
		</div>
<?php include("include/footer.php") ?>