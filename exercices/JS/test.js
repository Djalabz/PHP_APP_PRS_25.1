const object = {
    name: "josé",
    age: 34
}

console.log(object.age) // Affiche 34 dans la console

object.name = "dede"
object.age = 23

console.error('Ceci est une erreur')

window.addEventListener('click', (e) => {
    console.log(e.target)
}) 