<?php $this->load->view('admin/include/header')?>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<img src="<?= base_url("assets/img/logo1.png");?>" width="50px" height="25px">
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>	
				<form class="navbar-form navbar-right">
					<!-- <div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Masukkan Kata Kunci">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div> -->
					<a href="<?php echo site_url('AuthController/logout') ?>"><i class="lnr lnr-exit-up"></i><span>Keluar</span></a>
				</form>				
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<?php $this->load->view('admin/include/sidebar')?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<div class="main-content">
				<?php echo $konten ?>
			</div>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2019. Sistem Informasi Kelompok Informasi Masyarakat.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
<?php $this->load->view('admin/include/footer')?>