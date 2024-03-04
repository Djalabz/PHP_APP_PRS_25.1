
const students = document.querySelector('p')
const btn = document.querySelector('button')


const prs = [
    'ADAM Carter',
    'ANNASSAMY Marc',
    'ATIENZA Julian',
    'BEN MAHFOUDH Chaïma',
    'BLOCTEUR Arthur',
    'BOILEAU Maxim',
    'DEVOUCHE Zacharie',
    'DUNCA Denis',
    'ESSONGHE Alex',
    'FDHIL Elyea',
    'GHEZALI Camelia',
    'HASSANI Ayoub',
    'KABA Ibrahima',
    'KHIF Sara',
    'LALANNE Samuel',
    'MABICKASSA BOUSSOUGOU Serge-Daryl',
    'MARTIN Gabriel',
    'RICHER Benjamin',
    'SOGLO Helsy Aubierge',
    'TARCHOUN Rayan',
    'THABTHIM Kevin',
    'TROUVE Rhys',
    'YAKOU Franckamour',
];

// On veut générer un index aléatoire afin d'afficher un élève aléatoirement 
function randomStudents() {
    const randomIndex = Math.floor(Math.random() * prs.length)
    const randomStudent = prs[randomIndex]
    students.innerText = randomStudent
}

// On met en place un interval pour afficher rapidement les étudiants à la suite 
const myInterval = setInterval(randomStudents, 50)

// Quand on clique sur notre bouton stop on supprime l'interval
btn.addEventListener('click', () => {
    clearInterval(myInterval)
})