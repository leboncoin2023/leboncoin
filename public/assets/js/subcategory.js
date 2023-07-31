

document.addEventListener('DOMContentLoaded', (e) => {

let category_selected=document.getElementById("cat_selected")

function getSubCategory(category){

    let subcategory="";

    for (i=0;i<category.length;i++){
        if (category[i]=="/"){
            subcategory=category.substring(i+1,category.length-1);
        }
    }

    

}

getAllCategoriesAndSub();

});