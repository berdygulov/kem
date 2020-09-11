<!-- Header -->
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kem-local' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$kem_local_description = get_bloginfo( 'description', 'display' );
			if ( $kem_local_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $kem_local_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kem-local' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<!--Footer-->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kem-local' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'kem-local' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'kem-local' ), 'kem-local', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>




<!-- Template-rates -->

<?php
/**
 * Template name: Template Rates
 */

get_header();
?>
<div class="header-bottom" id="header-bottom">
<?php
		while ( have_posts() ) :
			the_post();?>
        <div class="header-bottom-content">
            <div class="header-bottom-title">
                <h1 class="title-text mb-30">
                <?php the_title();?>
                </h1>
                <div class="header-bottom-breadcrumbs">
                    <a href="#" class="title-sub-main">ГЛАВНАЯ</a>
                    <span>&gt;</span>
                    <p class="title-sub-secondary">ТАРИФЫ</p>
                </div>
            </div>
            <img src="./assets/img/hero-section image-rest.jpg" alt="hero-section image-rest">
        </div>
    </div>
    <div class="rates-section" id="rates-section">
        <div class="rates-section-content pt-90 pb-90">
            <div class="container">
                <div class="rates-section-title-wrapper">
                    <div class="row">
                        <div class="col-xl-12 d-flex justify-content-center">
                            <div class="rates-section-title section-title mb-90">
                                <span class="section-title-sub mb-30">
                                    _ <?php the_title();?> _
                                </span>
                                <h2 class="section-title-heading mb-30">
                                    Энергоснабжающая компания ТОО “Kazenergymarketing”
                                </h2>
                                <p class="section-title-description">
                                    <?php the_content();?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rates-section-items-wrapper">
                    <div class="row">
                        <div class="offset-xl-1 col-xl-5 col-lg-6">
                            <div class="rates-section-item-1 rates-item">
                                <div class="rates-item-inner-wrapper">
                                    <span class="rates-item-date-box">
                                        с 06.07.2020г.
                                    </span>
                                    <span class="rates-item-icon">
                                        <svg width="60" height="60" viewBox="0 0 30 30"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <title>background</title>
                                                <rect fill="none" id="canvas_background" height="402" width="582" y="-1"
                                                    x="-1" />
                                            </g>
                                            <g>
                                                <title>Layer 1</title>
                                                <path id="svg_1"
                                                    d="m25.707001,9.793l-5.5,-5.5c-0.188002,-0.188 -0.442001,-0.293 -0.707001,-0.293l-8.5,0c-1.105,0 -2,0.895 -2,2l0,18c0,1.105 0.895,2 2,2l13,0c1.105,0 2,-0.895 2,-2l0,-13.5c0,-0.265 -0.105,-0.519 -0.292999,-0.707zm-6.707001,11.207l-5,0c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1l5,0c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1zm2,-4l-7,0c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1l7,0c0.552,0 1,0.448 1,1c0,0.552 -0.448,1 -1,1zm-1,-6c-0.552,0 -1,-0.448 -1,-1l0,-4.096l5.096001,5.096l-4.096001,0z" />
                                                <path id="svg_2"
                                                    d="m7,24l0,-18c0,-0.732 0.212,-1.409 0.556,-2l-1.556,0c-1.105,0 -2,0.895 -2,2l0,18c0,1.105 0.895,2 2,2l1.556,0c-0.344,-0.591 -0.556,-1.268 -0.556,-2z" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="rates-item-title">
                                        Тариф без НДС
                                    </span>
                                    <div class="rates-item-price">
                                        <span>
                                            ТГ 18,91 /
                                        </span>
                                        <span>
                                            1кВТ*час
                                        </span>
                                    </div>
                                    <p class="rates-item-desc">
                                        Потребители, Использующие Электрическую Энергию для
                                        Производства <strong>Товаров</strong> , <strong>Работ</strong> и Предоставления
                                        <strong>Услуг</strong>
                                        (юридические лица, крестьянские хозяйства, индивидуальные предприятия и т.д.)
                                    </p>
                                </div>
                                <a href="#" class="btn btn-blue rates-item-btn">
                                    Связаться
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="rates-section-item-2 rates-item">
                                <div class="rates-item-inner-wrapper">
                                    <span class="rates-item-date-box">
                                        с 06.07.2020г.
                                    </span>
                                    <span class="rates-item-icon">
                                        <svg width="60" height="60" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">

                                        <g>
                                         <title>background</title>
                                         <rect fill="none" id="canvas_background" height="402" width="582" y="-1" x="-1"/>
                                        </g>
                                        <g>
                                         <title>Layer 1</title>
                                         <path id="svg_1" d="m24,13.328l0,10.672l-18,0l0,-14l10.672001,0l6,-6l-16.672001,0c-1.105,0 -2,0.895 -2,2l0,18c0,1.105 0.895,2 2,2l18,0c1.105,0 2,-0.895 2,-2l0,-12.671l-2,1.999z"/>
                                         <path id="svg_2" d="m28.957001,5.543l0.525,-0.525c0.690001,-0.69 0.690001,-1.81 0,-2.5s-1.809999,-0.69 -2.5,0l-0.525,0.525l2.5,2.5z"/>
                                         <polygon id="svg_3" points="25.043,4.457 14.475,15.025 14,18 16.975,17.525 27.543,6.957  "/>
                                        </g>
                                       </svg>
                                    </span>
                                    <span class="rates-item-title">
                                        Тариф c НДС
                                    </span>
                                    <div class="rates-item-price">
                                        <span>
                                            ТГ 21,52 /
                                        </span>
                                        <span>
                                            1кВТ*час
                                        </span>
                                    </div>
                                    <p class="rates-item-desc">
                                        Потребители, Использующие Электрическую Энергию для
                                        Производства <strong>Товаров</strong> , <strong>Работ</strong> и Предоставления
                                        <strong>Услуг</strong>
                                        (юридические лица, крестьянские хозяйства, индивидуальные предприятия и т.д.)
                                    </p>
                                </div>
                                <a href="#" class="btn btn-blue rates-item-btn">
                                    Связаться
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form contact-form-background">
        <div class="contact-form-content pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-form-main contact-form-margin">
                            <div class="contact-form-wrapper">
                                <h4 class="contact-form-heading">Напишите Нам что Нибудь</h4>
                                <form action="">
                                    <div class="contact-form-first-line">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <input class="input-first" type="text" name="" placeholder="Ваше имя*">
                                            </div>
                                            <div class="col-xl-6">
                                                <input type="text" name="" placeholder="Ваша Почта*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-form-second-line">
                                        <input type="text" name="" placeholder="Веб Сайт*">
                                        <textarea placeholder="Ваше Сообщение..." name=""></textarea>
                                        <input type="submit" value="Отправить" name="" class="btn contact-form-btn">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="translate-up-arrow" href="#"></a>
    <?php endwhile; ?> 
<?php
get_footer();




//ARCHIEVE PHP 

<main id="primary" class="site-main">

<?php if ( have_posts() ) : ?>

    <header class="page-header">
        <?php
        the_archive_title( '<h1 class="page-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
    </header><!-- .page-header -->

    <?php
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();

        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_type() );

    endwhile;

    the_posts_navigation();

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?>

</main><!-- #main -->






<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kem-local
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->













//SINGLE PHP


<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kem-local
 */

get_header();
?>

	<!-- <main id="primary" class="site-main"> -->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'kem-local' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'kem-local' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	<!-- </main> -->
    <!-- #main -->

<?php
get_sidebar();
get_footer();
