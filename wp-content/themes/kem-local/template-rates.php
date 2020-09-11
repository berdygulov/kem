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
            <?php if (function_exists('my_breadcrumbs')) my_breadcrumbs(); ?>
        </div>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/hero-section image-rest.jpg"
            alt="hero-section image-rest">
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
                                    <?php $rates_date_1_tab = get_post_meta( get_the_ID(), 'rates_date_first_tab', true );
                                echo $rates_date_1_tab;?>
                                </span>
                                <span class="rates-item-icon">
                                    <svg width="60" height="60" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
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
                                        ТГ <?php $rates_price_1_tab = get_post_meta( get_the_ID(), 'rates_price_first_tab', true );
                                echo $rates_price_1_tab;?> /
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
                                    с <?php $rates_date_2_tab = get_post_meta( get_the_ID(), 'rates_date_second_tab', true );
                                echo $rates_date_2_tab;?>
                                </span>
                                <span class="rates-item-icon">
                                    <svg width="60" height="60" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">

                                        <g>
                                            <title>background</title>
                                            <rect fill="none" id="canvas_background" height="402" width="582" y="-1"
                                                x="-1" />
                                        </g>
                                        <g>
                                            <title>Layer 1</title>
                                            <path id="svg_1"
                                                d="m24,13.328l0,10.672l-18,0l0,-14l10.672001,0l6,-6l-16.672001,0c-1.105,0 -2,0.895 -2,2l0,18c0,1.105 0.895,2 2,2l18,0c1.105,0 2,-0.895 2,-2l0,-12.671l-2,1.999z" />
                                            <path id="svg_2"
                                                d="m28.957001,5.543l0.525,-0.525c0.690001,-0.69 0.690001,-1.81 0,-2.5s-1.809999,-0.69 -2.5,0l-0.525,0.525l2.5,2.5z" />
                                            <polygon id="svg_3"
                                                points="25.043,4.457 14.475,15.025 14,18 16.975,17.525 27.543,6.957  " />
                                        </g>
                                    </svg>
                                </span>
                                <span class="rates-item-title">
                                    Тариф c НДС
                                </span>
                                <div class="rates-item-price">
                                    <span>
                                        ТГ <?php $rates_price_2_tab = get_post_meta( get_the_ID(), 'rates_price_second_tab', true );
                                echo $rates_price_2_tab;?> /
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
                            <?php echo do_shortcode('[contact-form-7 id="50" title="Форма заявки"]')?>
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