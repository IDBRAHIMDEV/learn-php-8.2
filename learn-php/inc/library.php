<?php 

function authenticate($email, $password) {
    return ($email === EMAIL && $password == PASSWORD);
}

function redirect($page) {
    header("Location: $page.php");
}

function isAthenticated() {
    return isset($_SESSION['email']);
}

function ensureUserIsAuthenticated() {
    if(!isAthenticated()) {
        redirect('login');
        die();
    }
}

?>