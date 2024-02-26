// On déclare nos const
const input = document.querySelector('input')
const btn = document.querySelector('.submit')
const list = document.querySelector('ul')

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

        // On vient ajouter à notre liste la todo en question
        list.appendChild(todo)
        // On nettoie l'input (cad on le vide après soumission)
        input.value = ""
    }
})

