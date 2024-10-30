jQuery(function($){
	$(document).ready(function(){ 
		//$(".cp_toggle_container").hide();
		$("h4.cp_trigger").click(function(){
			$(this).toggleClass("cp_active").next().slideToggle("slow");
			return false; //Prevent the browser jump to the link anchor
		});
	});
});