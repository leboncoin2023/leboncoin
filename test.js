
//  2-  Affichage random de subcategory
//  3-  Détail enchère: Affichage de la valeur actuelle de l'enchère (alerte si montant suppérieur déjà enregistré et refresh lors de la validation du message) + Diapo photo + (v1.5, zoom photo)
//  4-  Tunnel de paiement 2 : controle des infos saisies dans les input (bon nombre de caractères, bon format, etc)













//  5-  Recherche via la barre de recherche (quand un mot est saisis, interroger la bdd sur les titres et les description pour trouver le même mot)

// Récupération de l'input de recherche
const searchInput = document.getElementById('search-input');

// Ajout d'un écouteur d'événement sur l'input de recherche
searchInput.addEventListener('input', async () => {
  // Récupération du mot de recherche
  const searchTerm = searchInput.value.toLowerCase();

  // Interrogation de la base de données pour trouver les enchères correspondantes
  const enchereCollection = db.collection('encheres');
  const encheres = await enchereCollection.find({
    $or: [
      { title: { $regex: searchTerm, $options: 'i' } },
      { description: { $regex: searchTerm, $options: 'i' } }
    ]
  }).toArray();

  // Affichage des résultats de recherche dans une liste déroulante
  const searchResults = document.getElementById('search-results');
  searchResults.innerHTML = '';
  encheres.forEach(enchere => {
    const option = document.createElement('option');
    option.value = enchere._id;
    option.text = auction.title;
    searchResults.appendChild(option);
  });
});
