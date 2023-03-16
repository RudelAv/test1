<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="../bibliotheque/img/favicon.png" rel="icon">
  <link href="../bibliotheque/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../bibliotheque/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../bibliotheque/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../bibliotheque/css/style.css" rel="stylesheet">
  <link href="../bibliotheque/css/style-responsive.css" rel="stylesheet">
  <link href="../bibliotheque/css/table-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>LAVA<span>TAR</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="../bibliotheque/img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="../bibliotheque/img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="../bibliotheque/img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="../bibliotheque/img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../traitement/admin/logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="3f04c5fb1c114cd182522f20bd1a5416.jpg" class="img-circle" width="80"></a></p>
        <?php if(isset($_SESSION['nom_user'])): ?>
          <h5 class="centered"><?= $_SESSION['prenom_user'] ?></h5>
        <?php endif  ?>
          <li class="mt">
            <a href="dasboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          
         
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
             
              <li><a href="vente.php">Invoice</a></li>
              
            </ul>
          </li>
        <?php if(isset($_SESSION['type_user'])): ?>
        <?php if ($_SESSION['type_user'] == 'boss'): ?>
          <li class="sub-menu">
            <a class="" href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Personnel</span>
              </a>
            <ul class="sub">
              
              <li class=""><a href="employer.php">Nouvel employer</a></li>
              <li><a href="list_employer.php">Liste des employes</a></li>

            </ul>
          </li>
        <?php endif ?>
        <?php endif ?>
          <li class="sub-menu">
            <a class="" href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Menus</span>
              </a>
            <ul class="sub">
              
              <li class=""><a href="menu_jour.php">Menu du jour</a></li>
              <li class=""><a href="ajout_menu.php">Ajouter menu</a></li>
              

            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Commande</span>
              </a>
            <ul class="sub">
        
              <li class="active"><a href="list_commande.php">Liste des commandes</a></li>

            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Clients</span>
              </a>
            <ul class="sub">
              <li><a href="list_client.php">Liste des clients</a></li>
              <li class=""><a href="ajout_client.php">Nouveau Client</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Liste des commandes</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Liste des Commandes</h4>
              <section id="no-more-tables">
                <table class="table table-bordered table-striped table-condensed cf">
                  <thead class="cf">
                    <tr>
                      <th>N Table</th>
                      <th>Nom client</th>
                      <th class="numeric">Prix</th>
                      <th class="numeric">Quantite</th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td data-title="Code">AAC</td>
                      <td data-title="Company">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                      <td class="numeric" data-title="Price">$1.38</td>
                      <td class="numeric" data-title="Change">-0.01</td>
                    </tr>

                    <tr>
                      <td data-title="Code">AAD</td>
                      <td data-title="Company">ARDENT LEISURE GROUP</td>
                      <td class="numeric" data-title="Price">$1.15</td>
                      <td class="numeric" data-title="Change"> +0.02</td>
                    </tr>

                    <tr>
                      <td data-title="Code">AAX</td>
                      <td data-title="Company">AUSENCO LIMITED</td>
                      <td class="numeric" data-title="Price">$4.00</td>
                      <td class="numeric" data-title="Change">-0.04</td>
                    </tr>

                    <tr>
                      <td data-title="Code">ABC</td>
                      <td data-title="Company">ADELAIDE BRIGHTON LIMITED</td>
                      <td class="numeric" data-title="Price">$3.00</td>
                      <td class="numeric" data-title="Change"> +0.06</td>
                    <tr>
                      <td data-title="Code">ABP</td>
                      <td data-title="Company">ABACUS PROPERTY GROUP</td>
                      <td class="numeric" data-title="Price">$1.91</td>
                      <td class="numeric" data-title="Change">0.00</td>
                    </tr>

                    <tr>
                      <td data-title="Code">ABY</td>
                      <td data-title="Company">ADITYA BIRLA MINERALS LIMITED</td>
                      <td class="numeric" data-title="Price">$0.77</td>
                      <td class="numeric" data-title="Change"> +0.02</td>
                    </tr>

                    <tr>
                      <td data-title="Code">ACR</td>
                      <td data-title="Company">ACRUX LIMITED</td>
                      <td class="numeric" data-title="Price">$3.71</td>
                      <td class="numeric" data-title="Change"> +0.01</td>
                    </tr>

                    <tr>
                      <td data-title="Code">ADU</td>
                      <td data-title="Company">ADAMUS RESOURCES LIMITED</td>
                      <td class="numeric" data-title="Price">$0.72</td>
                      <td class="numeric" data-title="Change">0.00</td>
                    </tr>

                    <tr>
                      <td data-title="Code">AGG</td>
                      <td data-title="Company">ANGLOGOLD ASHANTI LIMITED</td>
                      <td class="numeric" data-title="Price">$7.81</td>
                      <td class="numeric" data-title="Change">-0.22</td>
                    </tr>

                    <tr>
                      <td data-title="Code">AGK</td>
                      <td data-title="Company">AGL ENERGY LIMITED</td>
                      <td class="numeric" data-title="Price">$13.82</td>
                      <td class="numeric" data-title="Change"> +0.02</td>
                    </tr>

                    <tr>
                      <td data-title="Code">AGO</td>
                      <td data-title="Company">ATLAS IRON LIMITED</td>
                      <td class="numeric" data-title="Price">$3.17</td>
                      <td class="numeric" data-title="Change">-0.02</td>
                    </tr>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
         <p>
          &copy; Created by <strong>Kenfack Rudel</strong>
        </p>
        <div class="credits">
    
          Student to ISIAT
        </div>
        <a href="responsive_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../bibliotheque/lib/jquery/jquery.min.js"></script>
  <script src="../bibliotheque/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="../bibliotheque/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../bibliotheque/lib/jquery.scrollTo.min.js"></script>
  <script src="../bibliotheque/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="../bibliotheque/lib/common-scripts.js"></script>
  <!--script for this page-->
</body>

</html>
