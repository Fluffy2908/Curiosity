
'use strict'

window.addEventListener( 'load', function () {

    const sliderInitialize = function() {

        var splide = new Splide( '.alignfull .splide ', {
            autoplay: true,
            type: 'loop',
            pagination: false,
            perPage: 1,
        } );
        var bar    = splide.root.querySelector( '.my-slider-progress-bar' );
        
        // Updates the bar width whenever the carousel moves:
        splide.on( 'mounted move', function () {
          var end  = splide.Components.Controller.getEnd() + 1;
          var rate = Math.min( ( splide.index + 1 ) / end, 1 );
          bar.style.width = String( 100 * rate ) + '%';
        } );
        
        splide.mount();

    }
    sliderInitialize();

    if(window.acf){
        window.acf.addAction('render_block_preview/type=webdev-feedback', sliderInitialize);
    }
})
