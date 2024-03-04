// 1) Récupérer les éléments HTML 
const div = document.querySelector('.comments')


// 2) Effectuer notre requete http asynchrone avec fetch vers jsonplaceholder 
fetch('https://jsonplaceholder.typicode.com/comments', {
    method: "GET",
    headers:{
        'Accept' : 'application/json',
        'Content-type' : 'application/json'
    } 
})
.then(res => res.json())
// Ici on appelle la fonction définie plus bas sur la réponse de l'API 
.then(res => displayComments(res))
.catch(e => console.log(e))


// 3) Notre fonction d'affichage des commentaires
function displayComments(data) {
    // On veut recup seulement les 10 premiers commentaires donc boucle for 
    for (let i = 0; i < 10; i++) {
        const id = data[i].id
        const title = data[i].name
        const email = data[i].email
        const body = data[i].body

        // On crée le html pour un commentaire
        const html = `
            <h1>${id} : ${title}</h1>
            <h2>${email}</h2>
            <p>${body}</p>
        `

        // On crée un élément div qui sera le conteneur d'un comment
        const comment = document.createElement('div')

        // On insère le html comme contenu de notre comment
        comment.innerHTML = html

        // On ajoute le comment à notre div cible 
        div.appendChild(comment)
    }
}