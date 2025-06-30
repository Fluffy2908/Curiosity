function jsLoaded() {
    const htmlTag = document.querySelector('html')
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
}
function showToTop(){
    const toTopButton = document.getElementById('to-top')
    if (window.scrollY > 250 ) {
        toTopButton.classList.add('show')
    } else {
        toTopButton.classList.remove('show')
    }
}
function scrollDown(){
    const scrollDown = document.getElementById('scroll')
    if (scrollDown) {
        if (window.scrollY > 150 ) {
            scrollDown.classList.add('show')
        } else {
            scrollDown.classList.remove('show')
        }
    }
}


(function ($) {
    $(document).ready(function () {
        $('#navbar ul .menu-item-has-children > a').each(function (index, element) {
            var id = $(this).parent().attr('id') + '-toggle';
            $(this).after('<input type="checkbox" id="' + id + '"><label for="' + id + '" class="menu-toggle"><span class="sub-toggle" area-hidden="false"></span><span class="screen-reader-text">open</span></label>');
        });
        $('#navbar ul .current-menu-ancestor input[type="checkbox"], #navbar ul .current-menu-parent input[type="checkbox"]').attr("checked", "checked");
    });
})(jQuery);
function elementsInViewport(){

        let elements = document.querySelectorAll('.animate')
        let animated = 'animated'
        let windowTopPosition = window.scrollY
        let windowHeight = window.innerHeight || document.documentElement.clientHeight
        let windowBottomPosition = windowTopPosition + windowHeight
        for (let i = 0; i < elements.length; i++){
        let elementTopPosition = elements[i].getBoundingClientRect().top + windowTopPosition
        let elementBottomPosition = elements[i].getBoundingClientRect().bottom + windowTopPosition
        if ( (windowBottomPosition >= elementTopPosition) && (windowTopPosition <= elementBottomPosition) ) {
            elements[i].classList.add(animated)
        } else {
            //elements[i].classList.remove(animated)
        }
    }  

}
function addAnimatedClass(){
    let elements = document.querySelectorAll('h1, h2, p, .blog-test, .posts, .project, .columns, .trending, .feedback')
    for (let i = 0; i < elements.length; i++){
        elements[i].classList.add('animate')
    }
}
document.addEventListener('DOMContentLoaded' , function(){
    jsLoaded()
    showToTop()
    scrollDown()
    addAnimatedClass()
    elementsInViewport()

 document.getElementById('to-top').addEventListener('click' , function(){
    document.body.scrollTop = 0 
    document.documentElement.scrollTop = 0
})
}, false )

/*const scrollDown2 = document.getElementById('scroll')
if (scrollDown2) {
    scrollDown2.addEventListener('click',function(){
        let windowHeight1 = window.innerHeight || document.documentElement.clientHeight
        document.documentElement.scrollTop = windowHeight1
    })
}
*/
document.addEventListener('scroll', function() {
    showToTop()
    scrollDown()
    elementsInViewport()
    addAnimatedClass()
})
window.addEventListener('resize' , function(){
    elementsInViewport()
})


    