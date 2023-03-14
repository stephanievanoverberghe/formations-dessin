// MODAL TRAINING

const deleteBtns = document.querySelectorAll('.delete');
const deleteLink = document.getElementById('deleteLink');

const createLink = (event) => {
    let id_trainings = event.target.dataset.idtrainings;
    deleteLink.setAttribute('href', 'deleteTrainingsCtrl.php?id_trainings=' + id_trainings);
    console.log(id_trainings);
};

deleteBtns.forEach(element => {
    element.addEventListener('click', createLink)
});

// MODAL MODULES

const deleteBtnsModule = document.querySelectorAll('.delete');
const deleteLinkModule = document.getElementById('deleteLinkModule');

const createLinkModule = (event) => {
    let id_modules = event.target.dataset.idmodules;
    deleteLinkModule.setAttribute('href', 'deleteModulesCtrl.php?id_modules=' + id_modules);
    console.log(id_modules);
};

deleteBtnsModule.forEach(element => {
    element.addEventListener('click', createLinkModule)
});

// MODAL SOUS-MODULES

const deleteBtnsSubmodule = document.querySelectorAll('.delete');
const deleteLinkSubmodule = document.getElementById('deleteLinkSubmodule');

const createLinkSubmodule = (event) => {
    let id_sub_modules = event.target.dataset.idsubmodules;
    deleteLinkSubmodule.setAttribute('href', 'deletesubmodulesCtrl.php?id_sub_modules=' + id_sub_modules);
    console.log(id_sub_modules);
};

deleteBtnsSubmodule.forEach(element => {
    element.addEventListener('click', createLinkSubmodule)
});