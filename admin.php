<?php include("include/EncabezadoAdmin.php") ?>

				
					
<center>



<div >
	
		
	<div >

		<div >
		
		<div >
		<div ><h2> Reservas registradas</h2>	</div>
		<hr />
		<div >
		


			<center>

		<?php

				require("conexion.php");
				$sql=("SELECT * FROM reservas");
	
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='10'>";
					echo "<tr>";
					    echo "<td><font color='000000' size='5'>Nombre<br></font></td>";
						echo "<td><font color='6D6D71' size='5'>apellidos<br></font></td>";
						echo "<td><font color='000000' size='5'>ci<br></font></td>";
						echo "<td><font color='6D6D71' size='5'>telefono<br></font></td>";
                        echo "<td><font color='000000' size='5'>destino<br></font></td>";
                        echo "<td><font color='000000' size='5'>precio<br></font></td>";

					echo "</tr>";

			    
		?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td><font color='000000'>$arreglo[0]</font></td>";
				    	echo "<td><font color='6D6D71'>$arreglo[1]</font></td>";
				    	echo "<td><font color='000000'>$arreglo[2]</font></td>";
				    	echo "<td><font color='6D6D71'>$arreglo[3]</font></td>";
                        echo "<td><font color='000000'>$arreglo[4]</font></td>";
                        echo "<td><font color='000000'>$arreglo[5]</font></td>";
					echo "</tr>";
				}

				echo "</table>";

				
				
			?>
		</center>

	
		<br>
		<br>
		<br>	
  

		
		<div class="span8">


		
		</div>	
		</div>	
		<br/>

		</div>

</div>

	</div>
</div>



				
</center>												


<?php include("include/footer.php") ?>