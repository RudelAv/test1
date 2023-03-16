<?php 
    
    include '../traitement/connect.php';
    if (isset($_POST['connexion'])){

        function validate($nom, $pass){
            if (empty($nom) || empty($pass)){
                return false;
            }else{
                if (strlen($nom) < 5 || strlen($pass) < 5) {
                    return false;
                }else{
                    return true;
                }
            }
            // $data=trim($data);
            // $data=stripslashes($data);
            // $data=htmlspecialchars($data);
            // return $data;
            
        
        }

        // resultat base de donnes
        $uname        = $_POST['nom'];
        $pass         = $_POST['password'];
        // $passwordHash = password_hash($pass, PASSWORD_DEFAULT);
        $verif        = validate($uname, $pass);
        
        
        if (!$verif){
            echo "<script type='text/javascript'> swal.fire('Echec','echec formulaire invalide','error');</script>";
        }else{
            $sql = "SELECT * FROM utilisateur WHERE nom_user='$uname' and password_user='$pass' and statut_user='actif'";

            $result = mysqli_query($conn,$sql);

            if (mysqli_num_rows($result) == 1){

                $row = mysqli_fetch_assoc($result);
                // verification de la similarite avec la bd
                    $_SESSION['nom_user']    =   $row['nom_user'];
                    $_SESSION['type_user']   =   $row['type_user'];
                    $_SESSION['prenom_user'] =   $row['prenom_user'];
                    $_SESSION['id_user']     =   $row['id_user'];

                     echo "<script type='text/javascript'> swal.fire('Success','Connexion Reussie', 'success'); window.location.href = '../../../soutenance/view/dasboard.php' </script>";
                     // direction page dasboard
                     header("location: ");
            }else{
                echo "<script type='text/javascript'> swal.fire('Echec','echec de connexion','error');</script>";
            }
        }
    }
?>