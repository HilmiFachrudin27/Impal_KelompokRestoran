<?php $this->load->view('HeaderPemilik.php'); ?>
            <h2 style="text-align: center;margin-bottom: 5%">Data Gaji</h2>
            <div class="container" style="margin-top: 20px;padding-left: 25px">
                <div class="col-md-8">
                
                        <form method="POST" enctype="multipart/form-data" action="<?php base_url();?>/../Impal_Restoran/CInputGaji/inputGaji">
                        
                                <div class="form-group">
                                    <label class="control-label" for="no"> ID Karyawan </label>
                                    <label class="control-label" for="no"> <?php echo $id_karyawan; ?> </label>
                                    <input type="text" name="id_karyawan" class="form-control" id="no" value="<?php echo $id_karyawan; ?>" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="no"> Nama Karyawan </label>
                                    <label class="control-label" for="no">  </label>
                                    <input type="text" name="nama_karyawan" class="form-control" id="no" value="<?php echo $nama_karyawan; ?>" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="no"> Jabatan </label>
                                    <label class="control-label" for="no">  </label>
                                    <input type="text" name="jabatan_karyawan" class="form-control" id="no" value="<?php echo $jabatan; ?>" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="no">Bulan : </label>
                                    <input type="month" name="bulan_gaji">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="no"> Gaji Pokok </label>
                                    <input type="text" name="gaji_karyawan" class="form-control" id="no" >
                                </div>
                                <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
                                </div>
                               
                        </form>
                
                    </div>
                </div>
          

<?php $this->load->view('footer.php'); ?>