<?php

$nav = "login";
$title = "Login";
$erreur = null;
require_once "header.php";
?>
<style>
    body{ 
        background-color: #e0e2e4;

    }
</style>
<?php
if (is_connected()):
 header('location: monprofil.php');
endif;

if (!empty($_POST['prenom']) || !empty($_POST['password'])) {
   if ($_POST['prenom'] === "Corina" && $_POST['password'] === "cfitech") {
      $_SESSION['connected'] = true;
      $_SESSION['prenom'] = $_POST['prenom']; //session retine informatiile 
      header('location: monprofil.php'); //pour aller vers une autre page
   } else {
      $erreur = "Identifiants incorrects !";
   }
}

if ($erreur) : ?>
   <div class="alert alert-danger">
      <?php echo $erreur; ?>
   </div>
<?php endif;


?>


<div align="center">
  
   <form action="/MONSITE/login.php" method="POST">
   <img id="profile-img" class="profile-img-card" src="login.png" />
       <h1 class="h3 mb-3 font-weight-normal">Welcome </h1>
      <input type="text" name="prenom" placeholder=" Login ">
      <br><br>
      <input type="password" name="password" placeholder=" Password"><br><br>
      <button class="btn btn-primary" type="submit">Sign in</button>
   </form>
</div>

<?php
require_once 'footer.php';
?>