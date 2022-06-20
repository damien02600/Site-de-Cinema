<?php
session_start();
session_destroy();
session_unset();  // Détruit toutes les variables d'une session
header('location:../home.php');
exit;