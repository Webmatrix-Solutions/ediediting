    // banner slider js
$('#banner-slider').owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  nav:false,
  dots:true,
  navText : ['<span class="fa fa-chevron-left" aria-hidden="true"></span>','<span class="fa fa-chevron-right" aria-hidden="true"></span>'],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})


// sticky header
// $(window).scroll(function(){
//   var sticky = $('.header-wrapper'),
//       scroll = $(window).scrollTop();

//   if (scroll >= 100) sticky.addClass('sticky');
//   else sticky.removeClass('sticky');
// });


// technology slider js
$('#technology-slider').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText : ['<span class="fa fa-chevron-left" aria-hidden="true"></span>','<span class="fa fa-chevron-right" aria-hidden="true"></span>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
    })


var $box = jQuery(".isotope-box").isotope({
    itemSelector: ".isotope-item"
    });
    // filter functions
    // bind filter button click
    $(".isotope-toolbar").on("click", "button", function () {
    var filterValue = $(this).attr("data-type");
    $(".isotope-toolbar-btn").removeClass("active");
    $(this).addClass("active");
    if (filterValue !== "*") {
        filterValue = '[data-type="' + filterValue + '"]';
    }
    //sconsole.log(filterValue);
    $box.isotope({ filter: filterValue });
    });


    // testimonials slider js
    $('#testimonials-slider').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText : ['<span class="fa fa-chevron-left" aria-hidden="true"></span>','<span class="fa fa-chevron-right" aria-hidden="true"></span>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
    })

    
// extended family slider js
$('#extended-family-slider').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText : ['<span class="fa fa-chevron-left" aria-hidden="true"></span>','<span class="fa fa-chevron-right" aria-hidden="true"></span>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
    })
