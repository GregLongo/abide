jQuery(document).ready(function ($) {
  // var color = $(".preview__text-block").css("background-color");
  // console.log(color);
  // $(".page-content").css("background-color" , color);
  $(".about__text").css("opacity", 0);
    $(".hero__bg").css("opacity", 0); 
    $(".home__content--defaults .particles-js-canvas-el").css("opacity", 0); 
    $(".hero--home").css("position", 'fixed');    
     $(".preview").removeClass("fixed")
  $(window).scroll(function() {
    if($(window).scrollTop()  > $('.hero').height()/2){
      $(".hero--home").css("position", 'absolute');   
      $(".hero--home").css("top", $('.hero').height()/2);   
    }else{
      $(".hero--home").css("position", 'fixed');   
      $(".hero--home").css("top", '0');   
    };
    if($(window).scrollTop()  > $('.hero').height() + $('.about').height() * .5){   
      $(".preview").addClass("fixed");
      $(".hero__text").css("pointer-events", 'none');      
    }else{
      $(".hero__text").css("pointer-events", 'auto');      
      $(".preview").removeClass("fixed")
    }
    $(".hero--page .hero__text").css("opacity", 1-$(window).scrollTop()/80); 
    $(".home__content--defaults .particles-js-canvas-el").css("opacity", $(window).scrollTop()/800);       
    $(".hero__bg").css("opacity", $(window).scrollTop()/400);       
    $(".about__text").css("opacity", $(window).scrollTop()/600);  
    $('.preview__text-block--fade').each( function(i){      
      if( $(window).scrollTop() + $(window).height() > $(this).position().top + $(this).outerHeight() ){
        $(this).animate({'opacity':'1'},1200);
      }
    }); 
  });
});



