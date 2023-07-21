    
    let address_input = document.getElementById('address_input');
    let search_btn = document.getElementById('search');
    let lat="";
    let lon="";

    
        
    // Affichage et initialisation de la carte 
    let carte = L.map('maCarte').setView([48.830624, 2.380269], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        //lien vers la source des données
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(carte);



    //Récupération des coordonnées GPS de l'adresse entrée par l'utilisateur
    function getLocation(){

        window.fetch('https://api-adresse.data.gouv.fr/search/?q=' + address_input.value)
        .then(response => response.json())
        .then(results => {
           // for (let i=0 ;i<results.features.length;i++){
                lat = results.features[0].geometry.coordinates[1];
                lon = results.features[0].geometry.coordinates[0];

                majCarte(lat, lon);
                console.log(lat, lon);
            }, 
        )
        
        
     
    }

    function majCarte(x, y){

        carte = L.map('maCarte').setView([x, y], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            //lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);

        let marker = L.marker(x, y).addTo(carte);
        marker.bindPopup(Adresse);
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



