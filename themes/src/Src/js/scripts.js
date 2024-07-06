/* Funktion zu prufung ob JS (diese JS-File) geladen wurder
--> Andern der Klasse "no-js" in "js" im <html>-tag
*/

function jsLoaded() {
    const htmlTag = document.querySelector('html')
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
}

/*
Funtion um To.Top-Button ein/auszublenden
*/

function showToTop(){
    const toTopButton = document.getElementById('to-top')
    if (window.scrollY > 250 ) {
        toTopButton.classList.add('show')
    } else {
        toTopButton.classList.remove('show')
    }
}
/*
Funktion zur prufung ob Elemente mit der Klasse "animate" im Viewport sichtbar sind.
Wenn die Elemente in Viewpšort sichtbar sind, wird eine klasse "animated" hinzugefugt
 */

function elementsInViewport(){

    // Finde alle Elemente mit der folgende Klasse ("animate")
    let elements = document.querySelectorAll('.animate')
    // Festlegen eine Klasse, die  bei 2inViewport den Elementen hinzugefugt wird
    let animated = 'animated'

    // ** Viewport (Browserfenster)
    // Abfrage der Fenster Top-Position
    let windowTopPosition = window.scrollY
    // Abfrage der Fnester-Hohe
    let windowHeight = window.innerHeight || document.documentElement.clientHeight
    // Berechnen der Fenster Bottom-Position 
    let windowBottomPosition = windowTopPosition + windowHeight

    //console.log('TopPos: ' + windowTopPosition + '; Height: ' + windowHeight + '; BottomPos: ' + windowBottomPosition)

    for (let i = 0; i < elements.length; i++){

        // Abfrage der Element Top-Position (in reation zum document)
        let elementTopPosition = elements[i].getBoundingClientRect().top + windowTopPosition
        // Abfrage der Element Bottom-Position (in reation zum document)
        let elementBottomPosition = elements[i].getBoundingClientRect().bottom + windowTopPosition
        //
        console.log(elements[i].getBoundingClientRect() )
        if ( (windowBottomPosition >= elementTopPosition) && (windowTopPosition <= elementBottomPosition) ) {
            elements[i].classList.add(animated)
        } else {
            //elements[i].classList.remove(animated)
        }
    }  

}

function addAnimatedClass(){
    let elements = document.querySelectorAll('h1, h2, p, .post, .project, .columns, .trending, .feedback')
    for (let i = 0; i < elements.length; i++){
        elements[i].classList.add('animate')
    }
}
// Event Listner "DOMContentLoaded" wird nur ausgefurt, wenn der DOM fertig aufgebaut ist
document.addEventListener('DOMContentLoaded' , function(){
    jsLoaded()
    showToTop()
    addAnimatedClass()
    elementsInViewport()
  

    /*
Funtion um "scroll to top" mit Event Listner "click"
*/
document.getElementById('to-top').addEventListener('click' , function(){
    document.body.scrollTop = 0 
    document.documentElement.scrollTop = 0
})
}, false )

// Event Listner "scroll" wird immer beim scrollen ausgefurt

document.addEventListener('scroll', function() {
    showToTop()
    elementsInViewport()
    addAnimatedClass()
})

// Event Listner "resize" wird ausgefurht bei Veranderung der Fenstergrosse
window.addEventListener('resize' , function(){
    elementsInViewport()
})


    