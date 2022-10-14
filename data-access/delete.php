<?php
include 'GestionPromotion.php';

if(isset($_GET["id_delete"])){
    $delete_promo = new ManagerPromotion();
    $promotion = new Promotion();
    $promotion->setId($_GET["id_delete"]);
    $delete_promo->delete($promotion->getId());
    header('Location: ../presentation/FormPromo.php');
}

?>