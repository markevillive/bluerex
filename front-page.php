<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        .preloader{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 999;
            background-color: #fefefe;
        }
    </style>
    <title>Creative Agency</title>
    <?php wp_head() ?>
</head>
<body>
<div class="preloader d-flex justify-content-center align-items-center">
    <div class="spinner-border text-danger" style="width: 10rem; height: 10rem ; role="status" >
    <span class="sr-only">Loading...</span>
</div>
</div>
<!----------------------------------------------END PRELOADER---------------------------------------------------->
<button class="scrollToTop"><i class="fas fa-angle-up"></i> </button>
<header class="main-header" <?php echo bluerex_get_background('header_bg') ?> >
    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="<?php echo home_url('/')?>">
            <?php
            $custom_logo = wp_get_attachment_image_src( get_theme_mod('custom_logo'));
            if ($custom_logo):
            ?>
            <img src="<?php echo $custom_logo[0]?>" alt="<?php bloginfo('name') ?>">

            <?php endif; ?>
            <?php bloginfo('name') ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'header_menu',
                'container' => false,
                'menu_class' => 'navbar-nav ml-auto',
            ) )
            ?>

        </div>
    </nav>
    <div class="main-header-text">
                <?php if (get_field('header1')): ?>
                    <h3><?php the_field('header1') ?></h3>
                <?php endif; ?>

                <?php if (get_field('header2')):?>
                    <h4><?php the_field('header2') ?></h4>
                <?php endif; ?>

                <?php if (get_field('header_text')):?>
                    <p><?php the_field('header_text') ?> </p>
                <?php endif; ?>

        <div class="main-header-buttons">
            <?php if (get_field('header_btn1')):
                $link = get_field('header_btn1');
                ?>
                <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-pink rounded-pill">
                    <?php echo esc_html($link['title']); ?>
                </a>
            <?php endif; ?>

            <?php
                if (get_field('header_btn2')):
                $link = get_field('header_btn2');
            ?>
                <a href="<?php echo esc_url($link['url']); ?>" class="btn btn-violet rounded-pill">
                    <?php echo esc_html($link['title']); ?>
                </a>
            <?php endif; ?>
        </div><!--------------End Buttons---------------->
    </div><!-------------end Main Header Text---------------------------------->


</header><!--------------------------------END MAIN HEADER----------------------------------->
<section class="section-watch section-tabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h3>Dream Big Inspire the World</h3>
                <h4>We turns creative ideas into your business</h4>
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active rounded-pill" id="webdesign-tab" data-toggle="tab" href="#webdesign" role="tab" aria-controls="webdesign" aria-selected="true">Web design</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link rounded-pill" id="mobileapp-tab" data-toggle="tab" href="#mobileapp" role="tab" aria-controls="mobileapp" aria-selected="false">Mobile App</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link rounded-pill" id="branding-tab" data-toggle="tab" href="#branding" role="tab" aria-controls="branding" aria-selected="false">Branding</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="webdesign" role="tabpanel" aria-labelledby="webdesign-tab">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam molestie nisl accumsan, consequat elit at, feugiat nibh. Nunc nec bibendum erat, id porta odio. Maecenas felis enim, vulputate sit amet congue vitae, aliquet eget lacus. Donec nisl est, tempus at laoreet vel, egestas in diam. Sed tristique vel risus id venenatis. Proin blandit quam ligula, a ultrices diam consectetur a. Aliquam eget euismod arcu. Aliquam scelerisque id est ac blandit. In commodo, velit id dictum auctor, erat dui viverra elit, at semper elit dolor lacinia sapien. Ut nibh massa, aliquam eget nunc eu, malesuada congue diam. Donec vitae porttitor felis, id varius turpis. Nulla eget eros lobortis, pretium sem sed, tincidunt nunc. Aenean pulvinar leo dolor, ut molestie ipsum facilisis a. Mauris tellus orci, eleifend ut hendrerit ut, sodales et neque. In hac habitasse platea dictumst.
                        </p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read More</a> </p>
                    </div>
                    <div class="tab-pane fade" id="mobileapp" role="tabpanel" aria-labelledby="mobileapp-tab">
                        <p>
                            Nulla ac malesuada orci. Maecenas maximus lacus ut sollicitudin varius. Donec condimentum, neque ac vulputate mollis, libero nisl convallis elit, sit amet vehicula ligula ligula cursus massa. Morbi interdum, elit eget hendrerit ultricies, felis justo tristique nibh, sit amet tincidunt leo ipsum eget nulla. Nulla venenatis cursus turpis eget dictum. Mauris purus magna, faucibus eget euismod nec, auctor nec tellus. Maecenas justo dui, semper vel varius ultricies, tincidunt a odio. Aenean a molestie nunc, a facilisis augue.
                        </p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read More</a> </p>
                    </div>
                    <div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                        <p>
                            Vivamus et viverra leo. Maecenas sagittis nisl in augue sagittis rutrum. Maecenas feugiat, tortor ac eleifend finibus, risus elit malesuada tellus, sed vehicula purus tortor nec orci. Sed ut mi congue mi convallis feugiat ac et odio. Ut eleifend, sapien nec convallis malesuada, tortor purus malesuada eros, ut faucibus nibh sapien et nunc. In nec dolor mauris. Mauris turpis odio, semper id pulvinar in, feugiat at odio. Nullam eleifend vel leo quis rutrum. Sed et erat sed ligula euismod malesuada. Aliquam eu efficitur nunc. Phasellus ut eros sit amet turpis consectetur congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Duis non felis id dui sollicitudin feugiat.
                        </p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read More</a> </p>
                    </div>
                </div>
            </div><!---End col--->
            <div class="col-lg-6 text-center">
                <img src="<?php bloginfo('template_url') ?>/assets/img/watch.png" alt="">
            </div>
        </div><!-----End row----->
    </div><!----End container---->

</section><!-----------------------End section1----------------------->
<section class="section-progress text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 progress-item">
                <div><i class="fas fa-bullhorn"></i> </div>
                <div class="num">500+</div>
                <h4><span>Successfully</span> completed projects</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis eu felis et convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam convallis egestas aliquam. Nam massa sem, blandit a risus vel, ultrices consequat elit. Integer sodales, lacus eget varius consequat, velit sem venenatis ligula, in varius nisl ligula eu est. In sem nibh, placerat eu mauris et, posuere facilisis felis. Pellentesque ac tincidunt eros, in scelerisque lectus. Mauris nibh nisi, pretium eu dictum ac, viverra laoreet urna. Quisque commodo accumsan erat sit amet convallis.
                </p>

            </div><!------End col----------->
            <div class="col-md-4 progress-item">
                <div><i class="fas fa-bullhorn"></i> </div>
                <div class="num">254+</div>
                <h4><span>Highly</span> specialised employees </h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis eu felis et convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam convallis egestas aliquam. Nam massa sem, blandit a risus vel, ultrices consequat elit. Integer sodales, lacus eget varius consequat, velit sem venenatis ligula, in varius nisl ligula eu est. In sem nibh, placerat eu mauris et, posuere facilisis felis. Pellentesque ac tincidunt eros, in scelerisque lectus. Mauris nibh nisi, pretium eu dictum ac, viverra laoreet urna. Quisque commodo accumsan erat sit amet convallis.
                </p>
            </div><!------End col----------->
            <div class="col-md-4 progress-item">
                <div><i class="fas fa-bullhorn"></i> </div>
                <div class="num">45+</div>
                <h4><span>Avards</span> around the world</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque lobortis eu felis et convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nullam convallis egestas aliquam. Nam massa sem, blandit a risus vel, ultrices consequat elit. Integer sodales, lacus eget varius consequat, velit sem venenatis ligula, in varius nisl ligula eu est. In sem nibh, placerat eu mauris et, posuere facilisis felis. Pellentesque ac tincidunt eros, in scelerisque lectus. Mauris nibh nisi, pretium eu dictum ac, viverra laoreet urna. Quisque commodo accumsan erat sit amet convallis.
                </p>
            </div><!------End col----------->
        </div><!----------------End row---------------->
    </div><!----------------------------End container---------------------------->
</section><!-----------------------End section2----------------------->
<section class="section-lets text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Let's Grow Together</h3>
                <h4>We turn creative ideas into your business</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin efficitur purus turpis, et suscipit quam hendrerit accumsan. Donec suscipit felis a eros dignissim, nec convallis neque vehicula. Aliquam ut risus nec purus placerat rhoncus. Maecenas efficitur, erat sed pellentesque porta, mi tellus rhoncus felis, sed sollicitudin turpis enim ultricies augue. Morbi interdum quis tellus quis mollis. Cras ut porttitor nibh. Maecenas pulvinar lectus magna, at laoreet ligula finibus vitae. Aenean vestibulum magna non malesuada ultrices. Nulla non luctus diam, in pretium tortor.
                </p>
                <p><a href="#" class="btn btn-pink btn-shadow">Read More</a> </p>
            </div>
        </div><!----End row---->
    </div><!-------End Container------->
</section><!-----------------------End section3----------------------->
<section class="section-design">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>We are best and creative agency</h3>
                <h4>We turn creative ideas into your business</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet lacus nec neque convallis aliquet mollis vel ligula. Praesent tempus tincidunt sem non dictum. Etiam mi tellus, posuere at pulvinar ut, sodales vitae libero. Nulla feugiat diam enim, in vehicula quam ullamcorper in. Donec vestibulum, sapien sed dapibus cursus, nisi nibh hendrerit tellus, placerat ultricies neque arcu quis eros. In nibh velit, ultrices eget tempus eget, blandit vitae mauris. Ut quam mauris, gravida non ante quis, rhoncus tristique purus. Sed mollis mattis odio. In hac habitasse platea dictumst. Fusce vitae mauris id est suscipit sodales. Praesent laoreet, purus sed rhoncus consequat, mi massa volutpat dui, eu lobortis felis nunc a orci. Nam ac nibh nec tortor porta tincidunt in vel dui.
                </p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <span><i class="far fa-comments"></i></span>
                        <h2>Graphic Design</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in tellus eros. Curabitur ut ultrices.
                        </p>
                        <p>
                            <a href="#" class="btn btn-pink btn-shadow">Read more</a>
                        </p>
                    </div><!--/col-->
                    <div class="col-md-6 mb-3">
                        <span><i class="fas fa-bullhorn"></i></span>
                        <h2>Graphic design</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in tellus eros. Curabitur ut ultrices.
                        </p>
                        <p>
                            <a href="#" class="btn btn-pink btn-shadow">Read more</a>
                        </p>
                    </div><!--/col-->
                </div><!--/row-->
            </div><!---End col--->
            <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-16by9 mt-5">
                    <iframe id="videoPlayer" class="embed-responsive-item" src="https://www.youtube.com/embed/--4WpisLl9k?enablejsapi=1&amp;html5=1&amp;rel=0&amp;&amp;showinfo=0" allowfullscreen></iframe>
                    <div id="videoPlayBtn"></div>
                </div>
            </div><!---End col--->
        </div><!----End row---->
    </div><!-------End Container------->
</section><!-----------------------End section3----------------------->
<section class="section-work section-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h2>Our Recent Works</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed faucibus eleifend consequat. Vivamus sed justo sagittis, tincidunt neque eget, dignissim felis. Nam id odio ac justo feugiat commodo. Praesent vitae finibus metus, non commodo enim. Praesent auctor lacus ac sollicitudin viverra. Maecenas imperdiet eget sem elementum rutrum. Aliquam scelerisque accumsan efficitur. Fusce pharetra tincidunt orci et ultrices. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent ornare elementum libero, sit amet tempus felis facilisis sodales. Integer a ante semper, lacinia lacus et, iaculis justo. Sed vestibulum mauris sagittis congue maximus. Aliquam vulputate eu enim a sagittis.
                </p>
            </div>
            <div class="col-md-12">
                <ul class="nav nav-pills justify-content-center" id="myTab-gallery" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active rounded-pill" id="webdesign-tab2" data-toggle="tab" href="#webdesign2" role="tab" aria-controls="webdesign2" aria-selected="true">Webdesign</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill" id="mobileapp-tab2" data-toggle="tab" href="#mobileapp2" role="tab" aria-controls="mobileapp2" aria-selected="false">Mobile app</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill" id="branding-tab2" data-toggle="tab" href="#branding2" role="tab" aria-controls="branding2" aria-selected="false">Branding</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane fade show active" id="webdesign2" role="tabpanel" aria-labelledby="webdesign-tab2">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/bag.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/bag_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/beer.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/beer_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/book.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/book_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/box.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/box_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/cup.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/cup_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/labeltag.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/labeltag_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/lotion.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/lotion_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/shampoo.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/shampoo_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/shirt.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/shirt_s.jpg"></a>
                            </div>
                        </div><!--gallery-->
                    </div>
                    <div class="tab-pane fade" id="mobileapp2" role="tabpanel" aria-labelledby="mobileapp-tab2">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/bag.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/bag_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/beer.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/beer_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/book.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/book_s.jpg"></a>
                            </div>

                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/lotion.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/lotion_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/shampoo.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/shampoo_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/shirt.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/shirt_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/box.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/box_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/cup.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/cup_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/labeltag.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/labeltag_s.jpg"></a>
                            </div>
                        </div><!--gallery-->
                    </div>
                    <div class="tab-pane fade" id="branding2" role="tabpanel" aria-labelledby="branding-tab2">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/lotion.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/lotion_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/shampoo.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/shampoo_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/shirt.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/shirt_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/bag.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/bag_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/beer.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/beer_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/book.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/book_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/box.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/box_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/cup.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/cup_s.jpg"></a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/galery/labeltag.jpg"><img src="<?php bloginfo( 'template_url') ?>/assets/img/galery/labeltag_s.jpg"></a>
                            </div>

                        </div><!--gallery-->
                    </div>
                </div>
            </div><!------Col-md-12----->
        </div>
    </div><!-------End Container------->
</section><!-----------------------End section3----------------------->
<section class="section-brands text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"><a href="#"><img src="<?php bloginfo( 'template_url') ?>/assets/img/cisco.png"></a> </div>
            <div class="col-sm-3"><a href="#"><img src="<?php bloginfo( 'template_url') ?>/assets/img/adidas.png"></a> </div>
            <div class="col-sm-3"><a href="#"><img src="<?php bloginfo( 'template_url') ?>/assets/img/lenovo.png"></a> </div>
            <div class="col-sm-3"><a href="#"><img src="<?php bloginfo( 'template_url') ?>/assets/img/disney.png"></a> </div>
        </div><!-----End row------>
        <div class="row">
            <div class="col-sm-3" ><a href="#"><img src="<?php bloginfo( 'template_url') ?>/assets/img/amazon.png"></a> </div>
            <div class="col-sm-3"><a href="#"><img src="<?php bloginfo( 'template_url') ?>/assets/img/puma.png"></a></div>
            <div class="col-sm-3"><a href="#"><img src="<?php bloginfo( 'template_url') ?>/assets/img/apple.png"></a></div>
            <div class="col-sm-3"><a href="#"><img src="<?php bloginfo( 'template_url') ?>/assets/img/mini.png"><a></div>
        </div><!-------End row-------->

    </div><!-----------End container----------->
</section><!-----------------------End section3--------------------->
<section class="section-reviews">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our happy client</h3>
                                <h4>Testemonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Mr. <cite title="Source Title">John Doe</cite></footer>
                                </blockquote>
                            </div>
                        </div><!--END COL-SM-7-->
                        <div class="col-sm-5 d-none d-sm-block"><img src="<?php bloginfo( 'template_url') ?>/assets/img/client.png" alt="John Doe"></div><!--END COL-SM-5-->
                    </div><!---END ROW--->
                </div><!---------END CONTAINER-------->
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our happy client</h3>
                                <h4>Testemonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Mr. <cite title="Source Title">Robert Lee</cite></footer>
                                </blockquote>
                            </div>
                        </div><!--END COL-SM-7-->
                        <div class="col-sm-5 d-none d-sm-block"><img src="<?php bloginfo( 'template_url') ?>/assets/img/lee.png" alt="Robert lee"></div><!--END COL-SM-5-->
                    </div><!---END ROW--->
                </div><!---------END CONTAINER-------->
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our happy client</h3>
                                <h4>Testemonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Mr. <cite title="Source Title">Natan Forrest</cite></footer>
                                </blockquote>
                            </div>
                        </div><!--END COL-SM-7-->
                        <div class="col-sm-5 d-none d-sm-block"><img src="<?php bloginfo( 'template_url') ?>/assets/img/forrest.png" alt="Nataniel Forrest"></div><!--END COL-SM-5-->
                    </div><!---END ROW--->
                </div><!---------END CONTAINER-------->

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section><!-----------------------End section--------------------->
<section class="section-form text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Need Help?</h4>
                <h5>Don't Forget to Contact With Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente iusto modi illo quasi maiores iure expedita vel quo, magnam quia temporibus consectetur unde, repellendus odit culpa rerum. Suscipit, nihil, provident!</p>

                <form class="text-left">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-5">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-violet btn-shadow">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-----------------------End section-form--------------------->
<section class="section-social text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"><a href="#"><h5>Facebook</h5></a> </div>
            <div class="col-sm-3"><a href="#"><h5>Twitter</h5></a> </div>
            <div class="col-sm-3"><a href="#"><h5>Linkedin</h5></a> </div>
            <div class="col-sm-3"><a href="#"><h5>Instagram</h5></a> </div>
        </div><!------------------End row----------------->
    </div><!---------END CONTAINER-------------------->
</section><!-----------------------End section-form--------------------->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About</a> </li>
                                <li><a href="#">Approach</a> </li>
                                <li><a href="#">Sustainability</a> </li>
                                <li><a href="#">Careers</a> </li>
                                <li><a href="#">News</a> </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About</a> </li>
                                <li><a href="#">Approach</a> </li>
                                <li><a href="#">Sustainability</a> </li>
                                <li><a href="#">Careers</a> </li>
                                <li><a href="#">News</a> </li>
                            </ul>
                        </div>
                    </div><!--END ROW-->
                    <div class="row">
                        <div class="col-6">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About</a> </li>
                                <li><a href="#">Approach</a> </li>
                                <li><a href="#">Sustainability</a> </li>
                                <li><a href="#">Careers</a> </li>
                                <li><a href="#">News</a> </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="#">About</a> </li>
                                <li><a href="#">Approach</a> </li>
                                <li><a href="#">Sustainability</a> </li>
                                <li><a href="#">Careers</a> </li>
                                <li><a href="#">News</a> </li>
                            </ul>
                        </div>
                    </div><!--END ROW-->
                </div><!---END CONTAINER-->
            </div><!----------------END COL------------------>
            <div class="col-md-6 footer-images">
                <div class="container">
                    <div class="row">
                        <div class="col-6"><img src="<?php bloginfo( 'template_url') ?>/assets/img/footerImage_1.jpg" alt="image-1"></div>
                        <div class="col-6"><img src="<?php bloginfo( 'template_url') ?>/assets/img/footerImage_2.jpg" alt="image-2"></div>
                    </div><!----------------------------End Row----------------------------->
                    <div class="row">
                        <div class="col-6"><img src="<?php bloginfo( 'template_url') ?>/assets/img/footerImage_3.jpg" alt="image-3"></div>
                        <div class="col-6"><img src="<?php bloginfo( 'template_url') ?>/assets/img/footerImage_4.jpg" alt="image-4"></div>
                    </div><!----------------------------End Row----------------------------->

                </div><!--end container-->

            </div><!----------------END COL-------------------->
        </div><!---------------END ROW------------------------>
    </div><!------------------End container---------------------------->
</footer><!----------------------------End Footer-------------------------------------->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item"><span class="nav-link">&copy; Разработка: Андрей Баев, 2020</span></li>
                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Terms of Use</a> </li>
                    <li class="nav-item"><a class="nav-link" href="#">Site Map</a> </li>
                </ul>
            </div>
        </div><!--end row-->
    </div><!---END CONTAINER--->
</div><!-----END COPYRIGHT----------->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="js/baguetteBox.js"></script>
<?php wp_footer() ?>
</body>
</html>