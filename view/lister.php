<?php
ob_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listes des appartements</title>
    <link rel="stylesheet" href="../bootstrap.css">
</head>
<body>

   

    

    <div class="container">
   
    <br>
    <a href="../controller/add.php" class="btn btn-secondary btn-lg float-end">ajouter un appartement</a>
    
    <br>
    <form action="../controller/lister.php" method="post">
    <input type="text" name="search" id="" class="col-3">
   
    <button type="submit" class="btn btn-success btn-sm" name = "send">search</button>
    </form>
   
    <br>
    

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ref</th>
      <th scope="col">proprietaire</th>
      <th scope="col">Localite</th>
      <th scope="col">surface</th>
      <th scope="col">nbpieces</th>
      <th scope="col">domaine usage</th>
      <th scope="col">sec</th>
      <th scope="col"></th>
      <th scope="col">action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($lesappartement as $appartement){

    ?>
    <tr>
      <th scope="row"><?=$appartement[0]?></th>
      <td><?=$appartement[1]?></td>
      <td><?=$appartement[2]?></td>
      <td><?=$appartement[3]?></td>
      <td><?=$appartement[4]?></td>
      <td><?=$appartement[5]?></td>
      <td><?=$appartement[7]?></td>
      <td><a href="../controller/recuperer.php?ref=<?=$appartement[0];?>" class="btn btn-success btn-sm">recuperer...</a></td>
      <td><a href="../controller/supprimer.php?ref=<?=$appartement[0];?>" class="btn btn-danger btn-sm">supprimer</a></td>
      <td><a href="../controller/modifier.php?ref=<?=$appartement[0];?>" class="btn btn-dark btn-sm">modifier</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<?php
$contenu = ob_get_clean();
$titre="listes des appartement";
require "layout.php";?>
</body>
</html>