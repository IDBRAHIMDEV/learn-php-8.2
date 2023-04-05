<?php

  if($_SERVER['REQUEST_METHOD'] === 'POST') {

      print_r($_FILES);
    
      $source = $_FILES['avatar']['tmp_name'];
      $destination = 'images/' . $_FILES['avatar']['name'];
    
      move_uploaded_file($source, $destination);
  }
?>