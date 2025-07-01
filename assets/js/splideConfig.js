'use strict'

window.addEventListener('load', function () {

    const sliderInitialize = function () {

        let splide = new Splide('.trending .splide:not(.quotes)', {
            perPage: 1,
            perMove: 1,
            mediaQuery: 'min',
            gap: '15px',
            pagination: true,
            autoplay: true,
            type: 'loop',
            breakpoints: {
                580: {
                    perPage: 2
                },
                768: {
                    perPage: 3
                },
                1200: {
                    perPage: 4
                },
                1500: {
                    perPage: 5
                }
            }
        });
        splide.mount();
    }

    sliderInitialize();

    if (window.acf) {
        window.acf.addAction('render_block_preview/type=webdev-produkte', sliderInitialize);
    }
});
