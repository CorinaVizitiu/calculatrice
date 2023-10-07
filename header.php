<?php require_once "functions/authentification.php"; ?>
<?php require_once "functions/functionsMath.php"; ?>
<?php try {
    $pdo = new PDO('mysql:dbname=coursmysql;host=localhost', "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion réussie <br>';
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<!doctype html>
<html lang="en">

<head>
       <link rel="stylesheet" href="style.css">
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="description" content="">
       <meta name="author" content="">
       <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

       <title></title>
       <style>
              .logout {
                     margin-left: 100px;
              }
       </style>

</head>

<body>
       <nav class="container">
              <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                     <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

                            <svg class="bi me-2" width="60" height="52">
                                   <use xlink:href="#bootstrap" />
                            </svg>
                            <span class="fs-4">MonSite</span>
                     </a>

                     <ul class="nav nav-pills ml-auto">
                            <li class="nav-item"><a href="index.php" class="nav-link <?php if ($nav === "home") : ?>
                                       active
                                <?php endif ?>">Home</a></li>
                            <li class="nav-item"><a href="debug.php" class="nav-link<?php if ($nav === "debug") : ?>
                                       active
                                <?php endif ?> ">Session Actuelle</a></li>
                            <li class="nav-item"><a href="reset.php" class="nav-link <?php if ($nav === "reset") : ?>
                                       active
                                <?php endif ?> ">Reset Session</a></li>

                            <?php if (is_connected()) :  ?>
                                   <li class="nav-item"><a data-toggle="dropdown" href="calculatrice.php" class="nav-link <?php if ($nav === "calculatrice") : ?>
                                       active
                                <?php endif ?> ">Calculatrice</a>
                                          <ul class="dropdown-menu">
                                                 <li><a href="addition.php">Addition</a></li>
                                                 <li><a href="multiplication.php">Multiplication</a></li>
                                                 <li><a href="division.php">Division</a></li>
                                                 <li><a href="soustraction.php">Soustraction</a></li>
                                          </ul>
                                   </li>
                            <?php endif; ?>
                            <li class="nav-item"><a href="monprofil.php" class="nav-link <?php if ($nav === "monprofil") : ?>
                                       active
                                <?php endif ?> ">Mon Profil</a></li>
                                <li class="nav-item"><a data-toggle="dropdown" href="baseDeDonnes.php" class="nav-link <?php if ($nav === "BaseDeDonnes") : ?>
                                       active
                                <?php endif ?> ">BD</a>
                                          <ul class="dropdown-menu">
                                                 <li><a href="Exo10.php">Exo 10</a></li>
                                                 <li><a href="Exo11.php">Add User</a></li>
                                                 <li><a href="Exo12.php">Find User</a></li>
                                                 <li><a href="exo14.php">Delete User </a></li>
                                          </ul>
                                   </li>
                                <!-- <li class="nav-item"><a href="baseDeDonnees.php" class="nav-link <?php if ($nav === "baseDeDonnees") : ?>
                                       active
                                <?php endif ?> ">Base De Donnees</a></li>
                                <li class="nav-item"><a href="Exo10.php" class="nav-link <?php if ($nav === "newpage") : ?>
                                       active
                                <?php endif ?> ">Exo 10</a></li>
                                <li class="nav-item"><a href="Exo11.php" class="nav-link <?php if ($nav === "newpage2") : ?>
                                       active
                                <?php endif ?> ">Exo 11</a></li> -->

                            <?php if (!is_connected()) : ?>
                                   <li class="nav-item"><a href="login.php" class="nav-link <?php if ($nav === "login") : ?>
                                       active
                                <?php endif ?>">Login</a></li>
                            <?php else : ?>
                                   <div class="logout">
                                          <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>

                                   </div>
                                 
                            <?php endif; ?>


                     </ul>




       </nav>