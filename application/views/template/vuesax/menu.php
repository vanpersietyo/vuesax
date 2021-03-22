<?php
/** @var CI_Controller $this */
$dark_mode = $this->session->userdata('dark_mode');
?>
<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
	<div class="header-navbar navbar-expand-sm navbar navbar-horizontal menu-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
		<div class="navbar-header">
			<ul class="nav navbar-nav flex-row">
				<li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url('');?>">
						<div class="brand-logo"></div>
						<h2 class="brand-text mb-0">Dashboard</h2>
					</a></li>
				<li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
			</ul>
		</div>
		<!-- Horizontal menu content-->
		<div class="navbar-container main-menu-content" data-menu="menu-container">
			<!-- include ../../../includes/mixins-->
			<ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">

				<li class="nav-item">
					<a href="<?php echo site_url('');?>" style="color: black !important;" class="nav-link">
						<i class="feather icon-file text-bold-500"></i>
						<span class="menu-title text-bold-500">Dashboard</span>
					</a>
				</li>

			</ul>
		</div>
	</div>
</div>
<!-- END: Main Menu-->
<div class="app-content content">
	<div class="content-wrapper">
