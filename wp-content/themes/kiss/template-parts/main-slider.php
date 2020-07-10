<?php defined('ABSPATH') || exit; ?>

<div class="banner_w3lspvt">
    <?php foreach (getSliders() as $slider) : ?>
        <div class="banner-top">
            <div class="banner-top_img">
                <img src="<?php echo get_the_post_thumbnail_url( $slider -> ID, full );?>">
            </div>
            <div class="container">
                <div class="banner-info_agile_w3ls text-center mx-auto">
                    <h3 class="text-wh font-weight-bold"><?php echo $slider->post_title; ?></h3>
                    <?php if ($slider->post_content) : ?>
                        <a href="<?php echo get_the_permalink($slider->ID); ?>" class="btn button-w3ls mt-5 animate__animated animate__fadeInUpBig">Читати більше</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
