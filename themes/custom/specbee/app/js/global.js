/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {
  "use strict";

  Drupal.behaviors.bootstrap_barrio_subtheme = {
    attach: function (context, settings) {
      /* Tabs Click */
      $('button[data-bs-toggle="tab"]').on("shown.bs.tab", function (e) {
        console.log("clicked tab");
        // Rebuild Slider
        $(".view-conference .view-content").slick("setPosition");
      });
      /* Slider */
      $(".view-conference .view-content").slick({
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              arrows: false,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true,
              arrows: false,
            },
          },
        ],
      });
    },
  };
})(jQuery, Drupal);
