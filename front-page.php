<?php get_header('main') ?>
<?php
$design_cat = get_category(3);

if($design_cat):
    $posts = get_posts( array(
        'numberposts' => 3,
        'category' => 3,
    ) );

    ?>
<section class="section-watch section-tabs"<?php echo bluerex_get_background('section_img', $design_cat) ?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5">
    <?php if (get_field('section_header',$design_cat)): ?>
                <h3><?php the_field('section_header', $design_cat) ?></h3>
    <?php endif; ?>

    <?php if (get_field('description', $design_cat)): ?>
                <h4><?php echo $design_cat ->description ?></h4>
    <?php endif; ?>
                <ul class="nav nav-pills" id="myTab" role="tablist">
                <?php
                    $data = [];
                    $i = 0;
                    foreach ($posts as  $post):
                        setup_postdata($post);
                        $data[$i] ['post_name'] = $post->post_name;
                        $data[$i] ['url'] = get_the_permalink();
                        $data[$i] ['content'] = get_the_content('');

                ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link <?php if (!$i) echo 'active'?> rounded-pill" id="<?php echo $post ->post_name ?>-tab" data-toggle="tab" href="#<?php echo $post ->post_name ?>" role="tab" aria-controls="webdesign" aria-selected="true"><?php the_title()?></a>
                    </li>
                        <?php
                            $i++;
                            endforeach;
                         ?>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <?php foreach ($data as $k => $item): ?>
                    <div class="tab-pane fade show <?php if (!$k) echo 'active'?>" id="<?php echo $item['post_name']?>" role="tabpanel" aria-labelledby="<?php echo $item['post_name']?>-tab">
                        <?php echo $item['content']?>
                        <p><a href="<?php echo $item['url']?>" class="btn btn-pink btn-shadow"><?php echo __('Read more', 'bluerex')?></a> </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div><!---End col--->
            <div class="col-lg-6 text-center">
                <?php if (get_field('section_add_img', $design_cat)):?>
                <img src="<?php echo get_field('section_add_img', $design_cat)?>">
                <?php endif; ?>
            </div>
        </div><!-----End row----->
    </div><!----End container---->

</section><!-----------------------End section1----------------------->
<?php endif //if $design_cat ?>

<?php
$progress_cat = get_category(4);

if($progress_cat):
    $posts = get_posts( array(
        'numberposts' => 3,
        'category' => 4,
    ) );

?>
<section class="section-progress text-center">
    <div class="container">
        <div class="row">
            <?php foreach ($posts as $post):?>
            <div class="col-md-4 progress-item">
                <?php echo $post->post_content; ?>

            </div><!------End col----------->
           <?php endforeach; ?>
        </div><!----------------End row---------------->
        <?php unset($posts);?>
    </div><!----------------------------End container---------------------------->
</section><!-----------------------End section2----------------------->

<?php endif //if $progress_cat ?>


    <?php
        $lets_cat = get_category(5);

        if($lets_cat):
    ?>
    <section class="section-lets text-center" <?php echo bluerex_get_background('section_img',$lets_cat)?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><?php echo $lets_cat->name?></h3>
                <?php if (get_field('section_header',$lets_cat)): ?>
                <h4><?php echo (get_field('section_header',$lets_cat)) ?></h4>
                <?php endif; ?>

                <p>
                    <?php echo $lets_cat->description ?>
                </p>
                <p><a href="<?php echo get_category_link(5) ?>" class="btn btn-pink btn-shadow"><?php echo __('Read more', 'bluerex') ?></a> </p>
            </div>
        </div><!----End row---->
    </div><!-------End Container------->
        <?php unset($posts);?>
</section><!-----------------------End section3----------------------->
    <?php endif //if $lets_cat ?>
<?php
$graphic_cat = get_category(6);

if($graphic_cat):
    $posts = get_posts( array(
        'numberposts' => 2,
        'category' => 6,
    ) );
    //bluerex_debug(get_fields($graphic_cat));
    ?>

<section class="section-design">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php if ($graphic_cat): ?>
                <h3><?php echo $graphic_cat->name ?></h3>
                <?php endif; ?>
                <?php if (get_field('section_header',$graphic_cat)): ?>
                <h4><?php echo get_field('section_header',$graphic_cat) ?></h4>
                <?php endif;?>

                <p><?php echo $graphic_cat-> description?></p>
                <div class="row">
                    <?php foreach ($posts as $post): setup_postdata($post) ?>
                        <div class="col-md-6 mb-3">
                            <span><?php the_field('icon') ?></span>
                            <h2><?php the_title() ?></h2>
                            <p><?php the_content('') ?></p>
                            <p>
                                <a href="<?php the_permalink() ?>" class="btn btn-pink btn-shadow"><?php echo __('Read more', 'bluerex') ?></a>
                            </p>
                        </div><!--/col-->
                    <?php endforeach; ?>
                </div><!--/row-->
            </div><!---End col--->
            <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-16by9 mt-5">
                    <?php
                    if ($video = get_field('section_video', $graphic_cat)){
                        //bluerex_debug($video);
                        $video = str_replace('watch?v=', 'embed/', $video);
                        //echo $video;
                    }
                    ?>
                    <iframe id="videoPlayer" class="embed-responsive-item" src="<?php echo $video?>?enablejsapi=1&amp;html5=1&amp;rel=0&amp;&amp;showinfo=0" allowfullscreen></iframe>
                                                <div id="videoPlayBtn"></div>
                    </div>

                </div>
            </div><!---End col--->
        </div><!----End row---->
    </div><!-------End Container------->
</section><!-----------------------End section3----------------------->
<?php endif; // $graphic_cat ?>
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
<?php get_footer() ?>