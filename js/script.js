$(function(){
	$(document).ready(function(){
		$('#myModal').hide();

		$('#myModal').on('shown.bs.modal', function () {
	    $('#myInput').focus()
		})
	})
})

// $('#myModal').on('shown', function () {
//       $('#myModal').modal('hide');
// }

