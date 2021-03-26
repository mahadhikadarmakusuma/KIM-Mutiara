
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kelompok Informasi Masyarakat - MUTIARA</title>
    <link rel="shorcut icon" href="<?php echo base_url().'assets/gambar/logo-baru.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><div class="logo text-center"><img src="<?php echo base_url() ?>assets/img/logo1.png" alt="Klorofil Logo"></div></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>" role="button">Home</a>
                                </li>  
                                <li class="nav-item">
								<div class="dropdown">
                            		<a role="button" class="dropdown-toggle nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pemerintah</a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										    <a class="dropdown-item" href="<?= site_url('DashboardUser/pemerintahanSiteUmum')?>">Umum</a>
										    <a class="dropdown-item" href="<?= site_url('DashboardUser/kelembagaanSiteUmum')?>">Kelembagaan Masyarakat</a>
										    <a class="dropdown-item" href="<?= site_url('DashboardUser/keamananSiteUmum')?>">Keamanan Ketertiban</a>
										</div>
								</div>
								</li>
								<li class="nav-item">
									<div class="dropdown">
                            		<a role="button" class="dropdown-toggle nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Potensi</a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										    <a class="dropdown-item" href="<?= site_url('DashboardUser/seniSiteUmum')?>">Seni Budaya</a>
										    <a class="dropdown-item" href="<?= site_url('DashboardUser/pemberdayaanSiteUmum')?>">Pemberdayaan Masyarakat</a>
										    <a class="dropdown-item" href="<?= site_url('DashboardUser/ekonomiSiteUmum')?>">Ekonomi Masyarakat</a>
										    <a class="dropdown-item" href="<?= site_url('DashboardUser/pendidikanSiteUmum')?>">Pendidikan</a>
										    <a class="dropdown-item" href="<?= site_url('DashboardUser/kesehatanSiteUmum')?>">Kesehatan</a>
										    <a class="dropdown-item" href="<?= site_url('DashboardUser/kulinerSiteUmum')?>">Kuliner</a>
										    <a class="dropdown-item" href="<?= site_url('DashboardUser/umkmSiteUmum')?>">UMKM</a>
										</div>
								</div> 
								</li>			
                                   					
								<li class="nav-item">
									<a class="nav-link" href="<?php echo site_url('DashboardUser/prestasiSiteUmum');?>" role="button">Prestasi</a>
                                </li>                        
                                <li class="nav-item">
									<a class="nav-link" href="<?php echo site_url('DashboardUser/tentangSiteUmum');?>" role="button">Tentang Kami</a>
                                </li>     
                                <li class="nav-item">
                                    <div class="dropdown">
                                    <a role="button" class="dropdown-toggle nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tautan</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <?php foreach($tautan as $tt => $t ) { ?>
                                                <a href="<?= $t['website']?>" target="_blank" class="dropdown-item"><?= $t['nama']?></a>
                                            <?php } ?>
                                        </div>
                                </div>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <a href="<?php echo site_url('AuthController');?>" class="btn btn-default"><span>Login</span></a>
                                    </div>
                                </li> 
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>