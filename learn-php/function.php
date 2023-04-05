
<?php
 
   function saySalam($name = 'Mohamed', $age = 1) {
      echo "Salam $name - my age : $age";
   }

   saySalam();

   function formatCourse($title, $price) {
    
      $priceDollarToMad = convertPrice($price);
      return "$title cost $priceDollarToMad MAD";
  }
  
  function convertPrice($price) {
      return $price * 10;
  }
   
?>