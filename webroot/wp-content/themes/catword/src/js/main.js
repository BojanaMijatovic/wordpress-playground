// MOBILE NAVIGATION
$('.burger').on('click', function(event) {
  $('.nav').addClass('show');
  $('.burger').addClass('not');
  $('.header .close').addClass('show-close');
});

$('.close, .nav a').on('click', function(event) {
  $('.nav').removeClass('show');
  $('.burger').removeClass('not');
  $('.header .close').removeClass('show-close');
});

$('.nav a').on('click', function(event) {
  $('.nav a').removeClass('active');
  $(this).addClass('active');
});

// MODAL
$('.ask').on('click', function(event) {
	/* Act on the event */
	$('.modal__first').addClass('open');
});

$('.close').on('click', function(event) {
	/* Act on the event */
	$('.modal__first').removeClass('open');
});

$('.send').on('click', function(event) {
	/* Act on the event */
	$('.modal_2').addClass('open');
});
$('.modal__inner .close').on('click', function(event) {
	event.preventDefault();
	/* Act on the event */
	$('.modal_2').removeClass('open');
});

$('.hire').on('click', function(event) {
	event.preventDefault();
	/* Act on the event */
	$('.modal_3').addClass('open');
});
$('.modal__inner .close').on('click', function(event) {
	event.preventDefault();
	/* Act on the event */
	$('.modal_3').removeClass('open');
});

$(function() {
  $('.input-file > input').on('change', function(){
    var inputValue = $(this).val();
    $('.input-value').html(inputValue);
  });
});

var safari   = navigator.userAgent.indexOf("Safari") > -1;
var chrome   = navigator.userAgent.indexOf('Chrome') > -1;
if ((chrome) && (safari)) {
safari = false;
// Select all links with hashes
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
}

// SLIDER


$(window).on("load", function() {
  $('.flexslider').flexslider({
    animation: "slide",
    prevText: "",
    nextText: ""
  });
});


//READ MORE BUTTON
$('.accordion').on('click', function(){
  if ($('.dots').css('display') === 'none')  {
    $('.dots').css('display', 'inline');
    $('.accordion').html('Čitajte dalje');
    $('.hidden-text').css('display', 'none');
  } else {
    $('.dots').css('display', 'none');
    $('.accordion').html('Čitajte manje');
    $('.hidden-text').css('display', 'inline');
  }
});
