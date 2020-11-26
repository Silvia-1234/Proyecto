

<?php include("include/Encabezado.php") ?>


	
			
					<div >
						<br>
					<h2>Contactanos</h2>
					<form action="datos2.php" method="POST">

						<div >
							<div >
								<label  for="name">Nombre</label>
								<input type="text" name="nombre" id="Nombre" class="form-control" placeholder="Su Nombre" required="">
							</div>
							
						</div>


						<div >
							<div >
								<label  for="correo">Correo</label>
								<input type="text" name="correo" id="Correo" class="form-control" placeholder="Su Email" required="">
							</div>
						</div>



						<div >
							<div >
								<label  for="mensaje">Mensaje</label>
								<textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control" placeholder="Su Mensaje" required=""></textarea>
							</div>
						</div>

						<div >
							<input type="submit" value="Enviar Mensaje" >
						</div>

					</form>		
				</div>
				
				
			


    <?php include("include/footer.php") ?>