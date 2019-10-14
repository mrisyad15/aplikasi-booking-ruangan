<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>King Boking</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('asset/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('asset/vendor/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/fontastic.css'); ?>">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.default.css'); ?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/custom.css'); ?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico'); ?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.php" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>King Boking </span><strong>Room Meet</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="<?php echo base_url('asset/img/avatar-1.jpg'); ?>" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="<?php echo base_url('asset/img/avatar-2.jpg'); ?>" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                        <div class="msg-profile"> <img src="<?php echo base_url('asset/img/avatar-3.jpg'); ?>" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                  </ul>
                </li>
               </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="<?php echo base_url('asset/img/favicon.ico'); ?>" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Risyad</h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li class="active"><a href="<?php echo base_url('index.php/welcome'); ?>"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="<?php echo base_url('index.php/admin/user'); ?>"> <i class="icon-user"></i>Name </a></li>
                    <!-- <li><a href="<?php echo base_url('index.php/admin/unit'); ?>"> <i class="icon-padnote"></i>Divisi </a></li> -->
                    <li><a href="<?php echo base_url('index.php/admin/ruang'); ?>"> <i class="icon-bill"></i>Room</a></li>
                    <li><a href="<?php echo base_url('index.php/admin/booking'); ?>"> <i class="icon-bill"></i>Daftar Booking</a></li>
          </ul>
		  </nav>
			<div class="content-inner">
			  <!-- Page Header-->
			  <header class="page-header">
				<div class="container-fluid">
				  <h2 class="no-margin-bottom">Tambah User</h2>
				</div>
			  </header>
			  <!-- Breadcrumb-->
			  <div class="breadcrumb-holder container-fluid">
				<ul class="breadcrumb">
				  <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/admin/user'); ?>">Name</a></li>
				  <li class="breadcrumb-item active">Tambah User</li>
				</ul>
			  </div>
			  <!-- Forms Section-->
			  <section class="forms">
				<div class="container-fluid">
				  <div class="row">
					<!-- Basic Form-->
						<div class="col-lg-12">
						  <div class="card">
							<div class="card-close">
							  <div class="dropdown">
								<button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
								<div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
							  </div>
							</div>
							<div class="card-header d-flex align-items-center">
							  <h3 class="h4">Basic Form</h3>
							</div>
							<div class="card-body">
							  <p>Lorem ipsum dolor sit amet consectetur.</p>
							  <form action="<?php echo site_url('admin/add_user/')?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
								  <label class="form-control-label">ID User</label>
								  <input type="text" name="id_user"  class="form-control" readonly="">
								</div>

								<div class="form-group">
								  <label class="form-control-label">Nama User</label>
								  <input type="text" name="nm_user" class="form-control">
								</div>

								<div class="form-group">
								  <label class="form-control-label">Telepon</label>
								  <input type="text" name="telp" class="form-control">
								</div>

								<div class="form-group">
								  <label class="form-control-label">Alamat</label>
								  <input type="text" name="alamat" class="form-control">
								</div>


								<div class="form-group">
								  <button type="submit" name="save" class="btn btn-primary btn-lg ">Simpan</button>
								  <button type="reset" class="btn btn-danger btn-lg ">Batal</button>
								</div>
							  </form>
							</div>
						  </div>
						</div>
	  <!-- Page Footer-->
	  <footer class="main-footer">
		<div class="container-fluid">
		  <div class="row">
			<div class="col-sm-6">
			  <p>Your company &copy; 2017-2019 Muhammad Risyad</p>
			</div>
			<div class="col-sm-6 text-right">
			  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
			  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
			</div>
		  </div>
		</div>
	  </footer>
	</div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url('asset/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/vendor/popper.js/umd/popper.min.js'); ?>"> </script>
    <script src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/vendor/jquery.cookie/jquery.cookie.js'); ?>"> </script>
    <script src="<?php echo base_url('asset/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/vendor/jquery-validation/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/js/charts-home.js'); ?>"></script>
    <!-- Main File-->
    <script src="<?php echo base_url('asset/js/front.js'); ?>"></script>
  </body>
</html>
