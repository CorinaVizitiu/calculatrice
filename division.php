<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
}
if (!isset($_SESSION['repons'])) {
  $_SESSION['repons'] = "";
}
$title = "Division";
$nav = "division";
require_once "header.php";
?>
<?php
if (!is_connected()) :
   header('location: /MonSite/login.php');
endif;

?>

<?php
if (isset($_POST['nombre1']) && isset($_POST['nombre2'])) :

  $nombre1 = $_POST['nombre1'];
  $nombre2 = $_POST['nombre2'];
  if ($nombre1 == "" || $nombre2 == "") {
    echo "Veuillez introduire les deux nombres.";
  } else if ($nombre2 == 0) {
    echo "Vous ne pouvez pas faire une division par 0.";
  } else {
    $_SESSION['division'] = $division = division($nombre1, $nombre2);
    $_SESSION['count']++;


    $_SESSION['repons'] .= "Division:" . $nombre1 . ":" . $nombre2 . ":" .  $division . '*';
  }
endif;
?>

<div align="center">
  <h1>Division</h1>

  <form action="/MONSITE/division.php" method="POST">
    <input type="number" step="any"  name="nombre1" placeholder="Entre le 1er nombre" value="<?= (isset($_POST['nombre1']) ? $_POST['nombre1'] : '') ?> "><br>
    <div><img src="impartit.png"></div>
    <input type="number" step="any"  name="nombre2" placeholder="Entre le 2em nombre" value=" <?= (isset($_POST['nombre2']) ? $_POST['nombre2'] : '') ?>"><br>
    <div><img src="egal.png"></div>
    <input type="number" step="any"  name="resultat" placeholder="Resultat" value="<?= (isset($_SESSION['division']) ? $_SESSION['division'] : '') ?>"></br></br>
    <button class="btn btn-danger" type="submit" name="division">Valider</button>
  </form>
</div>
<?php require_once "footer.php"
?>