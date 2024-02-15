 
new WOW().init();


// progress bar
var progressBar = document.querySelector("#progress-bar");
var maxScrollHeight = document.body.scrollHeight - window.innerHeight;

function updateProgress() {
  var percentScrolled = window.scrollY / maxScrollHeight * 100;
  progressBar.style.width = (percentScrolled) + "%";
}

document.addEventListener("scroll", updateProgress);

// owl carousel
$('#owl-partner').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  items:3,
  dots:false,
  responsive:{
      0:{
          items:3
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
})

$('#partner2').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  items:3,
  dots:false,
  responsive:{
      0:{
          items:3
      },
      600:{
          items:3
      },
      1000:{
          items:3
      }
  }
})

$('#drinks-owl').owlCarousel({
  loop:true,
  margin:0,
  nav:false,
  items:4,
  dots:false,
  responsive:{
      0:{
          items:4
      },
      600:{
          items:4
      },
      1000:{
          items:4
      }
  }
})

$('.owl-carousel').on('click', '.item', function() {
  // Get the source (src) attribute of the clicked image
  var imgSrc = $(this).find('img').attr('src');

  // Display the clicked image in the target div
  $('#targetDiv').html('<img src="' + imgSrc + '" alt="">');
});

