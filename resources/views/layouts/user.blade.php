<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siak | Dashboard</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/css/all.min.css">

	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">

	<link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">

	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.css">
	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__shake" src="{{ asset('logo.jpg') }}" alt="AdminLTELogo" height="60" width="60">
		</div>

		<nav class="main-header navbar navbar-expand navbar-white navbar-light">

			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="{{ route('dashboard') }}" class="nav-link">Home</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="fas fa-search"></i>
					</a>
					<div class="navbar-search-block">
						<form class="form-inline">
							<div class="input-group input-group-sm">
								<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
								<div class="input-group-append">
									<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<button class="btn btn-navbar" type="button" data-widget="navbar-search">
										<i class="fas fa-times"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li>
			</ul>
		</nav>


		<aside class="main-sidebar sidebar-dark-primary elevation-4">

			<a href="index3.html" class="brand-link">
				<img src="{{ asset('logo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Siak</span>
			</a>

			<div class="sidebar">

				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">{{ auth()->user()->name }}</a>
					</div>
				</div>

				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>

				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item">
							<a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
								<i class="nav-icon fas fa-file"></i>
								<p>Home</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('academic.index') }}" class="nav-link {{ request()->routeIs('academic.index') ? 'active' : '' }}">
								<i class="nav-icon fas fa-file"></i>
								<p>Akademik</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('payment.index') }}" class="nav-link {{ request()->routeIs('payment.index') ? 'active' : '' }}">
								<i class="nav-icon fas fa-file"></i>
								<p>Pembayaran UKT/SPP</p>
							</a>
						</li>
						<li class="nav-item {{ request()->routeIs(['profile.index', 'change-password.index']) ? 'menu-open' : '' }}">
							<a href="#" class="nav-link {{ request()->routeIs(['profile.index', 'change-password.index']) ? 'active' : '' }}">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Setting <i class="right fas fa-angle-left"></i></p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="{{ route('profile.index') }}" class="nav-link {{ request()->routeIs('profile.index') ? 'active' : '' }}">
										<i class="far fa-circle nav-icon"></i>
										<p>Profil</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="{{ route('change-password.index') }}" class="nav-link {{ request()->routeIs('change-password.index') ? 'active' : '' }}">
										<i class="far fa-circle nav-icon"></i>
										<p>Ubah Password</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="{{ route('logout') }}" class="nav-link"
                                        onclick="
                                            event.preventDefault();
                                            document.getElementById('logout-form').submit();
                                        ">
								<i class="nav-icon fas fa-sign-out-alt"></i>
								<p>Logout</p>
							</a>
                            <form id="logout-form" action="{{ route("logout") }}" method="POST" class="d-none">
                                @csrf
                            </form>
						</li>
					</ul>
				</nav>

			</div>

		</aside>

		@yield("content")

		<footer class="main-footer">
			<strong>Copyright &copy; 2024 <a href="https://adminlte.io">Siak</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 1.0.0
			</div>
		</footer>

		<aside class="control-sidebar control-sidebar-dark">

		</aside>

	</div>


	<script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>

	<script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>

	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>

	<script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>

	<script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>

	<script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

	<script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>

	<script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
	<script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>

	<script src="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

	<script src="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.js"></script>

	<script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

	<script src="https://adminlte.io/themes/v3/dist/js/adminlte.js?v=3.2.0"></script>

	<script src="https://adminlte.io/themes/v3/dist/js/pages/dashboard.js"></script>

	<script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
	<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
	<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
	<script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

	@yield("script")
</body>
</html>