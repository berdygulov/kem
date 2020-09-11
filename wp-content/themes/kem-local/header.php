<?php
global $kem_loc;
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kem-local
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php $header_logo = $kem_loc['header-logo']['url'];?>
	<header id="header" class="header">
        <div class="header-container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="<?php home_url(); ?>">
					<?php if($header_logo){ ?>
                        <img src="<?php echo esc_url($header_logo);?>" alt="KEM-logo">
					<?php } else {
						echo "нет картинки";
					}?>
                    </a>
                </div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header-main-menu',
							'menu_class'        => '',
                            'menu_id'        => '',
							'container_id'        => '',
							'container_class'        => 'nav',
						)
					);
				?>
                <div class="search-wrapper">
                    <a href="#" class="search-btn">
                        <svg class="search-btn-svg" width="30" height="30" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <title>background</title>
                                <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1" />
                            </g>
                            <g>
                                <title>Layer 1</title>
                                <circle id="svg_1" fill="none" stroke="#424242" stroke-width="2" stroke-miterlimit="10"
                                    r="9" cy="13" cx="13" />
                                <line id="svg_2" fill="none" stroke="#424242" stroke-width="2" stroke-linecap="round"
                                    stroke-miterlimit="10" y2="19.437" y1="26" x2="19.437" x1="26" />
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="hamburger-menu-wrapper">
                    <div class="logo">
                        <a href="<?php home_url(); ?>">
                            <?php if($header_logo){ ?>
                                <img src="<?php echo esc_url($header_logo);?>" alt="KEM-logo">
                            <?php } else {
                                echo "нет картинки";
                            }?>
                        </a>
                    </div>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header-main-menu',
                                'menu_class'        => 'hamburger-menu mb-60',
                                'menu_id'        => '',
                                'container'        => 'ul',
                                'container_id'        => '',
                                'container_class'        => '',
                            )
                        );
                    ?>
                    <a href="#" class="close-button"></a>
                    <a href="#" class="btn btn-blue">
                        Отправить заявку
                    </a>
                </div>
                <div class="hamburger-button-wrapper">
                    <a href="#" class="hamburger-button">
                        <span class="hamburger-button-stick"></span>
                        <span class="hamburger-button-stick"></span>
                        <span class="hamburger-button-stick"></span>
                    </a>
                </div>
                <div class="btn-wrapper">
                    <a href="#" class="btn btn-blue-border">
                        Связаться
                    </a>
                </div>
            </div>
        </div>
    </header>
