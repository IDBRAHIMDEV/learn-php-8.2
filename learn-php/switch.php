<?php
  // -1 feu rouge
  // 0 feu orange
  //1 feu vert

  $panneauRoutiere = 12;

  switch($panneauRoutiere) {
      case -1: ;
      case 0: 
        echo "Feu Orange";
        break;

      case 1: 
            echo "Feu Vert";
        break;
      
      default: 
      echo "pas de correspondance merci de choisir un num -1, o ou 1 !";
  }

//   if($panneauRoutiere === 0) {
//       echo "Feu Orange";
//   }
//   else if($panneauRoutiere === 1) {
//       echo "feu vert";
//   }
//   else if($panneauRoutiere === -1) {
//       echo "Feu rouge";
//   }
//   else {
//       echo "pas de correspondance merci de choisir un num -1, o ou 1 !";
//   }

?>