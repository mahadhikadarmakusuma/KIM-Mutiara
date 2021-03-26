<!-- <section class="blog-wrap"> -->
    <div class="container"> 
        <div class="row">
                <h2 class="event-title">Pemerintahan</h2>
        <div class="col-md-4">
            </div>
            <div class="col-md-8">
              <?php foreach ($posting as $b => $row) : ?>
                <div class="blog-single-item">
                    <div class="blog-img_block">
                        <div class="blog-date">
                            <span><?php echo $row['created_at'];?></span>
                        </div>
                    </div>
                    <div class="blog-tiltle_block">
                        <h4><?php echo $row['nama'];?></h4>
                        <h6><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $row['kategori'];?></span></a></h6>
                        <?= $row['deskripsi']?>
                        <div class="blog-icons">
                            <div class="blog-share_block">
                                <a href="<?php echo site_url('DashboardUser/view/'.$row['id']);?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach;?>
            </div>
        </div>
    </div>
<!-- </section> -->