<?php
  $serveur  ="localhost";
  $user   ="root";
  $password ="";
  $bd     ="projet";
  $conn   =mysqli_connect($serveur,$user,$password,$bd);
?>
<?php 
    
    // include '../traitement/connect.php';
    if (isset($_POST['modifier'])){
        $id     = $_SESSION['id_user'];
        // resultat base de donnes
        $nom    = $_POST['nom'];
        $pass   = $_POST['password'];
        $verif  = $_POST['passworde'];

            $sql = "SELECT * FROM utilisateur WHERE id_user='$id'";
            $result = mysqli_query($conn,$sql);
           
            if (mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_assoc($result);
                // verification de la similarite avec la bd

                if ($pass == $row['password_user']) {
                  $change   =   "UPDATE utilisateur set password_user = '$verif' WHERE id_user  = $id ";
                  $ex       =   mysqli_query($conn, $change);
                    if ($ex){
                      echo "<script type='text/javascript'> swal.fire('Success','Modification Ok', 'success'); window.location.href = '../../../soutenance/view/indexe.php' </script>";
                    }else{
                      echo "<script type='text/javascript'> swal.fire('Echec','Modification echouee','error');</script>";
                    }  
                } 
            }else{
              echo "<script type='text/javascript'> swal.fire('Echec','Modification echouee','error');</script>";
            }
      }
?>