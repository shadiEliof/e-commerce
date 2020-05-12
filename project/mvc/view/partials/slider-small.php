

<section id="main-slider-res"
                             class="main-slider carousel slide carousel-fade card d-none show-sm" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php foreach ($slider_small as $slide) { ?>
                            <li data-target="#main-slider-res" data-slide-to="<?= $slide["small_id"];?>" class="<?= $slide["state"];?>"></li>
                            <?php } ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php foreach ($slider_small as $slide){ ?>
                            <div class="carousel-item <?= $slide["state"];?>">
                                <a class="main-slider-slide" href="<?= $slide["url"];?>">
                                    <img src="<?= $slide["image"];?>" alt="<?= $slide["title"];?>"
                                         class="img-fluid">
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#main-slider-res" role="button" data-slide="prev">
                            <i class="mdi mdi-chevron-right"></i>
                        </a>
                        <a class="carousel-control-next" href="#main-slider-res" data-slide="next">
                            <i class="mdi mdi-chevron-left"></i>
                        </a>
                    </section>