<?php
// $myName = "";
// $myAge = "";

//  if(in_array($_SERVER['REQUEST_METHOD'], ['GET', 'POST'])) {
//      $myName = $_REQUEST['fullname'];
//      $myAge = $_REQUEST['age'];
//  }
    
$myName = "";
$myAge = "";

    if(in_array($_SERVER['REQUEST_METHOD'], ['POST'])) {

        $myName = htmlspecialchars($_REQUEST['fullname']) ?? "" ;
        $myAge = htmlspecialchars($_REQUEST['age']) ?? "";
    }

// ?>

<?php include('./inc/header.php') ?>

<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
        <h2>About page</h2>

        <p><?php echo $myName . ' age: ' . $myAge; ?></p>

            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input id="name" name="fullname" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="age">Your Age</label>
                    <input id="age" name="age" type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-block btn-warning">CREATE</button>
            </form>
        </div>
    </div>
</div>





<?php include('./inc/footer.php') ?>