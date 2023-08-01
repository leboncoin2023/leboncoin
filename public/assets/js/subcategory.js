

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

/*
results.forEach(subcat => {
    subCategory.innerHTML += `<option value="${subcat.name}"></option>`;
    
});*/