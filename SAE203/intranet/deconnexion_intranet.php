<?php 
session_start();
session_unset();
session_destroy();
header('location:/SAE203/intranet/connexion_intranet.php');
?>
