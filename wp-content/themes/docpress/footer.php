<div class="footer">
		<div class="container">
			<div class="row">
			<?php if ( is_active_sidebar( 'footer-four-widgets' ) ) : ?>
				<div class="col-xs-12 col-sm-8 col-lg-8">
					<?php dynamic_sidebar( 'footer-four-widgets' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-four-widgets' ) ) : ?>
				<div class="col-xs-12 col-sm-4 col-lg-4">
					<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</div>

<?php wp_footer(); ?>
	
</body>
