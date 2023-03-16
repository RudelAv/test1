<?php 
$conn   =mysqli_connect("localhost","root","","projet");


    if(isset($_POST['envoyer'])){

    $dossier      = "images/";
    $chemin_image = $dossier . basename($_FILES["image"]["name"]);
    $extension    = strtolower(pathinfo($chemin_image,PATHINFO_EXTENSION));
    if ($extension != "png" && $extension != "jpg" && $extension != "jpeg" ) {
        
         echo "file is not image";
       }else{

          $taille_image = $_FILES["image"]["size"];

            if ($taille_image > 500000) {

               echo "heuil trop grand";
              
            }else{

              if (move_uploaded_file($_FILES["image"]["tmp_name"], $chemin_image)) {
                
                echo "upload successful";
                
              }else{
                echo "Oousp Error";
              }

            }
    }

         $nom          = $_POST['nom'];
         $description  = $_POST['description'];
         $prix         = $_POST['prix'];
         $sql          = "INSERT INTO menus (nom_menu,vue,description,prix,etat_menu) VALUES ('$nom','$chemin_image','$description','$prix','0')";
         $res = mysqli_query($conn, $sql);
         if($res){
             echo "<script> alert('insertion reussie')</script>";
             
         }

         else{
             echo 'Error:'.$sql.'<br>' .mysqli_stmt_errno($conn, $sql);
         }
 }
?>