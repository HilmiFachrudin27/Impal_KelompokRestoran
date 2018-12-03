<?php $this->load->view('HeaderPemilik.php'); ?>
<div class="container" style="margin-top: 20px">
	<div class="col-md-12">
		<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th> NO</th>
					<th> ID KARYAWAN</th>
					<th> NAMA </th>
					<th> JABATAN</th>
					<th>
						<center>Action</center>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php
                $no=1;
                
				foreach ($karyawan as $key) {
                    $jabatan = $key->jabatan;
				?>
					<tr>
						<td>
							<?php echo $no++;?>
						</td>
						<td>
							<?php echo $key->id_karyawan;?>
						</td>
						<?php if ($jabatan == "kasir "){
                        echo "<td><?php echo $key->nama_kasir; ?></td>"; }else if ($jabatan == "pelayan") { echo"
						<td>
							<?php echo $key->nama_pelayan; ?>
						</td>"; }else if ($jabatan == "supervisor"){ echo"
						<td>
							<?php echo $key->nama_karyawan; ?>
						</td>"; } ?>
						<td>
							<?php echo $jabatan ?>
						</td>
					</tr>
					<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<div>
	<a href="<?php base_url();?>/../Impal_Restoran/CInputKaryawan/" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto" style="margin-top : 10%;margin-bottom:10%;">
		Karyawan Baru
	</a>
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
