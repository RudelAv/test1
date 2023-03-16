      <?php    
        $conn   =mysqli_connect("localhost","root","","projet");
        if (isset($_GET['delete'])){
          $id = $_GET['delete'];
          $requete="UPDATE menus set etat_menu=1 WHERE id_menu=$id";
          $res = mysqli_query($conn, $requete);
          mysqli_close($conn);
          echo "<script>alert('Suppression Reussie'); </script>";
          header("location: ../../view/menu_jour.php");
        }
      ?>