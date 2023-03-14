<?php
include('entete.php');
?>
<link rel="stylesheet" href="inscription.css">
<div class="one">
<form action="valideinscription.php" method="POST"  name="moi">
 <p><h3>S'INSCRIRE</h3></p>
 <label for="">Nom</label><br>
 <input type="text" placeholder="votre nom" name="nom"><br>
 <label for="">Prenom</label><br>
 <input type="text" placeholder="votre prenom" name="prenom"><br>
 <label for="">Date de naissance</label><br>
 <input type="date" name="date"><br>
 <label for="">Lieu de naissance</label><br>
 <input type="text" placeholder="lieu de naissance" name="lieu"><br>
 <label for="">Email</label><br>
 <input type="email" placeholder="exemple@.gmail.com" name="email"><br>
 <label for="">Mot de passe</label><br>
 <input type="password" placeholder="***********" name="password"><br>
<input type="reset" value="Effacer">&nbsp;<input type="submit" value="Envoyer" name="envoyer">
<p>vous avez déjà un compte? <a href="connexion.php">connectez-vous</a></p>
</form>
</div>