(function ($) {
  "use strict";

  // Submenu dropdown toggler

  if ($(".main-menu li.menu-item-has-children ul").length) {
    $(".main-menu li.menu-item-has-children").append(
      '<div class="dropdown-btn"><i class="flaticon flaticon-arrow-down-sign-to-navigate"></i></div>'
    );

    // Dropdown Button - 
    $(".main-menu li.menu-item-has-children .dropdown-btn").on(
      "click",
      function () {
        $(this).prev("ul").slideToggle(500);
      }
    );

    // Disable dropdown parent link - 
    $(
      ".main-menu .navigation li.menu-item-has-children > a, .hidden-bar .side-menu li.menu-item-has-children > a"
    ).on("click", function () {
      e.preventDefault();
    });
  }

  // mobile nav hide / show -
  if ($(".mobile-menu").length) {
    var mobileMenuContent = $("#top-navigation .navigation").html();

    $(".mobile-menu .navigation").append(mobileMenuContent);

    $(".sticky-header .navigation").append(mobileMenuContent);

    $(".mobile-menu .close-btn").on("click", function () {
      $("body").removeClass("mobile-menu-visible");
    });

    // Dropdown Button - 
    $(".mobile-menu li.menu-item-has-children .dropdown-btn").on(
      "click",
      function () {
        $(this).prev("ul").slideToggle(500);
      }
    );

    // Menu Toggle button --
    $(".mobile-nav-toggler").on("click", function () {
      $("body").addClass("mobile-menu-visible");
    });

    // Menu Toggle button - 
    $(".mobile-menu .menu-backdrop, .mobile-menu .close-btn").on(
      "click",
      function () {
        $("body").removeClass("mobile-menu-visible");
      }
    );
  }
})(jQuery);
