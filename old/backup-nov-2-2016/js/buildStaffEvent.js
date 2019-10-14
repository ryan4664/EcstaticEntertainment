$(document).ready(function(){

	$("#form-total").text("Total: $" + 595 + "*");

	$( "#offer-reset" ).on( "click", clearForm );

	$( "#offer-calc" ).on( "click", calcForm);

});


var clearForm = function() {
	$(".formCheckBox").attr('checked', false);
	$("#form-total").text("Total: $" + 595);
}

var calcForm = function() {

		var total = 595;

		if ($('#videoPres').is(':checked')) {
			total = total + 150;
		}

		if ($('#uplighting').is(':checked')) {
			var uplightingNumber = $('#uplightingInput').val();

			total = total + (uplightingNumber * 50);
		}

		$("#form-total").text("Total: $" + total + "*");

}