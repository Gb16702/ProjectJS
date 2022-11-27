const yellow = document.querySelector('yellow')
const message = document.querySelector('.welcomeMessage')


window.onload = () => {
    console.log('Page Home');
    yellow.style.setProperty('opacity', '.2')
    function first() {
        yellow.classList.add('anim')
        setTimeout(second, 900)
        yellow.style.setProperty('font-size', '80px')
    }

    function second() {
        yellow.classList.remove('anim')
        setTimeout(third, 0)
    }
    setTimeout(first, 200)

    function third() {
        yellow.classList.add('opacity')
        yellow.style.removeProperty('opacity')
        setTimeout(fourth, 0)
    }
    function fourth() {
        message.classList.add('translated')
    }
}

yellow.onclick = () => {
    setTimeout(() => {
        yellow.classList.add('transform')
    }, 0)
    yellow.classList.remove('transform')
}
let arrowSlideBottom = document.querySelector('.arrow-slide')
let arrowSlideTop = document.querySelector('.arrow-slide-up')
let grid = document.querySelector('.blocGrille')

arrowSlideBottom.onclick = () => {
    grid.classList.add('extended')
    arrowSlideBottom.style.display = "none"
    arrowSlideTop.style.display = 'flex'
}

arrowSlideTop.onclick = () => {
    grid.classList.remove('extended')
    arrowSlideBottom.style.display = 'flex'
    arrowSlideTop.style.display = 'none'
}


