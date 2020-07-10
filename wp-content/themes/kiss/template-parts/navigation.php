<?php defined( 'ABSPATH' ) || exit; ?>

<div class="main-top animate__animated animate__bounceInDown">
	<div class="container wrapMenu">
		<div class="header">
			<!-- logo -->
			<div class="logo">
				<a href="<?php echo home_url()?>">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/logo.svg" alt="КІСС">
				</a>
			</div>
			<!-- //logo -->
			<div class="menu-wrapper">
				<!-- Link to open the modal -->
                <?php get_template_part('template-parts/contacts'); ?>
				<div class="phone-mobile">
					<a href="#ex1" rel="modal:open"><i class="fas fa-phone"></i></a>
				</div>
				<!-- nav -->
				<div class="nav_w3ls">
					<nav>
						<label for="drop" class="toggle">Меню</label>
						<input type="checkbox" id="drop"/>
                        <?php
                        wp_nav_menu( [
                            'theme_location'  => 'nav_menu',
                            'container'       => 'null',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

                        ] );
                        ?>
					</nav>
				</div>
				<!-- //nav -->
			</div>
		</div>
	</div>
</div>