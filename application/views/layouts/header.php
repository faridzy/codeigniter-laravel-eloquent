
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dorang Cell</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
     <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/backend.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/dist/css/skins/skin-blue.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/chosen/chosen.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/datetimepicker/jquery.datetimepicker.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <script src="<?php echo base_url() ?>assets/template/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/script/lib.js"></script>
    <script src="<?php echo base_url() ?>assets/script/core.js"></script>
    <script src="<?php echo base_url() ?>assets/script/spms.js"></script>
    <script src="<?php echo base_url() ?>assets/template/dist/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>assets/script/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/script/moment.js"></script>
    <script src="<?php echo base_url() ?>assets/plugin/chosen/chosen.jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/script/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/template/plugins/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>assets/template/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/template/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/plugins/fastclick/fastclick.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/dist/js/app.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugin/datetimepicker/jquery.datetimepicker.full.js"></script>
    <script src="<?php echo base_url() ?>assets/plugin/gauge/highcharts.js"></script>
    <script src="<?php echo base_url() ?>assets/plugin/gauge/highcharts-more.js"></script>
    <script src="<?php echo base_url() ?>assets/plugin/gauge/solid-gauge.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>assets/template/dist/js/html5shiv.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/dist/js/respond.min.js"></script>
    <![endif]-->

    <script>
        baseURL = "<?php echo base_url() ?>";
        $.widget.bridge('uibutton', $.ui.button);
    </script>
</head>
<body class="skin-blue fixed sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <a href="" class="logo">
            <span class="logo-mini"><b></b>SV</span>
            <span class="logo-lg">Dorang<b>Cell</b></span>

        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
           
                <ul class="nav navbar-nav">

                     <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url() ?>assets/img/user.jpg" class="user-image">
                            <span class="hidden-xs"><?php echo $this->session->userdata['activeUser']['name'] ;?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?php echo base_url() ?>assets/img/user.jpg" class="img-circle"
                                     alt="User Image">
                                <p>
                                	<?php echo $this->session->userdata['activeUser']['name'] ;?>                                   
                                    <small><?php echo $this->session->userdata['activeUser']['role'] ;?></small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="" class="btn btn-default btn-flat">Profil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url() ?>login/logout" class="btn btn-default btn-flat">Keluar</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url() ?>assets/img/user.jpg" class="img-circle"
                         alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $this->session->userdata['activeUser']['name'] ;?></p>
                    <i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata['activeUser']['role'] ;?>

                
                </div>
            </div>
            <?php $this->load->view('layouts/nav.php'); ?>
        </section>
    </aside>


