<?php
/** @var CI_Controller $this */
$dark_mode = $this->session->userdata('dark_mode');
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Dashboard E-Payment Surabaya">
	<meta name="keywords" content="Dashboard E-Payment Surabaya">
	<meta name="author" content="TIPK BPKPD">

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/favicon-16x16.png">
	<link rel="manifest" href="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo base_url('assets/vuesax/');?>app-assets/images/logo/pemkot/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<title><?php echo isset($title) ? $title : 'DASHBOARD E-PAYMENT SURABAYA'?></title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/vendors.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/charts/apexcharts.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/extensions/tether-theme-arrows.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/extensions/tether.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/extensions/shepherd-theme-default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/hover-master/css/hover-min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- END: Vendor CSS-->

	<!-- BEGIN: Theme CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/bootstrap-extended.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/colors.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/components.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/themes/dark-layout.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/themes/semi-dark-layout.css">

	<!-- BEGIN: Page CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/core/menu/menu-types/horizontal-menu.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/core/colors/palette-gradient.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/pages/dashboard-analytics.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/pages/card-analytics.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/plugins/tour/tour.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<!--	<script src="https://unpkg.com/scrollreveal"></script>-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/plugins/tour/tour.min.css">


	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/tables/datatable/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/forms/select/select2.min.css">
<!--	<link rel="stylesheet" type="text/css" href="--><?php //echo base_url('assets/vuesax/');?><!--app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/pickers/pickadate/pickadate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/pages/data-list-view.css">



	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/tables/ag-grid/ag-grid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/tables/ag-grid/ag-theme-material.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/css/pages/aggrid.min.css">
	<!-- END: Page CSS-->
	<!-- END: Page CSS-->

	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/css/extensions/sweetalert2.min.css">
	<!-- END: Custom CSS-->

	<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/vendors.min.js"></script>

</head>
<!-- END: Head-->
<body class="horizontal-layout horizontal-menu 2-columns navbar-static footer-static  <?php if($dark_mode){echo "dark-layout";}?>" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
