// Javascript pour menu burger

/* En fonction des points de rupture selon la taille des écrans (voire MediaQueries),
 l'icone burger apparaît ou disparaît.*/
 
var burger = document.querySelector('#burger')
var ul = document.querySelector('ul')

    burger.addEventListener('click',() => { //Lorsque l'icone est visible, au 1er clic les liens du menu se déroulent
        ul.classList.toggle('switch') // Puis en recliquant, on referme les liens du menu de navigation
    })