
/*var waypoints = $('#handler-first').waypoint(function(direction) {
  notify(this.element.id + ' hit 25% from top of window')
}, {
  offset: '25%'
})*/
$(document).ready(function(){
//for sticky Navigation
$('.js-section-features').waypoint(function(direction){

  if(direction =="down"){


    $('nav').addClass('sticky');
  }
  else {
    $('nav').removeClass('sticky');
  }
},{
  offset:'60px'
});
// scroll on BUTTONS
$('.js-scroll-to-plans').click(function(){

  $('html,body').animate({scrollTop:$('.js-section-plans').offset().top},1000);
});
$('.js-scroll-to-start').click(function(){

  $('html,body').animate({scrollTop:$('.js-section-features ').offset().top},1000);
});

// scroll links copy code
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
      &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

  //mobile Navigation bar
$('.js-nav-icon').click(function(){
var nav=$('.js-main-nav');
nav.slideToggle(200);
var icon=$('.js-nav-icon i');
if(icon.hasClass( 'ion-md-menu')){
  icon.addClass('ion-md-close');
  icon.removeClass('ion-md-menu');
}
else{
  icon.addClass('ion-md-menu');
  icon.removeClass('ion-md-close');

}


}) ;



});
