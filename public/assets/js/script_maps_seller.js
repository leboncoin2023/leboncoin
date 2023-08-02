document.addEventListener('DOMContentLoaded', (e) => {

    // récupère le champ input de localisation dans le dom
    const locationInput = document.getElementById('auction_localisation');
    if (locationInput) {

        // récupération du keyup sur le champ de localisayion
        locationInput.addEventListener('keyup', (e) => {

            // récupération de la valeur saisie par l'utilisateur
            let localisation = e.target.value;
            getLocation(localisation);
            
        });
    }

    //initialisation des variables
        //élément du DOM où est saisie l'adresse par l'utilisateur
        let address_input = document.getElementById('address_input');
        //élément du DOM où sera affiché la carte
        let maps_address = document.getElementById('maCarte');

    //FONCTIONS

    //Récupérer les coordonnées GPS de l'adresse entrée par l'utilisateur
    function getLocation(location){

        window.fetch('https://api-adresse.data.gouv.fr/search/?q=' + location)
        .then(response => response.json())
        .then(results => {
            
                lat = results.features[0].geometry.coordinates[1];
                lon = results.features[0].geometry.coordinates[0];

                //Appel de la fonction d'affichage de la carte avec les coordonnées GPS en paramètres
                showMap(lat,lon);
                
            }, 
        )
        
    }
     
    //Afficher la carte centrée sur les coordonnées GPS passés en paramètres 
    function showMap(lat, lon){

        // si container deja initialisé on efface le contenu       
        var container = L.DomUtil.get('maCarte');
        if(container != null){
          container._leaflet_id = null;
        }

        //centrage de la carte sur les coordonnées passées en paramètres
        var carte = L.map('maCarte').setView([lat, lon], 18);

        //chargement des tuiles de fond
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            //lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);
    

        //Ajout d'un logo pin sur le point GPS entré en paramètres
        L.marker([lat, lon]).addTo(carte)
        .bindPopup('Votre bien se situe ici')
        .openPopup();

        
    
    }

       //Modifier le libellé du bouton de validation du formulaire
        let save_btn = document.getElementById('auction_save');
        save_btn.innerText="Valider";     

});   




    