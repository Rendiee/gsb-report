</br>
<div class="h3 text-center">Proportion mode de contact</div>
<hr>
<?php
foreach ($prop as $key) {
    $percent = $key['nb'] * 100 / $total;
    ?>
    <p><?php echo $key['lib'] ?> : <?php echo $key['nb'] . ' (' . round($percent, 2) . '%)' ?></p>
    <?php
}

echo 'Total de mode de contact : ' . $total . ' (100%)';

?>
