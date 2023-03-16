

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>
  <link rel="stylesheet" type="text/css" href="../bibliotheque/sweet/sweetalert2.css">
  <?php include '../include/csslog.php'; ?>
  <!-- Favicons -->
 

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" method="POST" action="new_user.php">
        <h2 class="form-login-heading">Creer un nouveau compte</h2>
        <div class="login-wrap">
          <input type="text" name="nom" class="form-control" placeholder="Nom Utilisateur" autofocus required>
          <br>
          <input type="text" name="prenom" class="form-control" placeholder="Prenom" required>
          <br>
          <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
          <br>
          <hr>
          <label class="checkbox">
            
            <span class="pull-right">
            Avez vous un compte?<br>
            <a data-toggle="" href="index.php">Connexion</a>
            </span>
          </label><br><br>
          <button type="submit" class="btn btn-theme btn-block" name="register" href="dasboard.php"  type="submit"><i class="fa fa-lock"></i> Creer le Compte</button> 
          
          
       
      </form>
    </div>
  </div>

  <!-- call to script -->
  <script type="text/javascript" src="../bibliotheque/sweet/sweetalert2.min.js"></script>
  <script type="text/javascript" src="../bibliotheque/sweet/jquery.sweet-alert.init.js"></script>
  
  <script type="text/javascript">
    
    // swal.fire(
    //   'Echec',
    //   'echec formulaire invalide',
    //   'error'
    //   );
  </script>

  <?php include '../include/scriptlog.php'; ?>
  <?php 
  include '../traitement/admin/register.php';?>

</body>

</html>
