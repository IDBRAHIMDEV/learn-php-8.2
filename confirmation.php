
<?php
require_once("./models/course.php");
include('./library/helpers.php');

/*
  redirect to a page if the super 
  global variable Post not exist
*/
   if(!$_POST) {
    redirect('home.php');
   }
   else {

    echo '<pre>', print_r($_POST), '</pre>';
    echo '<pre>', print_r($_FILES), '</pre>';
    
    $destination = '/upload/'.$_FILES['image']['name'];

    if(move_uploaded_file($_FILES['image']['tmp_name'], __DIR__.$destination)) {

        $course = new Course($_POST['title'], $_POST['description'], $destination, $_POST['price']);
        $course->add();
    }


   }

  
?>

<?php include('./shared/header.php') ?>


    <div class="row">
        <div class="col-md-4 mx-auto mt-5">
            <h2>la page de confirmation</h2>
            <p>Retourner vers la page home</p>
            <a href="/pmp/home.php" class="btn btn-link">page d'accueil</a>
        </div>
    </div>

<?php include('./shared/footer.php') ?>