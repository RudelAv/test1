<?php  
 $conn =	mysqli_connect("localhost","root","","projet");
 if(isset($_GET['id'])){
 	$id =	$_GET['id'];
 	extract($_POST);
 	$sql = "INSERT INTO commande(id_commande, nom_commande, qte_commande, prix_commande,id_client, id_menu, id_user) VALUES ('','','','','','','') ";
 	$res = mysqli_query($conn, $sql);
       
    if($res){
        echo "<script type='text/javascript'> swal.fire('Success','Connexion Reussie', 'success'); </script>";
		header("location:client.php ");
    }
    else{
        echo 'Error:'.$sql.'<br>' .mysqli_stmt_errno($conn, $sql);
    }

 }
?>