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
			<?php $cat = get_the_category(); echo $cat[0]->cat_name;?>
            </h1>
            <?php if (function_exists('my_breadcrumbs')) my_breadcrumbs(); ?>
        </div>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/hero-section image-rest.jpg"
            alt="hero-section image-rest">
    </div>
</div>
<div class="news-section " id="news-section">
        <div class="container">
            <div class="news-section-content pt-90">
                <div class="row">
                    <div class="col-lg-8">
                    <?php if ( have_posts() ) : 
						while ( have_posts() ) :
							the_post();
							$news_post_date_month = get_the_date('d M');
							$news_post_year = get_the_date('Y');
							$news_post_title = get_the_title();
							$news_post_content = get_the_excerpt();
							$news_post_thumbnail = get_the_post_thumbnail();
							$news_post_thumbnail_url = get_the_post_thumbnail_url();
							?>
                        <div class="news-section-left pr-40 pl-40 pb-60 pt-60 mb-90">
                            <span class="news-section-date">
                                <?php echo $news_post_date_month?>,<?php echo $news_post_year?>
							</span>
							<?php if ($news_post_thumbnail)
							{ ?> 
								<div class="news-section-image mb-30">
									<img src="<?php echo $news_post_thumbnail_url?>" alt="news-section-image">
								</div>
							<?php } ?>
                            <span class="news-section-news mb-30">НОВОСТИ</span>
                            <h1 class="news-section-heading section-title-heading mb-30">
								<?php echo $news_post_title?>
                            </h1>
                            <p class="news-section-paragraph section-title-paragraph mb-30">
							<?php echo $news_post_content?>
                            </p>
                            <a href="<?php the_permalink();?>" class="news-section-more">ПОДРОБНЕЕ</a>
						</div>
                        <?php
                        endwhile;
                         else :
                            get_template_part( 'template-parts/content', 'none' );
                        endif;
                        wp_reset_postdata();
                        //  the_posts_navigation();
                        the_posts_pagination();
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
