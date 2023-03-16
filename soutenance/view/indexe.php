
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>soutenance</title>
  <link rel="stylesheet" type="text/css" href="../bibliotheque/sweet/sweetalert2.css">
   <?php include "../include/csslog.php"; ?>
  
 
  
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

    <?php
      // if (isset($_GET['edit'])){
      // $id=$_GET['edit'];
    ?>

  <div id="login-page">
    <div class="container">
      <form class="form-login" action="indexe.php"  method="POST">
        <h2 class="form-login-heading">Modifier Profile</h2>
        <div class="login-wrap">
          <input type="text" value="<?= $_SESSION['id_user'] ?>" name="id" Hidden>
          <input type="text" name="nom" value="<?= $_SESSION['nom_user'] ?>"  class="form-control">
          <br>
          <input type="password" name="password" class="form-control" placeholder="ancien mot de passe" required>
          <br>
          <input type="password" name="passworde" class="form-control" placeholder="nouveau mot de passe" required>
          <br>
          <button class="btn btn-theme btn-block" name="modifier"  type="submit"><i class="fa fa-lock"></i> modifier mot de passe</button>
          
          <hr>
        </div>
        
      </form>
    </div>
  </div>



  <script type="text/javascript" src="../bibliotheque/sweet/sweetalert2.min.js"></script>
  <script type="text/javascript" src="../bibliotheque/sweet/jquery.sweet-alert.init.js"></script>

  <!-- call to script -->

  
  <?php include '../include/scriptlog.php'; ?>
  <?php  //include '../traitement/admin/log.php'; ?>
  <?php  include '../traitement/admin/modif_profile.php'; ?>
</body>

</html>
