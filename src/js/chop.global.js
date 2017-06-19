;(function($){
    $(document).on('ready', function() {
        
        // =============================================
        // Initialise the BX Slider
        // =============================================
        
        $('.js-carousel').bxSlider({
            auto: false,
            prevSelector: ".js-carousel-controls",
            nextSelector: ".js-carousel-controls"
        });

    });
}(jQuery));