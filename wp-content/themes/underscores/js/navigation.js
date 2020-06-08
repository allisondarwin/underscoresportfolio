/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens
 **/

 jQuery(document).ready(function(){ //start of jquery wrapper

  jQuery(function() {
      jQuery(".menu-toggle").on("click", function() {
          if (jQuery(".menu-item").hasClass("active")) {
              jQuery(".menu-item").removeClass("active");
              jQuery(this).find(".hamburger").html("<p>&#9776;</p>");
          } else {
              jQuery(".menu-item").addClass("active");
              jQuery(this).find(".hamburger").html("<i class='fas fa-times'></i>");
          }
      });
    });

}); //end of jquery wrapper
