'use strict'

let cantidad_tickets = $('#cantidad_tickets')
let modal_buttons = $('button[data-bs-target="#tickets_modal"]')

const onChangeTicketInput = function(){
	$('#ticket_value').val( $(this).val() )
}

cantidad_tickets.change( onChangeTicketInput )
modal_buttons.click( () => cantidad_tickets.val('0').trigger('change') )