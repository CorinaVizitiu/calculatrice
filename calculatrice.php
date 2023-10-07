<?php
session_start();
    $title = "Calculatrice";
    $nav = "calculatrice";
    require_once 'header.php';

?>
<?php
if (!is_connected()) :
   header('location: /MonSite/login.php');
endif;

?>



<?php require_once "footer.php"
?>