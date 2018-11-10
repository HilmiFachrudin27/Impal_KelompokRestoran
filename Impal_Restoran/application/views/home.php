<?php 
$session_jab = $this->session->userdata['jabatan'];
	if ($session_jab == "kasir"){
            $this->load->view('HeaderKasir');
        } else if(($session_jab == "pelayan")) {
            $this->load->view('HeaderPelayan');
        } else if(($session_jab== "supervisor")){
            $this->load->view('HeaderSupervisor');
        } else {
			$this->load->view('HeaderPemilik.php');
		} ?>
<div class="container-fluid">
	<div class="row">
		<div class="col text-center c-background">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<!-- The slideshow -->
				<div class="carousel-inner c-size">
					<div class="carousel-item active">
						<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/salad.jpg" style="object-fit: cover;" width="100%" height="100%">
					</div>
					<div class="carousel-item">
						<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/pancake.jpg" style="object-fit: cover;" width="100%" height="90%">
					</div>
					<div class="carousel-item">
						<img src="<?php base_url();?>/../Impal_Restoran/Asset/images/kebab.jpg" style="object-fit: cover;" width="100%" height="90%">
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer');?>
