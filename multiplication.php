<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
}
if (!isset($_SESSION['repons'])) {
  $_SESSION['repons'] = "";
}
$title = "Multiplication";
$nav = "multiplication";
require_once "header.php";
?>

<?php
if (!is_connected()) :
   header('location: /MonSite/login.php');
endif;

?>
<?php
if (isset($_POST['nombre1']) && isset($_POST['nombre2'])) : {
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    if  ($nombre1=="" || $nombre2=="") {
      echo "Veuillez introduire les deux nombres.";
  }
  else{
    $_SESSION['multiplication'] = $multiplication=multiplication ($nombre1,$nombre2)  ;
    $_SESSION['count']++;
    $_SESSION['repons'] .= "Multiplication:". $nombre1.":". $nombre2.":".  $multiplication.'*';   
  }
}
endif; ?>


<div align="center">
  <h1>Multiplication</h1>
  <form action="/MONSITE/multiplication.php" method="POST">
    <input type="number" step="any"  name="nombre1" placeholder="Entre le 1er nombre" value="<?= (isset($_POST['nombre1']) ? $_POST['nombre1'] : '') ?>"><br>
    <div> <img src="ori.png"></div>
    <input type="number" step="any"  name="nombre2" placeholder="Entre le 2em nombre" value="<?= (isset($_POST['nombre2']) ? $_POST['nombre2'] : '') ?>"><br>
    <div><img src="egal.png"></div>
    <input type="number" step="any"  name="resultat" placeholder="Resultat" value="<?= (isset($_SESSION['multiplication']) ? $_SESSION['multiplication'] : '') ?>"></br></br>
    <button class="btn btn-danger" type="submit"   name="multiplication">Valider</button>
  </form>
</div>
<?php require_once "footer.php"
?>