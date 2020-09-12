$(document).ready(function(){
	
	var base_url = window.location.origin+"/SuRaksha";
	$("a#view_contact_us_details").click(function(){
		var contact_us_id = $(this).attr('contact-us-id');
		$.ajax({
			url: base_url+"/admin/contact/"+contact_us_id,
			dataType: 'json',
			success:function(data){
				$("#contact_us_subject").text(data.subject);
				$("#contact_us_message").text(data.message);
			}
		});
	});	

	$('#demoSelect').select2();

	$('#residential_type').hide();
	$('#flat_type').hide();
	$('#flat_bhks').hide();
	$('#flat_aminities').hide();
	$("select[name='property_type']").change(function(){
		var property_type = $(this).val();
		if (property_type == 'Residencial') {
			$('#residential_type').show();
		}else{
			$('#residential_type').hide();
		}
	});

	$("select[name='residential_type']").change(function(){
		var residential_type = $(this).val();
		if (residential_type == 'Flat') {
			$('#flat_type').show();
			$('#flat_bhks').show();
		}else{
			$('#flat_type').hide();
			$('#flat_bhks').hide();
		}
	});

	$("select[name='flat_type']").change(function(){
		var flat_type = $(this).val();
		if (flat_type !== 'Raw') {
			$('#flat_aminities').show();
		}else{
			$('#flat_aminities').hide();
		}
	});

});