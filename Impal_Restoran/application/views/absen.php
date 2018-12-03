<?php 
$session_jab = $this->session->userdata['jabatan'];
	if ($session_jab == "kasir"){
        $this->load->view('HeaderKasir');
    } else if(($session_jab == "pelayan")) {
        $this->load->view('HeaderPelayan');
    } else if(($session_jab== "supervisor")){
        $this->load->view('HeaderSupervisor');
    }
?>
<!-- <!-- <head>
        <title>Absen Karyawan</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    </head> -->

<body>
	<div class="container" style="padding-left: 25px; margin-botton: 10%;">

		<div class="col-lg-4 ma"></div>
		<h2 style="text-align: center;"> Presensi Karyawan</h2>

		<?php $id_karyawan = $this->session->userdata['id_karyawan']; ?>
		<form method="POST" action="<?php base_url();?>/../Impal_Restoran/CKehadiran/InputPresensi/<?php echo $id_karyawan; ?>/<?php echo date("Y-m-d"); ?>">
			<!-- <div class="modal-body"> -->
			<!-- <div class="form-group">
							<label class="control-label" for="no">No</label>
							<input type="text" name="no" class="form-control" id="no" required>
						</div> -->
			<div class="form-group">
				<label class="control-label" for="jam_keluar">TANGGAL </label>
				<input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="<?php echo date("Y-m-d"); ?>">
			</div>
			<div class="form-group">
				<label class="control-label" for="idpenjual">ID KARYAWAN</label>

				<input type="text" name="idpenjual" class="form-control" id="idpenjual" placeholder="<?php echo $id_karyawan; ?>">
			</div>
			<!-- <div class="form-group">
							<label class="control-label" for="nama">NAMA</label>
							<input type="text" name="nama" class="form-control" id="nama" required>
						</div> -->
			<div class="form-group">
				<label class="control-label" for="kontak">JABATAN</label>
				<?php $jabatan = $this->session->userdata['jabatan']; ?>
				<input type="text" name="kontak" class="form-control" id="kontak" placeholder="<?php echo $jabatan; ?>">
			</div>
			<div class="form-group">
				<label class="control-label" for="jam_masuk">JAM MASUK</label>
				<input type="time" name="jam_masuk" class="form-control" id="jam_masuk" required>
			</div>
			<div class="form-group">
				<label class="control-label" for="jam_keluar">JAM KELUAR</label>
				<input type="time" name="jam_keluar" class="form-control" id="jam_keluar" required>
			</div>
			<!-- <div class="form-group">
							<label class="control-label" for="kontak">STATUS</label>
							<input type="text" name="kontak" class="form-control" id="kontak" required>
						</div> -->
					

			<button type="reset" class="btn btn-danger">Reset</button>
			<input type="submit" class="btn btn-primary" name="tambah" value="Simpan">


		</form>
	</div>
	</div>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#table_id').DataTable();
		});

	</script>
</body>

<?php $this->load->view('footer'); ?>
