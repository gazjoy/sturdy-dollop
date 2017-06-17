;(function($){
    $(document).on('ready', function() {

        // =============================================
        // Overlay
        // =============================================

        $('#overlay').on('toggleactivate', function() {
            $('body').addClass('has-active-overlay');
        });

        $('#overlay').on('toggledeactivate', function() {
            $('body').removeClass('has-active-overlay');
        });
        
        
        // =============================================
        // Initialise the BX Slider
        // =============================================
        
        $('.js-carousel').bxSlider({
            auto: false,
            pager: false,
            prevSelector: ".js-carousel-controls",
            nextSelector: ".js-carousel-controls"
        });

    });
}(jQuery));
