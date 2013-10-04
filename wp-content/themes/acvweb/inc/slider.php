<!-- Start main slide -->
<div class="slider">
    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php bloginfo('template_directory')?>/img/slides/slide-1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption"><?php _e('Caption 1', 'acvweb'); ?></div>
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory')?>/img/slides/slide-2.png" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption"><?php _e('Caption 2', 'acvweb'); ?></div>
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory')?>/img/slides/slide-3.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption"><?php _e('Caption 3', 'acvweb'); ?></div>
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory')?>/img/slides/slide-4.jpg" alt="Fourth slide">
                <div class="container">
                    <div class="carousel-caption"><?php _e('Caption 4', 'acvweb'); ?></div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span
            class="glyphicon glyphicon-chevron-left"
        ></span>
        </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span
            class="glyphicon glyphicon-chevron-right"
        ></span>
        </a>
    </div>
    <article class="slogan">
        <h2><?php _e('Slogan company Lorem ipsum', 'acvweb'); ?></h2>
        <p><?php _e('Pellentesque luctus felis augue, scelerisque porta ligula fermentum at. Proin ultricies faucibus sapien at facilisis', 'acvweb') ?></p>
    </article>
</div>
<!-- End main slide -->