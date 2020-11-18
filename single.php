<?php get_header()?>
<section class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if (have_posts()):while (have_posts()):the_post() ?>
                    <article class="article-preview">
                        <h2><?php the_title() ?></h2>
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
                            <?php the_content() ?>

                        </div>
                    </article>
                    <!-----------------END ARTICLE-PREVIEW---------------------->
                <?php endwhile; ?>

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

