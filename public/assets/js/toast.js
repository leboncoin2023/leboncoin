let toastLiveExample = document.getElementById('liveToast')
let closepop = document.querySelectorAll('.closepopup')

if (toastLiveExample) {
    toastLiveExample.classList.add('show');
}

function closePopUp() {
    toastLiveExample.remove();
    
}


closepop.forEach(element => {
    
    element.addEventListener('click', closePopUp);
});

