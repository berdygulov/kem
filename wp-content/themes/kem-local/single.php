<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kem-local
 */

get_header();
?>
<div class="header-bottom" id="header-bottom">
    <div class="header-bottom-content">
        <div class="header-bottom-title">
            <h1 class="title-text mb-30">
			<?php $cat = get_the_category(); echo $cat[0]->cat_name; ?>
            </h1>
            <?php the_breadcrumb(); ?>
        </div>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/hero-section image-rest.jpg"
            alt="hero-section image-rest">
    </div>
</div>
<div class="news-section " id="news-section">
        <div class="container">
            <div class="news-section-content pb-90 pt-90">
                <div class="row">
                    <div class="col-lg-8">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						// the_post_navigation(
						// 	array(
						// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Предыдущая новость:', 'kem-local' ) . '</span> <span class="nav-title">%title</span>',
						// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Следующая новость:', 'kem-local' ) . '</span> <span class="nav-title">%title</span>',
                        //         'screen_reader_text' => __( 'Читайте также' ),
						// 	)
						// );

						// If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) :
						// 	comments_template();
						// endif;

					endwhile; // End of the loop.
					?>
                    </div>
                    <div class="col-lg-4">
						<?php get_sidebar();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form contact-form-be-static">
        <div class="contact-form-content pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-form-main contact-form-margin">
                            <div class="contact-form-wrapper">
								<h4 class="contact-form-heading">Напишите Нам что Нибудь</h4>
                                <?php echo do_shortcode('[contact-form-7 id="50" title="Форма заявки"]')?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="translate-up-arrow" href="#"></a>
<?php
get_footer();
