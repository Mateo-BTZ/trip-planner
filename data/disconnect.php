<?php


// Starting session
session_start();

// Destroying session
session_destroy();

header( 'location: ../view/authentification.php');


?>
