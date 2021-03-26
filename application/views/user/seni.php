<!-- <?php print_r($posting)?> -->
<!-- <section class="events"> -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="event-title">Seni  Budaya</h2>
            </div>
            <div class="col-md-8">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
					<li class="nav-item nav-tab1">
                        <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Berita Terbaru </a>
                    </li>

                </ul>
            </div>
       </div>
        <br>
        <div class="row"> 
            <!-- Tab panes -->
        <div class="tab-content">
                <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                    <?php foreach($seni as $ps => $p ) : ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="event-date">
                                    <h4><?= date("d", strtotime($p['created_at']));?></h4> <span><?= date("M Y", strtotime($p['created_at']));?></span>
                                </div>
                                <span class="event-time"><?= date("H:i", strtotime($p['created_at'])).' WIB';?></span>
                            </div>
                            <div class="col-md-8">
                                <div class="event-heading">
                                    <h3><a href="<?php echo site_url('DashboardUser/view/'.$p['id'])?>"><?= $p['nama']?></a></h3>
                                    <p><?= $p['deskripsi']?></p>
                                </div>
                          </div>
                      </div>
                      <hr class="event-underline">
                  </div>
              <?php endforeach; ?>
    <div class="col-md-12 text-center">
    </div>
</div>

</div>
</div>
</section>
</div>