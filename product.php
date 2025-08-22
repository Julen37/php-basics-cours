<?php
session_start();

if (!isset($_SESSION['cart']) || count ($_SESSION['cart']) < 1){
    echo "Aucun produit dans le panier";
}else{
    foreach($_SESSION['cart'] as $name => $price){
        ?>
        <p>Produit : <?= $name ?></p>
        <p>Prix : <?= $price ?></p>
        <br>
        <?php
    }
}