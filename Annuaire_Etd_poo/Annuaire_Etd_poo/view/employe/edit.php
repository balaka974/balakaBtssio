<?php include "templates/header.php";?>


<h2>modifier un employé</h2>
<a href="?ctrl=employe">Retour</a><br><br>
<form action="?ctrl=employe&mth=edit&id=<?php echo $_GET['id']; ?>" method="post">
     <label for="genre">Genre</label>
    <SELECT name="genre" size="1" value= "<?php echo $employe['genre']; ?>"<br>
    <OPTION>M.
    <OPTION>Md.
    <OPTION>Mdlle
    </SELECT>

    <label for="prenom">Prénom</label><br>
    <input type="text" name="prenom" value= "<?php echo $employe['prenom']; ?>"<br>

    <label for="nom">Nom</label><br>
    <input type="text" name="nom" value=" <?php echo $employe['nom']; ?>"<br>

    <label for="email">Adresse mail</label><br>
    <input type="text" name="email" value="<?php echo $employe['email']; ?>"<br>

    <label for="age">Age</label><br>
    <input type="text" name="age" value="<?php echo $employe['age']; ?>"<br>

    <label for="ville">ville de résidence</label><br>
    <input type="text" name="ville" value="<?php echo $employe['ville']; ?>"<br>

    <label for="ville">Mot de passe</label>
    <input type="password" name="mdp" id="mdp">
    <br><br>
    <input type="submit" name="submit" value="Modifier">
    <br><br>

	<?php if ($errors) {
			?>
			<h3>Erreur:</h3>
			<ul>
				<?php foreach ($errors as $value) { ?>
					<li><?php echo $value; ?></li>
				<?php } ?>
			</ul>
	<?php } ?>
</form>

<?php include "templates/footer.php";?>