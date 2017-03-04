function accepter (id, mail, name) {
	$('#confirmModal').on('show.bs.modal', function (event) {
		var confirm = $('#confirm');
		var button = $(event.confirm); // Button that triggered the modal
		var recipient = button.data('whatever') // Extract info from data-* attributes
		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		var modal = $(this);
		//modal.find('.modal-title').text('New message to ' + recipient);
		modal.find('.modal-body input').val(recipient);
	});
	$('#validerProjet').click(function () {
		$(location).attr('href','?module=projects&action=list&id='+ id +'&mail='+ mail + '&name='+ name +'&status=accepted');
	});
}


function refuser (id, mail, name) {
	$('#refuseModal').on('show.bs.modal', function (event) {
		var confirm = $('#refuse');
		var button = $(event.confirm); // Button that triggered the modal
		var recipient = button.data('whatever') // Extract info from data-* attributes
		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		var modal = $(this);
		//modal.find('.modal-title').text('New message to ' + recipient);
		modal.find('.modal-body input').val(recipient);

        $('#refuserProjet').click(function() {
            $(location).attr('href','?module=projects&action=list&id='+ id +'&status=refused');
        });
	});
}