<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style-skyrun.css">
      <title>Connexion</title>
   </head>


   <body>
  


    <article>

<div align="center">
  <br /><br />
   <?php
session_start();

$cnx = new PDO('mysql:host=127.0.0.1;dbname=dbannuaire', 'root', '');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['emailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $cnx->prepare("SELECT * FROM employes WHERE email = ? AND mdp = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['nom'] = $userinfo['nom'];
         $_SESSION['email'] = $userinfo['email'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe ! <a href=\"connexion.php\">Modifier mail ou mots de passe</a>";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés ! <a href=\"connexion.php\">Complétés tous les champs</a>";
   }
}


 if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
            
?><br><br>     

</article>

<p><a href="index.php" />RETOUR</a><br /></p>
   
    <footer>
      <p> Copyright &copy; SkyRun  </p>
  

  </footer> 

      </body>
</body>

</html>
<html>
