<?php 
    include('./inc/header.php'); 
    session_start();

    require_once('./inc/config.php');

    require_once('./inc/library.php');

    ensureUserIsAuthenticated();

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Admin panel - <?php echo $_SESSION['email']; ?></h1>
        </div>
    </div>
</div>

<?php include('./inc/footer.php'); ?>
