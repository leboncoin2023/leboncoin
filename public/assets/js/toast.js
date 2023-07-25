let toastLiveExample = document.getElementById('liveToast')
let closepop = document.querySelectorAll('.closepopup')

if (toastLiveExample) {
    toastLiveExample.classList.add('show');
}

function closePopUp() {
    toastLiveExample.classList.remove('show');
}

//TODO: ajout de la possibilité de fermer le pop-up avec un addeventlistener et un display : none + refaire le html css du pop-up en suivant le modèle des ux/ui

closepop.addEventListener('click', closePopUp);


console.log( toastLiveExample);