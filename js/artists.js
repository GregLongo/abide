jQuery(document).ready(function($){
	$(localStorage.Selected).addClass("active-tab");
	console.log(localStorage.Selected);
	$(".entry-content.artist a").click(function(){
		localStorage.Selected = $(this).attr('rel');
	});
	$(".artist--gallery a").click(function(){
		$(".gallery__info-section").removeClass("slide-off");
		$(".artist--gallery a").removeClass("active");
		$(this).addClass("active");
		$( ".active-tab").removeClass("active-tab");
		console.log('test');
		$(this.rel).addClass("active-tab");

	});
	$(".close").click(function(){
		console.log("clickey");
		$(".gallery__info-section").addClass("slide-off");
		$( ".active-tab").removeClass("active-tab");
	});
});