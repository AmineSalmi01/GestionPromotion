<?php
require_once '../data-access/addPromo.php';
?>
<?php




// if(!empty($_POST)){
//     $sql_promo = new ManagerPromotion();
//     $name = $_POST["NamePromo"];
//     $promotion = new Promotion();
//     $promotion->setName($_POST["NamePromo"]);
//     $sql_promo->AddPromo($promotion);
// }

//     $select_promo = new ManagerPromotion();
//     $res_data = $select_promo->select();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="icon_font/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="child">
            <form action="../data-access/addPromo.php" method="POST">
                <button class="btn" type="submit" name="submit" Edit>Add</button>
                <input class="input" type="text" name="NamePromo" placeholder="Add Promotion">

            </form>
            <div class="child2">
                <input class="input" type="search" id="search" placeholder="Search">
                <button id="sreach_btn" class="btn">Search</button>
            </div>ْ
        </div>

        <div id="content.div">
            <?php

            if ($res_data != null) {
                foreach ($res_data as $res) {
                    echo '<div  class="prommo">
                        <div>' . $res["NomPromotion"] . '</div>
                            <div class="icon">
                              <a href="../data-access/delete.php?id_delete=' . $res["id"] . '" ><i id="icon_delete" class="fa-solid fa-trash"></i></a>
                              <a href="FormEdit.php?id_edit=' . $res["id"] . '" ><i id="icon_edit" class="fa-regular fa-pen-to-square"></i></a>
                            </div>
                        </div>
                ';
                }
            }






            ?>
        </div>
    </div>
    <script src="search.js"></script>
</body>

</html>