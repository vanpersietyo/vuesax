</div>
</div>


<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-dark">
	<p class="clearfix blue-grey darken-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; <?php echo TAHUN;?> <a class="text-bold-800 grey darken-2" href="https://bud.surabaya.go.id" target="_blank">TIPK,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
		<button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
	</p>
</footer>
<!-- END: Footer-->

<!-- BEGIN: Vendor JS-->
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/extensions/dropzone.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>

<!--<script src="--><?php //echo base_url('assets/vuesax/');?><!--app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>-->
<!--<script src="--><?php //echo base_url('assets/vuesax/');?><!--app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>-->
<!--<script src="--><?php //echo base_url('assets/vuesax/');?><!--app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>-->
<!--<script src="--><?php //echo base_url('assets/vuesax/');?><!--app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>-->
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/buttons.colVis.min.js"></script>
<!--<script src="--><?php //echo base_url('assets/vuesax/');?><!--app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>-->
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/dataTables.colVis.js"></script>

<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>



<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js"></script>

<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>

<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/js/scripts/forms/select/form-select2.js"></script>

<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/extensions/sweetalert2.all.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/vendors/js/extensions/shepherd.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/js/core/app-menu.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/js/core/app.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/js/scripts/components.js"></script>

<script src="<?php echo base_url('assets/vuesax/');?>app-assets/js/scripts/customizer.min.js"></script>
<script src="<?php echo base_url('assets/vuesax/');?>app-assets/js/scripts/footer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!--<script src="--><?php //echo base_url('assets/vuesax/');?><!--app-assets/js/scripts/pages/dashboard-analytics.js"></script>-->
<script>
	$( document ).ajaxStart(function() {
		loading();
	});

	$( document ).ajaxStop(function() {
		swal.close();
	});

	// ScrollReveal().reveal('.reveal');
	function cek(){
		// Get the checkbox
		var checkBox = document.getElementById("customSwitch1");
		var darkmode;
		darkmode = checkBox.checked === true;
		$.ajax({
			url : "<?php echo site_url('config/config/change_dark_mode/');?>" + darkmode,
			dataType: "JSON",
			success: function(data)
			{
				console.log(data);
				location.reload();
			}
		});
	}
	//untuk loading
	function loading(messages = 'Please Wait') {
		swal.fire({
			text: messages,
			imageUrl: "<?php echo base_url('assets/vuesax/')?>app-assets/images/icons/fountain.gif",
			showCancelButton    : false,
			allowOutsideClick   : false,
			showConfirmButton   : false,
			allowEscapeKey      : false,
		});
	}
	//fungsi untuk menampilkan alert error
	function error_swal(message = 'Silahkan Hubungi Administrator!') {
		swal.fire({
			title: "Gagal",
			html: "<h5>" + message + "</h5>",
			type: "error"
		});
	}
	//fungsi untuk menampilkan alert success
	function success_swal(message = 'Berhasil!') {
		swal.fire({
			title: "Berhasil",
			html: "<h5>" + message + "</h5>",
			type: "success"
		});
	}
	//fungsi untuk membersihakn semua error
	function clear_all_error(){
		$(".form-control").removeClass('border-danger');
		$('[id="error_messages"]').html('');
	}

	function formatRupiah(angka){
		var number_string = angka.toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if(ribuan){
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}

		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return rupiah;
	}
</script>

<!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>
