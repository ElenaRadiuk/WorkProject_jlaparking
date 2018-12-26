jQuery(document).ready(function($) {
    $("#menu-topmenu .withscroll, .main-text button").on("click","a", function (event) {
        event.preventDefault();

        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

    var hamburger = $('#hamburger-icon');
    var showMenu = $('.menu-wrapper');
    hamburger.click(function() {
        hamburger.toggleClass('active');
        showMenu.toggleClass('show');
        return false;
    });

});