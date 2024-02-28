// Déclaration constantes
const play = document.querySelector('.btn-play');
const btns = document.querySelectorAll('.btn');
const player = document.querySelector('.player');
const computer = document.querySelector('.computer');
const result = document.querySelector('.result');

// Tableau items
const items = ['pierre', 'feuille', 'ciseaux'];

// Récupérer le symbole du joueur
btns.forEach((btn) => btn.addEventListener('click', (e) => {
    const playerItem = e.target.getAttribute('id');
    player.textContent = playerItem;
}))

// Function startGame() 
function startGame() {
    // Générer un item aléatoire
    const randomNum = Math.floor(Math.random() * items.length);
    const randomItem = items[randomNum];

    // Récupérer l'item du joueur
    computer.textContent = randomItem;
    const playerItem = player.textContent;

    // Comparer les items entre ordi et joueur
    if ((randomItem == 'pierre' && playerItem == 'feuille') ||
        (randomItem == 'feuille' && playerItem == 'ciseaux') ||
        (randomItem == 'ciseaux' && playerItem == 'pierre')) {
            result.style.color = 'green';
            result.textContent = 'Vicoire !';
        } else if (randomItem == playerItem) {
            result.style.color = 'gray';
            result.textContent = 'Égalité';
        } else {
            result.style.color = 'red';
            result.textContent = 'Perdu ...';
    }
}

// Écouteur d'événements sur le bouton Play 
play.addEventListener('click', startGame);
