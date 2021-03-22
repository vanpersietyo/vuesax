<?php
/** @var CI_Controller $this */
$dark_mode = $this->session->userdata('dark_mode');
?>
<style type="text/css">
	.horizontal-menu .header-navbar.navbar-brand-center .navbar-header {
		left: 48% !important;
		margin-left: -65px;

	.header-navbar .navbar-container .dropdown-menu-media {
		width: 16rem;
	}
</style>
<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
	<div class="navbar-header d-xl-block d-none">
		<ul class="nav navbar-nav flex-row">
			<li class="nav-item">
				<a class="navbar-brand text-center" >
					<img src="<?php echo base_url('assets/vuesax/');?>svg/logo_pemkot.svg" alt="Qloud Logo" width="175">
				</a>
			</li>
		</ul>
	</div>
	<div class="navbar-wrapper">
		<div class="navbar-container content">
			<div class="navbar-collapse" id="navbar-mobile">
				<div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
					<div class="custom-control custom-switch custom-control-inline">
						<input type="checkbox" class="custom-control-input" id="customSwitch1" onclick="cek()"
							<?php if($dark_mode){echo "checked";}?>
						>
						<label class="custom-control-label" for="customSwitch1">
						</label>
						<span class="switch-label">Night Mode</span>
					</div>
				</div>
				<ul class="nav navbar-nav float-right">
<!--					<li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>-->
<!--					<li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>-->
<!--						<div class="search-input">-->
<!--							<div class="search-input-icon"><i class="feather icon-search primary"></i></div>-->
<!--							<input class="input" type="text" placeholder="Explore Qloud..." tabindex="-1" data-search="template-list">-->
<!--							<div class="search-input-close"><i class="feather icon-x"></i></div>-->
<!--							<ul class="search-list"></ul>-->
<!--						</div>-->
<!--					</li>-->
					<li class="dropdown dropdown-notification nav-item" >
						<a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
							<span class="badge badge-pill badge-primary badge-lg">TAHUN : <?php echo TAHUN;?> <i class="fa fa-angle-down"></i></span></a>
						<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right" style="width: 11rem !important">
							<li class="scrollable-container media-list">
								<?php
									$curr_date = date('Y');
									for ($x = 2019; $x <= $curr_date; $x++) {?>
										<a class="d-flex justify-content-between" href="<?php echo URL_AKSES.$x.'/'.$this->uri->uri_string();?>">
											<div class="media d-flex align-items-start">
												<div class="media-left"><i class="fa fa-clock-o font-medium-5 primary"></i></div>
												<div class="media-body">
													<h4 class="success media-heading red darken-1"><?php echo $x ?></h4>
												</div>
											</div>
										</a>
									<?php } ?>

							</li>
						</ul>

				</ul>
			</div>
		</div>
	</div>
</nav>
<!-- END: Header-->
