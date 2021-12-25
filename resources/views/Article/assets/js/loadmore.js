$( document ).ready(function () {
    $(".moreBox").slice(0, 3).show();
      if ($(".blogBox:hidden").length != 0) {
        $(".load-more").show();
      }   
      $(".load-more").on('click', function (e) {
        e.preventDefault();
        $(".moreBox:hidden").slice(0, 6).slideDown();
        if ($(".moreBox:hidden").length == 0) {
          $(".load-more").fadeOut('slow');
        }
      });
    });