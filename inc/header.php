<?php
include("conn/connection.php"); ?>

<head>
	<link rel="canonical" href="https://keenthemes.com/metronic">
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
	<!--end::Fonts-->
	<!--begin::Page Custom Styles(used by this page)-->
	<link href="assets/css/pages/login/classic/login-3.css" rel="stylesheet" type="text/css">
	<!--end::Page Custom Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
	<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/flaticon/flaticon.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed page-loading">
	<header>
		<div class="header-top d-flex justify-content-between align-items-center">
			<div class="header-left">
				<img class="logo" src="https://opscargo.com/wp-content/uploads/2017/09/admin-ajax.png" alt="logo" />
			</div>
			<ul class="header-right h-100 m-0 d-flex align-items-center flex-row">
				<li class="search hidden-mobile">
					<form action="" enctype="multipart/form-data" method="GET">
						<input name="TRACKNUM" type="text" class="buscador" value=""
							placeholder="Tracking number / guia" id="buscar">
						<input class="boton blue" type="submit">
						<input type="hidden" name="OPTIONS" value="RASTREAR" readonly="">
						<input type="hidden" name="MENU" value="" readonly="">
						<input type="hidden" name="MENU1" value="" readonly="">
						<input type="hidden" name="IDMENU" value="" readonly="">

						<input type="hidden" name="AX" value="" readonly="">
					</form>
				</li>
				<li class="hidden-mobile">
					<a class="flaticon-globe41"
						href="?OPTIONS=5&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Clientes&amp;IDMENU=5">Cliente</a>
					<ul class="m-0">
						<li class="search">
							<form action="" autocomplete="off">
								<input placeholder="Buscar cliente" type="text" name="buscar" value="">
								<input class="boton blue" type="submit">
								<input type="hidden" name="OPTIONS" value="5" readonly="">
								<input type="hidden" name="MENU" value="Clientes" readonly="">
								<input type="hidden" name="MENU1" value="5" readonly="">
								<input type="hidden" name="IDS" value="40" readonly="">
							</form>

						</li>
					</ul>
				</li>
				<li class="clock hidden-mobile">
					<div>
						<span id="time">04:22</span>
						<span id="AM_PM">AM</span>
						<span id="date">7 / 3 / 2023</span>
					</div>

				</li>
				<li class="user">
					<a href="#">
						<span class="img-user">
							<img src="assets/images/user.png" alt="">
						</span>

						<div class="info-user">
							<span class="user-company hidden-mobile">OPS CARGO Y LOGISTICS</span>
							<span class="user-name hidden-mobile">ESTEBAN </span>
						</div>
					</a>
					<ul>

						<li><a href="?OPTIONS=MICUENTA&amp;MENU=Mi Perfil">Cambiar Clave</a> </li>
						<li><a href="http://webmail.opscargo.com.do" target="_blank">Webmail</a></li>




						<li><a href="?OPTIONS=AYUDA&amp;MENU=Solicitar Ayuda">Solicitar Ayuda</a> </li>
						<li><a href="?OPTIONS=DESCARGAR&amp;MENU=Solicitar Ayuda">Programas</a> </li>

						<li class="user-salir-perfil">
							<span class="rol">Rol: SysAdmin </span>
							<div class="buttos">
								<a class="boton blue" href="?OPTIONS=MICUENTA&amp;MENU=Mi Perfil">Mi perfil</a>
								<a href="logout.php" class="boton red">Salir</a>
							</div>
						</li>
					</ul>
				</li>

			</ul>
		</div>
	</header>