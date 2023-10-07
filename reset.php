<style>
    .blue{
        color:blue ;
         font-style: italic;
        justify-content: center;
        align-self:center;
       margin-left: 120px;
    }

</style>
<?php 
session_start();
session_unset();
$title="Reset";
$nav="reset";
require_once "header.php";
?>
<!-- <style>
    body{ 
        background:pink;

    }
</style> -->
<?php
?>

<h1 class="blue">Vous venez de réinitialiser la page </h1>


<?php require_once "footer.php"
?>