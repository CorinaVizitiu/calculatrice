<?php
session_start();

$title = "Addition";
$nav = "addition";
require_once 'header.php';
?>
<?php
if (!is_connected()) :
   header('location: /MonSite/login.php');
endif;

?>
<?php
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
if (!isset($_SESSION['repons'])) {
    $_SESSION['repons'] = "";
}

?>

<?php
if (isset($_POST['nombre1']) && isset($_POST['nombre2'])) : {
        $nombre1 = $_POST['nombre1'];
        $nombre2 = $_POST['nombre2'];
        if ($nombre1 == "" || $nombre2 == "") {
            echo "Veuillez introduire les deux nombres.";
        } else {

            $_SESSION['addition'] = $addition = addition($nombre1, $nombre2);
            $_SESSION['count']++;


            $_SESSION['repons'] .= "Addition:" . $nombre1 . ":" . $nombre2 . ":" .  $addition . '*';
        }
    }
endif;
?>

<div align="center">
    <h1>Addition</h1>
    <form action="/MonSite/addition.php" method="POST">
        <input type="number" step="any"  name="nombre1"   placeholder="Entre le 1er nombre" value="<?= (isset($_POST['nombre1']) ? $_POST['nombre1'] : '') ?>"></br>
        <div><img src="plus.png"></div>
        <input type="number"  step="any"  name="nombre2"    placeholder="Entre le 2em nombre" value="<?= (isset($_POST['nombre2']) ? $_POST['nombre2'] : '') ?>"></br>
        <div><img src="egal.png"></div>
        <input type="number" step="any"  name="resultat"    placeholder="Resultat" value="<?= (isset($_SESSION['addition']) ? $_SESSION['addition'] : '') ?>"></br></br>
        <button class="btn btn-danger" type="submit" name="addition">Valider</button>
    </form>
</div>

<?php
require_once 'footer.php';
?>