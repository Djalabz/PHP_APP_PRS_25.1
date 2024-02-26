const burger = document.querySelector('.burger-btn');
const menu = document.querySelector('.menu');

burger.addEventListener('click', () => {
    // Avec toggle on fait la meme chose que plus bas
    menu.classList.toggle('open');

    // Un a un if pour ajouter la classe open à notremenu si il ne l'a pas déjà
    // Sinon on lui enlève cette classe
    // if (!menu.classList.contains('open')) {
    //     menu.classList.add('open');
    // } else {
    //     menu.classList.remove('open');
    // }

    // Pour ajouter une animation lors du click sur mon burger
    burger.classList.toggle('animate__animated');
    burger.classList.toggle('animate__swing');
})


console.log('Script is running');

// On affiche un bouton avec un '+' et lorsque l'on clique sur ce bouton on incrémente 
// de 1 une variable count. Et on affiche ce compte. Il doit s'arreter à 20.
