jQuery(document).ready( function() {

    //initialize tab on backend
    jQuery('#tabs-wrap').tabs();

    // jQuery( "#accordion" ).accordion({
    //     header: '> div.wrap > h3',
    //     collapsible: true
    // });

    $(".acc-item > a").on("click", function(e) {
        e.preventDefault();
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings(".acc-content").slideUp(250);
        } else {
            $(".acc-item > a").removeClass("active");
            $(this).addClass("active");
            $(".acc-content").slideUp(250);
            $(this).siblings(".acc-content").slideDown(250);
        }
    });

});

