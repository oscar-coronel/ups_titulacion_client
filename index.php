<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Venta de Tickets</title>

	<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css" />

	<link rel="stylesheet" type="text/css" href="node_modules/animate.css/animate.min.css" />
	<link rel="stylesheet" type="text/css" href="node_modules/sweetalert2/dist/sweetalert2.min.css" />


	<script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="node_modules/@fortawesome/fontawesome-free/js/brands.min.js"></script>
	<script type="text/javascript" src="node_modules/@fortawesome/fontawesome-free/js/solid.min.js"></script>
	<script type="text/javascript" src="node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>
	<script type="text/javascript" src="node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
</head>
<body>

	<div id="app" class="d-flex flex-column justify-content-between" style="min-height: 100vh;">

		<header>
			<div class="container-fluid" style="background: antiquewhite;">
				<div>
					<nav class="navbar navbar-light py-4 justify-content-center">
						<div class="position-absolute rounded py-1 text-white" style="padding: 0 30px; background: burlywood;">
							<h6 class="mb-0">Venta de Tickets para Museos</h6>
						</div>
					</nav>
				</div>
			</div>
			<div class="container">
				<div class="row mt-2 mb-3">
					<div class="col-12 col-md-3 col-lg-2">
						<img src="./assets/img/museo.jpg" class="img-fluid" />
					</div>
					<div class="col-12 col-md-9 col-lg-10 px-2 small mb-3 mb-md-0" style="border-bottom: 1px solid grey; text-align: justify;">
						En un mundo rodeado de imágenes, un museo es un santuario. Los centros y museos del siglo XX, y comienzos de los dos mil, se imponían como el marco privilegiado para legitimar el buen arte, aquél que recibe las bendiciones de todo el establishment. Basados en la contundencia de la arquitectura, su emplazamiento y gestión eran decididos desde el autismo vertical, pensando en grandes edificaciones, construcciones emblemáticas o costosas rehabilitaciones de edificios industriales en desuso, y no como la herramienta para sustentar las necesidades patrimoniales, creativas y sociales.
					</div>
				</div>
			</div>
		</header>
		<main>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12 col-md-9 col-lg-6 mb-3">
						<div class="card border-secondary">
							<div class="card-header border-secondary bg-secondary text-white">
								<h6 class="card-title mb-0 text-center">Museo 1</h6>
							</div>
							<div class="card-body small">
								<p class="card-text" style="text-align: justify;">
									<div>

										<div class="row">
											<div class="col-6">
												<div class="row">
													<div class="col-2 d-flex justify-content-center">
														<i class="fas fa-map-marker-alt align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Ubicación:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															150 London Wall.
														</div>
													</div>
												</div>

												<div class="row mt-3">
													<div class="col-2 d-flex justify-content-center">
														<i class="far fa-clock align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Horario:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															De lunes a domingo de 10:00 a 18:00 horas.
														</div>
													</div>
												</div>

												<div class="row mt-3">
													<div class="col-2 d-flex justify-content-center">
														<i class="fas fa-hand-holding-usd align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Precio:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															Entrada Gratuita.
														</div>
													</div>
												</div>
											</div>
											<div class="col-6">
												<div class="row">
													<div class="col-2 d-flex justify-content-center">
														<i class="fas fa-bus-alt align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Tranporte:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															<div>
																<ul class="list-group">
																	<li class="list-group-item">
																		Metro: Barbican, líneas Circle, Hammersmith y Metropolitan; St Paul's, línea Central.
																	</li>
																	<li class="list-group-item">
																		Autobús: líneas 4, 8, 25, 56, 100, 25, 172, 242 y 521.
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-3">
													<div class="col-2 d-flex justify-content-center">
														<i class="fab fa-squarespace align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Lugares próximos:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															<div>
																<ul class="list-group">
																	<li class="list-group-item">
																		Catedral de San Pablo (456 m)
																	</li>
																	<li class="list-group-item">
																		Shakespeare's Globe Theatre (1.1 km)
																	</li>
																	<li class="list-group-item">
																		The Monument (1.1 Km)
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</p>
								<div>
									<button class="btn btn-info btn-sm w-100" data-bs-toggle="modal" data-bs-target="#tickets_modal">Comprar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-9 col-lg-6 mb-3">
						<div class="card border-secondary">
							<div class="card-header border-secondary" style="background: burlywood;">
								<h6 class="card-title mb-0 text-center">Museo 2</h6>
							</div>
							<div class="card-body small">
								<p class="card-text" style="text-align: justify;">
									<div>

										<div class="row">
											<div class="col-6">
												<div class="row">
													<div class="col-2 d-flex justify-content-center">
														<i class="fas fa-map-marker-alt align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Ubicación:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															150 London Wall.
														</div>
													</div>
												</div>

												<div class="row mt-3">
													<div class="col-2 d-flex justify-content-center">
														<i class="far fa-clock align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Horario:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															De lunes a domingo de 10:00 a 18:00 horas.
														</div>
													</div>
												</div>

												<div class="row mt-3">
													<div class="col-2 d-flex justify-content-center">
														<i class="fas fa-hand-holding-usd align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Precio:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															Entrada Gratuita.
														</div>
													</div>
												</div>
											</div>
											<div class="col-6">
												<div class="row">
													<div class="col-2 d-flex justify-content-center">
														<i class="fas fa-bus-alt align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Tranporte:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															<div>
																<ul class="list-group">
																	<li class="list-group-item">
																		Metro: Barbican, líneas Circle, Hammersmith y Metropolitan; St Paul's, línea Central.
																	</li>
																	<li class="list-group-item">
																		Autobús: líneas 4, 8, 25, 56, 100, 25, 172, 242 y 521.
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-3">
													<div class="col-2 d-flex justify-content-center">
														<i class="fab fa-squarespace align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Lugares próximos:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															<div>
																<ul class="list-group">
																	<li class="list-group-item">
																		Catedral de San Pablo (456 m)
																	</li>
																	<li class="list-group-item">
																		Shakespeare's Globe Theatre (1.1 km)
																	</li>
																	<li class="list-group-item">
																		The Monument (1.1 Km)
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</p>
								<div>
									<button class="btn btn-info btn-sm w-100" data-bs-toggle="modal" data-bs-target="#tickets_modal">Comprar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-9 col-lg-6 mb-3">
						<div class="card border-secondary">
							<div class="card-header border-secondary bg-secondary text-white">
								<h6 class="card-title mb-0 text-center">Museo 3</h6>
							</div>
							<div class="card-body small">
								<p class="card-text" style="text-align: justify;">
									<div>

										<div class="row">
											<div class="col-6">
												<div class="row">
													<div class="col-2 d-flex justify-content-center">
														<i class="fas fa-map-marker-alt align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Ubicación:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															150 London Wall.
														</div>
													</div>
												</div>

												<div class="row mt-3">
													<div class="col-2 d-flex justify-content-center">
														<i class="far fa-clock align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Horario:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															De lunes a domingo de 10:00 a 18:00 horas.
														</div>
													</div>
												</div>

												<div class="row mt-3">
													<div class="col-2 d-flex justify-content-center">
														<i class="fas fa-hand-holding-usd align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Precio:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															Entrada Gratuita.
														</div>
													</div>
												</div>
											</div>
											<div class="col-6">
												<div class="row">
													<div class="col-2 d-flex justify-content-center">
														<i class="fas fa-bus-alt align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Tranporte:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															<div>
																<ul class="list-group">
																	<li class="list-group-item">
																		Metro: Barbican, líneas Circle, Hammersmith y Metropolitan; St Paul's, línea Central.
																	</li>
																	<li class="list-group-item">
																		Autobús: líneas 4, 8, 25, 56, 100, 25, 172, 242 y 521.
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="row mt-3">
													<div class="col-2 d-flex justify-content-center">
														<i class="fab fa-squarespace align-self-start mt-1" style="font-size: 28px; color: #fab005;"></i>
													</div>
													<div class="col-10">
														<h5>Lugares próximos:</h5>
														<div style="text-align: justify; line-height: 1.3;">
															<div>
																<ul class="list-group">
																	<li class="list-group-item">
																		Catedral de San Pablo (456 m)
																	</li>
																	<li class="list-group-item">
																		Shakespeare's Globe Theatre (1.1 km)
																	</li>
																	<li class="list-group-item">
																		The Monument (1.1 Km)
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								</p>
								<div>
									<button class="btn btn-info btn-sm w-100" data-bs-toggle="modal" data-bs-target="#tickets_modal">Comprar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div class="container-fluid py-3">
				<div class="row">
					<div class="col-12 col-md-8">
						<div class="px-4">
							<div style="border: 1px solid burlywood;"></div>
							<div class="my-3" style="border: 1px solid grey;"></div>
							<div style="border: 1px solid burlywood;"></div>
						</div>
					</div>
					<div class="col-12 col-md-4 mt-3 mt-md-0 d-flex justify-content-center align-items-center">
						<div class="small">
							All Rights Reserved &copy; | <?php echo date('Y'); ?>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="tickets_modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-sm">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Cantidad de Tickets</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <div class="form-group">
	        	<input type="range" placeholder="Cantidad de Tickets" name="cantidad_tickets" id="cantidad_tickets" class="form-range" min="0" max="10" value="0" />
	        	<output class="fw-bold" style="display: block; text-align: center;" id="ticket_value">0</output>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" id="btn_adquirir_tickets" class="btn btn-primary btn-sm w-100" data-bs-dismiss="modal">Adquirir Tickets</button>
	      </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript" src="js/index.js?v=<?php echo uniqid(); ?>"></script>

</body>
</html>