<?php
session_start();
unset($_SESSION['prenom']);
unset($_SESSION['connected']);
unset($_SESSION['addition']);
unset($_SESSION['nombre1']);
unset($_SESSION['nombre2']);
unset($_SESSION['multiplication']);

unset($_SESSION['division']);

unset($_SESSION['soustraction']);
unset($_SESSION['repons']);
header('location: index.php');


 ?>