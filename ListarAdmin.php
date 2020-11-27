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


					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td><font color='000000'>$arreglo[0]</</td>";
				    	echo "<td><font color='6D6D71'>$arreglo[1]</</td>";
				    	echo "<td><font color='000000'>$arreglo[2]</</td>";
				    	echo "<td><font color='6D6D71'>$arreglo[3]</</td>";
				    	echo "<td><font color='000000'>$arreglo[4]</</td>";


						

						
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