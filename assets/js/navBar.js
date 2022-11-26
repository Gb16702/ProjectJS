let liste = document.querySelectorAll('li')
let navLinks = document.querySelectorAll('.navLink')
let array = ['accueil', 'projets', 'membres']

liste.forEach(li => {

    if (li.classList.contains('login')) {
        return;
    }else{
        navLinks.forEach(navLink => {

        if(window.location.href.indexOf(array[0] > -1)) {
            if(li.textContent.includes('Accueil')) {
                li.classList.add('active')
                if(navLink.parentNode.classList.contains('active')) {
                    navLink.classList.add('active')
                }
            }
        }else if(window.location.href.indexOf(array[1] > -1)) {
            if(li.textContent.includes('Projets')) {
                li.classList.add('active')
                if(navLink.parentNode.classList.contains('active')) {
                    navLink.classList.add('active')
                }
            }
        }else if(window.location.href.indexOf(array[2] > - 1)){
            if(li.textContent.includes('Membres')) {
                li.classList.add('active')
                if(navLink.parentNode.classList.contains('active')) {
                    navLink.classList.add('active')
                }
            }
        }
    })
    }
})