<?php
/*Template Name: Gallery*/
defined('ABSPATH') || exit;
get_header();
?>


<!-- banner -->
<div class="main-banner-2"></div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile py-1">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item">
            <a href="<?php echo home_url() ?>">Головна</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>

    </ol>
</div>
<!-- //page details -->

<!-- single -->
<div class="blog-w3l py-2 blog">
    <div class="container">
        <div class="pt-md-0">
            <?php the_post(); ?>
            <div class="contact-agileits-w3layouts">
                <div class="card border-0">
                    <div class="title-section m-4 text-center">
                        <h3 class="w3ls-title text-uppercase text-dark font-weight-bold">Галерея</h3>
                        <p class="mt-1 text-center">Роботи наших спеціалістів.</p>
                    </div>
                    <!-- gallery -->
                    <div class="gallery">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //single -->

<?php get_footer(); ?>
