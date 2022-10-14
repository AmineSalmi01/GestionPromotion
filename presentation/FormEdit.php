<?php
require_once '../data-access/GestionPromotion.php';

$edit_promo = new ManagerPromotion();
$promo = new Promotion();
$promo->setId($_GET["id_edit"]);
$id_data = $edit_promo->SelectId($promo->getId());


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <div class="edit_container">
        <form action="../data-access/edit.php" method="POST">
            <?php
            if ($id_data != null) {
                foreach ($id_data as $res) {
                    echo '
                    <input class="input" type="text" name="input" value="'. $res["NomPromotion"] . '">
                    <input type="hidden" name="id" value="'.$res["id"].'" >
                    ';
                }
            }
            ?>
            <button id="save" class="btn" type="submit" name="submit">Save</button>

      </form>
    </div>
</body>

</html>