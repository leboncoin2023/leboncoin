    
    let address_input = document.getElementById('address_input');
    //let search_btn = document.getElementById('search');
    let maps_address = document.getElementById('maCarte');
 
    //Récupération des coordonnées GPS de l'adresse entrée par l'utilisateur
    function getLocation(){

        window.fetch('https://api-adresse.data.gouv.fr/search/?q=' + document.getElementById('address_input').innerHTML)
        .then(response => response.json())
        .then(results => {
            
                lat = results.features[0].geometry.coordinates[1];
                lon = results.features[0].geometry.coordinates[0];
                console.log(lat, lon);
                showMap(lat,lon);
                
                
                
            }, 
        )
        
    }

    getLocation();
        
    // Affichage et initialisation de la carte 
    function showMap(lat, lon){

           // si container deja initialisé on efface le contenu       
           var container = L.DomUtil.get('maCarte');
           if(container != null){
             container._leaflet_id = null;
           }

        let carte = L.map('maCarte').setView([lat, lon], 18);

        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            //lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);

        
        L.marker([lat, lon]).addTo(carte)
        .bindPopup('Le bien pourra être retiré ici')
        .openPopup();

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

//search_btn.addEventListener('click', getLocation);



