// Javascript pour menu burger

/*  Déclaration de variale par let privilégiée, puis attribution de sa valeur.
 "La syntaxe de déclaration des variables avec let correspond à la nouvelle syntaxe. La syntaxe avec var est l’ancienne syntaxe qui est vouée à disparaitre.
 Vous devriez donc aujourd’hui toujours utiliser le mot clef let pour déclarer vos variables" (src: Pierre Giraud https://www.pierre-giraud.com/javascript-apprendre-coder-cours/presentation-variable/)
 "En JavaScript, la déclaration d'une variable se limite au mot clé let, suivi du nom de variable choisi.
 Bien qu'il y ait une différence subtile entre les deux (que nous détaillerons dans le chapitre sur la portée), pour l'instant vous pouvez simplement voir var  comme l'ancienne version de let :"
 (src:  Openclassrooms https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript/6278392-declarez-des-variables-et-modifiez-leurs-valeurs)
*/

/* En fonction des points de rupture selon la taille des écrans (voire MediaQueries),
 l'icone burger apparaît ou disparaît.*/

// On déclare les 2 variables globales burger et ul en leur attribuant leur valeur respective

// La méthode querySelector() de l'interface Document retourne le premier Element dans le document correspondant au sélecteur - ou groupe de sélecteurs - spécifié(s) (src : https://developer.mozilla.org/fr/docs/Web/API/Document/querySelector)
 
let burger = document.querySelector('#burger') // Le menu de navigation
let ul = document.querySelector('ul') // La liste de liens du menu 

// Utilisation de la méthode addEventListener() pour implémenter le gestionnaire d'évènement ('click')

    burger.addEventListener('click',() => { //Lorsque l'icone est visible, au 1er clic les liens du menu se déroulent
        // La méthode classList.toggle  change la présence d'une classe dans la liste. Ici rend visible ou supprime (invisible) les liens
        ul.classList.toggle('switch') // Puis en recliquant, on referme les liens du menu de navigation
    })
