const addModal = document.querySelector('.modalAdd');
const addOpenBtn = document.querySelector('.add');
const closeAdd = document.querySelector('.closeBtnAdd');
console.log(addOpenBtn);



closeAdd.addEventListener('click', () => {
    addModal.classList.remove('active')
})
addOpenBtn.addEventListener('click', (event) => {
    addModal.classList.add('active')
    event.preventDefault();
})