<?php defined( 'ABSPATH' ) || exit; ?>

<!-- footer -->
<footer class="py-5">
	<div class="container py-xl-5 py-lg-3 text-center">
		<div class="row">
			<div class="col-lg-7 w3l-footer">
				<!-- logo -->
                <div class="logo">
                    <a href="<?php echo home_url()?>">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/logo.svg" alt="КІСС">
                    </a>
                </div>
				<!-- //logo -->
				<p class="mt-4 text-li"><?php the_field('description', 'options'); ?></p>
			</div>
			<div class="col-lg-5 w3l-footer mt-lg-0 mt-5">
                <?php get_template_part('template-parts/contacts'); ?>
                <a href="#form" class="btn blog-btn mt-4 wow animate__animated animate__headShake animate">Записатись на прийом</a>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- footer bottom -->
<!-- copyright -->
<div class="copy-w3pvt">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-7 w3ls_footer_grid1_left py-2">
				<p class="rights text-center">&copy; All rights reserved | Developed by
					<a href="https://www.linkedin.com/in/nazar-melnychenko-b98309185/"
                       target="_blank">Nazar Melnychenko</a> &&
                    <a href="https://www.linkedin.com/in/romankorvatskyi/"
                       target="_blank">Roman Korvatskyi</a>
				</p>
			</div>
			<div class="col-lg-5 py-1">
                <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
			</div>
		</div>
	</div>
</div>
<!-- //copyright -->
<!-- //footer bottom -->

<!-- move top icon -->
<a href="#home" class="move-top text-center"></a>
<!-- //move top icon -->

<?php wp_footer(); ?>
</body>
</html>
