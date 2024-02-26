<?php
session_start();
require ("../components/connexion.php");


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
                        $request= $db-> prepare("INSERT INTO plat(nom, description, prix, temps, image, id_categorie, id_gerant) VALUES (:nom, :description, :prix, :temps, :image, :id_categorie, :id_gerant)");
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



