<?php get_header(); ?>

	<div class="doc-main">
		<div class="container">
			<div class="row">
				<?php get_sidebar(); ?>
				<?php if ( is_active_sidebar( 'sidebar-widgets' ) ) : ?>
				<div class="content-area col-sm-8 col-md-8">
				<?php else: ?>
				<div class="content-area col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
				<?php endif; ?>
					<div class="main-content page">
					<?php if ( have_posts() ) : ?> 	
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'page' ); ?>
							<?php endwhile; ?>
							<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>
						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
			<?php if ( is_active_sidebar( 'footer-one-widgets' ) ) : ?>
				<div class="col-xs-12 col-sm-4 col-lg-4">
					<?php dynamic_sidebar( 'footer-one-widgets' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-two-widgets' ) ) : ?>
				<div class="col-xs-12 col-sm-4 col-lg-4">
					<?php dynamic_sidebar( 'footer-two-widgets' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-three-widgets' ) ) : ?>
				<div class="col-xs-12 col-sm-4 col-lg-4">
					<?php dynamic_sidebar( 'footer-three-widgets' ); ?>
				</div>
			<?php endif; ?>
	</div>

<?php get_footer(); ?>