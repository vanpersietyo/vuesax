<?php
/** @var string $message */
/** @var string $code */

if ($code===Conversion::ERROR_CODE_401){
	$logo 	= 'not-authorized.png';
}elseif($code===Conversion::ERROR_CODE_404){
	$logo 	= '404.png';
}elseif ($code===Conversion::ERROR_CODE_500){
	$logo 	= '500.png';
}elseif ($code===Conversion::ERROR_CODE_503){
	$logo 	= 'maintenance-2.png';
}else{
	$logo 	= 'not-authorized.png';
}
?>

<section class="row flexbox-container">
	<div class="col-xl-12 col-md-12 col-12 d-flex justify-content-center">
		<div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
			<div class="card-content">
				<div class="card-body text-center">
					<img src="<?php echo base_url('assets/vuesax/app-assets/images/pages/'.$logo)?>" class="img-fluid align-self-center" alt="branding logo">
					<h1 class="font-large-2 my-1"><?php echo $code; ?></h1>
					<p class="px-2">
						<?php echo $message; ?>
					</p>
					<button class="btn btn-success btn-lg mt-1" type="button" onclick="location.reload();"> <i class="feather icon-refresh-cw"></i> Refresh</button>
					<a class="btn btn-primary btn-lg mt-1" href="<?php echo site_url('')?>"><i class="feather icon-home"></i> Back to Home</a>
				</div>
			</div>
		</div>
	</div>
</section>
