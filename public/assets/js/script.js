// MODAL

const deleteBtns = document.querySelectorAll('.delete');
const deleteLink = document.getElementById('deleteLink');

const createLink = (event) => {
    let idUser = event.target.dataset.idUser;
    deleteLink.setAttribute('href', '' + idUser)
};

deleteBtns.forEach(element => {
    element.addEventListener('click', createLink)
});