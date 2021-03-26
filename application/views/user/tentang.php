<!-- <?php print_r($posting)?> -->
<!-- <section class="events"> -->
<div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="event-title">Tentang Kami</h2>
            </div>
            <div class="col-md-8">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">

                </ul>
            </div>
       </div>
        <br>
        <div class="row"> 
            <!-- Tab panes -->
        <div class="tab-content">
                <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                    <?php foreach($tentang as $ps => $p ) : ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-50">
                                <div class="event-heading">
                                    <h3><a href="<?php echo site_url('DashboardUser/view__/'.$p['id'])?>"><?= $p['nama']?></a></h3>
                                </div>
                          </div>
                      <!-- </div>
                      <hr class="event-underline">
                  </div> -->
              <?php endforeach; ?>
    <div class="col-md-12 text-center">
    </div>
</div>

</div>
</div>
</section>
</div>