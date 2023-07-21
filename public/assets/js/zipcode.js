
let zipcode_input = document.getElementById('zipcode');
let city = document.getElementById('datalistOptions');



// ---- FONCTIONS AFFICHAGE DE LA VILLE EN FONCTION DU CODE POSTAL


/**
 * Afficher la ville ou la liste des villes dans le champs ville en fonction du code postal selectionné
 */
function getCity(){

    window.fetch('https://happyapi.fr/api/codePostaux?codePostal=' + zipcode_input.value)
    .then(response => response.json())
    .then(results => {
        
        city.innerHTML = null;

        //city.innerHTML += `<option value="${res.result[0].nomCommune}"></option>`;

        if(results.errorCode==0){
            for (let i=0 ;i<results.result.length;i++){
                city.innerHTML += `<option value="${results.result[i].libelleAcheminement}"></option>`;
                console.log('taille du tableau',results.result.length);
            }
        } else {
            city.innerHTML += `<option value="Code postal erroné"></option>`;
        }

    });

}


// ---- ECOUTEUR D'EVENEMEMENTS

zipcode_input.addEventListener('keyup', getCity);

