let toastLiveExample = document.getElementById('liveToast')
let closepop = document.querySelectorAll('.closepopup')

//affiche le pop-up.
if (toastLiveExample) {

    toastLiveExample.classList.add('show');

}

//fonction permettant de fermer le pop-up.
function closePopUp() {

    toastLiveExample.remove();
    
}

//Event listener au moment du clique pour déclancher la fonction permettant de fermer le pop-up.
closepop.forEach(element => {
    
    element.addEventListener('click', closePopUp);
    
});

