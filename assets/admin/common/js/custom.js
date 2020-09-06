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
});