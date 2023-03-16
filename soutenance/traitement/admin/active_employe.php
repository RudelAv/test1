  
<?php
  $serveur  ="localhost";
  $user   ="root";
  $password ="";
  $bd     ="projet";
  $conn   =mysqli_connect($serveur,$user,$password,$bd);
?>

  <?php
        
        if (isset($_GET['active'])){
          $active   = $_GET['active'];
          $select   = "SELECT * FROM utilisateur WHERE id_user=$active";
          $data=mysqli_query($conn, $select);
            foreach ($data as $key): 
              if ($key['statut_user'] == 'actif') {
                
                $sql   =  "UPDATE utilisateur set statut_user = 'inactif' WHERE id_user=$active";  
                $res = mysqli_query($conn, $sql);  
                if($res)
                  echo "<script>alert('desactivation ok'); </script>";
                  else echo "<script>alert('Echec de la desactivation'); </script>";
              }else{
                
                $sql   =  "UPDATE utilisateur set statut_user = 'actif' WHERE id_user=$active";
                $res   =  mysqli_query($conn, $sql);
                if($res)
                  echo "<script>alert('activation ok'); </script>";
                  else echo "<script>alert('Echec de l activation'); </script>";
              }
            endforeach;
          mysqli_close($conn);
        }