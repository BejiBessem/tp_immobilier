<?php
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in page</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
    <form action="" method="post">
       <label for="">Username</label> <input type="text" name="username" id="" class="col-3">
        <label for="">Password</label><input type="text" name="password" id="" class="col-3">
        <button type="submit" name="ok8" class="btn btn-success btn-sm">sign in  </button>
        <button type="submit" name="dest">deconnexion</button>
    </form>
    </div>
    <?php
    if(isset($_POST['ok8'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if($username=="bessem@gmail.com"&&$password=="beji0921"){
            $_SESSION['username']="bessem@gmail.com";
            $_SESSION['password']="beji0921";
            header("location:controller/lister.php");
            exit;

        }else{
            echo "<script>alert('wrong username or password retry');</script>";
        }
    }
    if(isset($_POST['dest'])){
        header("location:logout.php");
    }
   ?>
</body>
</html>