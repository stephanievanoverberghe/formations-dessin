

// MODAL TRAINING
const deleteBtns = document.querySelectorAll('.deleteTraining');
const deleteLink = document.getElementById('deleteLink');

const createLink = (event) => {
    let id_trainings = event.target.dataset.idtrainings;
    deleteLink.setAttribute('href', 'deleteTrainingsCtrl.php?id_trainings=' + id_trainings);
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
};

deleteBtnsSubmodule.forEach(element => {
    element.addEventListener('click', createLinkSubmodule)
});

// MODAL VIDEOS ********************************************************

const deleteBtnsVideo = document.querySelectorAll('.deleteVideo');
const deleteLinkVideo = document.getElementById('deleteLinkVideo');

const createLinkVideo = (event) => {
    let id_videos = event.target.dataset.idvideos;
    deleteLinkVideo.setAttribute('href', 'deleteVideosCtrl.php?id_videos=' + id_videos);
};

deleteBtnsVideo.forEach(element => {
    element.addEventListener('click', createLinkVideo)
});

// MODAL SUBCATEGORIES ***************************************************

const deleteBtnsSubcategory = document.querySelectorAll('.delete');
const deleteLinkSubcategory = document.getElementById('deleteLinkSubcategory');

const createLinkSubcategory = (event) => {
    let id_sub_categories = event.target.dataset.idsubcategories;
    deleteLinkSubcategory.setAttribute('href', 'deleteSubcategoriesCtrl.php?id_sub_categories=' + id_sub_categories);
};

deleteBtnsSubcategory.forEach(element => {
    element.addEventListener('click', createLinkSubcategory)
});

// MODAL CATEGORIES
const deleteBtnsCategory = document.querySelectorAll('.deleteCategory');
const deleteLinkCategory = document.getElementById('deleteLinkCategory');

const createLinkCategory = (event) => {
    let id_categories = event.target.dataset.idcategories;
    deleteLinkCategory.setAttribute('href', 'deleteCategoriesCtrl.php?id_categories=' + id_categories);
};

deleteBtnsCategory.forEach(element => {
    element.addEventListener('click', createLinkCategory)
});

// VALIDATE PASSWORD

const checkPasswords = (event) => {
    event.preventDefault();
    if (password.value != passwordCheck.value) {
        let message = 'Les mots de passe ne correspondent pas';
        document.querySelector('.errorPasswords').innerHTML = message;
    } else {
        signUp.submit();
    }
}

signUp.addEventListener('submit', checkPasswords);


// BANNER COOKIES
// const btnSuccess = document.querySelector('.btn-success');
// const cookies = document.querySelector('.cookies');
// const btnSecondary = document.querySelector('.btn-secondary')
// const acceptCookies = document.querySelector('.accept');

// btnSuccess.addEventListener('click', function() {
//     cookies.style.opacity = "0";
// });

// btnSecondary.addEventListener('click', function() {
//     cookies.style.opacity = "0";
// });

// acceptCookies.addEventListener('click', function() {
//     location.reload();
// })