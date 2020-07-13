<?php
    defined( 'ABSPATH' ) || exit;
    get_header();
?>

<!-- banner -->
<div class="main-banner-2"></div>
<!-- //banner -->

<!-- page details -->
<div class="breadcrumb-agile py-1">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item">
            <a href="<?php echo home_url()?>">Головна</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo getPostTypeName(get_post_type());?></li>

    </ol>
</div>
<!-- //page details -->

<!-- single -->
<div class="blog-w3l py-5 blog">
    <div class="container">
        <?php the_post(); ?>
        <div class="img-fluid">
            <?php the_post_thumbnail( 'blog' ); ?>
        </div>
        <div class="row pt-md-0">
            <div class="col-lg-9 col-md-8 contact-agileits-w3layouts">
                <div class="blog_section">
                    <div class="card border-0">
                        <div class="card-body p-0 py-4 text-center">
                            <h4 class="w3ls-title text-uppercase font-weight-bold d-block pb-3"><?php the_title(); ?></h4>
                            <div class="border-bottom pb-1">
                                <p class="text-right"><?php echo get_the_date($d, get_the_ID()) ?></p>
                            </div>
                        </div>
                        <div class="text border-bottom pb-3">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="comment-top mt-5">
                        <?php if (comments_open() || get_comments_number()) :?>
                            <h4 class="mb-3">Коментарі
                                <sup><?php echo get_comments_number() ? '(' . get_comments_number() . ')' : '(0)'; ?></sup>
                            </h4>
                       <?php
                            comments_template();
                            endif;
                        ?>
                    </div>



                </div>
            </div>
            <div class="col-lg-3 col-md-4 regstr-r-w3-agileits">
                <?php dynamic_sidebar('blog_single'); ?>
            </div>
        </div>
    </div>
</div>
<!-- //single -->

<?php get_footer();?>
