  
<?php
  $serveur  ="localhost";
  $user   ="root";
  $password ="";
  $bd     ="projet";
  $conn   =mysqli_connect($serveur,$user,$password,$bd);
?>

  <?php
        
        if (isset($_GET['id'])){
        $id = $_GET['id'];
        $sql="UPDATE utilisateur set etat_user='1' WHERE id_user='$id'";
        $res = mysqli_query($conn, $sql);
        mysqli_close($conn);
        if($res)
            echo "<script>alert('Suppression ok'); </sript>";
        else echo "<script>alert('Echec de la suppression'); </script>"
        ;
    }