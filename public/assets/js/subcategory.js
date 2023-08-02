document.addEventListener('DOMContentLoaded', (e) => {

    //Element du DOM qui permet de récupérer la catégorie saisie
    let categoryField = document.getElementById('auction_category');

    //Element du DOM qui permet d'afficher la liste des sous-catégories liées à la catégorie selectionnée
    let subcategory_select = document.getElementById('subCat_select');
    

    categoryField.addEventListener('change', (objField) => {
        //
        let value = objField.currentTarget.value;
        
        //récupération des sous-categories liées à la catégorie selectionnée 
        fetch('/auction/getsubcategorybycategory', {
            method: 'POST',
            headers: {
              'Accept': 'application/json',
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({'category': value})
        })
        .then((header) => {
            return header.json()
        })
        .then((body) => {
            //Affichage des sous-categories dans une liste déroulante sur la page html
            subcategory_select.innerHTML = ``;
            body.data.forEach(subcat=> {
                subcategory_select.innerHTML += `<option value="${subcat}">${subcat}</option>`;
            });
                

        })


    })

})

