
$(document).ready(function(){

	$("#form-total").text("Total: $" + 875);

	$( "#offer-reset" ).on( "click", clearForm );

	$( "#offer-calc" ).on( "click", calcForm);

});


var clearForm = function() {
	$(".formCheckBox").attr('checked', false);
	$("#form-total").text("Total: $" + 875);
}

var calcForm = function() {

		var total = 875;

		if ($('#ceremonies').is(':checked')) {
			total = total + 175;
		}

		if ($('#ceremoniesDiffLoc').is(':checked')) {
			total = total + 375;
		}

		if ($('#videoPres').is(':checked')) {
			total = total + 150;
		}

		if ($('#uplighting').is(':checked')) {
			var uplightingNumber = $('#uplightingInput').val();

			total = total + (uplightingNumber * 50);
		}

		$("#form-total").text("Total: $" + total);

}
