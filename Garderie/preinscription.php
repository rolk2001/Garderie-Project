    <?php
        include('entete.php');
    ?>
    <link rel="stylesheet" href="preinscription.css">
    <div class="formulaire">
        <div class="barre"></div><br>
        <form>
            <h1>formulaire de préinscription</h1>
            <div class="form1">
                <label for="nomComplet">Nom Complet <span class="star">*</span></label><br>
                <input type="text" placeholder="Votre nom" required class="input" id="nomComplet"><br><br>

                <label for="adresse">Adresse<span class="star">*</span></label><br>
                <input type="text" placeholder="Votre adresse" required class="input" id="adresse"><br><br>

                <label for="tel">Téléphone<span class="star">*</span></label><br>
                <input type="text" placeholder="Votre téléphone" required class="input" id="tel"><br><br>

                <label for="age">Age<span class="star">*</span></label><br>
                <input type="number" min="2" max="4" placeholder="âge" required class="input" id="ge"><br><br>

                <label for="email">Email<span class="star">*</span></label><br>
                <input type="email" placeholder="exemple@email.com" required class="input" id="email"><br><br>
            </div>
            <div class="form2">
                <label for="pays">Pays<span class="star">*</span></label><br>
                <select id="pays"  class="input">
                    <option>Tchad</option>
                    <option>RCA</option>
                    <option>Cameroun</option>
                    <option>Gabon</option>
                    <option>Congo</option>
                    <option>Guinée Equatoriale</option>
                </select><br><br>
                <label for="date">Date<span class="star">*</span></label><br>
                <input type="date" placeholder="01/01/0001"><br><br>
                <label for="sexe">Sexe<span class="star">*</span></label><br>
                Masculin <input type="radio" name="sexe" checked>&nbsp;
                Feminin <input type="radio" name="sexe">&nbsp; <br><br>
                <label for="sexe">Pièces <span class="star">*</span></label><br>
                Actes de naissance <input type="checkbox">&nbsp;
                Carte maternelle <input type="checkbox">&nbsp;
            </div>
            <div class="button">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</body>
</html>