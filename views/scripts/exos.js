
// 3) Exo Editeur HTML

const input = document.querySelector('#input')
const output = document.querySelector('.output')
const btn = document.querySelector('button')


btn.addEventListener('click', () => {
    output.innerHTML = input.value
    input.value = ""
})


// 1)  Exo Bouton d'incrémentation

// const button = document.querySelector('button')
// const output = document.querySelector('.output')

// let count = 0;

// button.addEventListener('click', () => {
    //     if (count < 20) {
        //         count ++;
        //         output.textContent = count;
        //     } 
// })
        
        
        
// 2)  Exo affichage des persos

// import data from './data.js'

// const list = document.querySelector('.list')

// Afficher chaque perso comme dans l'énoncé. 
// On créera la plupart des éléments depuis JS 
// On pourra faire un peu de CSS pour l'affichage en grid

// data.forEach((item) => {
    // Créer les éléments (h1, h2, img etc) dans notre document
    // const wrapper = document.createElement('div')
    // const name = document.createElement('h1')
    // const job = document.createElement('h2')
    // const img = document.createElement('img')

    // Donner du contenu à ces éléments
    // name.textContent =  item.name
    // job.textContent = item.job
    // img.src = item.image

    // Insérer ces éléments dans le wrapper (appendChild)
    // wrapper.appendChild(name);
    // wrapper.appendChild(job);
    // wrapper.appendChild(img);

    // J'insère mon warpper dans la div list (cf le HTML)
//     list.appendChild(wrapper)
// })