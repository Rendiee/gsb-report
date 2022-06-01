<div class="h3 text-center">Praticien d'une ville</div>
<hr>

<!-- CHANGER LE NOM DES CHAMPS POUR LES RECUPERER DANS LE CONTROLEUR -->

<!-- CHANGER L'ACTION DU FORMULAIRE -->

<form action="index.php?uc=exam&action=ville" method="POST" id="formConnexion">
    <div>
        <label for="liste-ville">Liste des villes</label>
        <select id="liste-ville" name="liste-ville">
            <option selected disabled value="">- Choisir une ville -</option>
            <?php

            // CHANGER LE NOM DE LA FONCTION ET DES VALEUS EN FONCTION DU CONTROLEUR

            foreach ($ville as $v) {
            ?>
                <option value="<?php echo $v['ville'] ?>"><?php echo $v['ville'] ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div>
        <input type="submit" value="Chercher" name="chercher" id="chercher">
    </div>
</form>