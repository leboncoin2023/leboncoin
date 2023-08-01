/*

//document.addEventListener('DOMContentLoaded', (e) => {

const catNavLinks = document.getElementById('catNav').querySelectorAll('a');
//const catNavLinks = document.getElementById('catNav').querySelectorAll('a');

function getSubCategory(){

let tab=[];

//console.log(document.getElementById('catNav').href);
//console.log(document.getElementsByClassName('subCatByCat'));
//subCatByCat

catNavLinks.forEach(link => {
  tab.push(link.href);
});
console.log(tab);
//return tab;
}


results.forEach(subcat => {
    subCategory.innerHTML += `<option value="${subcat.name}"></option>`;
    
});*/

document.addEventListener('DOMContentLoaded', (e) => {

    let categroyField = document.getElementById('auction_category');
    let subcategory_select = document.getElementById('subCat_select');
    
    categroyField.addEventListener('change', (objField) => {

        let value = objField.currentTarget.value;
        
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
            console.log(body);
            /*body.forEach(subcat => {
                subcategory_select.innerHTML += `<option value="${subcat}"></option>`;
            */
            subcategory_select.innerHTML = ``;
            body.data.forEach(subcat=> {
                subcategory_select.innerHTML += `<option value="${subcat}">${subcat}</option>`;
            });
                
            
            //});

        })


    })

})
