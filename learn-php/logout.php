<?php

  session_start();

  session_unset();

  session_destroy();

  require_once('./inc/library.php');

  redirect('login');

  die();

?>