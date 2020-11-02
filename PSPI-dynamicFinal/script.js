$(document).ready(function(){
	//check if window is at the top
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrolltotop').fadeIn();
        } else {
            $('.scrolltotop').fadeOut();
        }
    });
    //scroll
    $('.scrolltotop').click(function(){
        $('html, body').animate({scrollTop : 0},500);
    });

});

$('.carousel').carousel({
  interval: 1000 * 5
});