<?php defined( 'ABSPATH' ) || exit; ?>

<?php get_header(); ?>

<!-- banner -->
<?php get_template_part('template-parts/main-slider'); ?>
<!-- //banner -->


<div class="section-2">
	<div class="container-fluid">
		<div class="row slide">
			<div class="col-xl-4 triple-sec p-5 text-center d-flex align-items-center justify-content-center">
				<h3 class="w3ls-title text-bl font-weight-bold services-per_cent wow animate__animated animate__bounceInDown">
                    <?php the_field('discount', 'options'); ?>
				</h3>
			</div>
			<div class="col-xl-4 triple-sec pt-3 pb-3 d-flex align-items-center">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Контактна форма 1"]'); ?>
			</div>
			<div class="col-xl-4 triple-sec p-5 wow animate__animated animate__flipInX">
				<h5 class="font-weight-bold">Графік роботи</h5>
				<ul class="list-unstyled mt-4">
                    <?php foreach (getSchedule() as $schedule) :?>
                        <li class="clearfix border-bottom py-3">
                            <span class="float-left"> <?php echo $schedule ['working_days']; ?> </span>
                            <div class="value float-right"> <?php echo $schedule ['working_hours_start']; ?> - <?php echo $schedule ['working_hours_end']; ?></div>
                        </li>
                    <?php endforeach; ?>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- why -->
<section class="blog_w3ls py-5" id="about">
	<div class="container">
		<div class="title-section mb-md-5 mb-4">
			<h3 class="w3ls-title text-uppercase text-bl font-weight-bold text-center">Чому обирають нас?</h3>
            <p class="mt-1 text-center">Роботи наших спеціалістів.</p>
		</div>
		<div class="row why_block">
			<!-- blog grid -->
            <?php foreach (getAbout() as $about) : ?>
			    <div class="why_block-item">
				<div class="card border-0 med-blog">
					<div class="card-header p-0">
						<img class="card-img-bottom" src="<?php echo get_the_post_thumbnail_url( $about->ID, thumbnail );?>" alt="image">
					</div>
					<div class="card-body border border-top-0">
                            <div class="wrapper-text">
							<div class="mb-3">
								<h5 class="blog-title card-title m-0"><?php echo $about -> post_title; ?></h5>
								<div class="blog_w3icon">
									<span><?php the_field('about_us_autor', $about->ID); ?></span>
								</div>
							</div>
							<p><?php echo $about -> post_excerpt; ?></p>
						</div>
						<a href="<?php the_permalink($about -> ID); ?>" class="btn blog-btn mt-4">Дізнатись більше</a>
					</div>
				</div>
			</div>
            <?php endforeach; ?>
			<!-- //blog grid -->

		</div>
	</div>
</section>
<!-- //why -->

<!-- banner-->
<section class="loan_w3ls p-5"></section>
<!-- //banner -->

<!-- services -->
<section class="services py-5" id="services">
	<div class="container">
		<div class="row px-lg-5">
			<div class="services_header">
				<h3 class="w3ls-title text-uppercase text-bl font-weight-bold text-center">Наші послуги</h3>
				<p class="mt-1">Пропонуємо наступні послуги.</p>
			</div>
			<div class="services-boxes">
                <?php
                $i = 1;
                foreach (getServices() as $services) : ?>
                    <a href="#sv<?php echo $i; ?>"
                       rel="modal:open"
                       class="services-box wow animate__animated <?php echo $i%2 ? 'animate__backInLeft' : 'animate__backInRight'; ?>">
                        <?php the_field('our_services_svg', $services -> ID ); ?>
                        <!-- .Icon ends here -->
                        <div class="service-content">
                            <h3><?php echo $services -> post_title;?> </h3>
                        </div>
                        <!-- .Service-content ends here -->
                    </a>
                    <div id="sv<?php echo $i; ?>" class="modal modal-window services-modal text-center">
                        <p><?php echo $services -> post_excerpt;?></p>
                        <a href="<?php the_permalink($services -> ID); ?>" class="btn blog-btn mt-4">Дізнатись більше</a>
                    </div>
                <?php
                $i++;
                endforeach; ?>
			</div>
		</div>
	</div>

</section>
<!-- //services -->

<!-- doctor form -->
<section class="loan_w3ls py-5" id="form">
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-6 wow animate__animated animate__lightSpeedInLeft">
				<div class="title-section m-4">
					<h3 class="w3ls-title text-wh font-weight-bold">
                        <?php the_field('appointment', 'options'); ?>
                    </h3>
				</div>
			</div>
			<div class="col-lg-6 wow animate__animated animate__lightSpeedInRight">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Контактна форма 1"]'); ?>
			</div>
		</div>
	</div>
</section>
<!-- //doctor form -->

<!-- team -->
<div class="team py-5" id="team">
	<div class="container">
		<div class="mb-4">
			<h3 class="w3ls-title text-uppercase text-bl font-weight-bold text-center">Наша команда</h3>
			<p class="mt-1 text-center">Наш дружній колекти завжди прийде Вам на допомогу</p>
		</div>
		<div class="row mt-30 our_team_slider">
            <?php foreach (getTeam() as $team) : ?>
			    <div class="col-lg-4 col-sm-6">
				<div class="box16">
					<img src="<?php echo get_the_post_thumbnail_url( $team->ID, 'team' ); ?>" alt="" class="img-fluid">
					<div class="box-content">
						<h3 class="title"><?php echo $team -> post_title; ?></h3>
						<ul class="social">
							<p class="mt-4"><?php echo $team -> post_excerpt; ?></p>
						</ul>
					</div>
				</div>
			</div>
            <?php endforeach; ?>
		</div>
	</div>
</div>
<!-- //team -->

<!-- banner-->
<section class="loan_w3ls py-5"></section>
<!-- //banner -->

<!-- blog -->
<section class="blog_w3ls" id="blog">
	<div class="container py-5">
		<div class="title-section mb-4">
			<h3 class="w3ls-title text-uppercase text-bl font-weight-bold text-center">Наш блог</h3>
			<p class="mt-1 text-center">Цікаві статті від наших лікарів.</p>
		</div>
		<div class="row blog_slider">
			<!-- blog grid -->
            <?php foreach (getBlogs() as $blog) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 med-blog">
                        <div class="card-header p-0">
                            <a href="<?php echo get_the_permalink($blog->ID); ?>">
                                <img class="card-img-bottom"
                                     src="<?php echo get_the_post_thumbnail_url($blog->ID, thumbnail); ?>"
                                     alt="image">
                            </a>
                        </div>
                        <div class="card-body border border-top-0 pb-5">
                            <div class="mb-3">
                                <h5 class="blog-title card-title font-weight-bold m-0">
                                    <a href="<?php echo get_the_permalink($blog->ID); ?>"><?php echo $blogs->post_title; ?></a>
                                </h5>
                                <div class="blog_w3icon">
                                    <span><?php echo get_the_date($d, $blog->ID) ?></span>
                                </div>
                            </div>
                            <p class="mb-4"><?php echo $blog->post_excerpt; ?></p>
                            <a href="<?php echo get_the_permalink($blog->ID); ?>" class="blog-btn btn">Читати
                                більше</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
			<!-- //blog grid -->
		</div>
	</div>
</section>
<!-- //blog -->

<?php get_footer(); ?>