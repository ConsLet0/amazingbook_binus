const icon = document.getElementById('iconMenu')
const triangulo = document.getElementById('trianguloMenu')
const menu = document.getElementById('menuDesplegado')
const imagenes = document.getElementsByClassName('imagenes')


icon.addEventListener('click', function () {
    menu.classList.toggle('showhideMenu')
    triangulo.classList.toggle('showhideMenu')
})


window.addEventListener('resize', selectBreakpoint)
window.addEventListener('load', selectBreakpoint)


function selectBreakpoint() {
    if (window.innerWidth > 770) {
        imagenes[0].src = "images/desktop/image-header.jpg"
        imagenes[1].src = "images/desktop/image-transform.jpg"
        imagenes[2].src = "images/desktop/image-stand-out.jpg"
        imagenes[3].src = "images/desktop/image-graphic-design.jpg"
        imagenes[4].src = "images/desktop/image-photography.jpg"
        imagenes[5].src = "images/desktop/image-gallery-milkbottles.jpg"
        imagenes[6].src = "images/desktop/image-gallery-orange.jpg"
        imagenes[7].src = "images/desktop/image-gallery-cone.jpg"
        imagenes[8].src = "images/desktop/image-gallery-sugarcubes.jpg"
    } else {
        imagenes[0].src = "images/mobile/image-header.jpg"
        imagenes[1].src = "images/mobile/image-transform.jpg"
        imagenes[2].src = "images/mobile/image-stand-out.jpg"
        imagenes[3].src = "images/mobile/image-graphic-design.jpg"
        imagenes[4].src = "images/mobile/image-photography.jpg"
        imagenes[5].src = "images/mobile/image-gallery-milkbottles.jpg"
        imagenes[6].src = "images/mobile/image-gallery-orange.jpg"
        imagenes[7].src = "images/mobile/image-gallery-cone.jpg"
        imagenes[8].src = "images/mobile/image-gallery-sugar-cubes.jpg"
    }
}