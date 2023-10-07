<style>
    .center{
        margin-left: 120px;
    }
</style>
<?php 
session_start();

$title="Debug";
$nav="debug";
require_once "header.php";

?>
<div class="center">
<?php var_dump($_SESSION);

?>
</div>

<?php require_once "footer.php"
?>