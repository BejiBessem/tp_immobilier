<?php
$ref=htmlspecialchars($_GET['ref']);
ob_start();?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier appartement</title>
    <link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
    <div class="container">
    <form action="../controller/modifier.php?ref=<?=$ref;?>" method="post"><br>
    <label for="">proprietaire</label><input type="text" name="pro" id="" class="form-control">
    <label for="">localité</label><input type="text" name="loc" id="" class="form-control">
    <label for="">surfaces</label><input type="text" name="surf" id="" class="form-control">
    <label for="">nbpieces</label><input type="text" name="nbp" id="" class="form-control">
    <label for="">domaine usage</label><input type="text" name="du" id="" class="form-control">
    <label for="">surface commun</label><input type="text" name="sec" id="" class="form-control">
    <input type="submit" name= "ok3" value="modifier" class="btn btn-success btn-info">
</form>
    </div>
    <?php $titre = "modifier appartement de refernce".$ref;
    $contenu=ob_get_clean();
    require "layout.php";?>
</body>
</html>