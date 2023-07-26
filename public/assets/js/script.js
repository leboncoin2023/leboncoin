
const swiper = new Swiper(".mySwiper",{
        // Initialise un nouveau carrousel Swiper en utilisant la classe "mySwiper" comme sélecteur
      /*effect:"coverflow",// Utilise l'effet de coverflow pour la transition entre les diapositives*/
      grabCursor:true,// Change le curseur en une main lorsqu'il survole le carrousel
      centeredSlider:true,// Centre la diapositive active dans le carrousel
      loop:true,//Permet de faire une boucle infinie du carrousel

/*
 coverflowEffect:{
      rotate:0,// L'angle de rotation des diapositives en mode coverflow
      stretch:0,// L'espacement horizontal entre les diapositives en mode coverflow
      slidesshadow:true // Active les ombres portées pour les diapositives en mode coverflow
  },*/

  slidesPerView:"auto",// Définit le nombre de diapositives visibles par vue, "auto" signifie autant de diapositives que possible
   
  pagination:{
      el:".swiper-pagination"// Sélectionne l'élément avec la classe "swiper-pagination" pour afficher la pagination
  }   
})