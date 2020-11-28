<?php include("include/EncabezadoAdmin.php") ?>


	
	<div id="page">

	
	
	



<div >
	
		
	<div >

		<div>
		
		<div >
		<div ><h2> Viajeros registrados</h2>	</div>
		<hr />
		<div >
		


		<center>

		    <?php

				require("conexion.php");
				$sql=("SELECT * FROM usuarios");
	
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='10'; class='btn btn-primary';>";
					echo "<tr class='warning'>";
					    echo "<td><font color='000000' size='5'>Id<br></font></td>";
						echo "<td><font color='6D6D71' size='5'>nombre<br></font></td>";
						echo "<td><font color='000000' size='5'>apellidos<br></font></td>";
						echo "<td><font color='6D6D71' size='5'>ci<br></font></td>";
						echo "<td><font color='000000' size='5'>usuario<br></font></td>";
						echo "<td><font color='000000' size='5'>-----<br></font></td>";


					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){?>

				  	<tr class='success'>
				    	 <td><font color='000000'><?php echo$arreglo[0]?></</td>
				    	<td><font color='6D6D71'><?php echo $arreglo[1]?></</td>
				    	<td><font color='000000'><?php echo $arreglo[2]?></</td>
				    	<td><font color='6D6D71'><?php echo $arreglo[3]?></</td>
						<td><font color='000000'><?php echo $arreglo[4]?></</td>

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

	
		<br>
		<br>
		<br>	


		
		<div >


		
		</div>	
		</div>	
		<br/>
		
		
		</div>

		


</div>










	
<?php include("include/footer.php") ?>