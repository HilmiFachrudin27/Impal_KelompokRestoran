<?php $this->load->view('HeaderPelayan.php'); ?>
<div class="container" style="margin-top: 20px">
	<label for="id_karyawan">ID Karyawan :
		<?php echo $this->session->userdata['id_karyawan'];?> </label>
	<br>
	<label for="nama_karyawan ">Nama Karyawan :
		<?php echo $nama; ?> </label>
	<br>
	<label for="Jabatan"> Jabatan :
		<?php echo $this->session->userdata['jabatan'];?> </label>
	<br>
	<div class="col-md-12">
		<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th> NO</th>
					<th> BULAN</th>
					<th> GAJI POKOK</th>
					<th> BONUS</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				foreach ($gaji as $kry) {
				?>
					<tr>
						<td>
							<?php echo $no++;?>
						</td>
						<td>
							<?php echo $kry->bulan; ?>
						</td>
						<td>
							<?php echo $kry->jumlah_gaji; ?>
						</td>
						<td>
							<?php echo $kry->bonus_gaji; ?>
						</td>
					</tr>
					<?php } ?>
			</tbody>
		</table>
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



<?php $this->load->view('footer.php'); ?>
