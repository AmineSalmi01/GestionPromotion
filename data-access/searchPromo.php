<?php
    include "GestionPromotion.php";


    if(isset($_POST["search"])){
        $Gestion_Promotion = new ManagerPromotion();
        $promo = new Promotion();

        $promo->setName($_POST["name"]);
        $result = $Gestion_Promotion->search($promo);

        $data = [];

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        echo json_encode($data);
    }
?>