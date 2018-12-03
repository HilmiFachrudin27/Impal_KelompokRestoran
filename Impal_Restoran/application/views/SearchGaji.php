<?php $this->load->view('HeaderPemilik.php'); ?>
<div class="container">
    <!-- Search form -->


    
     <h2 style="text-align: center;margin-bottom: 5%">Input Gaji Karyawan</h2>
            <div class="container" style="margin-top: 20px;padding-left: 25px">
                <div class="row">
                    <div class="col-md-8">
                            <form method="POST" enctype="multipart/form-data" action="<?php base_url();?>/../Impal_Restoran/CGaji/caridatagaji">
                                
                                    <div class="form-group">
                                        <label class="control-label" for="nama_customer">ID KARYAWAN : </label>
                                        <input type="text" class="form-control input-md" placeholder="Masukkan ID KARYAWAN" />
                                    </div>
                                    <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="tambah" value="cari">
                                    </div>
                            </form>
                    </div>
                </div>
            </div>
</div>

<?php $this->load->view('footer.php'); ?>
