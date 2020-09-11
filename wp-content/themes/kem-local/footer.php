<?php
global $kem_loc;
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kem-local
 */

?>
    <div class="footer">
        <div class="container">
            <div class="footer-content pb-60">
                <div class="footer-title mb-30">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h4 class="footer-heading">
							<?php $footer_heading = $kem_loc['footer-heading'];?>
							<?php if($footer_heading){ ?>
								<?php echo esc_attr($footer_heading);?>
							<?php } else {
								echo "Здесь должен быть заголовок";
							}?>
                            </h4>
                        </div>
                        <div class="offset-xl-1 col-md-2">
                            <div class="footer-button">
                                <a href="#" class="footer-btn btn">
                                    Связаться
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-info">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-md-6">
                            <div class="footer-contact">
                                <div class="footer-contact-item footer-contact-location">
                                    <svg id="icon-footer-location-stroke" width="30" height="30"
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
                                    <p class="icon-footer-text location-text">
                                        <?php $footer_adress = $kem_loc['footer-contacts-adress'];?>
                                        <?php echo esc_attr($footer_adress);?>
                                    </p>
                                </div>
                                <div class="footer-contact-item footer-contact-email">
                                    <svg id="icon-footer-email-stroke" width="30" height="30"
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
                                    <p class="icon-footer-text email-text">
                                        <?php $footer_email = $kem_loc['footer-contacts-email'];?>
                                        <?php echo esc_attr($footer_email);?>
                                    </p>
                                </div>
                                <div class="footer-contact-item footer-contact-phone">
                                    <svg id="icon-footer-phone-stroke" width="30" height="30"
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
                                    <p class="icon-footer-text contact-text">
                                        <?php $footer_phone = $kem_loc['footer-contacts-phone'];?>
                                        <?php echo esc_attr($footer_phone);?>
                                    </p>
                                </div>
                            </div>
                            <div class="footer-socials d-flex">
                                <a href="<?php echo esc_url($kem_loc['footer-solials-whatsapp']);?>" class="footer-socials-item socials-whatsapp">
                                    <svg id="socials-whatsapp-stroke" fill="#ffff" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 30 30" width="14px" height="14px">
                                        <path
                                            d="M 15 3 C 8.373 3 3 8.373 3 15 C 3 17.251208 3.6323415 19.350068 4.7109375 21.150391 L 3.1074219 27 L 9.0820312 25.431641 C 10.829354 26.425062 12.84649 27 15 27 C 21.627 27 27 21.627 27 15 C 27 8.373 21.627 3 15 3 z M 10.892578 9.4023438 C 11.087578 9.4023438 11.287937 9.4011562 11.460938 9.4101562 C 11.674938 9.4151563 11.907859 9.4308281 12.130859 9.9238281 C 12.395859 10.509828 12.972875 11.979906 13.046875 12.128906 C 13.120875 12.277906 13.173313 12.453437 13.070312 12.648438 C 12.972312 12.848437 12.921344 12.969484 12.777344 13.146484 C 12.628344 13.318484 12.465078 13.532109 12.330078 13.662109 C 12.181078 13.811109 12.027219 13.974484 12.199219 14.271484 C 12.371219 14.568484 12.968563 15.542125 13.851562 16.328125 C 14.986562 17.342125 15.944188 17.653734 16.242188 17.802734 C 16.540187 17.951734 16.712766 17.928516 16.884766 17.728516 C 17.061766 17.533516 17.628125 16.864406 17.828125 16.566406 C 18.023125 16.268406 18.222188 16.319969 18.492188 16.417969 C 18.766188 16.515969 20.227391 17.235766 20.525391 17.384766 C 20.823391 17.533766 21.01875 17.607516 21.09375 17.728516 C 21.17075 17.853516 21.170828 18.448578 20.923828 19.142578 C 20.676828 19.835578 19.463922 20.505734 18.919922 20.552734 C 18.370922 20.603734 17.858562 20.7995 15.351562 19.8125 C 12.327563 18.6215 10.420484 15.524219 10.271484 15.324219 C 10.122484 15.129219 9.0605469 13.713906 9.0605469 12.253906 C 9.0605469 10.788906 9.8286563 10.071437 10.097656 9.7734375 C 10.371656 9.4754375 10.692578 9.4023438 10.892578 9.4023438 z" />
                                    </svg>
                                </a>
                                <a href="<?php echo esc_url($kem_loc['footer-solials-instagram']);?>" class="footer-socials-item socials-instagram">
                                    <svg id="socials-instagram-stroke" fill="#ffff" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 30 30" width="14px" height="14px">
                                        <path
                                            d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z" />
                                    </svg>
                                </a>
                                <a href="<?php echo esc_url($kem_loc['footer-solials-telegram']);?>" class="footer-socials-item socials-telegram">
                                    <svg id="socials-telegram-stroke" fill="#ffff" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 30 30" width="14px" height="14px">
                                        <path
                                            d="M 25.154297 3.984375 C 24.829241 3.998716 24.526384 4.0933979 24.259766 4.2011719 C 24.010014 4.3016357 23.055766 4.7109106 21.552734 5.3554688 C 20.048394 6.0005882 18.056479 6.855779 15.931641 7.7695312 C 11.681964 9.5970359 6.9042108 11.654169 4.4570312 12.707031 C 4.3650097 12.746607 4.0439208 12.849183 3.703125 13.115234 C 3.3623292 13.381286 3 13.932585 3 14.546875 C 3 15.042215 3.2360676 15.534319 3.5332031 15.828125 C 3.8303386 16.121931 4.144747 16.267067 4.4140625 16.376953 C 5.3912284 16.775666 8.4218473 18.015862 8.9941406 18.25 C 9.195546 18.866983 10.29249 22.222526 10.546875 23.044922 C 10.714568 23.587626 10.874198 23.927519 11.082031 24.197266 C 11.185948 24.332139 11.306743 24.45034 11.453125 24.542969 C 11.511635 24.579989 11.575789 24.608506 11.640625 24.634766 L 11.644531 24.636719 C 11.659471 24.642719 11.67235 24.652903 11.6875 24.658203 C 11.716082 24.668202 11.735202 24.669403 11.773438 24.677734 C 11.925762 24.726927 12.079549 24.757812 12.216797 24.757812 C 12.80196 24.757814 13.160156 24.435547 13.160156 24.435547 L 13.181641 24.419922 L 16.191406 21.816406 L 19.841797 25.269531 C 19.893193 25.342209 20.372542 26 21.429688 26 C 22.057386 26 22.555319 25.685026 22.875 25.349609 C 23.194681 25.014192 23.393848 24.661807 23.478516 24.21875 L 23.478516 24.216797 C 23.557706 23.798129 26.921875 6.5273437 26.921875 6.5273438 L 26.916016 6.5507812 C 27.014496 6.1012683 27.040303 5.6826405 26.931641 5.2695312 C 26.822973 4.8564222 26.536648 4.4608905 26.181641 4.2480469 C 25.826669 4.0352506 25.479353 3.9700339 25.154297 3.984375 z M 24.966797 6.0742188 C 24.961997 6.1034038 24.970391 6.0887279 24.962891 6.1230469 L 24.960938 6.1347656 L 24.958984 6.1464844 C 24.958984 6.1464844 21.636486 23.196371 21.513672 23.845703 C 21.522658 23.796665 21.481573 23.894167 21.439453 23.953125 C 21.379901 23.91208 21.257812 23.859375 21.257812 23.859375 L 21.238281 23.837891 L 16.251953 19.121094 L 12.726562 22.167969 L 13.775391 17.96875 C 13.775391 17.96875 20.331562 11.182109 20.726562 10.787109 C 21.044563 10.471109 21.111328 10.360953 21.111328 10.251953 C 21.111328 10.105953 21.035234 10 20.865234 10 C 20.712234 10 20.506484 10.14875 20.396484 10.21875 C 18.963383 11.132295 12.671823 14.799141 9.8515625 16.439453 C 9.4033769 16.256034 6.2896636 14.981472 5.234375 14.550781 C 5.242365 14.547281 5.2397349 14.548522 5.2480469 14.544922 C 7.6958673 13.491784 12.47163 11.434667 16.720703 9.6074219 C 18.84524 8.6937992 20.838669 7.8379587 22.341797 7.1933594 C 23.821781 6.5586849 24.850125 6.1218894 24.966797 6.0742188 z" />
                                    </svg>
                                </a>
                                <a href="<?php echo esc_url($kem_loc['footer-solials-twitter']);?>" class="footer-socials-item socials-twitter">
                                    <svg fill="#ffff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"
                                        width="14px" height="14px">
                                        <path
                                            d="M28,6.937c-0.957,0.425-1.985,0.711-3.064,0.84c1.102-0.66,1.947-1.705,2.345-2.951c-1.03,0.611-2.172,1.055-3.388,1.295 c-0.973-1.037-2.359-1.685-3.893-1.685c-2.946,0-5.334,2.389-5.334,5.334c0,0.418,0.048,0.826,0.138,1.215 c-4.433-0.222-8.363-2.346-10.995-5.574C3.351,6.199,3.088,7.115,3.088,8.094c0,1.85,0.941,3.483,2.372,4.439 c-0.874-0.028-1.697-0.268-2.416-0.667c0,0.023,0,0.044,0,0.067c0,2.585,1.838,4.741,4.279,5.23 c-0.447,0.122-0.919,0.187-1.406,0.187c-0.343,0-0.678-0.034-1.003-0.095c0.679,2.119,2.649,3.662,4.983,3.705 c-1.825,1.431-4.125,2.284-6.625,2.284c-0.43,0-0.855-0.025-1.273-0.075c2.361,1.513,5.164,2.396,8.177,2.396 c9.812,0,15.176-8.128,15.176-15.177c0-0.231-0.005-0.461-0.015-0.69C26.38,8.945,27.285,8.006,28,6.937z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer-main-menu',
                                        'menu_class'        => 'footer-list',
                                        'menu_id'        => '',
                                        'container_id'        => '',
                                        'container_class'        => 'ul',
                                    )
                                );
                            ?>
                        </div>
                        <div class="col-xl-6">
                            <iframe id="map_192761260"
                                sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation"
                                width="540px" height="219px" frameborder="0">
                            </iframe>
                            <script type="text/javascript">
                                (function (e, t) {
                                    var r = document.getElementById(e);
                                    r.contentWindow.document.open(), r.contentWindow.document.write(atob(t)), r
                                        .contentWindow.document.close()
                                })("map_192761260",
                                    "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUsdCl7dmFyIHI9SlNPTi5wYXJzZShlKSxuPUpTT04ucGFyc2UodCk7ZnVuY3Rpb24gYShlKXtyZXR1cm4gZGVjb2RlVVJJQ29tcG9uZW50KGF0b2IoZSkuc3BsaXQoIiIpLm1hcChmdW5jdGlvbihlKXtyZXR1cm4iJSIrKCIwMCIrZS5jaGFyQ29kZUF0KDApLnRvU3RyaW5nKDE2KSkuc2xpY2UoLTIpfSkuam9pbigiIikpfURHLnRoZW4oZnVuY3Rpb24oKXt2YXIgZT1ERy5tYXAoIm1hcCIse2NlbnRlcjpbbi5sYXQsbi5sb25dLHpvb206bi56b29tfSk7REcuZ2VvSlNPTihyLHtzdHlsZTpmdW5jdGlvbihlKXt2YXIgdCxyLG4sYSxvO3JldHVybntmaWxsQ29sb3I6bnVsbD09PSh0PWUpfHx2b2lkIDA9PT10P3ZvaWQgMDp0LnByb3BlcnRpZXMuZmlsbENvbG9yLGZpbGxPcGFjaXR5Om51bGw9PT0ocj1lKXx8dm9pZCAwPT09cj92b2lkIDA6ci5wcm9wZXJ0aWVzLmZpbGxPcGFjaXR5LGNvbG9yOm51bGw9PT0obj1lKXx8dm9pZCAwPT09bj92b2lkIDA6bi5wcm9wZXJ0aWVzLnN0cm9rZUNvbG9yLHdlaWdodDpudWxsPT09KGE9ZSl8fHZvaWQgMD09PWE/dm9pZCAwOmEucHJvcGVydGllcy5zdHJva2VXaWR0aCxvcGFjaXR5Om51bGw9PT0obz1lKXx8dm9pZCAwPT09bz92b2lkIDA6by5wcm9wZXJ0aWVzLnN0cm9rZU9wYWNpdHl9fSxwb2ludFRvTGF5ZXI6ZnVuY3Rpb24oZSx0KXtyZXR1cm4icmFkaXVzImluIGUucHJvcGVydGllcz9ERy5jaXJjbGUodCxlLnByb3BlcnRpZXMucmFkaXVzKTpERy5tYXJrZXIodCx7aWNvbjpmdW5jdGlvbihlKXtyZXR1cm4gREcuZGl2SWNvbih7aHRtbDoiPGRpdiBjbGFzcz0nYnVsbGV0LW1hcmtlcicgc3R5bGU9J2JvcmRlci1jb2xvcjogIitlKyI7Jz48L2Rpdj4iLGNsYXNzTmFtZToib3ZlcnJpZGUtZGVmYXVsdCIsaWNvblNpemU6WzIwLDIwXSxpY29uQW5jaG9yOlsxMCwxMF19KX0oZS5wcm9wZXJ0aWVzLmNvbG9yKX0pfSxvbkVhY2hGZWF0dXJlOmZ1bmN0aW9uKGUsdCl7ZS5wcm9wZXJ0aWVzLmRlc2NyaXB0aW9uJiZ0LmJpbmRQb3B1cChhKGUucHJvcGVydGllcy5kZXNjcmlwdGlvbikse2Nsb3NlQnV0dG9uOiEwLGNsb3NlT25Fc2NhcGVLZXk6ITB9KSxlLnByb3BlcnRpZXMudGl0bGUmJnQuYmluZFRvb2x0aXAoYShlLnByb3BlcnRpZXMudGl0bGUpLHtwZXJtYW5lbnQ6ITAsb3BhY2l0eToxLGNsYXNzTmFtZToicGVybWFuZW50LXRvb2x0aXAifSl9fSkuYWRkVG8oZSl9KX0pKCdbeyJ0eXBlIjoiRmVhdHVyZSIsInByb3BlcnRpZXMiOnsiY29sb3IiOiIjMDI4MWYyIiwidGl0bGUiOiIiLCJkZXNjcmlwdGlvbiI6IlBIQSswSzNRdmRDMTBZRFFzOUMrMFlIUXZkQ3cwTEhRdHRDdzBZN1JpZEN3MFk4ZzBMclF2dEM4MEwvUXNOQzkwTGpSanlEUW90Q2UwSjRnd3F0TFlYcGxibVZ5WjNsdFlYSnJaWFJwYm1mQ3V6d3ZjRDQ9IiwiekluZGV4IjoxMDAwMDAwMDAwfSwiZ2VvbWV0cnkiOnsidHlwZSI6IlBvaW50IiwiY29vcmRpbmF0ZXMiOls1MS4zNjAyMyw1MS4yMzI4OF19LCJpZCI6Nzc0fV0nLCd7ImxhdCI6NTEuMjM0NzQzMjM1NzY2NTcsImxvbiI6NTEuMzYxMjEyNzMwNDA3NzE1LCJ6b29tIjoxNX0nKTwvc2NyaXB0PjxzY3JpcHQgYXN5bmM9IiIgdHlwZT0idGV4dC9qYXZhc2NyaXB0IiBzcmM9Imh0dHBzOi8vd3d3Lmdvb2dsZXRhZ21hbmFnZXIuY29tL2d0YWcvanM/aWQ9VUEtMTU4ODY2MTY4LTEiPjwvc2NyaXB0PjxzY3JpcHQgdHlwZT0idGV4dC9qYXZhc2NyaXB0Ij4oZnVuY3Rpb24oZSl7ZnVuY3Rpb24gdCgpe2RhdGFMYXllci5wdXNoKGFyZ3VtZW50cyl9d2luZG93LmRhdGFMYXllcj13aW5kb3cuZGF0YUxheWVyfHxbXSx0KCJqcyIsbmV3IERhdGUpLHQoImNvbmZpZyIsZSksd2luZG93Lmd0YWc9dH0pKCdVQS0xNTg4NjYxNjgtMScpPC9zY3JpcHQ+PC9ib2R5Pg=="
                                )
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-wrapper">
                    <div class="row">
                        <div class="col-lg-1">
                                <a class="logo footer-logo" href="<?php home_url(); ?>">
                                    <?php $footer_logo = $kem_loc['footer-logo']['url'];?>
                                    <?php if($footer_logo){ ?>
                                    <img src="<?php echo esc_url($footer_logo);?>" alt="KEM-logo">
                                    <?php } else {
                                    echo "нет картинки";
                                    }?>
                                </a>
                        </div>
                        <div class="offset-lg-4 col-lg-7">
                            <div class="footer-bottom-powered">
                                <p class="copyright">
                                    <?php $footer_copyright = $kem_loc['footer-copyright'];?>
                                    <?php if($footer_copyright){ ?>
                                        <?php echo esc_attr($footer_copyright);?>
                                    <?php } else {
                                        echo "Здесь должен быть текст для авторских прав";
                                    }?>
                                </p>
                                <a href="<?php echo esc_url($kem_loc['powered-by-link']);?>" class="footer-bottom-dalacode-logo">
                                    <?php $powered_logo = $kem_loc['powered-by-logo']['url'];?>
                                    <?php if($footer_logo){ ?>
                                        <img src="<?php echo esc_url($powered_logo);?>" alt="DalaCode logo">
                                    <?php } else {
                                        echo "нет картинки";
                                    }?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php wp_footer();?>
