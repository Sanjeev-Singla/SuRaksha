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

	let residential_type = $("select[name='residence_type'] option:selected").val();
	if (residential_type !== "Flat") {
		$('#residential_type').hide();
		$('#flat_type').hide();
		$('#flat_bhks').hide();
		$('#flat_aminities').hide();
	}else{
		$('select[name="residence_type"]').attr("required",true);
		$('select[name="flat_type"]').attr("required",true);
		$('input[name="bhk"]').attr("required",true);
		$('select[name="aminities[]"]').attr("required",true);
	}

	$("select[name='property_type']").change(function(){
		var property_type = $(this).val();
		if (property_type == 'Residential') {
			$('#residential_type').show();
			$('select[name="residence_type"]').attr("required",true);
		}else{
			$('#residential_type').hide();
			$('select[name="residence_type"]').attr("required",false);
			$('select[name="residence_type"]').removeAttr("required");
			$('#residence_type').hide();
		}
	});

	$("select[name='residence_type']").change(function(){
		var residence_type = $(this).val();
		if (residence_type == 'Flat') {
			$('#flat_type').show();
			$('#flat_bhks').show();
			$('select[name="flat_type"]').attr("required",true);
			$('input[name="bhk"]').attr("required",true);
		}else{
			$('#flat_type').hide();
			$('#flat_bhks').hide();
			$('#flat_aminities').hide();
			$('select[name="flat_type"]').removeAttr("required");
			$('input[name="bhk"]').removeAttr("required");
			$('select[name="aminities[]"]').removeAttr("required");
		}
	});

	$("select[name='flat_type']").change(function(){
		var flat_type = $(this).val();
		if (flat_type !== 'Raw') {
			$('#flat_aminities').show();
			$('select[name="aminities[]"]').attr("required",true);
		}else{
			$('#flat_aminities').hide();
			$('select[name="aminities[]"]').removeAttr("required");
		}
	});

	$("#edit_client_review").click(function(){
		let edit_url = $(this).attr('review-url');
		$.ajax({
			url:edit_url,
			success:function(data){
				$('#client_review_form').attr("action",edit_url);
				let review_data = JSON.parse(data); 
				$("input[name='name']").val(review_data.name);
				$("input[name='position']").val(review_data.position);
				$("textarea[name='comments']").val(review_data.comments);
				return true;
			},
			error:function(){
				alert("Unable to Edit");
			}
		});
	});

	$("#add_client_review_button").click(function(){
		$('#client_review_form').attr("action",'');
		$("input[name='name']").val("");
		$("input[name='position']").val("");
		$("textarea[name='comments']").val("");
	});
	
});