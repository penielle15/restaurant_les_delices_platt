<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form action="./gerantconnexion.php" method="post">
    <div class="mb-3 row" >
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control-plaintext" id="staticEmail" placeholder="email@example.com" name="email">
    </div>
</div>
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" name="password">
    </div>
</div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="validateur">Valider</button>
  </div>
    </form>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>







<?php
include("components/connexion.php");

if (isset($_POST["validateur"])) {
    if(isset($_POST['email'])){
        if(isset($_POST['password'])){
          $resquest = $db -> prepare('SELECT * FROM gerant WHERE email=:email AND password=:password ');
          $resquest -> execute(array('email'=>$_POST['email'],'password'=>$_POST['password']));
          $response =$resquest ->fetch();
            if ($resquest ->rowCount() > 0 ) {
                $_SESSION['id_gerant'] =$response['id_gerant'];
                header('location:./index.php');
            }
          
        }else{
            echo("vos information ont été mal saisir") ;
        }
    
    }else{
        echo("vos information ont été mal saisir") ;
    }
}
?>

