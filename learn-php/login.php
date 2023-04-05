<?php include('./inc/header.php');

   require_once('./inc/config.php');

   require_once('./inc/library.php');
   
   session_start();
   
   if(isAthenticated()) {
       redirect('admin');
       die();
    }

   $status = "";
   $email = $_POST['email'] ?? '';
   $password = $_POST['password'] ?? '';
   
   if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if(empty($email)) {
        $status = "Email is Required ! <br />";
    }else {
       
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $status .= "Email is invalid <br />";
        }

    }

    if(empty($password)) {
        $status .= "Password is Required ! <br />";
    }
    else {

        if(strlen($password) < 8) {
            $status .= "Password should be more than 8 caracters <br />";
        }
       
        $options = array('options' => array('regexp' => '/^([a-z0-9 ])+$/i'));
        if(!filter_var($password, FILTER_VALIDATE_REGEXP, $options)) {
            $status .= "Password should be Alpha numeric and spaces <br />";
        }

    }
    
    if(empty($status)) {
        if(authenticate($email, $password)) {
            $_SESSION['email'] = $email;
            redirect("admin");
            die();
        }else {
            $status = "The Provided Credentials didn't not Work!";
        }
    }

   }
?>

<!-- .container>.row>.col-md-6.mx-auto>form>(.form-group>label+input.form-control)*2+input:submit.btn.btn-danger.btn-block -->

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
           
           <?php if($status != "") { ?>
            <div class="alert alert-danger"><?php echo $status; ?></div>
           <?php } ?>
        
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">email</label>
                    <input name="email" id="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input name="password" id="password" type="password" class="form-control">
                </div>
                <input value="Login" type="submit" value="" class="btn btn-danger btn-block">
            </form>
        </div>
    </div>
</div>
<?php include('./inc/footer.php'); ?>