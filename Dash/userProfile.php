<?php
	include 'connection.php';

    $id  = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id_user = '$id'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
	
	<!-- Style css -->
    <link href="css/style.css" rel="stylesheet">
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">Fillow.</h2>
					<span class="brand-sub-title">Saas Admin Dashboard</span>
				</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item d-flex align-items-center">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li>
							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="images/user.jpg" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
										<span class="ms-2">Inbox </span>
									</a>
									<a href="page-error-404.html" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="index-2.html">Dashboard</a></li>
							<li><a href="#">Project</a></li>
							<li><a href="#">Contacts</a></li>
							<li><a href="#">Kanban</a></li>
							<li><a href="#">Calendar</a></li>
							<li><a href="#">Messages</a></li>	
						</ul>

                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="formUsers.php">User Form</a></li>
                            <li><a href="formMateri.php">Materi Form</a></li>
                            <li><a href="#">Form2</a></li>
                            <li><a href="#">Form5</a></li>
                            <li><a href="#">Form4</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-table"></i>
							<span class="nav-text">Data</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="User.php">User</a></li>
                            <li><a href="Materi.php">Materi</a></li>
                        </ul>
                    </li>

				<div class="side-bar-profile">
					<div class="d-flex align-items-center justify-content-between mb-3">
						<div class="side-bar-profile-img">
							<img src="images/user.jpg" alt="">
						</div>
						<div class="profile-info1">
							<h4 class="fs-18 font-w500">Soeng Souy</h4>
							<span>example@mail.com</span>
						</div>
						<div class="profile-button">
							<i class="fas fa-caret-down scale5 text-light"></i>
						</div>
					</div>	
					<div class="d-flex justify-content-between mb-2 progress-info">
						<span class="fs-12"><i class="fas fa-star text-orange me-2"></i>Task Progress</span>
						<span class="fs-12">20/45</span>
					</div>
					<div class="progress default-progress">
						<div class="progress-bar bg-gradientf progress-animated" style="width: 45%; height:10px;" role="progressbar">
							<span class="sr-only">45% Complete</span>
						</div>
					</div>
				</div>
				
				<div class="copyright">
					<p><strong>Fillow Saas Admin</strong> © 2021 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
				</div>
			</div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)"><?php echo $data['id_user'] ?></a></li>
					</ol>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $data['name'] ?></h4>
                            </div>
                            <div class="card-body">
                                <div style="display:flex; justify-content: space-around ; align-items:center ; width: 100%;">
                                <img src="<?php echo $data['user_img'] ?>" style="width: 400px;"></img>
                                <div style="width: 400px;">
                                    <div>
                                    <h3>id : <?php echo $data['id_user'] ?></h3>
                                    <h3>Name : <?php echo $data['name'] ?></h3>
                                    <h3>Birth : <?php echo $data['birth'] ?></h3>
                                    <h3>Password : <?php echo $data['password'] ?></h3>
                                    <h3>Phone : <?php echo $data['phone'] ?></h3>
                                    <h3>Email : <?php echo $data['email'] ?></h3>
                                    </div>
									<a type="submit" class="btn btn-primary mb-2" style="padding: 5px 25px; font-size: 14pt;top:40px; left: 120px; position:relative; margin-right:20px;">Edit</a>
                                    <a type="submit" class="btn btn-primary mb-2" style="padding: 5px 25px; font-size: 14pt;top:40px; left: 120px; position:relative;">Go Back</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		


		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		jQuery(document).ready(function(){
			setTimeout(function(){
				dlabSettingsOptions.version = 'light';
				new dlabSettings(dlabSettingsOptions);
			},1500)
		});
		
	</script>

</body>
</html>