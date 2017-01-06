<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<a href="http://dev.mdliquidation.com/index">
	<header class="jumbotron"  style="background: transparent url('<?php header_image(); ?>') no-repeat center;">
			
			<div class="container text-center">
		<?php
			$docpress_header_title = get_theme_mod('docpress_header_title',__( 'Need Help? Try me!', 'docpress' ));
			$docpress_header_subtitle = get_theme_mod('docpress_header_subtitle',__( 'Your answer is just one search away!', 'docpress' ));
			$docpress_header_search_display = get_theme_mod('docpress_header_search_display');
		?>
		<?php if(!empty($docpress_header_title)) : ?>
			<h2><?php echo esc_html($docpress_header_title); ?></h2>
		<?php else: ?>
			<h2><?php bloginfo( 'description' ); ?></h2>
		<?php endif; ?>
		<?php if(!empty($docpress_header_subtitle)) : ?>
			<h3><?php echo esc_html($docpress_header_subtitle); ?></h3>
		<?php endif; ?>
		
		</div>
		
	</header>
	</a>
		<div class="container jumbotron text-center">
		<?php if( isset($docpress_header_search_display) && $docpress_header_search_display != 1 ): ?>
			<?php get_search_form(); ?>
		<?php endif; ?>
		</div>
