<!--  <?php print_r($detail)?> -->
 <!-- <section class="blog-wrap"> -->
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">

			 <?php 
			  $array = array('jpg', 'png', 'jpeg');
			  $exp = explode('.', $detail['gambar']);
			 if(!in_array($exp[1], $array)) {?>
			 	<div class="blog-title_block">
 					<h4><b><?= $detail['nama']?></b></h4>
 					<a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $detail['kategori'];?></span></a></h6>
					<?= $detail['keterangan'];?>					
 				</div>
				<video src="<?php echo base_url().'images/uploads/'.$detail['gambar']?>" class="blog-image_block" alt="<?= $detail['nama']?>"width="400px"controls>
                            <?php } else { ?>
				<img src="<?php echo base_url().'images/uploads/'.$detail['gambar']?>" class="blog-image_block" alt="<?= $detail['nama']?>" width="400px">
            <?php } ?>
 				<div class="blog-title_block">
 					<h4><b><?= $detail['nama']?></b></h4>
 					<a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $detail['kategori'];?></span></a></h6>
					<?= $detail['keterangan'];?>					
 				</div>
				 <!-- <video src="<?php echo base_url().'images/uploads/'.$detail['gambar']?>" class="blog-image_block" alt="<?= $detail['nama']?>"width="400px"controls> -->
 			</div>
 		</div>
 	</div>
 </section>