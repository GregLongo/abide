jQuery(document).ready(function($){
	console.log("fooo");
		function rgb2hex(orig){
		 var rgb = orig.replace(/\s/g,'').match(/^rgba?\((\d+),(\d+),(\d+)/i);
		 return (rgb && rgb.length === 4) ? "#" +
		  ("0" + parseInt(rgb[1],10).toString(16)).slice(-2) +
		  ("0" + parseInt(rgb[2],10).toString(16)).slice(-2) +
		  ("0" + parseInt(rgb[3],10).toString(16)).slice(-2) : orig;
		};
	var newcolor = localStorage.Selected;
	$(".hero__title--post").css("background-color" , newcolor); 
	$(".preview").click(function(){
		 var color = rgb2hex($(this).find(".preview__text-block").css("background-color"));
		localStorage.Selected = color;
		console.log(color);
	});
});