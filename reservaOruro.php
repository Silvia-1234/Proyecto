<?php include("include/Encabezado.php") ?>
	
	
				
						
									<center>
									<h1>Reserva de pasajes</h1>	
										<div class="borde">
										
											<h3>Reserva tu viaje</h3>

											<form action="datos.php" method="POST" >
												<div >
													<div class="contenedor">
														<label for="fullname">Nombre</label>
														<input type="text" name="nombre" id="fullname" class="form-control" required="">
													</div>
												
                                                
                                                
													<div class="contenedor">
														<label for="fullname">Apellidos</label>
														<input type="text" name="apellidos" id="fullname" class="form-control" required="">
													</div>
												

                                                
													<div class="contenedor">
														<label for="fullname">Ci</label>
														<input type="text" name="ci" id="fullname" class="form-control" required="">
													</div>
												

                                                
													<div class="contenedor">
														<label for="fullname">telefono</label>
														<input type="text" name="telefono" id="fullname" class="form-control" required="">
													</div>
												

                                               
													<div class="contenedor">
														<label for="fullname">Destino</label>
														<input type="text" name="destino" id="fullname" class="form-control" value="Oruro" required="" readonly>
													</div>

													<div class="contenedor">
												 <label for="hora">hora de salida</label>
												<select id="hora" name="hora">
												<option value="vacio" selected> </option>
  												<option value="6:00 pm">6:00 pm</option>
  												<option value="7:00 pm">7:00 pm</option>
  												<option value="8:00 pm">8:00 pm </option>
  												<option value="9:00 pm">9:00 pm</option>
												
												</select> 
												</div>

												<div class="contenedor">
												<label for="fecha">fecha:</label>

												<input type="date" id="fecha" name="fecha"
       												value=""
       												min="2020-11-30" max="2021-11-30">
												</div>

                                                
													<div class="contenedor">
														<label for="fullname">Precio  Bs.</label>
														<input type="text" name="precio" id="fullname" class="form-control" value="80" required="" readonly>
													</div>
												
													<br><br><br>
													<div class="contenedor">
														<input type="submit" class="btn btn-primary btn-block" value="guardar reserva">
													</div>
												</div>
											</form>	
										
										</center>
									</div>


    <?php include("include/footer.php") ?>