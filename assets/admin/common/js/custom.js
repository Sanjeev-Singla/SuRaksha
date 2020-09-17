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

	$('#residence_type').hide();
	$('#flat_type').hide();
	$('#flat_bhks').hide();
	$('#flat_aminities').hide();
	$("select[name='property_type']").change(function(){
		var property_type = $(this).val();
		if (property_type == 'Residencial') {
			$('#residence_type').show();
		}else{
			$('#residence_type').hide();
		}
	});

	$("select[name='residence_type']").change(function(){
		var residence_type = $(this).val();
		if (residence_type == 'Flat') {
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

	$("#edit_admin_address").click(function(){
		let edit_url = $(this).attr('address-url');
		$.ajax({
			url:edit_url,
			success:function(data){
				$('#admin_address_form').attr("action",edit_url);
				address_data = JSON.parse(data);
				$("input[name='email']").val(address_data.email);
				$("input[name='mobile']").val(address_data.mobile);
				$("textarea[name='address']").val(address_data.address);
				return true;
			},
			error:function(data){
				alert("Unable to Get information");
				return false;
			}
		});
	});

	$("#add_admin_address_button").click(function(){
		$('#admin_address_form').attr("action","");
		$("input[name='email']").val("");
		$("input[name='mobile']").val("");
		$("textarea[name='address']").val("");
	});
});