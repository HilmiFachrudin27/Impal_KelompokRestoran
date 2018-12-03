<?php $this->load->view('HeaderPelayan'); ?>

<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg-title-page-01.jpg);">
	<h2 class="tit6 t-center">
		Yummy Menu
	</h2>
</section>
	
<section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
	<div class="container">
	<h3> Customer : <?php echo $no_meja; ?> </h3>
		<div class="row">
			<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
				<div class="wrap-item-mainmenu p-b-22">
				
					<h3 class="tit-mainmenu tit10 p-b-25">
						STARTERS
					</h3>
					<?php $x = 0; ?>
				<?php foreach ($menu as $key) {  ?>
					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<p class="name-item-mainmenu txt21" id="<?php echo $key->id_menu; ?>" value="<?php echo $key->nama_menu; ?>"><?php echo $key->nama_menu; ?></p>
							<div class="line-item-mainmenu bg3-pattern"></div>
							<div class="price-item-mainmenu txt22" id="harga1"  value="20.000">
								<?php echo $key->harga_menu; ?>
							</div>
						</div>
						<div class="container mt-5">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-4">
									<div class="input-group mb-3">
										<input type="number" name="jumlah1" id="inp<?php $x += 1; echo $x ?>" class="form-control form-control-sm"  min="1">
									</div>
								</div>
								<div class="input-group-prepend">
									<button class="btn btn-dark btn-sm" id="plus-btn" name="button-1" onclick='addListPesan("<?php echo $key->id_menu; ?>", "<?php echo $x ?>")'>
										Pesan
									</button>
								</div>
							</div>
						</div>


						<span class="info-item-mainmenu txt23">
							<?php echo $key->deskripsi; ?>
						</span>
					</div>
				<?php }?>
					
				</div>
			</div>
		</div>
	</div>
</section>
<div class="container" >
	<h4>Daftar Pesanan</h4>
	<form action="<?php base_url();?>/../Impal_Restoran/CMenu/addPesanan/<?php echo $no_meja; ?>" method="POST" id="huhu">
	<table class="table table-bordered"> 
		<thead>
			<tr>
				<th>Nama Menu</th>
				<th>Jumlah</th>
			</tr>
		</thead>
		<tbody id="bank">
			
		</tbody>
	</table>
	<button type="submit" id="pesan">submit</button>
	<!-- <a href="<?php base_url();?>/../Impal_Restoran/CMenu/addPesanan">submit</a> -->
	</form>

</div>

<script>
	var i=0;
	let jm = [];
	function addListPesan(key, inp){
		let menu = [];
		let d = $('#' + key).text();
		let bankData = $('#bank');
		let row = $('<tr></tr>');
		let data = $('<td></td>').text(d);
		// var y ="<input type='hidden' name='"++"'value='"+d+"'>"
		row.append(data);
		let jumlah = $('#inp' + inp).val();
		let jml = $('<td></td>').text(jumlah);
		var x="<input type='hidden' name='menu"+i+"' value='"+key+"'>"
		$('#huhu').append(x);
		var y="<input type='hidden' name='jumlah"+i+"' value='"+jumlah+"'>"
		$('#huhu').append(y);
		i=i+1;
		row.append(jml);
		bankData.append(row);
		menu.push(d);
		menu.push(jumlah);
		console.log(menu);
		jm.push(menu);
		console.log(jm);
	}

	function simpanData(e) {
		$.post("<?php base_url();?>/../Impal_Restoran/CMenu/addPesanan", {req: jm});
	}
   
</script>
<?php $this->load->view('footer');?>
