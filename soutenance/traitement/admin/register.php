 <?php 
    session_start();
    include '../traitement/connect.php';;
    function verifier($nom,$prenom,$pass){
        if (empty($nom) || $prenom || empty($pass)){
            return false;
        }else{
            return true;   
        }
    }
   


    if(isset($_POST['register'])) {

        extract($_POST);
        $date_create = date("Y-m-d");
        $passwordHash = password_hash($pass, PASSWORD_DEFAULT);

        $verif = verifier($nom,$prenom,$passwordHash);

            if ($verif){
                echo "<script type='text/javascript'> swal.fire('Echec','veuillez remplir tous les champs','error');</script>";
            }else  {
                
                    $sql="INSERT INTO utilisateur () VALUES (null,'$nom','$prenom','$passwordHash','','','employer','actif',0,'$date_create','','')";
                    $res = mysqli_query($conn, $sql);
       
                    if($res){
                        echo "<script type='text/javascript'> swal.fire('Success','Connexion Reussie', 'success'); </script>";

                        
                        header("location:../../soutenance/view/dasboard.php ");
                    }
                    else{
                        echo 'Error:'.$sql.'<br>' .mysqli_stmt_errno($conn, $sql);
                    }
                }
    }

    mysqli_close($conn);

  ?>