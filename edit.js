let button = document.querySelector('.edit'),
edit = document.querySelector('.edit-back');
console.log(edit);

button.addEventListener('click',() =>{
    edit.classList.add('active');
})