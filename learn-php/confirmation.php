<?php
$myName = "";
$myAge = "";

//   print_r($_SERVER);
//   die();

 if($_SERVER['REQUEST_METHOD'] === 'POST') {
     $myName = $_POST['fullname'];
     $myAge = $_POST['age'];
 }


?>

<?php include('./inc/header.php') ?>

  <div class="container">
      <div class="row">
          <div class="col-md-6 mx-auto">
              <?php if($_SERVER['REQUEST_METHOD'] === 'POST') { ?> 
              <h2>Your name is <?php echo $myName; ?> and your age is <?php echo $myAge; ?> </h2>
              <?php } else { ?>
              <h2> <a href="about.php">Please Go Back</a>  </h2>
              <?php } ?>
          </div>
      </div>
  </div>

<?php include('./inc/footer.php') ?>

