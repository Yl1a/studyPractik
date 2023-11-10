const deleteModal = document.querySelector('.modalDelete');
const deleteOpenBtn = document.querySelector('.delete');
const closeDelete = document.querySelector('.closeBtnDelete');



closeDelete.addEventListener('click', () => {
    deleteModal.classList.remove('active')
})
deleteOpenBtn.addEventListener('click', () => {
    deleteModal.classList.add('active')
})
const editModal = document.querySelector('.modalEdit');
const editOpenBtn = document.querySelector('.edit');
const closeEdit = document.querySelector('.closeBtnEdit');



closeEdit.addEventListener('click', () => {
    editModal.classList.remove('active')
})
editOpenBtn.addEventListener('click', () => {
    editModal.classList.add('active')
})