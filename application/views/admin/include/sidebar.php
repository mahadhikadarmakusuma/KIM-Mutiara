		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav"><br>
						<li>
							<a href="<?php echo site_url('DashboardController/index') ?>"><i class="lnr lnr-home"></i> <span>Halaman Utama</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Kelola Postingan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="<?php echo site_url('DashboardController/pemerintahan') ?>">Pemerintahan</a></li>
									<li><a href="<?php echo site_url('DashboardController/potensi') ?>">Potensi</a></li>
									<li><a href="<?php echo site_url('DashboardController/prestasi') ?>">Prestasi</a></li>
									<li><a href="<?php echo site_url('DashboardController/tentang') ?>">Tentang</a></li>
								</ul>
							</div>
						</li>
						<!-- <li>
							<a href="<?php echo site_url('DashboardController/potensiWilayah') ?>"><i class="lnr lnr-location"></i> <span>Kelola Potensi Wilayah</span></a>
						</li> -->
						<li>
							<a href="<?php echo site_url('DashboardController/tautan') ?>"><i class="lnr lnr-map-marker"></i> <span>Kelola Tautan</span></a>
						</li>
						<!-- <li>
							<a href="<?php echo site_url('AuthController/logout') ?>"><i class="lnr lnr-exit-up"></i><span>Keluar</span></a>
						</li> -->
					</ul>
				</nav>
			</div>
		</div>