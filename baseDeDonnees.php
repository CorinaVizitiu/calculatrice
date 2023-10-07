<?php 
session_start();

$title="BD";
$nav="baseDeDonnees";
require_once "header.php";

?>
<?php
if (!is_connected()) :
   header('location: /MonSite/login.php');
endif;

?>
<?php
// exo3
// try {
//     $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie <br>';
// } catch (PDOException $e) {
//     die('Erreur : ' . $e->getMessage());
// }

// $resultat = $pdo->query('SELECT * from articles' );
//  var_dump($resultat->fetchAll());
// var_dump($resultat->fetchAll(PDO::FETCH_OBJ));
// exo4
// try {
//     $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie <br>';
// } catch (PDOException $e) {
//     die('Erreur : ' . $e->getMessage());
// }

// $resultat = $pdo->query('SELECT * from users' );
// $users=$resultat->fetchAll(PDO::FETCH_OBJ);
// foreach($users as $user){
//     foreach($user as $key=>$value){
//         echo "<p class= 'container'>";
//         echo 'user Id : ' . $user->id_user . '<br>';
//         echo 'first Name : ' . $user->firstname . '<br>';
//         echo 'last Name : ' . $user->lastname . '<br>';
//         echo 'sexe : ' . $user->sexe . '<br>';
//         echo 'DOB : ' . $user->date_of_birth . '<br>';
//         echo 'City : ' . $user->city . '<br>';
//         echo 'Weight in kilograms : ' . $user->weight_kg . '<br>';
//         echo '</p>';
//     }
//     }

//  exo5

// VERSION TABLEAU DE TABLE 
// try {
//     $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie <br>';
// } catch (PDOException $e) {
//     die('Erreur : ' . $e->getMessage());
// }
// $resultat = $pdo->query('SELECT article_name,UCASE(Concat(firstname," ",lastname))as"NOM  PRENOM" from articles INNER JOIN users ON id_user_article=id_user ' );
// //  var_dump($resultat->fetchAll());
//  $users=$resultat->fetchAll();
// foreach($users as $user){
//     foreach($user as $key=>$value){
//         if($key !=0 && $key !=1){
//        echo $key." ".":".$value."<br>";
//         }
//     }
//  }
// VERSION TABLEAU D'OBJET
//Exo5 version table d'objet
// $resultat = $pdo->query('SELECT UCASE(CONCAT(firstname," ",lastname)) AS "auteurs",article_name FROM users INNER JOIN articles ON id_user_article = id_user');
// $donnees = $resultat->fetchAll(PDO::FETCH_OBJ);
// // var_dump($donnees);
// foreach ($donnees as $donnee) {
//     echo "Nom d'article : " . $donnee->article_name . "<br>";
//     echo "Auteur : " . $donnee->auteurs . "<br><br>";
// }
//Exo Recapitulatif pdf12
//Exo 6
// try {
//     $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root", "");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo 'Connexion réussie <br>';
// } catch (PDOException $e) {
//     die('Erreur : ' . $e->getMessage());
// }

// $resultat = $pdo->query('SELECT * from users2' );
// $firstname = "Corina";
// $lastname = "Vizitiu";
// $sexe="F";
// $date_of_birth="1992-06-14";
// $city="Onesti";
// $weight_kg="55";

// try {
//     $req = $pdo->prepare('INSERT INTO users2 VALUES(:id_user, :firstname,:lastname, :sexe, :date_of_birth, :city, :weight_kg)');
//     $req->execute(array(
//         'id_user' => NULL,
//         'firstname' => $firstname,
//         'lastname' => $lastname,
//         'sexe' => $sexe,
//         'date_of_birth' => $date_of_birth,
//         'city' => $city,
//         'weight_kg'=>$weight_kg
//     ));
//     echo "<br>Un nouvel article a été ajouté";
// } catch (PDOException $e) {
//     echo "Erreur : " . $e->getMessage();
// }
// SELECT TIMESTAMPDIFF(YEAR, '1970-02-01', CURDATE()) AS age
// exo7 in sql
// $resultat = $pdo->query('SELECT firstname,TIMESTAMPDIFF(YEAR,date_of_birth,CURDATE())as Age from users2 where sexe="M"' );
// var_dump($resultat->fetchAll());
// in php

//Exo7
// $resultat = $pdo->query('SELECT firstname, date_of_birth FROM users WHERE sexe = "M"');
// $donnees = $resultat->fetchAll(PDO::FETCH_OBJ);
// // var_dump($donnees);
// foreach ($donnees as $donnee) {
//     echo "Prénom : " . $donnee->firstname . "<br>";
//     echo "Age : " . age($donnee->date_of_birth) . "<br><br>";
// }
// function age(string $dateN): int
// {
//     $aujourdhui = date("Y-m-d");
//     $diff = date_diff(date_create($dateN), date_create($aujourdhui));
//     return $diff->format('%y');
// }
// exo8
// try {
//     $req2 = $pdo->query("SELECT firstname FROM users where id_users=5");
//     if (empty($req2->fetchAll())) {
//         throw new PDOException("Prenom non trouve ");
//     }
//     $req = $pdo->prepare("UPDATE users SET firstname = 'Philipe' where id_user=5");
//     $req->execute();
//     echo 'Modification réussi !<br>';
// } catch (PDOException $e) {
//     echo "<br>";
//     die('Erreur : ' . $e->getMessage());
// }

// exo9
// try {
//        $req2 = $pdo->query("SELECT * FROM articles WHERE id_article = 34");
//        if (empty($req2->fetchAll())) {
//            throw new PDOException("Id article non trouvé");
//        }
//        $req = $pdo->prepare("DELETE FROM articles WHERE id_article = 34");
//        $req->execute();
//        echo '<br>Suppression réussi !<br>';
//    } catch (PDOException $e) {
//        die('Erreur : ' . $e->getMessage());
//    }
//  exo10  
// $resultat = $pdo->query('SELECT * from users' );
// $users=$resultat->fetchAll(PDO::FETCH_OBJ);
// foreach($users as $user){
//     foreach($user as $key=>$value){
//         echo "<p class= 'container'>";
//         echo 'user Id : ' . $user->id_user . '<br>';
//         echo 'first Name : ' . $user->firstname . '<br>';
//         echo 'last Name : ' . $user->lastname . '<br>';
//         echo 'sexe : ' . $user->sexe . '<br>';
//         echo 'DOB : ' . $user->date_of_birth . '<br>';
//         echo 'City : ' . $user->city . '<br>';
//         echo 'Weight in kilograms : ' . $user->weight_kg . '<br>';
//         echo '</p>';
//     }
//     }
?>

<?php require_once "footer.php"
?>