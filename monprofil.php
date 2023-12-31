<style>
.tab{
  width:50%;
  table-layout: fixed;
  margin-left: auto;
margin-right: auto;
}

.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
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
  font-size: 25px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

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
<?php 
session_start();


$title="MonProfil";
$nav="monprofil";
require_once "header.php";?>


<?php
if (!is_connected()) :
   header('location: /MonSite/login.php');
endif;

?>

<div align="center">
<h1>Bienvenu <?php echo $_SESSION['prenom']; ?> sur votre Profil</h1>
</div>
<div align="center">
<img src="calculator.jpg" width="150px" height="150px">
</div>
<div class="table-responsive-xl">
<table class="tab">
  <tbody>
    <tr>
      <td>Operation</td>
      <td>Nombre 1</td>
      <td>Nombre 2</td>
      <td>Resultat</td>
    </tr>
      <?php 
        if (isset($_SESSION["repons"])){
          $lignes = explode('*',$_SESSION["repons"]);
          foreach($lignes as $ligne){
            $colonnes = explode(':',$ligne);
            if(count($colonnes)==4)
              echo "
                <tr>
                  <td>".$colonnes[0]."</td>
                  <td>".$colonnes[1]."</td>
                  <td>".$colonnes[2]."</td>
                  <td>".$colonnes[3]."</td>
                </tr>
              ";
          }
        }
    ?>

  </tbody>
</table>
</div>


<?php
if (isset($_SESSION["count"])){
echo "Vous avez fait ".$_SESSION['count']." opérations mathématiques.";
}

?>

<?php require_once "footer.php"
?>