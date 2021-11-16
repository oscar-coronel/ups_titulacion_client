'use strict'

let cantidad_tickets = $('#cantidad_tickets')
let btn_adquirir_tickets = $('#btn_adquirir_tickets')
let modal_buttons = $('button[data-bs-target="#tickets_modal"]')

const onChangeTicketInput = function(){
	$('#ticket_value').val( $(this).val() )
}

cantidad_tickets.change( onChangeTicketInput )
modal_buttons.click( () => cantidad_tickets.val('0').trigger('change') )


btn_adquirir_tickets.click( () => {
	Swal.fire({
		icon: 'success',
		showConfirmButton: false,
		timer: 3000,
		title: '3 Tickets Comprados para Museo de la Atlántida',
		showClass: {
			popup: 'animate__animated animate__fadeInDown'
		},
		hideClass: {
			popup: 'animate__animated animate__fadeOutUp'
		}
	})
})
