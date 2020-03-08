jQuery(document).ready(function($) {
  var entry = new TimelineMax({ repeatDelay: 1 });
  entry.to(".menu-button-section", { top: "20px", duration: 1 });

  var counter = 0;
  $(".menu-button-section").on("click", function() {
    counter += 1;

    var menu_time = new TimelineMax({ repeatDelay: 1 });

    if (counter % 2 == 1) {
      menu_time
        .to(".menu-button-section", { backgroundColor: "white", duration: 0.5 })
        .to("#menu-container", {
          left: 0,
          duration: 1
        })
        .to("#menu-container", {
          borderRadius: "0 50% 0 50%",
          duration: 1
        })
        .to(".logo-wrapper", { left: 0, duration: 1.5 });
    } else {
      menu_time
        .to(".logo-wrapper", { left: -2000, duration: 1 })
        .to(".menu-button-section", {
          backgroundColor: "rgb(201, 48, 48)",
          duration: 0.5
        })
        .to("#menu-container", {
          left: -2000,
          borderRadius: "0",
          duration: 1
        });
    }
  });
});
