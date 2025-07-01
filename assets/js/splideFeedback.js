'use strict';

window.addEventListener('load', function () {
    const sliderInitialize = function () {
        const splideElement = document.querySelector('.splide.quotes');
        if (!splideElement) return;

        const splide = new Splide(splideElement, {
            type: 'loop',
            autoplay: true,
            interval: 3500,
            pagination: false,
            arrows: true,
            perPage: 1,
            speed: 700
        });

        const bar = splide.root.querySelector('.my-slider-progress-bar');
        if (bar) {
            splide.on('mounted move', function () {
                const end = splide.Components.Controller.getEnd() + 1;
                const rate = Math.min((splide.index + 1) / end, 1);
                bar.style.width = String(100 * rate) + '%';
            });
        }

        splide.mount();
    };

    sliderInitialize();

    if (window.acf) {
        window.acf.addAction('render_block_preview/type=webdev-feedback', sliderInitialize);

    }
});
