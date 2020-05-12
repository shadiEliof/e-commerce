<?php
?>
<section id="main-slider" class="main-slider main-slider-cs mt-1 carousel slide carousel-fade card hidden-sm"
         data-ride="carousel">
    <ol class="carousel-indicators">
        <?php foreach ($slider_big as $slide) { ?>
        <li data-target="#main-slider" data-slide-to="<?= $slide["slide_id"];?>" class="<?= $slide["state"];?>"></li>

        <?php } ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($slider_big as $slide){ ?>
        <div class="carousel-item <?= $slide["state"];?>">
            <a class="main-slider-slide" href="<?= $slide["url"];?>">
                <img src="<?= $slide["image"];?>" alt="<?= $slide["title"];?>"
                     class="img-fluid">
            </a>
        </div>
                <?php } ?>


    </div>
    <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
        <i class="mdi mdi-chevron-right"></i>
    </a>
    <a class="carousel-control-next" href="#main-slider" data-slide="next">
        <i class="mdi mdi-chevron-left"></i>
    </a>
</section>

