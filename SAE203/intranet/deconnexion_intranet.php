<?php 
session_start();
session_unset();
session_destroy();

//a voir si on ne redirige pas vers la page d'acceuil de l'intranet
http_response_code(301);
header('location:/SAE203/intranet/connexion_intranet.php');


?>
