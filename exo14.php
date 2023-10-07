<?php
$title = "Delete User";
$nav = "deleteuser";
$donnees = NULL;
require "header.php";
?>
<div align="center">
    </br>
    <h1>Delete User</h1>
    </br>
    <?php if (isset($_POST["id_user"])) :
        $id = $_POST["id_user"];
        try {
            $req = $pdo->query('SELECT * FROM users WHERE id_user = "' . $id .  '" ');
            $donnees = $req->fetchAll(PDO::FETCH_OBJ);
            if (empty($donnees)) {
                throw new PDOException("Id user non trouvé");
            }
            echo "Un utilisateur trouvé<br>";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    endif;
    if (isset($_POST["id_user"]) && isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["sexe"]) && isset($_POST["date_of_birth"]) && isset($_POST["city"]) && isset($_POST["weight_kg"])) :

        try {
            $req = $pdo->query('SELECT * FROM users WHERE id_user = "' . $id .  '" ');
            $donnees = $req->fetchAll(PDO::FETCH_OBJ);
            if (empty($donnees)) {
                throw new PDOException("Id user non trouvé");
            }
            $req = $pdo->prepare('DELETE FROM users WHERE id_user = "' . $id .  '"');
            $req->execute();
            echo "Utilisateur supprimé<br>";
            header("Location: baseDeDonnees.php");
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    endif;



    ?>
    <?php if (!empty($donnees)) : ?>
        <form action="/site_web_php/deleteUser.php" method="POST">
            <br>
            <label>Id : <input readonly type="text" name="id_user" placeholder="id_user" value="<?php echo $donnees[0]->id_user; ?>"></label>
            <br>
            <label>Prénom : <input type="text" name="firstname" placeholder="firstname" value="<?php echo $donnees[0]->firstname; ?>"></label>
            <br>
            <label>Nom : <input type="text" name="lastname" placeholder="lastname" value="<?php echo $donnees[0]->lastname; ?>"></label>
            <br>
            <label>Sexe : <input type="text" name="sexe" placeholder="sexe" value="<?php echo $donnees[0]->sexe; ?>"></label>
            <br>
            <label>Date de naissance : <input type="text" name="date_of_birth" placeholder="date_of_birth" value="<?php echo $donnees[0]->date_of_birth; ?>"></label>
            <br>
            <label>Ville : <input type="text" name="city" placeholder="city" value="<?php echo $donnees[0]->city; ?>"></label>
            <br>
            <label>Poids : <input type="number" name="weight_kg" placeholder="weight_kg" value="<?php echo $donnees[0]->weight_kg; ?>"></label>
            <br><br>
            <button type="submit">Supprimer l'utilisateur</button>
            <br>
        </form>
    <?php else : ?>
        <form action="/site_web_php/deleteUser.php" method="POST">
            <div>
                <label>Introduisez l'ID : <input type="number" name="id_user" placeholder="Entrez l'ID "></label>
                <br><br>
                <button type="submit">Trouvez l'Utilisateur</button>
                <br>
            </div>
        </form>
    <?php endif; ?>
</div>
<?php
require_once 'footer.php';
?>