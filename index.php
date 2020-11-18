<?php get_header()?>
<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if (have_posts()):while (have_posts()):the_post() ?>
                    <article class="article-preview">
                        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                        <p><span class="article-date"><i class="far fa-calendar-alt"></i><?php the_time('F. jS. Y')?></span> </p>
                        <address>Автор:<?php the_author_posts_link()?></address>
                        <div class="article-excerpt">
                            <?php if(has_post_thumbnail()): ?>
                                <div class="bluerex-thumb">
                                    <a href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail('thumbnail', array('class' => 'thumb')) ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <?php the_content('') ?>
                            <p><a href="<?php the_permalink() ?>" class="more"><?php _e('Read more', 'bluerex') ?></a></p>
                        </div>
                    </article>
                    <!-----------------END ARTICLE-PREVIEW---------------------->
                <?php endwhile; ?>
                    <?php the_posts_pagination(array(
                        'end_size' => 1,
                        'mid_size' => 1,
                        'type' => 'list',
                    ))?>
                    <!--<nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>-->
                <?php else: ?>

                <?php endif;?>



            </div>
            <div class="col-md-4">
                <?php get_sidebar()?>
            </div>
        </div><!--------------------------END ROW------------------------------------>
    </div><!--------------------------------END CONTAINER-------------------------------->
</section>

<?php get_footer() ?>

