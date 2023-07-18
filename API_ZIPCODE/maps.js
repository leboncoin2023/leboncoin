
let address_input = document.getElementById('address_input');
let address_map = document.getElementById('address_map');
let search_btn = document.getElementById('search')



function getMap(){

    window.fetch('https://nominatim.openstreetmap.org/search.php?q=' + address_input.value)
    .then(response => response.json())
    .then(results => {
         
        
        address_map.innerHTML = `<p>${results.place_id}</p>`;
    
        /*
        city.innerHTML = null;
       
        for (let i=0 ;i<results.result.length;i++){
            city.innerHTML += `<option value="${results.result[i].libelleAcheminement}"></option>`;
            console.log('taille du tableau',results.result.length);
        }*/
    });

}


// ---- ECOUTEUR D'EVENEMEMENTS

search_btn.addEventListener('click', getMap);

