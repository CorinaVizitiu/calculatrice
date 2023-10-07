
<?php 
session_start();

$title="np";
$nav="newpage";
require_once "header.php";

?>
<!-- <?php
// if (!is_connected()) :
//    header('location: /MonSite/login.php');
// endif;

?> -->
<?php

// exo10
try {
    $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie <br>';
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

$resultat = $pdo->query('SELECT * from users' );
$users=$resultat->fetchAll(PDO::FETCH_OBJ);

 
    ?>

    <div class="table-responsive-xl">
<table class="tab">
  <tbody>
    <tr>
      <td>Id</td>
      <td>Prenom</td>
      <td>Nom</td>
      <td>Sexe</td>
      <td>Date de naissance</td>
      <td>Ville</td>
      <td>Poids</td>
    
    </tr>
      <?php 
     foreach($users as $user){
      
    echo "
                <tr>
                  <td>". $user->id_user."</td>
                  <td>".$user->firstname ."</td>
                <td>".$user->lastname."</td>
                  <td>".$user->sexe ."</td>
                  <td>".$user->date_of_birth ."</td>
                  <td>".$user->city."</td>
                  <td>".$user->weight_kg."</td>
                </tr>
              ";
          }
        
    ?>

  </tbody>
</table>
</div>
 
<style>
   .tab{
  width:50%;
  table-layout: fixed;
  margin-left: auto;
margin-right: auto;
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 25px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 30;
  font-size: 15px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
.tab{
  background: -webkit-linear-gradient(left,#80ced6 ,#4040a1 );
 
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}



.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

 </style>


<?php require_once "footer.php"
?>