    
    let address_input = document.getElementById('address_input');
    let search_btn = document.getElementById('search');
    let maps_address = document.getElementById('maCarte');
    //let lat="48.830624";
    //let lon="2.380269";


    //showMap("48.830624","2.380269");

    
        
    // Affichage et initialisation de la carte 
    function showMap(lat, lon){
        let carte = L.map('maCarte').setView([lat, lon], 18);

        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            //lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);

        //maps_address.innerHTML =`<i class="fa-solid fa-location-dot" style="color: #ff9200;"></i>`;
        //let marker = L.marker(lat, lon).addTo(carte);
        //marker.bindPopup("house");

    }




    //Récupération des coordonnées GPS de l'adresse entrée par l'utilisateur
    function getLocation(){

        window.fetch('https://api-adresse.data.gouv.fr/search/?q=' + address_input.value)
        .then(response => response.json())
        .then(results => {
          
                lat = results.features[0].geometry.coordinates[1];
                lon = results.features[0].geometry.coordinates[0];
                console.log(lat, lon);
                showMap(lat,lon);
                
                
                
            }, 
        )
        
    }

    





/*
let address_input = document.getElementById('address_input');
let address_map = document.getElementById('address_map');
let search_btn = document.getElementById('search')



function getMap(){

    let address_new=address_input.value.replaceAll(" ","+");

    console.log(address_new);

    window.fetch('https://nominatim.openstreetmap.org/search.php?q=' + address_new)
    .then(response => response.json())
    .then(results => {
         
        
        address_map.innerHTML = `<p>${results.place_id}</p>`;
    
 
    });

}
*/

// ---- ECOUTEUR D'EVENEMEMENTS

search_btn.addEventListener('click', getLocation);



