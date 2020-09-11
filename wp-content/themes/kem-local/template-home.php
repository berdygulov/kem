<?php
/**
 * Template name: Homepage 
 */
get_header();
?>
        <div class="hero" id="hero">
            <div class="hero-slider">
                <div class="arrow-box-left">
                    <div class="slider-arrow"></div>
                </div>
                <div class="arrow-box-right">
                    <div class="slider-arrow"></div>
                </div>
                <div class="hero-content">
                <?php
                wp_reset_query();
                    $query = new WP_Query( [ 'post_type' => 'slick', 'posts_per_page' => 4,'order'=>'ASC' ] );
                    while ( $query->have_posts() ) {
                        $query->the_post(); ?>
                    <div class="hero-slider-item">
                        <div class="hero-slider-wrapper">
                            <div class="hero-slider-text">
                                <span class="sub-heading mb-60"><?php the_excerpt(); ?></span>
                                <h1 class="heading mb-60"><?php the_title();  ?></h1>
                                <div class="buttons">
                                    <a href="#" class="btn btn-blue mr-30">Отправить заявку</a>
                                    <a href="#" class="btn btn-trans">Связаться</a>
                                </div>
                            </div>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="hero-section-image">
                        </div>
                    </div>
                    <?php
                        }
                        wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    <div class="about-section">
        <div class="about-section-rect-s">
            <a href="#" class="about-section-rect rect-left">
                <p class="center-text Loraff">Информация для Юр. лиц </p>
                <span class="number number-left Loraff">01</span>
                <span class="rectangle">
                    <svg class="rectangle-svg" width="80" height="40" viewBox="0 0 80 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.25" y="0.25" width="39.5" height="39.5" rx="2.75" stroke="white"
                            stroke-width="0.5" />
                        <path d="M54.9994 26L59.8774 21L54.9994 16" stroke="white" stroke-linejoin="round" />
                        <path d="M59.9993 21L20 20.762" stroke="white" />
                    </svg></span>
            </a>
            <a href="#" class="about-section-rect rect-right">
                <p class="center-text Loraff">Информация для Физ. лиц</p>
                <span class="number number-right Loraff">02</span>
                <span class="rectangle">
                    <svg class="rectangle-svg" width="80" height="40" viewBox="0 0 80 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.25" y="0.25" width="39.5" height="39.5" rx="2.75" stroke="white"
                            stroke-width="0.5" />
                        <path d="M54.9994 26L59.8774 21L54.9994 16" stroke="white" stroke-linejoin="round" />
                        <path d="M59.9993 21L20 20.762" stroke="white" />
                    </svg>
                </span>
            </a>
        </div>
        <div class="about-section-content pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-section-left">
                            <span class="about-section-title mb-30">
                                <?php
                                    while ( have_posts() ) :
                                        the_post();
                                    endwhile;
                                    ?>  
                                <?php $section_sub_title_1 = get_post_meta( get_the_ID(), '1_section_sub_title', true );
                                echo $section_sub_title_1;?> 
                            </span>
                            <h2 class="about-section-heading mb-30">
                                <?php $section_sub_title_1 = get_post_meta( get_the_ID(), '1_section_title', true );
                                echo $section_sub_title_1;?> 
                            </h2>
                            <p class="about-section-sparagraph mb-30">
                                <?php $section_sub_title_1 = get_post_meta( get_the_ID(), '1_section_content', true );
                                echo $section_sub_title_1;?>
                            </p>
                            <span class="about-section-tab tab-rectangle">
                                <p class="about-section-tab-text">
                                <?php $section_tab_1 = get_post_meta( get_the_ID(), '1_section_tab', true );
                                echo $section_tab_1;?>
                                </p>
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-section-image">
                        <?php $section_img_1 = get_field('1_section_image')?>
                            <img src="<?php echo $section_img_1;?>" alt="about-section-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-section">
        <div class="contact-section-content pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 order-2 order-xl-1">
                        <div class="contact-section-image">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/contact-section-image.jpg" alt="contact-section-image">
                        </div> 
                    </div>
                    <div class="col-xl-6 order-1 order-xl-2">
                        <div class="contact-section-right">
                            <span class="contact-section-title mb-30">
                                СВЯЗАТЬСЯ С НАМИ_
                            </span>
                            <h3 class="contact-section-heading mb-30">
                                Связаться
                            </h3>
                            <p class="contact-section-paragraph mb-30">
                                Свяжитесь с нами, чтобы обсудить ваши потребности в благополучии сотрудников сегодня.
                                Пожалуйста, позвоните нам, напишите нам по электронной почте или заполните контактную
                                форму,
                                и мы свяжемся с вами.
                            </p>
                            <div class="contact-section-icons">
                                <div class="icon-wrapper">
                                    <a href="#" class="icon-contact icon-contact-location">
                                        <svg id="icon-contact-location-stroke" width="30" height="30"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <title>background</title>
                                                <rect fill="none" id="canvas_background" height="402" width="582" y="-1"
                                                    x="-1" />
                                            </g>
                                            <g>
                                                <title>Layer 1</title>
                                                <path fill="#0f0f00" fill-opacity="0" stroke="#005a97" id="svg_1"
                                                    d="m15,2c-6.075,0 -11,4.925 -11,11c0,7.233999 7.152,10.697001 8.048,11.503c0.915,0.823 1.671,2.667999 1.976,3.713999c0.148,0.508001 0.564,0.765001 0.976,0.776001c0.413,-0.011999 0.828,-0.268999 0.976,-0.776001c0.305,-1.046 1.061001,-2.889999 1.976,-3.713999c0.896,-0.806 8.048,-4.269001 8.048,-11.503c0,-6.075 -4.924999,-11 -11,-11zm0,14c-1.657,0 -3,-1.343 -3,-3s1.343,-3 3,-3s3,1.343 3,3s-1.343,3 -3,3z" />
                                            </g>
                                        </svg>
                                    </a>
                                    <div class="icon-text">
                                        <span class="icon-text-title">Посетить Нас:</span>
                                        <p class="icon-text-desc">Ул. Мунайшылар 1, Уральск, УР 090000, КАЗ</p>
                                    </div>
                                </div>
                                <div class="icon-wrapper">
                                    <a href="#" class="icon-contact icon-contact-email">
                                        <svg id="icon-contact-email-stroke" width="30" height="30"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <title>background</title>
                                                <rect fill="none" id="canvas_background" height="402" width="582" y="-1"
                                                    x="-1" />
                                            </g>
                                            <g>
                                                <title>Layer 1</title>
                                                <path stroke="#005a97" fill="#0f0f00" fill-opacity="0" id="svg_1"
                                                    d="m16.188999,16.521l11.274,-10.521l-24.925999,0l11.273,10.521c0.667,0.624001 1.712999,0.624001 2.378999,0z" />
                                                <polygon fill="#0f0f00" fill-opacity="0" stroke="#005a97" id="svg_2"
                                                    points="8.906,14.68 1,7.301 1,22.586 " />
                                                <polygon fill="#0f0f00" fill-opacity="0" stroke="#005a97" id="svg_3"
                                                    points="21.094,14.68 29,22.586 29,7.301 " />
                                                <path fill="#0f0f00" fill-opacity="0" stroke="#005a97" id="svg_4"
                                                    d="m19.631001,16.045l-2.077,1.938c-0.717001,0.669001 -1.636001,1.003 -2.555001,1.003s-1.837999,-0.334 -2.554999,-1.003l-2.077001,-1.938l-7.953,7.955l25.172,0l-7.955,-7.955z" />
                                            </g>
                                        </svg>
                                    </a>
                                    <div class="icon-text">
                                        <span class="icon-text-title">Написать Нам:</span>
                                        <p class="icon-text-desc">info@kenergy.kz</p>
                                    </div>
                                </div>
                                <div class="icon-wrapper">
                                    <a href="#" class="icon-contact icon-contact-phone">
                                        <svg id="icon-contact-phone-stroke" width="30" height="30"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <title>background</title>
                                                <rect fill="none" id="canvas_background" height="402" width="582" y="-1"
                                                    x="-1" />
                                            </g>
                                            <g>
                                                <title>Layer 1</title>
                                                <path fill="#0f0f00" fill-opacity="0" stroke="#005a97" id="svg_1"
                                                    d="m21.225,17.889c-0.406,-0.238001 -0.905001,-0.233 -1.309,0.007l-2.046,1.219c-0.458,0.273001 -1.030001,0.241001 -1.450001,-0.087c-0.726,-0.566999 -1.895,-1.521 -2.912,-2.538c-1.017,-1.017 -1.971001,-2.186 -2.538,-2.912c-0.328,-0.42 -0.360001,-0.992 -0.087,-1.45l1.219,-2.046c0.241,-0.403999 0.243,-0.907 0.005,-1.313l-3.002001,-5.128c-0.290999,-0.496 -0.868999,-0.74 -1.427999,-0.603c-0.543,0.132 -1.248,0.454 -1.987,1.194c-2.314,2.314 -3.543,6.217 5.159,14.918999s12.603999,7.474001 14.919,5.159c0.741001,-0.740999 1.062,-1.446999 1.195,-1.990999c0.135,-0.558001 -0.105,-1.132 -0.599998,-1.422001c-1.236,-0.723 -3.902,-2.283998 -5.138,-3.007999z" />
                                            </g>
                                        </svg>
                                    </a>
                                    <div class="icon-text">
                                        <span class="icon-text-title">Позвонить Нам:</span>
                                        <p class="icon-text-desc">+7(707) 965-5999</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form ">
        <div class="contact-form-content pb-90">
            <div class="container">
                <div class="row"> 
                    <div class="col-xl-12">
                        <div class="contact-form-main">
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