<?php include("include/Encabezado.php") ?>
	
	
	<header >
		<div ></div>
		<div >
			<div >
				<div >
					

					<div >
						<div >
							<h1>Reserva de pasajes</h1>	
						</div>
						<div >
							<div >
								<div >
									
									<div >
										<div >
											<h3>Reserva tu viaje</h3>

											<form action="datos.php" method="POST" >
												<div >
													<div >
														<label for="fullname">Nombre</label>
														<input type="text" name="nombre" id="fullname" class="form-control" required="">
													</div>
												</div>
                                                
                                                <div >
													<div >
														<label for="fullname">Apellidos</label>
														<input type="text" name="Apellidos" id="fullname" class="form-control" required="">
													</div>
												</div>

                                                <div >
													<div >
														<label for="fullname">Ci</label>
														<input type="text" name="CI" id="fullname" class="form-control" required="">
													</div>
												</div>

                                                <div >
													<div >
														<label for="fullname">telefono</label>
														<input type="text" name="telefono" id="fullname" class="form-control" required="">
													</div>
												</div>

                                                <div >
													<div >
														<label for="fullname">destino</label>
														<input type="text" name="destino" id="fullname" class="form-control" required="">
													</div>
												</div>
												
                                                <div >
													<div >
														<label for="fullname">Precio</label>
														<input type="text" name="precio" id="fullname" class="form-control" required="">
													</div>
												</div>

												

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="guardar reserva">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>

    <?php include("include/footer.php") ?>
