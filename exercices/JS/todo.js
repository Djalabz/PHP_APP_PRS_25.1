// On déclare nos const
const input = document.querySelector('input')
const btn = document.querySelector('.submit')
const list = document.querySelector('ul')

// AJOUT D'UNE TODO
btn.addEventListener('click', () => {
    // Si l'input de la todo n'est pas vide ...
    if (input.value.length) {
        // On crée un élément li qui contiendra notre todo
        const todo = document.createElement('li')
        // On ajoute la valeur de l'input comme contenu texte de notre todo
        todo.textContent = input.value

        // On crée le bouton de suppression avec pour contenu "X"
        // et on l'ajoute en tant qu'enfant à notre todo / li 
        const deleteBtn = document.createElement('button')
        deleteBtn.classList.add('deleteBtn') 
        deleteBtn.textContent = "X"
        todo.appendChild(deleteBtn)

        // Bouton de checkbox de la todo
        const checkbox = document.createElement('input')
        checkbox.setAttribute('type', 'checkbox')
        todo.appendChild(checkbox)

        // Quand on clique sur la checkbox la classe .checked (css) s'applique à notre todo
        checkbox.addEventListener('click', () => {
            todo.classList.toggle('checked')
        })

        // On vient ajouter à notre liste la todo en question
        list.appendChild(todo)

        // Suppression d'une todo (méthode 1)
        deleteBtn.addEventListener('click', () => {
            todo.remove()
        })

        // On nettoie l'input (cad on le vide après soumission)
        input.value = ""
    }
})

window.addEventListener('keydown', (e) => {
    if (e.key === "Enter") {
        console.log('Il a appuyé sur Enter !')
    }
})


// SUPPRESSION D'UNE TODO (Méthode 2)

// list.addEventListener('click', (e) => {
//     console.log(e.target)
    // Si la cible de notre clique possède la classe du bouton de suppression ('deleteBtn')
    // Cela signifie que l'on a cliqué sur ce bouton de suppression
    // if (e.target.classList.contains('deleteBtn')) {
        // On vient donc supprimer avec remove() le parent du bouton qui n'est autre 
        // que notre élément de todo
//         e.target.parentElement.remove()
//     }
// })
