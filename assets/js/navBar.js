let liste = document.querySelectorAll('li')
let navLinks = document.querySelectorAll('.navLink')
let array = ['accueil', 'projets', 'membres']
const icon1 = document.querySelector('.userIcon')
const icon2 = document.querySelector('.userIcon2')

console.log(icon2);
liste.forEach(li => {

    if (li.classList.contains('login')) {
        if(window.location.href.indexOf('login') > - 1) {
            icon2.style.setProperty('display', 'flex', 'important')
            icon1.style.display = "none"
        }
        return;
    }else{
        navLinks.forEach(navLink => {

        if(window.location.href.indexOf(array[0]) > -1) {
            if(li.textContent.includes('Accueil')) {
                li.classList.add('active')
                if(navLink.parentNode.classList.contains('active')) {
                    navLink.classList.add('active')
                }
            }
        }else if(window.location.href.indexOf(array[1]) > -1) {
            if(li.textContent.includes('Projets')) {
                li.classList.add('active')
                if(navLink.parentNode.classList.contains('active')) {
                    navLink.classList.add('active')
                }
            }
        }else if(window.location.href.indexOf(array[2]) > -1){
            console.log('osdsdk');
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

// Modifier le positionnement de la nav en fonction du nombre d'enfant qu'a l'UL de droite
let rightUl = document.querySelector('.rightUl')
console.log(rightUl);

if (rightUl.childElementCount > 1) {
    rightUl.style.setProperty('width', "35%")
}else {
    rightUl.style.setProperty('width', '20%')
}