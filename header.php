<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and the header
 *
 * @package WordPress
 * @subpackage RotorWash
 * @since RotorWash 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
	// not using disqus? uncomment the following
	/*
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	*/

	wp_head();
?>
</head>

<body <?php body_class(); ?>>

	<header>
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" 
					   href="<?php echo home_url( '/' ); ?>" 
					   title="<?php echo esc_attr(get_bloginfo('name', 'display')), ' &mdash; ', esc_attr(get_bloginfo( 'description' )); ?>" 
					   rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
				
				<?php

					$defaults = array(
						'theme_location'  => 'primary',
						'menu'            => '',
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
						'container_id'    => '',
						'menu_class'      => 'nav navbar-nav',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);

					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu( $defaults );
					} else {
						// To-do: Incorporate wp_list_pages into the mix, with bootstrap formatting
						echo '<a href="wp-admin/nav-menus.php">Set up your menus in the admin panel!</a>';
					}
					
				?>
			</nav>
		</div>
	</header>

	<section id="rw-content-wrapper">
		<div class="container">

