const button = document.querySelector('button')
const output = document.querySelector('.output')

let count = 0;

button.addEventListener('click', () => {
    if (count < 20) {
        count ++;
        output.textContent = count;
    } 
})



