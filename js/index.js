'use strict'

let cantidad_tickets = $('#cantidad_tickets')
let btn_adquirir_tickets = $('#btn_adquirir_tickets')

let content = $('#content')

let current_server_url = 'servers/general.php?op='

init()

const onChangeTicketInput = function(){
	$('#ticket_value').val( $(this).val() )
}

cantidad_tickets.change( onChangeTicketInput )

btn_adquirir_tickets.click( () => {
	Swal.fire({
		icon: 'success',
		showConfirmButton: false,
		timer: 3000,
		title: cantidad_tickets.val()+' Tickets Comprados',
		showClass: {
			popup: 'animate__animated animate__fadeInDown'
		},
		hideClass: {
			popup: 'animate__animated animate__fadeOutUp'
		}
	})
})

async function init(){
	await consultaInfo(current_server_url, 'getInfoTCPServer', 'Museo 1')
	await consultaInfo(current_server_url, 'getInfoMailServer', 'Museo 2')
	await consultaInfo('http://localhost:3040/information', '', 'Museo 3')
	let modal_buttons = $('button[data-bs-target="#tickets_modal"]')
	modal_buttons.click( () => cantidad_tickets.val('0').trigger('change') )
}

async function consultaInfo(url, op = '', museum_name) {
	await $.ajax({
		url: `${ url }${ op }`,
		type: 'GET',
		beforeSend: () => {
			let loading = `
				<div class="col-12 col-md-9 col-lg-6 mb-3 text-center" id="loading_spinner">
					<div class="spinner-border text-dark" role="status">
					  <span class="sr-only">Loading...</span>
					</div>
				</div>
			`
			content.append( loading )
		}
	})
	.done(function(data) {
		addData(data.data, museum_name)
	})
	.fail(function( data ) {
		console.log( data )
	})
	.always(function() {
	})
}

function addData(data, museum_name){
	let html = ''
	for(let index in data){
		let element = data[index]
		html += `
			<div class="col-12 col-md-9 col-lg-6 mb-3">
				<div class="card border-secondary">
					<div class="card-header border-secondary bg-secondary text-white">
						<h6 class="card-title mb-0 text-center">${ museum_name }</h6>
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
													${ element.ubication }
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
													${ element.schedule }
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
													${ element.price }
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
		`

		element.transports.forEach( transport => {
			html += `
															<li class="list-group-item">
																${ transport.data }
															</li>
			`
		})

		html += `
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
		`

		element.places.forEach( place => {
			html += `
															<li class="list-group-item">
																${ place.data }
															</li>
			`
		})

		html += `
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
		`
	}
	$('#loading_spinner').remove()
	content.append( html )
}