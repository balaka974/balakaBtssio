<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=dbannuaire', 'root', '');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM employes WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>



<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Annuaire</title>

  <link rel="stylesheet" href="css/style.css">
</head>



<article>

         <b><h2>Profil de <?php echo $userinfo['nom']; ?></h2></b>
         <br /><br />
         <br />
         <b> Pseudo :</b> <?php echo $userinfo['prenom']; ?>
         <br />
         <b> Mail :</b> <?php echo $userinfo['email']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
      
         <?php
         }
         ?>
      </article>
        <footer>
      <p> Copyright &copy; SkyRun  </p>
  

  </footer> 
      </div>
   </body>
</html>
<?php   
}
?>
