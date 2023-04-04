// MODAL TRAINING ***************************************************

const deleteBtns = document.querySelectorAll('.deleteTraining');
const deleteLink = document.getElementById('deleteLink');

const createLink = (event) => {
    let id_trainings = event.target.dataset.idtrainings;
    deleteLink.setAttribute('href', 'deleteTrainingsCtrl.php?id_trainings=' + id_trainings);
};

deleteBtns.forEach(element => {
    element.addEventListener('click', createLink)
});

// MODAL MODULES**********************************************************

const deleteBtnsModule = document.querySelectorAll('.delete');
const deleteLinkModule = document.getElementById('deleteLinkModule');

const createLinkModule = (event) => {
    let id_modules = event.target.dataset.idmodules;
    deleteLinkModule.setAttribute('href', 'deleteModulesCtrl.php?id_modules=' + id_modules);
};

deleteBtnsModule.forEach(element => {
    element.addEventListener('click', createLinkModule)
});

// MODAL SOUS-MODULES****************************************************

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

// MODAL CATEGORIES *******************************************************
const deleteBtnsCategory = document.querySelectorAll('.deleteCategory');
const deleteLinkCategory = document.getElementById('deleteLinkCategory');

const createLinkCategory = (event) => {
    let id_categories = event.target.dataset.idcategories;
    deleteLinkCategory.setAttribute('href', 'deleteCategoriesCtrl.php?id_categories=' + id_categories);
};

deleteBtnsCategory.forEach(element => {
    element.addEventListener('click', createLinkCategory)
});

// MODAL USERS *********************************************************
const deleteBtnsUser = document.querySelectorAll('.deleteUsers');
const deleteLinkUser = document.getElementById('deleteLinkUser');
// console.log(deleteLinkUser);

const createLinkUser = (event) => {
    let id_users = event.target.dataset.idusers;
    deleteLinkUser.setAttribute('href', 'deleteUserCtrl.php?id_users=' + id_users);
};

deleteBtnsUser.forEach(element => {
    element.addEventListener('click', createLinkUser)
});

// ADMIN ADD ARTICLE ******************************************************

let title = document.getElementById('title');
let hook = document.getElementById('hook');
let subtitle = document.getElementById('subtitle');
let content = document.getElementById('content');
let picture = document.getElementById('picture');
let conclusion = document.getElementById('conclusion');
let createdAt = document.getElementById('created-at');

// ADD TITLE
title.addEventListener('click', function () {
    // Créer le label
    let labelTitle = document.createElement("label");
    labelTitle.setAttribute("for", "title");
    labelTitle.setAttribute("class", "form-label");
    labelTitle.textContent = "Titre";

    // Créer l'input
    let inputTitle = document.createElement("input");
    inputTitle.setAttribute("type", "text");
    inputTitle.setAttribute("id", "title");
    inputTitle.setAttribute("name", "title");
    inputTitle.setAttribute("class", "form-control form-control-lg");

    // Récupérer la div à partir de son ID

    let titleArticle = document.getElementById('titleArticle');
    console.log(titleArticle);

    // Ajouter les éléments à la div

    titleArticle.appendChild(labelTitle);
    titleArticle.appendChild(inputTitle);
})

// ADD HOOK

hook.addEventListener('click', function () {
    // Créer label
    let labelHook = document.createElement("label");
    labelHook.setAttribute("for", "textareaHook");
    labelHook.setAttribute("class", "form-label");
    labelHook.textContent = "Accroche";

    // Créer l'input
    let inputHook = document.createElement("textarea");
    inputHook.setAttribute("class", "form-control");
    inputHook.setAttribute("id", "textareaHook");
    inputHook.setAttribute("rows", "3");
    inputHook.setAttribute("name", "textareaHook");
    inputHook.setAttribute("placeholder", "Écrire l'accroche de l'article");

    // Récupérer la div à partir de son ID

    let hookArticle = document.getElementById('hookArticle');

    // Ajouter les éléments à la DIV

    hookArticle.appendChild(labelHook);
    hookArticle.appendChild(inputHook);

})

// ADD SUBTITLE

subtitle.addEventListener('click', function () {
    // Créer le label
    let labelSubtitle = document.createElement("label");
    labelSubtitle.setAttribute("for", "subtitle");
    labelSubtitle.setAttribute("class", "form-label");
    labelSubtitle.textContent = "Sous-titre";

    // Créer l'input
    let inputSubtitle = document.createElement("input");
    inputSubtitle.setAttribute("type", "text");
    inputSubtitle.setAttribute("id", "subtitle");
    inputSubtitle.setAttribute("name", "subtitle");
    inputSubtitle.setAttribute("class", "form-control form-control-lg");

    // Récupérer la div à partir de son ID

    let subtitleArticle = document.getElementById('subtitleArticle');

    // Ajouter les éléments à la div

    subtitleArticle.appendChild(labelSubtitle);
    subtitleArticle.appendChild(inputSubtitle);
})

// ADD CONTENT

// Récupérer les div à partir de son ID

let contentArticle = document.getElementById('contentArticle');
let pictureArticle = document.getElementById('pictureArticle');

// Ajouter en cliquant bouton

content.addEventListener('click', function () {
    // Créer label
    let labelContent = document.createElement("label");
    labelContent.setAttribute("for", "textareaContent-" + (contentArticle.children.length + 1));
    labelContent.setAttribute("class", "form-label");
    labelContent.textContent = "Paragraphe";

    // Créer l'input
    let inputContent = document.createElement("textarea");
    inputContent.setAttribute("class", "form-control");
    inputContent.setAttribute("id", "textareaContent-" + (contentArticle.children.length + 1));
    inputContent.setAttribute("rows", "10");
    inputContent.setAttribute("name", "textareaContent-" + (contentArticle.children.length + 1));
    inputContent.setAttribute("placeholder", "Écrire un paragraphe");

    contentArticle.appendChild(labelContent);
    contentArticle.appendChild(inputContent);
});

// ADD PICTURE

picture.addEventListener('click', function () {
    // Créer le label
    let labelPicture = document.createElement("label");
    labelPicture.setAttribute("for", "picture-" + (pictureArticle.children.length + 1));
    labelPicture.setAttribute("class", "form-label");
    labelPicture.textContent = "Image";

    // Créer l'input
    let inputPicture = document.createElement("input");
    inputPicture.setAttribute("type", "file");
    inputPicture.setAttribute("id", "picture-" + (pictureArticle.children.length + 1));
    inputPicture.setAttribute("name", "picture-"  + (pictureArticle.children.length + 1));
    inputPicture.setAttribute("class", "form-control form-control-lg");

    // Ajouter les éléments à la div

    pictureArticle.appendChild(labelPicture);
    pictureArticle.appendChild(inputPicture);
})

// VALIDATE PASSWORD ***************************************************

const checkPasswords = (event) => {
    event.preventDefault();
    const password = document.getElementById('password');
    const passwordCheck = document.getElementById('passwordCheck');
    const errorPasswords = document.querySelector('.errorPasswords');

    if (password.value != passwordCheck.value) {
        const message = 'Les mots de passe ne correspondent pas';
        errorPasswords.innerHTML = message;
    } else {
        signUp.submit();
    }
};
const signUp = document.getElementById('signUp');
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