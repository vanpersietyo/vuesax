<?php
/** @var CI_Controller $this */
$dark_mode = $this->session->userdata('dark_mode');
?>
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
	<div class="navbar-header">
		<ul class="nav navbar-nav flex-row">
			<li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo site_url('') ?>">
					<div s class="brand-logo"></div>
					<h2 class="brand-text mb-0">E-Payment</h2>
				</a></li>
			<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
		</ul>
	</div>
	<div class="shadow-bottom"></div>
	<div class="main-menu-content">
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
			<li class=" nav-item"><a href="<?php echo site_url('')?>"><i class="feather icon-home"></i>Dashboard</a></li>

			<li class="nav-item">
				<a href="<?php echo site_url('estimasi-saldo');?>" style="color: black !important;">
					<i class="feather icon-file text-bold-500"></i>
					<span class="menu-title text-bold-500">SALDO RKUD</span>
				</a>
			</li>

			<li class=" nav-item"><a href="<?php echo site_url('bud/spd')?>"><i class="feather icon-file"></i>SPD</a>
			</li>

			<li class=" nav-item"><a href="<?php echo site_url('')?>"><i class="feather icon-file"></i>SPP</a>
				<ul class="menu-content">
					<li><a href="<?php echo site_url('bud/spm/daftar_spm_gu')?>"><i class="feather icon-circle"></i>Daftar SPP GU</a></li>
				</ul>
			</li>

			<li class=" nav-item"><a href="<?php echo site_url('')?>"><i class="feather icon-file"></i>SP2D</a>
				<ul class="menu-content">
					<li><a href="<?php echo site_url('bud/sp2d/daftar_register')?>"><i class="feather icon-circle"></i>Register SP2D</a></li>
				</ul>
			</li>

			<li class=" nav-item"><a href="<?php echo site_url('')?>"><i class="feather icon-file"></i>LPJTU</a>
				<ul class="menu-content">
					<li><a href="<?php echo site_url('bud/lpjtu')?>"><i class="feather icon-circle"></i>List TU dan LPJTU</a></li>
				</ul>
			</li>

			<li class=" nav-item"><a href="<?php echo site_url('')?>"><i class="feather icon-file"></i>STS</a>
				<ul class="menu-content">
					<li><a href="<?php echo site_url('bud/sts/daftar_sts_up');?>"><i class="feather icon-circle"></i>STS UP</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
	<!-- BEGIN: Header-->
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
		<div class="navbar-wrapper">
			<div class="navbar-container content">
				<div class="navbar-collapse" id="navbar-mobile">
					<div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
						<ul class="nav navbar-nav">
							<li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- END: Header-->

	<div class="content-wrapper">
