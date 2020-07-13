<?php
/*Template Name: Contacts*/
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

<!-- contact -->
<div class="contact-w3l py-5" id="contact">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-section mb-sm-5 mb-4">
            <h3 class="w3ls-title text-uppercase text-bl font-weight-bold">Контакти</h3>
        </div>
        <div class="row pt-md-0">
            <div class="col-lg-6 contact-agileits-w3layouts">
                <h4 class="contact-title text-uppercase text-bl mb-sm-4 mb-3 border-left midd-contact pl-4">
                    <?php the_field('contacts_title', 'options'); ?>
                </h4>
                <h5 class="font-weight-light text-bl"><?php the_field('contacts_description', 'options'); ?></h5>
                <?php get_template_part('template-parts/contacts'); ?>
            </div>
            <div class="col-lg-6 regstr-r-w3-agileits mt-lg-0 mt-5">
                <?php echo do_shortcode('[contact-form-7 id="198" title="Контактна форма 2"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- //contact -->
<!-- map -->

    <div id="googleMap" style="width:100%;height:450px;"></div>

<!-- //map -->

<?php get_footer(); ?>
