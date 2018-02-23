<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISAC|UA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="views/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="views/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="views/dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>AC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SISTEMA</b>AVANCE CURRICULAR</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="views/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="views/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SISTEMA AVANCE CURRICULAR
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
         <?php
        // put your code here
        $rut = 14684771;
        include('read.php');
        $datos = getIndicadores($rut);
        ?>
         <div class="row">
            <div class="col-md-6">
                <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive img-circle" src="views/dist/img/alumno.png" alt="User profile picture">

            <h3 class="profile-username text-center"><?php echo $datos["apellidos"]; ?></h3>

            <p class="text-muted text-center"><?php echo $datos["nombres"];?> </p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>RUT</b> <a class="pull-right"><?php echo $rut; ?></a>
              </li>
              <li class="list-group-item">
                <b>CARRERA</b> <a class="pull-right"><?php echo $datos["carrera"];?></a>
              </li>
              <li class="list-group-item">
                <b>PLAN</b> <a class="pull-right"><?php echo $datos["plan"];?></a>
              </li>
            </ul>

          </div>
          <!-- /.box-body -->
        </div>
              
            </div>
              
            <div class="col-md-3">
                 <!-- /.info-box -->
            <div class="info-box bg-blue">
              <span class="info-box-icon"><i class="ion-social-usd-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">GRATUIDAD</span>
                <span class="info-box-number">
                  <?php // Empieza el código php
                      $gratuidad = $datos["gratuidad"];
                      if ($gratuidad=="SI") {  // Si tiene gratuidad
                          echo("SI"); 
                  ?>
                      <div class="progress">
                          <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description">
                            100% Otorgado
                      </span>
                  <?php
                      }else {
                          echo("NO"); // 0% de gratuidad
                  ?> 
                      <div class="progress">
                          <div class="progress-bar" style="width: 0%"></div>
                      </div>
                      <span class="progress-description">
                              0% No posee
                      </span>
                  <?php
                      }
                  ?>
                </span>
             </div>
              <!-- /.info-box-content -->
             
          </div>
          <!-- /.info-box -->
                
            </div>
             <div class="col-md-3">
                 <!-- /.info-box -->
            <div class="info-box bg-blue">
              <span class="info-box-icon">%</span>

              <div class="info-box-content">
                <span class="info-box-text">AVANCE</span>
                <span class="info-box-number">
                    <?php 
                        $cantPlan = cantAsigPlan($rut);
                        if($cantPlan==0)
                        {
                            echo 0;
                    ?>
                            <div class="progress">
                                 <div class="progress-bar" style="width: 0%"></div>
                             </div>
                             <span class="progress-description">
                                   0% PROGRESO
                             </span>
                  <?php
                       }else{
                           $avance=$cantAsig/$cantPlan*100;
                            echo $avance;
                        ?> 
                            <div class="progress">
                                <?php
                                if ($avance > 0 and $avance <= 30)
                                {
                                ?>
                                  <div class="progress-bar" style="width: 30%"></div>
                                <?php
                                }elseif ($avance > 30 and $avance <= 60) 
                                {?>
                                   <div class="progress-bar" style="width: 60%"></div>
                                <?php
                                }elseif ($avance > 60 and $avance <= 99) 
                                {?>
                                   <div class="progress-bar" style="width: 90%"></div>
                                <?php
                                }
                                 ?>
                            </div>
                    <?php
                  }
                  ?> 
                </span>

              </div>
              <!-- /.info-box-content -->
             
          </div>
          <!-- /.info-box -->
                
            </div>
              
             <div class="col-md-3">
                
                    <!-- small box -->
                    <div class="small-box bg-blue">
                      <div class="inner">
                        <h3><?php echo $datos["tiempoPlanActual"];?> años</h3>
                        <p>TIEMPO EN PLAN ACTUAL</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-clock"></i>
                      </div>
                    </div>
            </div>
          
            <div class="col-md-3">
               <!-- small box -->
                    <div class="small-box bg-blue">
                      <div class="inner">
                        <h3><?php echo cantSemPlanNuevo($rut)/5;?></h3>
                        <p>TIEMPO EN REDISEÑO</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-clock"></i>
                      </div>
                    </div>
            </div>
             <div class="col-md-3">
                
                    <!-- small box -->
                    <div class="small-box bg-blue">
                      <div class="inner">
                        <h3> <?php
                                $cantAsig = cantAsigAprobadas($rut);
                                echo $cantAsig;
                            ?></h3>
                        <p>TOTAL ASIGNATURAS APROBADAS</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-connection-bars"></i>
                      </div>
                    </div>
            </div>
          
            <div class="col-md-3">
               <!-- small box -->
                    <div class="small-box bg-blue">
                      <div class="inner">
                        <h3><?php
                                $cantPlan = cantAsigPlan($rut);
                                echo $cantPlan;
                            ?></h3>
                        <p>TOTAL ASIGNATURAS PLAN</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-connection-bars"></i>
                      </div>
                    </div>
            </div>
        </div> <!-- ./row -->
        
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-battery-half"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">NUMERO DE ASIG 1 A 6</span>
              <span class="info-box-text">SEM PLAN ACTUAL</span>
              <span class="info-box-number"><?php echo $datos["a1a6"];?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-battery-three-quarters"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">NUMERO DE ASIG 7 A 12</span>
              <span class="info-box-text">SEM PLAN ACTUAL</span>
              <span class="info-box-number"><?php echo $datos["a7a12"];?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-check-square"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CUARTA OPORTUNIDAD</span>
              <span class="info-box-text">UTILIZADA</span>
              <span class="info-box-number"><?php echo $datos["utilizoCuarta"];?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-check-square-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">ASIG. 4ta OPORTUNIDAD</span>
              <span class="info-box-text">2do SEM 2017</span>
              <span class="info-box-number"><?php echo $datos["segSemCuarta"];?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        </div>
        
       
        
        <div class="row">
            <section class="col-md-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#revenue-chart" data-toggle="tab" aria-expanded="TRUE">PLAN ACTUAL</a></li>
              <li><a href="#sales-chart" data-toggle="tab" aria-expanded="false">REDISEÑO</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Malla Carrera</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 500px;"> 
                  <div class="row">
                      <div class="col-md-1">
                          <div class="box box-warning" style="font-size: 12px;">introduccion asig1</div>
                          <div class="box box-warning">introduccion asig2</div>
                          <div class="box box-warning">introduccion asig3</div>

                      </div>
                      <div class="col-md-1">
                          <div class="box box-warning">introduccion asig4</div>
                          <div class="box box-warning">introduccion asig5</div>
                          <div class="box box-warning">introduccion asig6</div>

                      </div>
                       <div class="col-md-1">
                          <div class="box box-warning">introduccion asig4</div>
                          <div class="box box-warning">introduccion asig5</div>
                          <div class="box box-warning">introduccion asig6</div>

                      </div>
                       <div class="col-md-1">
                          <div class="box box-warning">introduccion asig4</div>
                          <div class="box box-warning">introduccion asig5</div>
                          <div class="box box-warning">introduccion asig6</div>

                      </div>
                       <div class="col-md-1">
                          <div class="box box-warning">introduccion asig4</div>
                          <div class="box box-warning">introduccion asig5</div>
                          <div class="box box-warning">introduccion asig6</div>

                      </div>
                  </div> <!-- /.row -->
                  <span class="info-box-text">NUMERO DE ASIG 1 A 6</span>
                    <span class="info-box-text">SEM PLAN ACTUAL</span>
                    <span class="info-box-number"><?php echo $datos["a1a6"];?></span>
              </div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <span class="info-box-text">NUMERO DE ASIG 7 A 12</span>
                    <span class="info-box-text">SEM PLAN ACTUAL</span>
                    <span class="info-box-number"><?php echo $datos["a7a12"];?></span>
              </div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
            
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="views/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="views/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>