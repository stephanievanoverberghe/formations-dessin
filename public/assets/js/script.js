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

// MODAL ARTICLES *******************************************************
const deleteBtnsArticle = document.querySelectorAll('.deleteArticle');
const deleteLinkArticle = document.getElementById('deleteLinkArticle');

const createLinkArticle = (event) => {
    let id_articles = event.target.dataset.idarticles;
    deleteLinkArticle.setAttribute('href', 'deleteArticlesCtrl.php?id_articles=' + id_articles);
};

deleteBtnsArticle.forEach(element => {
    element.addEventListener('click', createLinkArticle);
});

// MODAL COMMENTS *******************************************************
const deleteBtnsComment = document.querySelectorAll('.deleteComments');
const deleteLinkComment = document.getElementById('deleteLinkComment');

const createLinkComment = (event) => {
    let id_comments = event.target.dataset.idcomments;
    deleteLinkComment.setAttribute('href', 'deleteCommentsCtrl.php?id_comments=' + id_comments);
};

deleteBtnsComment.forEach(element => {
    element.addEventListener('click', createLinkComment);
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

// MODAL USERS ADMIN *********************************************************
const deleteBtnsUserAdmin = document.querySelectorAll('.deleteUsersAdmin');
const deleteLinkUserAdmin = document.getElementById('deleteLinkUserAdmin');
// console.log(deleteLinkUser);

const createLinkUserAdmin = (event) => {
    let id_users = event.target.dataset.idusersadmin;
    deleteLinkUserAdmin.setAttribute('href', 'deleteUsersAdminCtrl.php?id_users=' + id_users);
};

deleteBtnsUserAdmin.forEach(element => {
    element.addEventListener('click', createLinkUserAdmin)
});

// MODAL ADD PICTURE PROFIL *********************************************************
const addBtnsPictureProfil = document.querySelectorAll('.addProfilPicture');
const addLinkPictureProfil = document.getElementById('addProfilPictureLinkUser');
// console.log(deleteLinkUser);

const createLinkUserPictureProfil = (event) => {
    let id_users = event.target.dataset.idusers;
    addLinkPictureProfil.setAttribute('href', 'profilCtrl.php?id_users=' + id_users);
};

addBtnsPictureProfil.forEach(element => {
    element.addEventListener('click', createLinkUserPictureProfil)
});
// ADMIN ADD ARTICLE ******************************************************

// ADD SUBTITLE

subtitle.addEventListener('click', function () {
    // Créer le label
    let labelSubtitle = document.createElement("label");
    labelSubtitle.setAttribute("for", "subtitle");
    labelSubtitle.setAttribute("class", "form-label orange mt-4 mb-2");
    labelSubtitle.textContent = "Sous-titre";

    // Créer l'input
    let inputSubtitle = document.createElement("input");
    inputSubtitle.setAttribute("type", "text");
    inputSubtitle.setAttribute("value", "");
    inputSubtitle.setAttribute("id", "sub-title");
    inputSubtitle.setAttribute("name", "subtitle[]");
    inputSubtitle.setAttribute("class", "form-control form-control-lg");

    // Récupérer la div à partir de son ID

    let subtitleArticle = document.getElementById('input');

    // Ajouter les éléments à la div

    subtitleArticle.appendChild(labelSubtitle);
    subtitleArticle.appendChild(inputSubtitle);
})

// ADD CONTENT

content.addEventListener('click', function () {
    // Créer label
    let labelContent = document.createElement("label");
    labelContent.setAttribute("for", "textareaContent");
    labelContent.setAttribute("class", "form-label orange mt-4 mb-2");
    labelContent.textContent = "Paragraphe";

    // Créer l'input
    let inputContent = document.createElement("textarea");
    inputContent.setAttribute("class", "form-control");
    inputContent.setAttribute("id", "textareaContent");
    inputContent.setAttribute("value", "");
    inputContent.setAttribute("rows", "10");
    inputContent.setAttribute("name", "textareaContent[]");
    inputContent.setAttribute("placeholder", "Écrire un paragraphe");

    // Ajouter les éléments à la div

    let contentArticle = document.getElementById('input');

    contentArticle.appendChild(labelContent);
    contentArticle.appendChild(inputContent);
});

// ADD PICTURE

picture.addEventListener('click', function () {
    // Créer le label
    let labelPicture = document.createElement("label");
    labelPicture.setAttribute("for", "picture");
    labelPicture.setAttribute("class", "form-label orange mt-4 mb-2");
    labelPicture.textContent = "Image";

    // Créer l'input
    let inputPicture = document.createElement("input");
    inputPicture.setAttribute("type", "file");
    inputPicture.setAttribute("id", "picture");
    inputPicture.setAttribute("name", "picture");
    inputPicture.setAttribute("class", "form-control form-control-lg");

    // Ajouter les éléments à la div

    let pictureArticle = document.getElementById('input');

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