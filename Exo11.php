

<?php 
session_start();

$title="np2";
$nav="newpage2";
require_once "header.php";

?>
<form action="/MONSITE/newPage2.php" method="POST">

<h1 class="h3 mb-3 font-weight-normal">Welcome </h1>
<input type="text" name="firstname" placeholder=" Votre Prenom ">
<br><br>
<input type="text" name="lastname" placeholder=" Votre Nom">
<br><br>

<select type="text" name="sexe" >
    <option value=''>Select :</option>
    <option value='F'>F </option>
    <option value='M'>M</option>
    <option value='X'>X</option></select>
<br><br>
<input type="text" name="date_of_birth" placeholder="****/**/**">
<br><br>
<input type="text" name="city" placeholder=" Votre ville ">
<br><br>
<input type="text" name="weight_kg" placeholder=" Votre kg">
<br><br>
<button class="btn btn-primary" type="submit">Send</button>
</form>


  <?php 
//   try {
//     $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie <br>';
// } catch (PDOException $e) {
//     die('Erreur : ' . $e->getMessage());
// }
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['sexe']) && isset($_POST['date_of_birth']) && isset($_POST['city'])&& isset($_POST['weight_kg'])) : {
$resultat = $pdo->query('SELECT * from users2' );
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$sexe=$_POST["sexe"];
$date_of_birth=$_POST["date_of_birth"];
$city=$_POST["city"];
$weight_kg=$_POST["weight_kg"];
}
   try {
    $req = $pdo->prepare('INSERT INTO users2 VALUES(:id_user, :firstname,:lastname, :sexe, :date_of_birth, :city, :weight_kg)');
    $req->execute(array(
        'id_user' => NULL,
        'firstname' => $firstname,
        'lastname' => $lastname,
        'sexe' => $sexe,
        'date_of_birth' => $date_of_birth,
        'city' => $city,
        'weight_kg'=>$weight_kg
    ));
    echo "<br>Un nouvel article a été ajouté";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
} 
endif;

?>


<?php require_once "footer.php"
?>