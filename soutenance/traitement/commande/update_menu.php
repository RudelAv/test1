   <?php    
        if (isset($_GET['id'])){

          $conn   =mysqli_connect("localhost","root","","projet");

          $id = $_GET['id'];
          $requete="UPDATE menus set etat_menu=0 WHERE id_menu=$id";
          $res = mysqli_query($conn, $requete);
          mysqli_close($conn);
          echo "<script>swal.fire('Success','Suppression Reussie', 'success'); </script>";
          header("location: ../../view/menu_jour.php");
        }
    ?>