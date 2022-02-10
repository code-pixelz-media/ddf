(function ($) {
    $(function () {

        //initialize tab on backend
        $('#tabs-wrap').tabs();

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

        $('.cpm-multiselect').select2();
        $('.cpm_single_select').select2();
        $(".cpm_basic_single_select").select2({
            placeholder: "Select a Position",
            allowClear: true
        });

    }); // END OF DOCUMENT READY
})(jQuery);

