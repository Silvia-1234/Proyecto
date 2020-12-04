<?php include("include/EncabezadoAdmin.php") ?>
	
	<div class="formulario">
		<center>
		<h2> Administradores Registrados</h2>
		    <?php

				require("conexion.php");
				$sql=("SELECT * FROM usuarios");
	
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='10'>";
					echo "<tr>";
					    echo "<td><font  size='5'>Id<br></font></td>";
						echo "<td><font  size='5'>Nombre<br></font></td>";
						echo "<td><font  size='5'>Apellidos<br></font></td>";
						echo "<td><font  size='5'>Ci<br></font></td>";
						echo "<td><font  size='5'>Usuario<br></font></td>";
						echo "<td><font  size='5'>-----<br></font></td>";


					echo "</tr>";
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){?>

				  	<tr class='success'>
				    	 <td><?php echo$arreglo[0]?></td>
				    	<td><?php echo $arreglo[1]?></td>
				    	<td><?php echo $arreglo[2]?></td>
				    	<td><?php echo $arreglo[3]?></td>
						<td><?php echo $arreglo[4]?></td>

						<?php
						if($arreglo['id']>1){?>

							<td><a style="text-decoration:underline" href="eliminar.php?id=<?php echo $arreglo['id']?>">ELIMINAR</a></td>
				
							<?php
						}
						?>
						

					<?php
						
					echo "</tr>";
				}

				echo "</table>";

			?>
		</center>
	</div>

<?php include("include/footer.php") ?>