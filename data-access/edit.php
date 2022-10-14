<?php
    include 'GestionPromotion.php';

    if(isset($_POST["submit"])){
        $update_sql = new ManagerPromotion();
        $promotion = new Promotion;
        $promotion->setId($_POST["id"]);
        $promotion->setName($_POST["input"]);
        $update_sql->edit($promotion->getId(), $promotion->getName());
    }
    header("location: ../presentation/FormPromo.php");
?>