$(document).ready(function(){
	$("div#add_to_favourite").click(function(){
		$(this).find('i').toggleClass("text-danger");
		if ($(this).attr("title") == 'Add to Favourite') {
			$(this).attr("title","Remove From Favourite");
		}else{
			$(this).attr("title","Add to Favourite");
		}
	});
});