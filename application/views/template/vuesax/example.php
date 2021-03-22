<?php
/** @var CI_Controller $this */
$dark_mode = $this->session->userdata('dark_mode');
?>

<div class="content-header row">
	<div class="content-header-left col-md-9 col-12 mb-2">
		<div class="row breadcrumbs-top">
			<div class="col-12">
				<h2 class="content-header-title float-left mb-0">Basic Card</h2>
				<div class="breadcrumb-wrapper col-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Card</a>
						</li>
						<li class="breadcrumb-item active">Basic Card
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
		<div class="form-group breadcrum-right">
			<div class="dropdown">
				<button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
				<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
			</div>
		</div>
	</div>
</div>
<div class="content-body">

	<div class="row">
		<div class="col-md-12 text-center">
			tes
		</div>
	</div>

	<div class="alert alert-primary">
		<i class="feather icon-info mr-1"></i> Click <a href="https://getbootstrap.com/docs/4.3/components/card/" target="_blank">here</a> for more info
		on
		cards.
	</div>
	<!-- Content types section start -->
	<section id="content-types">
		<div class="row match-height">
			<div class="col-xl-4 col-md-6">
				<div class="card">
					<div class="card-header mb-1">
						<h4 class="card-title">Card With Header And Footer</h4>
					</div>
					<div class="card-content">
						<img class="img-fluid" src="../../../app-assets/images/slider/04.jpg" alt="Card image cap">
						<div class="card-body">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of
								the card's content.</p>
						</div>
					</div>
					<div class="card-footer text-muted">
						<span class="float-left">3 hours ago</span>
						<span class="float-right">
								<a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
							</span>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="card-body">
							<h4 class="card-title">List Group</h4>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of
								the card's content.</p>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">
								<span class="badge badge-pill bg-primary float-right">4</span>
								Cras justo odio
							</li>
							<li class="list-group-item">
								<span class="badge badge-pill bg-info float-right">2</span>
								Dapibus ac facilisis in
							</li>
							<li class="list-group-item">
								<span class="badge badge-pill bg-warning float-right">1</span>
								Morbi leo risus
							</li>
							<li class="list-group-item">
								<span class="badge badge-pill bg-success float-right">3</span>
								Porta ac consectetur ac
							</li>
							<li class="list-group-item">
								<span class="badge badge-pill bg-danger float-right">8</span>
								Vestibulum at eros
							</li>
							<li class="list-group-item">
								<span class="badge badge-pill bg-success float-right">4</span>
								Lorem ipsum dolor sit amet.
							</li>
						</ul>
						<div class="card-body">
							<a href="#" class="card-link">Card link</a>
							<a href="#" class="card-link">Another link</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-12 col-sm-12">
				<div class="card">
					<div class="card-content">
						<div class="card-body">
							<h4 class="card-title">Carousel</h4>
							<h6 class="card-subtitle text-muted">Support card subtitle</h6>
						</div>
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<img src="../../../app-assets/images/slider/01.jpg" class="d-block w-100" alt="First slide">
								</div>
								<div class="carousel-item">
									<img src="../../../app-assets/images/slider/02.jpg" class="d-block w-100" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img src="../../../app-assets/images/slider/03.jpg" class="d-block w-100" alt="Third slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="fa fa-angle-left icon-prev" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
								<span class="fa fa-angle-right icon-next" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
						<div class="card-body">
							<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt assumenda mollitia
								officia dolorum eius quasi.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>
