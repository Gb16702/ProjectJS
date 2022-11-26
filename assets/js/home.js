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