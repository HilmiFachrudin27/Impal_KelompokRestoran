<?php $this->load->view('HeaderPelayan.php'); ?>

            <h2 style="text-align: center;margin-bottom: 5%">Pemesanan Menu</h2>
            <div class="container" style="margin-top: 20px;padding-left: 25px">
                <div class="col-md-8">
                        <form method="POST" enctype="multipart/form-data" action="<?php base_url();?>/../Impal_Restoran/CCustomer/inputCustomer">
                            
                                <div class="form-group">
                                    <label class="control-label" for="no">No Meja</label>
                                    <input type="text" name="no_meja" class="form-control" id="no" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="nama_customer">Nama Customer</label>
                                    <input type="text" name="nama_customer" class="form-control" id="namacustomer" required>
                                </div>
                                <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="tambah" value="Simpan">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
      $(document).ready( function () {
          $('#table_id').DataTable();
      } );
    </script>

<?php $this->load->view('footer.php'); ?>