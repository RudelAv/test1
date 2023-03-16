<?php
	include "../connect.php";
    $sql="SELECT * FROM utilisateur WHERE type_user='employer'";
    $data=mysqli_query($conn, $sql);
    mysqli_close($conn); 
?> 

      <?php $i=1;  foreach ($data as $key): ?>
        <tr>
          <th><?= $i; ?></th>
          <td><?= $key['nom_user']; ?></td>
           <td><?= $key['prenom_user']; ?></td>
          <td><?= $key['email']; ?></td>
          <td></td>
          <td></td>
          <td><?= $key['numero']; ?></td>
        </tr>
      <?php $i++; endforeach; ?>