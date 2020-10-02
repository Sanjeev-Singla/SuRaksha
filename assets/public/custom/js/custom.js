$(document).ready(function(){

	var base_url = window.location.origin+"/SuRaksha";

	$("div#add_to_favourite").click(function(){
		let property_id = $(this).attr('property-id');
		var $class_val = $(this).find('i');
		$.ajax({
			url: base_url+"/"+"add-remove-property/"+property_id,
			success:function(data){
				let class_val = $class_val.attr('class');
				if (data.length == 0) {
					window.location.replace(base_url+"/login");
					return true;
				}
				data = JSON.parse(data);
				$($class_val).attr('class',data.class);
				if (class_val == 'fa fa-heart-o') {
					$($class_val).attr("title","Remove From Favourite");
				}else{
					$($class_val).attr("title","Add to Favourite");
				}
				alert(data.message);
			},
			error:function(){
				alert('Upble to Add!')
			}
		});
	});

});