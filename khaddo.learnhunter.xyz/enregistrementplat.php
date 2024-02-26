<?php
session_start();
include("components/connexion.php");

if (isset($_POST["valider"]))
    if (!empty($_POST['nom'])){
        if (!empty($_POST['description'])){
            if (!empty($_POST['prix'])){
                if (!empty($_POST['temps'])){
                    if(isset($_FILES["image"]) AND $_FILES["image"]["error"] == 0){
                        //Tester la taille du fichier
                        if ($_FILES["image"]["size"] < 3000000 ) {
                            // tester l'extenxion du fichier
                            $infofichier = pathinfo($_FILES["image"]['name']);
                            $extension_upload = $infofichier['extension'];
                            //tableau des extensions
                            $extension_autorise = array("jpg","png","jpeg");

                            if (in_array($extension_upload,$extension_autorise)) {
                                move_uploaded_file($_FILES['image']['tmp_name'], '../img/plat/' . basename($_FILES['image']['name']));
                            }
                            $request= $db-> prepare("INSERT INTO plat(id_plat, nom, description, prix, temps, image, id_categorie, id_gerant) VALUES (:nom, :description, :prix, :temps, :image, :id_categorie, :id_gerant)");
                            $request->execute(array(
                                'nom' => $_POST['nom'],
                                'description' => $_POST['description'],
                                'prix' => $_POST['prix'],
                                'temps' => $_POST['temps'],
                                'image' => $_FILES['image']['name'],
                                'id_categorie' => $_POST['categorie'],
                                'id_gerant' => $_SESSION['id_gerant']
                            ));
                        }else {echo('il y a erreur ohhh');}
                    }else {echo " le fichier est trop grand";}

                }else{
                    echo "Veillez renseigner le temps s'il vous plait";
                }
            }else{
                echo "Veillez renseigner le prix s'il vous plait";
            }
        }else{
            echo "Veillez renseigner la description s'il vous plait";
        }
    }else{
        echo "Veillez renseigner le nom s'il vous plait";
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body  class="d-flex justify-content-center">
 <?php
 require ("components/header.php");

 ?>


    <div style="height: 50%;width:50% ;border: 5px;">
        <form class="row g-3" method="post"  action="" enctype="multipart/form-data">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nom Plat</label>
              <input type="text" name="nom" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Prix</label>
              <input type="number" name="prix"  class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Temps de Preparation</label>
              <input type="time" name="temps" class="form-control" id="inputAddress" >
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Description</label>
              <input type="text" name="description" class="form-control" id="inputAddress2" >
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Image</label>
              <input type="file" name="image" class="form-control" id="inputCity">
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Categorie</label>
              <select name="categorie" id="inputZip" class="form-control">
                <?php
                   $request = $db-> query('SELECT * FROM categorie');
                   while ($donnee = $request ->fetch()) {
                   ?>
                   <option value= <?php echo $donnee['id_categorie']?>><?php echo $donnee['nom_categorie']?></option>
                   <?php }
                 $request -> closeCursor()
                ?>
              </select>
            </div>
            
            <div class="col-12"  >
              <button type="submit" class="btn btn-primary" name="valider">Valider</button>
            </div>
          </form>
    </div>

 <?php
 require ("components/footer.php");

 ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

