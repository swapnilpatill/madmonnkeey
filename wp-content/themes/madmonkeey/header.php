<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if ( is_single() && 'post' == get_post_type() ) {?>
        <link type="text/css" rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/style-blog.css" media="all" />
    <?php } ?>
    <link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/stylenew.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
						
<nav class="navbarwrap">
        <div class="container">
            <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt=""></a>
            <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu_class'  => 'mainMenuwrap',
											'depth'       => 1,
											 
										)
									);
								?>
							<?php endif; ?>
            <!-- <ul>
                <li><a href="#">EXPERTISE</a></li>
                <li><a href="#">INSIGHTS</a></li>
                <li><a href="#">RESOURCES</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">MEMBERSHIP</a></li>
            </ul> -->
        </div>
    </nav>