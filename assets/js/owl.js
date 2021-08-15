jQuery(document).ready(function () {
  jQuery('#owl-top').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    navText: [
      "<i class='fas fa-angle-double-left'></i>",
      "<i class='fas fa-angle-double-right'></i>"
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  })

  jQuery('#owl-promo').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    navText: [
      "<i class='fas fa-angle-double-left'></i>",
      "<i class='fas fa-angle-double-right'></i>"
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 3
      }
    }
  })

  jQuery('#owl-equipe').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    navText: [
      "<i class='fas fa-angle-double-left'></i>",
      "<i class='fas fa-angle-double-right'></i>"
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 3
      }
    }
  })

  jQuery('.owl-programacao').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 5000,
    navText: [
      "<i class='fas fa-angle-double-left'></i>",
      "<i class='fas fa-angle-double-right'></i>"
    ],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 4
      }
    }
  })
})
