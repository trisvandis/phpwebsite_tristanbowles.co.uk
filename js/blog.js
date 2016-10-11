
	$(document).ready(function(){
    $("#hide").click(function(){
        $("#sidebar").hide(500);
         $("#footer").hide(500);
        $("p").hide(500);
        $("#hide").hide(500);
        $("#show").show(500);
    });
    $("#show").click(function(){
        $("#sidebar").show(500);
         $("#footer").show(500);
         $("p").show(500);
         $("#show").hide(500);
         $("#hide").show(500);
   	 });
   	
   		
   		var width_int = function(width_css) {
   		var width_css = $(".progress-bar-fill").css("width");
   		return parseInt(width_css, 10);
		};
		
		$("#progressButton").click(function(){
		if (width_int() < 500) {
			$(".progress-bar-fill").css({"width": "100%"});
			$("#progressButton").prop("value", "Reset"); 
			width_int();
			console.log(width_int());
		} else {
			$(".progress-bar-fill").css({"width": "0%"});
			$("#progressButton").prop("value", "Start"); 
			width_int();
			console.log(width_int());	
		}		
  	 });	   	
}); 		
