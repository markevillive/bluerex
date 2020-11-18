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
<?php wp_reset_postdata(); unset($data, $posts); ?>
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
            </div><!---End col--->
        </div><!----End row---->
    </div><!-------End Container------->
    <?php wp_reset_postdata(); unset($posts); ?>
</section><!-----------------------End section3----------------------->
<?php endif; // $graphic_cat ?>
<?php
$work_cat = get_category(7);

if($work_cat):
    $posts = get_posts( array(
        'numberposts' => 3,
        'category' => 7,
    ) );
    //bluerex_debug($posts);
?>
<section class="section-work section-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <?php if($work_cat): ?>
                    <h2><?= $work_cat->name ?></h2>
                    <p><?php echo $work_cat->description ?></p>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <ul class="nav nav-pills justify-content-center" id="myTab-gallery" role="tablist">
                    <?php
                    $data = [];
                    $i = 0;
                    foreach($posts as $post):
                        setup_postdata($post);
                        $data[$i]['post_name'] = $post->post_name;
                        $data[$i]['url'] = get_the_permalink();
                        $data[$i]['content'] = get_the_content('');
                        ?>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill <?php if(!$i) echo 'active' ?>" id="<?= $post->post_name ?>-tab" data-toggle="tab" href="#<?= $post->post_name ?>" role="tab" aria-controls="webdesign" aria-selected="true"><?php the_title() ?></a>
                        </li>
                        <?php $i++; endforeach; ?>
                </ul>
                <div class="tab-content" id="myTabContent2">
                    <?php foreach ($data as $k => $item): ?>
                        <div class="tab-pane fade show <?php if (!$k) echo 'active'?>" id="<?php echo $item['post_name']?>" role="tabpanel" aria-labelledby="<?php echo $item['post_name']?>-tab">
                            <?php echo $item['content']?>
                            <p><a href="<?php echo $item['url']?>" class="btn btn-pink btn-shadow"><?php echo __('Read more', 'bluerex')?></a> </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div><!------Col-md-12----->
        </div>
    </div><!-------End Container------->
    <?php wp_reset_postdata(); unset($data, $posts); ?>
</section><!-----------------------End section3----------------------->
<?php endif; //$work_cat ?>
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
<?php
$posts = get_posts( array(
    'post_type' => 'reviews',
) );
if($posts):
    //bluerex_debug($posts);
?>
<section class="section-reviews">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php for($i = 0; $i < count($posts); $i++): ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" <?php if(!$i) echo 'class="active"' ?>></li>
            <?php endfor; ?>
        </ol>
        <div class="carousel-inner">
            <?php $i = 0; foreach($posts as $post): ?>
                <div class="carousel-item <?php if(!$i) echo 'active' ?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="carousel-caption">
                                    <h3><?= $post->post_title ?></h3>

                                    <h4><?= the_field('rewiev_header') ?></h4>
                                    <blockquote class="blockquote">
                                        <p class="mb-0"><?= $post->post_content ?></p>
                                        <footer class="blockquote-footer"><?= the_field('review_author') ?></footer>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- /.col-sm-7 -->
                            <div class="col-sm-5 d-none d-sm-block">
                                <?php if(has_post_thumbnail($post->ID)): ?>
                                    <?= get_the_post_thumbnail($post->ID) ?>
                                <?php endif; ?>
                            </div>
                            <!-- /.col-sm-5 -->
                        </div>
                    </div>
                </div>
                <?php $i++; endforeach; ?>
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
    <?php wp_reset_postdata(); unset($posts); ?>
</section><!-----------------------End section--------------------->
<?php endif; // $reviews ?>
<?php
$contact = get_page_by_title('Contact');
if ($contact):

    //setup_postdata($contact);
    //the_content();


?>
<section class="section-form text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo do_shortcode( $contact->post_content);?>
            </div>
        </div>
    </div>
</section><!-----------------------End section-form--------------------->
<?php endif; //$contact ?>
<?php
$social_cat = get_category(22);
if ($social_cat):
    //bluerex_debug($social_cat);
?>
<section class="section-social text-center">
    <div class="container">
        <div class="row">
            <?php if(get_field('facebook_link',$social_cat)): ?>
            <div class="col-sm-3"><a href="<?php echo the_field('facebook_link',$social_cat);?>"><h5><i class="fab fa-facebook-square"></i>&nbsp;Facebook</h5></a> </div>
            <?php endif;?>
            <?php if(get_field('twitter_link',$social_cat)): ?>
            <div class="col-sm-3"><a href="<?php echo the_field('twitter_link',$social_cat);?>"><h5><i class="fab fa-twitter-square"></i>&nbsp;Twitter</h5></a> </div>
            <?php endif; ?>
            <?php if(get_field('linkedin_link',$social_cat)): ?>
            <div class="col-sm-3"><a href="<?php echo the_field('linkedin_link',$social_cat);?>"><h5><i class="fab fa-linkedin-in"></i>&nbsp;Linkedin</h5></a> </div>
            <?php endif; ?>
            <?php if (get_field('github_link', $social_cat)): ?>
            <div class="col-sm-3"><a href="<?php echo the_field('github_link', $social_cat);?>"><h5><i class="fab fa-github-square">&nbsp;</i>Github</h5></a> </div>
            <?php endif; ?>
        </div><!------------------End row----------------->
    </div><!---------END CONTAINER-------------------->
</section><!-----------------------End section-form--------------------->
<?php endif; //$social_cat?>
<?php get_footer() ?>