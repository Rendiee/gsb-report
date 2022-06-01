<div class="h3 text-center">Praticien d'une ville</div>
<hr>

<!-- CHANGER LE NOM DES CHAMPS POUR LES RECUPERER DANS LE CONTROLEUR -->

<!-- CHANGER L'ACTION DU FORMULAIRE -->
<?php

// CHANGER LE NOM DE LA FONCTION ET DES VALEUS EN FONCTION DU CONTROLEUR

foreach ($prat as $p) {
?>
    <p><?php echo $p['num'] . ' - ' . $p['nom'] . ' ' . $p['prenom'] ?></p>
<?php
}
?>