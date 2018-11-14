<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pelayan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php base_url();?>/../Impal_Restoran/Asset/images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php base_url();?>/../Impal_Restoran/Asset/css/min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>

<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="<?php base_url();?>/../Impal_Restoran/CHome">
							<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/icons/logo.png" alt="IMG-LOGO" data-logofixed="images/icons/logo2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu">
								<li>
									<a href="<?php base_url();?>/../Impal_Restoran/CHome">Home</a>
								</li>

								<li>
									<a href="<?php base_url();?>/../Impal_Restoran/CMenu">Pesanan</a>
								</li>

								<li>
									<a href="reservation.html">Profile</a>
								</li>

								<li>
									<a href="gallery.html">Gaji</a>
								</li>

							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="#">
							<i class="fa fa-tripadvisor" aria-hidden="true"></i>
						</a>
						<a href="#">
							<i class="fa fa-facebook m-l-21" aria-hidden="true"></i>
						</a>
						<a href="#">
							<i class="fa fa-twitter m-l-21" aria-hidden="true"></i>
						</a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="<?php base_url();?>/../Impal_Restoran/CHome" class="txt19">Home</a>
			</li>

			<li class="t-center m-b-13">
				<a href="<?php base_url();?>/../Impal_Restoran/CMenu" class="txt19">Menu</a>
			</li>


			<li class="t-center">
				<!-- Button3 -->
				<a href="<?php base_url();?>/../Impal_Restoran/CKehadiran" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Presensi
				</a>
			</li>
		</ul>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>

			<!-- Gallery -->
			<div class="wrap-gallery-sidebar flex-w">
				<a class="item-gallery-sidebar wrap-pic-w" href="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-01.jpg" data-lightbox="gallery-footer">
					<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-thumb-01.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-02.jpg" data-lightbox="gallery-footer">
					<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-thumb-02.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-03.jpg" data-lightbox="gallery-footer">
					<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-thumb-03.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-05.jpg" data-lightbox="gallery-footer">
					<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-thumb-05.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-06.jpg" data-lightbox="gallery-footer">
					<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-thumb-06.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-07.jpg" data-lightbox="gallery-footer">
					<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-thumb-07.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-09.jpg" data-lightbox="gallery-footer">
					<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-thumb-09.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-10.jpg" data-lightbox="gallery-footer">
					<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-thumb-10.jpg" alt="GALLERY">
				</a>

				<a class="item-gallery-sidebar wrap-pic-w" href="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-11.jpg" data-lightbox="gallery-footer">
					<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/photo-gallery-thumb-11.jpg" alt="GALLERY">
				</a>
			</div>
		</div>
	</aside>
