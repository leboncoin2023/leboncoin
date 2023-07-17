
let zipcode_input = document.getElementById('zipcode');
let city = document.getElementById('datalistOptions');



// ---- FONCTIONS AFFICHAGE DE LA VILLE EN FONCTION DU CODE POSTAL

/*
let city = document.querySelector('#city');

function getZipcode(){

    window.fetch('https://happyapi.fr/api/codePostaux?codePostal=' + input1.value)
    .then(response => response.json())
    .then(res => {
        city.innerHTML = null;
        city.value=`${res.result[0].nomCommune}`;

    });

}*/

/**
 * Afficher la ville ou la liste des villes dans le champs ville en fonction du code postal selectionné
 */
function getCity(){

    window.fetch('https://happyapi.fr/api/codePostaux?codePostal=' + zipcode_input.value)
    .then(response => response.json())
    .then(results => {
        city.innerHTML = null;

        //city.innerHTML += `<option value="${res.result[0].nomCommune}"></option>`;
        for (let i=0 ;i<results.result.length;i++){
            city.innerHTML += `<option value="${results.result[i].libelleAcheminement}"></option>`;
            console.log('taille du tableau',results.result.length);
        }
    });

}


// ---- ECOUTEUR D'EVENEMEMENTS

zipcode_input.addEventListener('keyup', getCity);

