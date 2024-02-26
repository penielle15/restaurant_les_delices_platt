<?php
session_start();

try {
    $db = new PDO("mysql:host=localhost;dbname=les_delices;","root","");
} catch (Exception $th) {
    die($th);
}

ini_set('display_errors', 1);
error_reporting(E_ALL);
function fileTratment($file, $path)
{
  $destination = $path . basename($_FILES[$file]["name"]);
  // Ici nous allons verifier l'extension du fichier
  $info_fichiers = pathinfo($_FILES[$file]['name']);
  $extension_upload = $info_fichiers['extension'];
  $intension_autorise = array('gif', 'jpg', 'jpeg', 'png', 'webp');
  if (in_array($extension_upload, $intension_autorise)) {
    move_uploaded_file($_FILES[$file]['tmp_name'], $destination);
    echo "Le fichier a bien été envoyé";
  } else {
    echo "Veuillez choisir le bon fichier genre un fichier image";
  }
}

if (isset($_POST['valider']) and isset($_SESSION['id_gerant'])) {
    if (isset($_POST['nom'])) {
      if (isset($_POST['prix'])) {
        if (isset($_POST['temps'])) {
          if (isset($_POST['description'])) {
            if (isset($_FILES['image'])) {
              if (isset($_POST['categorie'])) {
                  $req = $db->prepare("INSERT INTO plat(nom, description, prix, temps,  image,id_categorie, id_gerant) VALUES (:nom, :description, :prix, :time, :image, :categ, :id_gerant)");
                  $req->execute(array(
                      'nom' => nl2br($_POST['nom']),
                      'description' => nl2br($_POST['description']),
                      'prix' => nl2br($_POST['prix']),
                      'time' => nl2br($_POST['temps']),
                      'image' => $_FILES['image']['name'],
                      'categ' => $_POST['categorie'],
                      'id_gerant' => $_SESSION['id_gerant'],
                  ));
                if ($req->rowCount() > 0) {
                  fileTratment("image", './img/plat');
                  echo '<div class="alert alert-success align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                An example danger alert with an icon
                                </div>
                            </div>';
                }else{
                    print_r($_SESSION);
                    print_r($_FILES);
                    echo '<div class="alert alert-danger" role="alert">
                        A simple danger alert—check it out!
                        </div>';
                }
              } else {
                echo "La catégorie n'existe pas!!";
              }
            } else {
              echo "Erreur";
            }
          } else {
            echo "La description n'existe pas!!!";
          }
        } else {
          echo "Le temps de préparation n'existe pas";
        }
      } else {
        echo "Le prix n'existe pas!!!!";
      }
    } else {
      echo 'Le nom du plat n\'existe pas';
    }
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

<body class="d-flex justify-content-center">
  <div style="height: 50%;width:50% ;border: 5px;">
    <form method="post" action="" class="row g-3"  enctype="multipart/form-data">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nom Plat</label>
        <input type="text" name="nom" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Prix</label>
        <input type="number" name="prix" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Temps de Preparation</label>
        <input type="time" name="temps" class="form-control" id="inputAddress">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" id="inputAddress2">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">Image</label>
        <input type="file" name="image" class="form-control" id="inputCity">
      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Categorie</label>
        <select name="categorie" id="inputZip" class="form-control">
          <?php
          $request = $db->query('SELECT * FROM categorie');
          while ($donnee = $request->fetch()) {
          ?>
            <option value=<?php echo $donnee['id_categorie'] ?> ><?php echo $donnee['nom_categorie'] ?></option>
          <?php }
          $request->closeCursor()
          ?>
        </select>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary" name="valider">Valider</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>