<?php $this->load->view('error_custom/assets/css');?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
            </div>
            <div class="content-body"><section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 p-0">
                            <div class="card-header bg-transparent border-0">
                                <h3 class="text-uppercase text-center">Error</h3>
                                <h2 class="error-code text-center mb-2"><?php if(isset($code)){ echo $code;}else{ echo '404';}?></h2>
                                <h3 class="text-uppercase text-center"><?php if(isset($message)){ echo $message;}else{ echo 'Page Not Found !';}?></h3>

                            </div>
                            <div class="card-content">
                                <div class="row py-2">
                                    <div class="col-12 col-sm-6 col-md-6 mb-1">
                                        <a href="<?php echo site_url('')?>" class="btn btn-primary btn-block"><i class="ft-home"></i> Home</a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 mb-1">
                                        <a href="javascript:void(0)" onclick="history.go(-1)" class="btn btn-danger btn-block"><i class="ft-arrow-left"></i>  Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php $this->load->view('error_custom/assets/js');?>