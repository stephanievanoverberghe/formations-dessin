// MODAL TRAINING
const deleteBtns = document.querySelectorAll('.delete');
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

// MODAL VIDEOS
const deleteBtnsVideo = document.querySelectorAll('.deleteVideo');
const deleteLinkVideo = document.getElementById('deleteLinkVideo');

const createLinkVideo = (event) => {
    let id_videos = event.target.dataset.idvideos;
    deleteLinkVideo.setAttribute('href', 'deleteVideosCtrl.php?id_videos=' + id_videos);
};

deleteBtnsVideo.forEach(element => {
    element.addEventListener('click', createLinkVideo)
});

// COOKIES
const btnSuccess = document.querySelector('.btn-success');
const cookies = document.querySelector('.cookies');
const btnSecondary = document.querySelector('.btn-secondary')
const acceptCookies = document.querySelector('.accept');

btnSuccess.addEventListener('click', function() {
    cookies.style.opacity = "0";
});

btnSecondary.addEventListener('click', function() {
    cookies.style.opacity = "0";
});

acceptCookies.addEventListener('click', function() {
    location.reload();
})