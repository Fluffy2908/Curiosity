function jsLoaded() {
    const htmlTag = document.querySelector('html')
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
}

function showToTop() {
    const toTopButton = document.getElementById('to-top')
    if (window.scrollY > 250) {
        toTopButton.classList.add('show')
    } else {
        toTopButton.classList.remove('show')
    }
}

function scrollDown() {
    const scrollDown = document.getElementById('scroll')
    if (scrollDown) {
        if (window.scrollY > 150) {
            scrollDown.classList.add('show')
        } else {
            scrollDown.classList.remove('show')
        }
    }
}

(function ($) {
    $(document).ready(function () {
        $('#navbar ul .menu-item-has-children > a').each(function () {
            const id = $(this).parent().attr('id') + '-toggle';
            $(this).after(
                '<input type="checkbox" id="' + id + '">' +
                '<label for="' + id + '" class="menu-toggle">' +
                '<span class="sub-toggle" aria-hidden="false"></span>' +
                '<span class="screen-reader-text">open</span>' +
                '</label>'
            )
        })
        $('#navbar ul .current-menu-ancestor input[type="checkbox"], #navbar ul .current-menu-parent input[type="checkbox"]').attr("checked", "checked");
    });
})(jQuery);

function elementsInViewport() {
    const elements = document.querySelectorAll('.animate')
    const animated = 'animated'
    const windowTop = window.scrollY
    const windowBottom = windowTop + (window.innerHeight || document.documentElement.clientHeight)

    elements.forEach(el => {
        const rect = el.getBoundingClientRect()
        const elTop = rect.top + windowTop
        const elBottom = rect.bottom + windowTop

        if (windowBottom >= elTop && windowTop <= elBottom) {
            el.classList.add(animated)
        }
    })
}

function addAnimatedClass() {
    const elements = document.querySelectorAll('h1, h2, p, .blog-test, .posts, .project, .columns, .trending, .feedback')
    elements.forEach(el => el.classList.add('animate'))
}

document.addEventListener('DOMContentLoaded', function () {
    jsLoaded()
    showToTop()
    scrollDown()
    addAnimatedClass()
    elementsInViewport()

    const toTop = document.getElementById('to-top')
    if (toTop) {
        toTop.addEventListener('click', function () {
            document.body.scrollTop = 0
            document.documentElement.scrollTop = 0
        })
    }

    // ✅ SCROLLDOWN GUMB POVEZAN Z #main
    const scrollDownBtn = document.getElementById('scroll')
    const mainTarget = document.getElementById('main')
    if (scrollDownBtn && mainTarget) {
        scrollDownBtn.addEventListener('click', function (e) {
            e.preventDefault()
            mainTarget.scrollIntoView({ behavior: 'smooth' })
        })
    }
}, false)

document.addEventListener('scroll', function () {
    showToTop()
    scrollDown()
    elementsInViewport()
})

window.addEventListener('resize', function () {
    elementsInViewport()
})
