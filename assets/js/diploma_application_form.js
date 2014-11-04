$(document).ready(function(){
	$(".disability_info").hide();
	$(".specified_denomination").hide();
	$(".discovery_other").hide();
	// specified_denomination
	$("#applicant_disability").change(function(){
		var selected_disability = $("#applicant_disability option:selected").val();
		if (selected_disability == 'Yes') {
			$(".disability_info").slideDown();
			$("#applicant_disability_info").prop('required',true);
		}else{
			$(".disability_info").slideUp();
			$("#applicant_disability_info").prop('required',false);
		};
		//alert(selected_disability);
	});

	$("#applicant_denomination").change(function(){

		var denom_other = $("#applicant_denomination option:selected").val();
		if (denom_other == 'Other') {
			$(".specified_denomination").slideDown();
			$('#denomination_other').prop('required',true);
		}else{
			$(".specified_denomination").slideUp();
			$('#denomination_other').prop('required',false);
		};

	});
	$('#source_of_discovery').change(function(){
		
		var disc_other = $('#source_of_discovery option:selected').val();
		if (disc_other == 'Other') {
			$('.discovery_other').slideDown();
			$('#source_of_discovery_other').prop('required',true);
		}else{
			$('.discovery_other').slideUp();
			$('#source_of_discovery_other').prop('required',false);
		};
	});
		//alert(selected_disability);

});