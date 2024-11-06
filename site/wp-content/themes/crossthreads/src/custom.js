
AOS.init({
  duration: 800,  // all animations will take 800ms to complete
  easing: 'ease-in-out',
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
});
 //Menu
 $('.menu-toggle').click(function() {
  $(this).toggleClass("is-active");
  $('nav').toggleClass('active');
  $('body').toggleClass('menu-bg');
});

// Onscroll    
$(window).scroll(function() {
  if ($(this).scrollTop() > 50) {
      $('.header').addClass('bgcolor');
  } else {
      $('.header').removeClass('bgcolor');
  }
});


//const video = document.getElementById("video");
//const circlePlayButton = document.getElementById("circle-play-b");
//
//function togglePlay() {
//	if (video.paused || video.ended) {
//		video.play();
//	} else {
//		video.pause();
//	}
//}
//
//circlePlayButton.addEventListener("click", togglePlay);
//video.addEventListener("playing", function () {
//	circlePlayButton.style.opacity = 0;
//});
//video.addEventListener("pause", function () {
//	circlePlayButton.style.opacity = 1;
//});
//
//$('video').click(function(){
//
//    this[this.paused ? 'play' : 'pause']();
//});




