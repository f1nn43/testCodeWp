<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package testCodeWp
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<?php wp_body_open(); ?>
    <header class="header">
        <div class="header__inner">
            <nav class="header__nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu'
					)
				);
				?>
                <div class="header__contacts">
                    <a href="tel:+73832583300"><?php echo get_option('site_telephone')?></a>
                    <a href="#"><?php echo get_option('theme_contacttext')?></a>
                </div>
            </nav>
        </div>
        <button class="header__menuBtn"><img src="http://testcodewp:336/wp-content/uploads/2024/10/menu.svg"/></button>
    </header>
