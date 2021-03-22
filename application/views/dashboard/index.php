<?php
/** @var CI_Controller 	$this */
/** @var M_user 		$user */

/** @var CI_Controller $this */
/** @var string $title */
/** @var int $bulan */
/** @var int $tahun */

$dark_mode 	= $this->session->userdata('dark_mode');
$bulan 		= 5;
?>

<style>
	.group{
		background-color: #B8C2CC !important;
		padding-bottom: 0 !important;
		padding-top: 0 !important;
	}
	.card-header {
		padding: 1rem 1rem !important;
	}

	 th.dt-body-center, td.dt-body-center{
		 text-align: center;
	 }

	 th.dt-body-right, td.dt-body-right{
		 text-align: right;
	 }

	.btn-secondary {
		border-radius: 0.5rem !important;
		margin-left: 0.5rem !important;
		margin-bottom: 0.5rem !important;
	}
</style>
<div class="content-body">
	<section id="master-aset" class="data-list-view-header">
		<div class="card" style="margin-bottom: 0 !important;">
			<div class="card-body" style="padding : 1rem !important;">
				<div class="row">
					<div class="col-lg-5">
						<div class="row">
							<div class="col-12">
								<h2 class="content-header-title float-left" style="margin-top: 0.5rem">TESTING</h2>
								<div class="breadcrumb-wrapper col-12">
									<ol class="breadcrumb">
										<li class="breadcrumb-item active" style="margin-top: 0.25rem">Sampai Tgl :
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2">
						<input id="sampai_tanggal" type="text" class="form-control pickadate" name="sampai_tanggal" value="<?php echo date('d-m-Y')?>"  onchange="reload_tabel_spd()">
					</div>

					<div class="col-lg-1">
						<input type="text" class="form-control" value="<?php echo TAHUN;?>" readonly >
					</div>
					<div class="col-lg-4">
						<input id="search_list_spd" type="text" class="form-control" data-toggle="tooltip" data-original-title="Cari" placeholder="Cari..." >
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="table-responsive animated bounceInUp">
				<div class="table-responsive">
					<table class="table data-list-view table-hover table-striped table-bordered" id="tabel_dashboard" style="width: 100%;">
						<thead>
						<tr>
							<th style="width: 10%">Username</th>
							<th style="width: 10%">Nama</th>
							<th style="width: 10%">Status</th>
							<th style="width: 10%">Password</th>
							<th style="width: 10%">Input By</th>
							<th style="width: 14%; padding-right: 30px !important;">Register_date</th>
						</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
			</div>
	</section>
</div>

<script type="application/javascript">
	let tabel_dashboard_ajax;
	let bulan_select = $('[name="bulan"]');

	$(document).ready(function() {
		$(".pickadate").pickadate({
			selectYears: false,
			selectMonths: !0,
			format: 'dd-mm-yyyy',
		});

		tabel_dashboard();

		$('[class="top"]').html('');
		$('#search_list_spd').on('keyup',function(){
			tabel_dashboard_ajax.search($(this).val()).draw() ;
		});
		$('#tabel_dashboard_length').html('');
		$('#tabel_dashboard_filter').html('');

		$('#tabel_dashboard tbody').on( 'click', 'tr', function () {
			var d = tabel_dashboard_ajax.row(this).data();
			alert('anda memilih : ' + d['nama_user']);
		});

	});

	function tabel_dashboard() {
		tabel_dashboard_ajax = $('#tabel_dashboard').DataTable({
			ajax : {
				"url": "<?php echo site_url('dashboard/ajax_detail');?>"
			},
			"columns": [
				{data: 'id_user', name: 'id_user', class: 'text-center'},
				{data: 'nama_user', name: 'nama_user', class: 'text-center'},
				{data: 'status_user', name: 'status_user', class: 'text-center'},
				{data: 'password', name: 'password'},
				{data: 'inputby', name: 'inputby'},
				{data: 'register_date', name: 'register_date'},
			],
			select: {
				selector: 'td:first-child',
				style: 'single'
			},
			order: [
				[2, 'asc']
			],
		});
	}

	function reload_tabel_spd() {
		var sampai_tanggal 	= $("[name='sampai_tanggal']").val();
		tabel_dashboard_ajax.ajax.url("<?php echo site_url('dashboard/ajax_detail');?>" +'/'+ sampai_tanggal).load();
	}

</script>
