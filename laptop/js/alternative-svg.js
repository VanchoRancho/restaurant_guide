$(document).ready(function(){    
	if (!Modernizr.svg) {
		$("img").map(function(indx, element){
			if(($(this).attr('src').search('.svg') != -1)){
				var res = $(this).attr('src').split(".svg");
				$(this).attr("src", res[0]+".png");
			}
		});
	}
});