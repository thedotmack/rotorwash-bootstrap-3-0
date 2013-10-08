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

        <h1>
            <a href="<?php echo home_url( '/' ); ?>" 
               title="<?php echo esc_attr(get_bloginfo('name', 'display')), ' &mdash; ', esc_attr(get_bloginfo( 'description' )); ?>" 
               rel="home"><?php bloginfo( 'name' ); ?></a>
        </h1>

        <?php
            $defaults = array(
                'theme_location'  => 'primary',
                'container'       => 'nav',
                'menu_class'      => 'nav nav-pills', // http://twitter.github.io/bootstrap/components.html#navbar
            );
            wp_nav_menu( $defaults );
        ?>


    </header>

    <section id="rw-content-wrapper" class="container">

