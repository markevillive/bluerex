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
<header>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
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


</header><!--------------------------------END MAIN HEADER----------------------------------->
