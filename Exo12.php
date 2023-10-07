
<?php 
session_start();

$title="exo12";
$nav="exo12";
require "header.php";

?>




<div align="center">
    </br>
    <h1>Find User</h1>
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
    // var_dump($donnees);
    ?>
    <?php if (!empty($donnees)) : ?>
        <div>
            <br>
            <label>Id : <input readonly type="text" name="id_user" placeholder="id_user" value="<?php echo $donnees[0]->id_user; ?>"></label>
            <br>
            <label>Prénom : <input readonly type="text" name="firstname" placeholder="firstname" value="<?php echo $donnees[0]->firstname; ?>"></label>
            <br>
            <label>Nom : <input readonly type="text" name="lastname" placeholder="lastname" value="<?php echo $donnees[0]->lastname; ?>"></label>
            <br>
            <label>Sexe : <input readonly type="text" name="sexe" placeholder="sexe" value="<?php echo $donnees[0]->sexe; ?>"></label>
            <br>
            <label>Date de naissance : <input readonly type="text" name="date_of_birth" placeholder="date_of_birth" value="<?php echo $donnees[0]->date_of_birth; ?>"></label>
            <br>
            <label>Ville : <input readonly type="text" name="city" placeholder="city" value="<?php echo $donnees[0]->city; ?>"></label>
            <br>
            <label>Poids : <input readonly type="number" name="weight_kg" placeholder="weight_kg" value="<?php echo $donnees[0]->weight_kg; ?>"></label>
        </div>
    <?php else : ?>
        <form action="/site_web_php/readUser.php" method="POST">
            <div>
                <label>Introduisez l'ID : <input type="number" name="id_user" placeholder="Entrez l'ID "></label>
                <br><br>
                <button type="submit">Trouvez l'Utilisateur</button>
                <br>
            </div>
        </form>
    <?php endif; ?>
</div>



<?php require_once "footer.php"
?>