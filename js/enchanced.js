$(document).ready(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 10) {
            $(".close-section-one").css("display", "block");
            $(".close-section-two").css("display", "block");
            $(".close-section-three").css("display", "block");
        }
    });
});