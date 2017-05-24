</header><!--/header-->
    <section id="portfolio">
        <div class="container">
            <div class="center">
               <h2>Price List</h2>
               <p class="lead"> yuk pesan!</p>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">All Menu</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".utama">Menu Utama</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".pelengkap">Menu Pelengkap</a></li>
               
            </ul><!--/#portfolio-filter-->

            <div class="row">
            <?php foreach ($hehe as $m) { ?>
                <div class="col-xs-6 col-md-4">
                    <div class="portfolio-items">
                        <div class="portfolio-item utama">
                            <div class="recent-work-wrap">
                                <img class="img-responsive" src="<?php echo base_url($m['gambar']); ?>" alt="">
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><?= $m['nama_menu'] ?></h3>
                                        <p>Rp <?= $m['harga_menu'] ?>,00</p>
                                        <p><?= $m['deskripsi_menu'] ?></p>
                                        <a class="preview" href="<?php echo base_url($m['gambar']); ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View   </a> 
                                        <a class="Order" href="<?php echo base_url(); ?> index.php/Home/order" rel="prettyPhoto"><i class="fa fa-eye"></i> Order</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?> 
            </div>
        </div>
    </section><!--/#portfolio-item-->
    
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
               
            </div>
        </div>
    </section><!--/#bottom-->