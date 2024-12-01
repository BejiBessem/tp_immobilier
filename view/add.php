<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter appartement</title>
    <link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
    <div class="container">
    <form action="../controller/add.php" method="post"><br>
    <label for="">proprietaire</label><input type="text" name="pro" id="" class="form-control">
    <label for="">localité</label><input type="text" name="loc" id="" class="form-control">
    <label for="">surfaces</label><input type="text" name="surf" id="" class="form-control">
    <label for="">nbpieces</label><input type="text" name="nbp" id="" class="form-control">
    <label for="">domaine usage</label><input type="text" name="du" id="" class="form-control">
    <label for="">surface commun</label><input type="text" name="sec" id="" class="form-control">
    <input type="submit" name= "ok" value="Ajouter" class="btn btn-success btn-info">
</form>
    </div>
</body>
</html>