<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
}
if (!isset($_SESSION['repons'])) {
  $_SESSION['repons'] = "";
}
$title = "Soustraction";
$nav = "soustraction";
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
    if ($nombre1 == "" || $nombre2 == "") {
      echo "Veuillez introduire les deux nombres.";
    } else {

      $_SESSION['soustraction'] = $soustraction = soustraction($nombre1, $nombre2);
      $_SESSION['count']++;

      $_SESSION['repons'] .= "Soustraction:" . $nombre1 . ":" . $nombre2 . ":" .  $soustraction . '*';
    }
  }

endif; ?>

<div align="center">
  <h1>Soustraction</h1>

  <form action="/MONSITE/soustraction.php" method="POST">
    <input type="number" step="any" name="nombre1" placeholder="Entre le 1er nombre" value="<?= (isset($_POST['nombre1']) ? $_POST['nombre1'] : '') ?>"><br>
    <div><img src="minus.png"></div>
    <input type="number" step="any" name="nombre2" placeholder="Entre le 2em nombre" value="<?= (isset($_POST['nombre2']) ? $_POST['nombre2'] : '') ?>"><br>
    <div><img src="egal.png"></div>
    <input type="number" step="any" name="resultat" placeholder="Resultat" value="<?= (isset($_SESSION['soustraction']) ? $_SESSION['soustraction'] : '') ?>"></br></br>
    <button class="btn btn-danger" type="submit" name="soustraction">Valider</button>
  </form>
</div>



<?php require_once "footer.php"
?>