<?php $this->load->view('HeaderPemilik.php'); ?>

<h2 style="text-align: center;margin-bottom: 5%">Input Menu</h2>
<div class="container" style="margin-top: 20px;padding-left: 25px">
        <div class="col-md-8">
                <form method="POST" enctype="multipart/form-data" action="<?php base_url();?>/../Impal_Restoran/CInputMenu/addMenu">

                    <div class="form-group">
                        <label class="control-label" for="no">ID Menu</label>
                        <input type="text" name="id_menu" class="form-control" id="no" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nama_customer">Nama Menu</label>
                        <input type="text" name="nama_menu" class="form-control" id="namacustomer" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nama_customer">Harga</label>
                        <input type="text" name="harga_menu" class="form-control" id="namacustomer" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nama_customer">Jumlah Menu</label>
                        <input type="text" name="jumlah_menu" class="form-control" id="namacustomer" required>
                    </div>
                    <!-- <div class="form-group">
                        <label class="control-label" for="nama_customer">Status</label>
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Status
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Avaible</a>
                            </li>
                            <li>
                                <a href="#">Notavaible</a>
                            </li>
                        </ul>
                    </div> -->
                    <div class="form-group">
                        <label class="control-label" for="nama_customer">Deskripsi</label>
                        <input type="textarea" name="deskripsi" class="form-control" id="namacustomer" >
                    </div>
    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
                    </div>
        </form>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$('#table_id').DataTable();
	});

</script>

<?php $this->load->view('footer.php'); ?>
