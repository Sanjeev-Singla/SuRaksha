$(document).ready(function(){

	var base_url = window.location.origin+"/SuRaksha";

	$("div#add_to_favourite").click(function(){
		let property_id = $(this).attr('property-id');
		let class_val = $(this).find('i').attr('class');
		if (class_val == 'fa fa-heart-o') {
			$(this).html("<i class='fa fa-heart text-danger'></i>");
			$(this).attr("title","Remove From Favourite");
		}else{
			$(this).html("<i class='fa fa-heart-o'></i>");
			$(this).attr("title","Add to Favourite");
		}
		$.ajax({
			url: base_url+"/"+"add-remove-property/"+property_id,
			success:function(data){
				alert(data);
			},
			error:function(){
				alert('Upble to Add!')
			}
		});
	});

});