$(document).ready(function(){
  $('.prdct_image_slick_product').each(function() {
      let $sliders = $(this);

      $sliders.slick({
        autoplay: false,
        autoplaySpeed: 1000,
        slidesToShow: 1,
        dots: true,
        pauseOnHover: true,
        arrows: false,
        centerMode: false,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
      });

 
      $sliders
        .find('.slick-dots')
        .find('li')
        .on('mouseenter', function() {
          console.log('I am just triggered')
          const index = $(this).index(); 
          $sliders.slick('slickGoTo', index); 
        });
    });
 });
  


$(document).ready(function(){
    $('.menu_sliding_icon').click(function(){
      $("body").addClass("no-scroll");
        $('.slide-nav').addClass('slide_m_open');
        $('.bg_slide').addClass('bg_slide_open');
    });
    $('.slide_close').click(function(){
        $('.slide-nav').removeClass('slide_m_open');
        $('.bg_slide').removeClass('bg_slide_open');
    });

     $('.middle_menu ul li').click(function(){
      $(".slide_inner_menu").not($(this).find(".slide_inner_menu")).slideUp(300);
        $(this).find(".slide_inner_menu").slideToggle(300);
    });

   $('.deals_pdct_sliders').each(function() {

      let $slider = $(this);

      $slider.slick({
        autoplay: false,
        autoplaySpeed: 1000,
        slidesToShow: 1,
        dots: true,
        pauseOnHover: true,
        arrows: false,
        centerMode: false,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
      });


      $slider
        .find('.slick-dots')
        .find('li')
        .on('mouseenter', function() {
          console.log('I am just triggered')
          const index = $(this).index(); 
          $slider.slick('slickGoTo', index); 
        });
    });
});





$(document).ready(function(){
   $('.slick_deals_pdct_row').slick({
    autoplay: false,
    slidesToShow: 5,
    infinite: false,
    dots:true,
    slidesToScroll: 3,
    pauseOnHover: true,
    centerMode: false,
    arrows: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
        }
      }
    ]
  });
});


$(document).ready(function(){
  
     const $inslide = $('.slick_deals_pdct_row');

     $inslide.slick({
      autoplay: false,
      slidesToShow: 5,
      infinite: false,
      dots:true,
      slidesToScroll: 3,
      pauseOnHover: true,
      centerMode: false,
      arrows: true,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 4,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
          }
        }
      ]
    });

$inslide.on('afterChange', function (event, slick, currentSlide) {
    const $prevArrow = $('.slick-prev');
    const $nextArrow = $('.slick-next');

    // Disable the left arrow if at the first slide
    if (currentSlide === 0) {
      $prevArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
    } else {
      $prevArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');
    }

    // Disable the right arrow if at the last slide
    if (currentSlide === slick.slideCount - slick.options.slidesToShow) {
      $nextArrow.addClass('slick-disabled').attr('aria-disabled', 'true');
    } else {
      $nextArrow.removeClass('slick-disabled').attr('aria-disabled', 'false');
    }
  });

  // Trigger afterChange event on page load to set initial state
  $inslide.trigger('afterChange', [0]);
});





$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('.add_sticky_mobile_cart').addClass('mob-stricky-fixed');
    }
    else {
        $('.add_sticky_mobile_cart').removeClass('mob-stricky-fixed');
    }
});

$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('.mobile-sticky-price').addClass('price-sticky-float');
    }
    else {
        $('.mobile-sticky-price').removeClass('price-sticky-float');
    }
});
$(document).ready(function(){
    $('.login-mobile').click(function(){
        $('.mobile-login-form').addClass('mobile_swipe_login');
        $('.overflow-black').addClass('overflow-black-bg');
        $('html').addClass('no-scroll');
    });

    $('.mobile_btn_close').click(function(){
        $('.mobile-login-form').removeClass('mobile_swipe_login');
        $('.overflow-black').removeClass('overflow-black-bg');
        $('html').removeClass('no-scroll');
    });
});


//  $(document).ready(function(){
       
//      $('.edit_Address_link a').click(function(){
//         $('html').addClass('flow_none');
//     });

//     $('.btn-close').click(function(){
//          $('html').removeClass('flow_none');
//     });

// });


$('#modal-addss, #address_pop_new').on('shown.bs.modal', function() {
  $('html').css('overflow', 'hidden');
});

$('#modal-addss, #address_pop_new').on('hidden.bs.modal', function() {
  $('html').css('overflow', 'auto');
});

$(document).ready(function(){
    $('.up_password').click(function(){
        $('.updated-bottom_pop').toggleClass('popslide');
    });
});

(function () {
  "use strict";
  var jQueryPlugin = (window.jQueryPlugin = function (ident, func) {
    return function (arg) {
      if (this.length > 1) {
        this.each(function () {
          var $this = $(this);

          if (!$this.data(ident)) {
            $this.data(ident, func($this, arg));
          }
        });

        return this;
      } else if (this.length === 1) {
        if (!this.data(ident)) {
          this.data(ident, func(this, arg));
        }

        return this.data(ident);
      }
    };
  });
})();

(function () {
  "use strict";
  function Guantity($root) {
    const element = $root;
    const quantity = $root.first("data-quantity");
    const quantity_target = $root.find("[data-quantity-target]");
    const quantity_minus = $root.find("[data-quantity-minus]");
    const quantity_plus = $root.find("[data-quantity-plus]");
    var quantity_ = quantity_target.val();
    $(quantity_minus).click(function () {
      quantity_target.val(--quantity_);
    });
    $(quantity_plus).click(function () {
      quantity_target.val(++quantity_);
    });
  }
  $.fn.Guantity = jQueryPlugin("Guantity", Guantity);
  $("[data-quantity]").Guantity();
})();


$(document).ready(function($){
  $("#similear_prdct, #pair_prdct").owlCarousel({
    loop:true,
    margin:20,
    nav : false,
    dots: true,
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:2
        },
        480:{
            items:3
        },
        768:{
            items:4
        },
        992:{
            items:4
        },
        1200:{
            items:5
        }
    }
  });
});
$(document).ready(function(){
    
    $('#gift-card1').slick({
      slidesToShow: 3,
      dots:true,
      centerMode: false,
      dots: true,
      nav: false,
      responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 479,
            settings: {
              slidesToShow: 1
            }
          },
          {
            breakpoint: 620,
            settings: {
              slidesToShow: 1
            }
          },
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 2,
            }
          },
        ]
      });
  $('#new-arrival1,#top-sailing,#trending-items,#carousel-latest').slick({
  slidesToShow: 4,
  dots:true,
  centerMode: false,
  dots: true,
  nav: false,
  responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 479,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
  $('#trends').slick({
  slidesToShow: 5,
  dots:true,
  centerMode: false,
  dots: false,
  nav: false,
  responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
  $('#category-slider, #category-slider1').slick({
    autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 3,
    dots:false,
    pauseOnHover: true,
    centerMode: false,
    dots: false,
    nav: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        }
      }
    ]
  });
  $('.carousel').slick({
  slidesToShow: 1,
  dots:false,
  centerMode: false,
  dots: false,
  autoplay: false,
  nav: true,
  arrows: true,
  pauseOnHover: true,
  responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 1,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
  // $("#prev-btn,#prev-btn1").click(function () {
  //   $("#prdct-slider1,#prdct-slider2").slick("slickPrev");
  // });

  // $("#next-btn,#next-btn1").click(function () {
  //   $("#prdct-slider1,#prdct-slider2").slick("slickNext");
  // });
  // $("#prev-btn,#prev-btn1").addClass("slick-disabled");
  // $("#prdct-slider1,#prdct-slider2").on("afterChange", function () {
  //   if ($(".slick-prev").hasClass("slick-disabled")) {
  //     $("#prev-btn,#prev-btn1").addClass("slick-disabled");
  //   } else {
  //     $("#prev-btn,#prev-btn1").removeClass("slick-disabled");
  //   }
  //   if ($(".slick-next").hasClass("slick-disabled")) {
  //     $(".next-btn,#next-btn1").addClass("slick-disabled");
  //   } else {
  //     $("#next-btn,#next-btn1").removeClass("slick-disabled");
  //   }
  // });
  // $('.prdct-slider').hover(function() {
   
  //   $(this).slick('slickPause');
   
  // }, function() {
     
  //     $(this).slick('slickPlay');
     
  // });
});

$(document).ready(function(){
    $('.header-nav-middle ul li').click(function(){
         $('.navigation').toggleClass('open-nav');

    });
    $('.filter_btn').click(function(){
         $('.mobile-filter-slide').addClass('slide');
         $('.overlay_btmm').addClass('overlay_btmm_open');
         $('html').addClass('no-scroll');
    });
    $('.filter_close').click(function(){
         $('.mobile-filter-slide').removeClass('slide');
         $('.overlay_btmm').removeClass('overlay_btmm_open');
         $('html').removeClass('no-scroll');
    });
});







$(document).ready(function(){
   $('#mid-top-carousel-off, #top-carousel-off, #bottom-top-carousel-off').owlCarousel({
    loop:true,
    margin:20,
    nav : false,
    dots: false,
    navText : ["<i class='fas fa-caret-left arrow'></i>","<i class='fas fa-caret-right arrow'></i>"],
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1,
            loop:true
        }
    }
    });
   $('#sub-banner').owlCarousel({
    loop:true,
    margin:20,
    nav : false,
    dots: false,
    navText : ["<i class='fas fa-caret-left arrow'></i>","<i class='fas fa-caret-right arrow'></i>"],
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:1
        },
        768:{
            items:2
        },
        1000:{
            items:2,
            loop:true
        }
    }
    });
   $('.prdct-slider').owlCarousel({
    loop:true,
    margin:20,
    nav : false,
    dots: true,
    navText : ["<i class='fa fa-chevron-left arrow'></i>","<i class='fa fa-chevron-right arrow'></i>"],
    responsiveClass:true,
    autoplay: false,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1,
            loop:true
        }
    }
    });
   $('.owl-dot').hover(function() {
  owl.trigger('play.owl.autoplay', [1000]); 
}, function() {
  owl.trigger('stop.owl.autoplay');
});


   $('#mobile_slick').owlCarousel({
    loop:true,
    margin:20,
    nav : false,
    dots: true,
    responsiveClass:true,
    autoplay: false,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:1
        },
        768:{
            items:1
        }
    }
    });
   $('#similiar-product').owlCarousel({
    loop:true,
    margin:20,
    nav : false,
    dots: true,
    responsiveClass:true,
    autoplay: false,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:2
        },
        480:{
            items:2
        },
        768:{
            items:2
        },
        992:{
            items:3
        },
        1100:{
            items:4
        },

    }
    });
});


$(document).ready(function(){
  $('#new-arrival1,#top-sailing,#trending-items,#carousel-latest').slick({
  slidesToShow: 4,
  dots:true,
  centerMode: false,
  dots: true,
  nav: false,
  responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 479,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
  $('#trends').slick({
  slidesToShow: 5,
  dots:true,
  centerMode: false,
  dots: false,
  nav: false,
  responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 4,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3
        }
      }
    ]
  });
  $('#category-slider, #category-slider1').slick({
    autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 3,
    dots:false,
    centerMode: false,
    dots: false,
    nav: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
        }
      }
    ]
  });
  // $('.carousel').slick({
  // slidesToShow: 1,
  // dots:false,
  // centerMode: false,
  // dots: false,
  // autoplay: false,
  // nav: true,
  // arrows: true,
  // pauseOnHover: true,
  // responsive: [
  //     {
  //       breakpoint: 991,
  //       settings: {
  //         slidesToShow: 1,
  //       }
  //     },
  //     {
  //       breakpoint: 767,
  //       settings: {
  //         slidesToShow: 1,
  //       }
  //     }
  //   ]
  // });
});

$(document).ready(function(){
    $('.header-nav-middle ul li').click(function(){
         $('.navigation').toggleClass('open-nav');

    });
    $('.filter_btn').click(function(){
         $('.mobile-filter-slide').addClass('slide');
         $('.overlay_bg').addClass('overlay_bg_slide');
    });
    $('.close').click(function(){
         $('.mobile-filter-slide').removeClass('slide');
         $('.overlay_bg').removeClass('overlay_bg_slide');
    });

    //  $('.check_mark_icon').click(function(){
    //     alert('clicked');
    //     $('.check_mark_icon').alert('clicked');
    //      $('.check_mark_icon').addClass('slide');
    //      $('.overlay_bg').addClass('overlay_bg_slide');
    // });
});


 

$(document).ready(function(){
   $('#gift-card11').owlCarousel({
    loop:true,
    margin:20,
    nav : false,
    dots: false,
    navText : ["<i class='fas fa-caret-left arrow'></i>","<i class='fas fa-caret-right arrow'></i>"],
    responsiveClass:true,
    autoplay: false,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1,
            dots: true
        },
        480:{
            items:1,
            dots: true
        },
        768:{
            items:1,
            dots: true
        },
        1000:{
            items:3,
            loop:false,
            dots: true
        }
    }
    });
   
});

// $(document).ready(function(){
//         $('#pd-slider,#pd-slider1').slick({
//           slidesToShow: 1,
//           dots:true,
//           centerMode: false,
//           dots: true,
//           autoplay: false,
//           autoplaySpeed: 1000,
//           nav: false,
//           responsive: [
//               {
//                 breakpoint: 991,
//                 settings: {
//                   slidesToShow: 1,
//                 }
//               },
//               {
//                 breakpoint: 767,
//                 settings: {
//                   slidesToShow: 1
//                 }
//               }
//             ]
//           });
//         $('#pd-slider .slick-dots').hover(function() {
//           $('#pd-slider .slick-slider').slick('slickPlay');
//         }, function() {
//           $('#pd-slider .slick-slider').slick('slickPause');
//         });
//     });

$(document).ready(function(){
   $('#mid-top-carousel-off, #top-carousel-off, #bottom-top-carousel-off, #coin-carousel-off').owlCarousel({
    loop:true,
    margin:20,
    nav : false,
    dots: false,
    navText : ["<i class='fas fa-caret-left arrow'></i>","<i class='fas fa-caret-right arrow'></i>"],
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1,
            loop:true
        }
    }
    });
   $('#sub-banner').owlCarousel({
    loop:true,
    margin:20,
    nav : false,
    dots: false,
    navText : ["<i class='fas fa-caret-left arrow'></i>","<i class='fas fa-caret-right arrow'></i>"],
    responsiveClass:true,
    autoplay: true,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:1
        },
        768:{
            items:2
        },
        1000:{
            items:2,
            loop:true
        }
    }
    });
   // $('.prdct-slider').owlCarousel({
   //  loop:true,
   //  margin:20,
   //  nav : true,
   //  dots: false,
   //  navText : ["<i class='fa fa-chevron-left arrow'></i>","<i class='fa fa-chevron-right arrow'></i>"],
   //  responsiveClass:true,
   //  autoplay: false,
   //  autoplayTimeout:4000,
   //  responsive:{
   //      0:{
   //          items:1,
   //          dots: false
   //      },
   //      480:{
   //          items:1,
   //          nav : true,
   //          dots: false
   //      },
   //      768:{
   //          items:1,
   //          nav : true,
   //          dots: false
   //      },
   //      1000:{
   //          items:1,
   //          loop:true
   //      }
   //  }
   //  });
});


$(document).ready(function () {
  $(".dmenu").hover(
    function () {
      $(this).find(".sm-menu").first().stop(true, true).slideDown(150);
    },
    function () {
      $(this).find(".sm-menu").first().stop(true, true).slideUp(105);
    }
  );
});

$(document).ready(function () {
  $(".megamenu").on("click", function (e) {
    e.stopPropagation();
  });
});


$(".selectBox").on("click", function(e) {
  $(this).toggleClass("show");
  var dropdownItem = e.target;
  var container = $(this).find(".selectBox__value");
  container.text(dropdownItem.text);
  $(dropdownItem)
    .addClass("active")
    .siblings()
    .removeClass("active");
});



// $(window).scroll(function(){
//     if ($(window).scrollTop() >= 150) {
//         $('.main-header').addClass('stricky-fixed');
//     }
//     else {
//         $('.main-header').removeClass('stricky-fixed');
//     }
// });


$(document).ready(function () {
    $('#nw1').owlCarousel({
        loop:true,
    margin:20,
    nav : false,
    dots: true,
    responsiveClass:true,
    autoplay: false,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:2
        },
        480:{
            items:2
        },
        768:{
            items:2
        },
        992:{
            items:3
        },
        1100:{
            items:4
        },

    }
    });
});




$(document).ready(function () {
    $('#aw').owlCarousel({
        loop:false,
    margin:20,
    nav : false,
    dots: true,
    responsiveClass:true,
    autoplay: false,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:2
        },
        480:{
            items:2
        },
        768:{
            items:2
        },
        992:{
            items:3
        },
        1100:{
            items:5
        },

    }
    });
});

