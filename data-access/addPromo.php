<?php
    require_once '../data-access/GestionPromotion.php';
?>

<?php

    if(isset($_POST["submit"])){
        $sql_promo = new ManagerPromotion();
        $name = $_POST["NamePromo"];
        $promotion = new Promotion();
        $promotion->setName($_POST["NamePromo"]);
        $sql_promo->AddPromo($promotion);
        header("location: ../presentation/FormPromo.php");
    }

    

        $select_promo = new ManagerPromotion();
        $res_data = $select_promo->select();
?>