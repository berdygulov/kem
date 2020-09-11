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
            <?php  
                $post_type = get_post_type_object(get_post_type());
            echo $post_type->labels->name;?>
            </h1>
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' > '); ?>
        </div>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/hero-section image-rest.jpg"
            alt="hero-section image-rest">
    </div>
</div>
    <div class="services-section " id="services-section">
        <div class="services-section-content pt-90">
            <div class="container">
                <div class="services-section-title-wrapper">
                    <div class="row">
                        <div class="col-xl-12 d-flex justify-content-center">
                            <div class="services-section-title section-title mb-90">
                                <span class="section-title-sub mb-30">
                                _ Что мы предлагаем_
                                </span>
                                <h2 class="section-title-heading mb-30">
                                Создание систем АСТУЭ
                                </h2>
                                <p class="section-title-description">
                                Мы плавно объединяем два ключевых компонента - экономику и информационные технологии.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-section-items-wrapper">
                    <div class="row">   
                    <?php 
                    //     wp_reset_query();
                    //     $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                    // $args = array(
                    //     'post_type' => 'services',
                    //     'additional-services' => 'uslugi',
                    //     'posts_per_page' => 2,
                    //     'paged' => $paged,
                    // );
                    // $query = new WP_Query($args);
                    if (have_posts() ) :
                    while (have_posts() ) :
                        the_post();?>
                        <div class="col-xl-6">
                            <a href="./services-single.html" class="services-section-item services-item  mb-90">
                                <img class="services-item-img" src="<?php echo get_the_post_thumbnail_url();?>" alt="services-item-img">
                                <p class="services-item-text">
                                    <?php the_title();?>
                                </p>
                                <p class="services-item-desc">
                                <?php $services_item_desc = get_post_meta( get_the_ID(), 'service-short-desc', true ); ?>
                                <?php echo $services_item_desc;?>
                                </p>
                                <span class="services-item-icon"> 
                                    <?php echo do_shortcode( get_post_meta( get_the_ID(), 'services-icon', true ) );?>
                                </span>
                                <span class="services-item-arrow">
                                </span>
                                <span class="services-item-tab">
                                <?php $services_market_tab = get_post_meta( get_the_ID(), 'services-market-tab', true ); ?>
                                <?php echo $services_market_tab;?>
                                </span>
                            </a>
                        </div>
                        <?php
                            endwhile;
                            else :
                            get_template_part( 'template-parts/content', 'none' );
                        endif;?>
                        <?php
                        //  the_posts_navigation();
                        the_posts_pagination();
                        //     $max_page = $query->max_num_pages;
                        // echo paginate_links( array(
                        //     'base'    => str_replace( $max_page, '%#%', esc_url( get_pagenum_link( $max_page ) ) ),
                        //     'format'  => '?paged=%#%',
                        //     'current' => max( 1, get_query_var('paged') ),
                        //     'total'   => $max_page,
                        //     'end_size'     => 1,
                        //     'mid_size'     => 1,
                        //     'prev_next'    => True,
                        //     'prev_text'    => __('Назад'),
                        //     'next_text'    => __('Далее'),
                        // ) );
                        // wp_reset_query();
                        ?>
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