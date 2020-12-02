

<?php include("include/Encabezado.php") ?>


	
			
					
				
			<div class="borde">
				<center>
						<br>
					<h2>Contactanos</h2>
					<form action="datos2.php" method="POST">

						
							<div >
								<label  for="name">Nombre</label>
								<input type="text" name="nombre" id="Nombre" class="form-control" placeholder="Su Nombre" required="">
							</div>
							
					


						
							<div >
								<label  for="correo">Correo</label>
								<input type="text" name="correo" id="Correo" class="form-control" placeholder="Su Email" required="">
							</div>
						



						
							<div>
							<label  for="mensaje"></label>
							<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control" placeholder="Su Mensaje" required=""></textarea>
							
							</div>
								

							<br><br>
						<div >
							<input type="submit" value="Enviar Mensaje" >
						</div>

					</form>	
				</center>	
			</div>
			
				
			


    <?php include("include/footer.php") ?>