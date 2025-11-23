<?php
/**
 * The footer for our theme
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        
        <!-- Footer Widgets -->
        <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
            <div class="footer-widgets">
                <div class="container">
                    <div class="row g-4">
                        
                        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                            <div class="col-12 col-md-4">
                            <div class="footer-widget-area footer-widget-1">
                                <?php dynamic_sidebar( 'footer-1' ); ?>
                            </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                            <div class="col-12 col-md-4">
                            <div class="footer-widget-area footer-widget-2">
                                <?php dynamic_sidebar( 'footer-2' ); ?>
                            </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                            <div class="col-12 col-md-4">
                            <div class="footer-widget-area footer-widget-3">
                                <?php dynamic_sidebar( 'footer-3' ); ?>
                            </div>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Footer Main -->
        <div class="footer-main">
            <div class="container">
                <div class="row g-4">
                    
                    <!-- Company Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-company">
                        <h3 class="footer-title"><?php bloginfo( 'name' ); ?></h3>
                        <p class="footer-description">
                            <?php esc_html_e( 'Precision measuring tools, calibration, certification, and repair services. Over 30 years of excellence.', 'abbott-gage' ); ?>
                        </p>
                        <div class="footer-certifications">
                            <span class="footer-cert-badge">ISO 9001:2015</span>
                            <span class="footer-cert-badge">WBENC Certified</span>
                            <span class="footer-cert-badge">WOSB Certified</span>
                        </div>
                    </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-links">
                        <h3 class="footer-title"><?php esc_html_e( 'Quick Links', 'abbott-gage' ); ?></h3>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'menu_id'        => 'footer-menu',
                                'menu_class'     => 'footer-menu',
                                'container'      => false,
                                'depth'          => 1,
                                'fallback_cb'    => false,
                            )
                        );
                        ?>
                    </div>
                    </div>

                    <!-- Services -->
                    <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-services">
                        <h3 class="footer-title"><?php esc_html_e( 'Our Services', 'abbott-gage' ); ?></h3>
                        <ul class="footer-service-list">
                            <li><a href="<?php echo esc_url( home_url( '/laboratory-calibration' ) ); ?>">
                                <?php esc_html_e( 'Laboratory Calibration', 'abbott-gage' ); ?>
                            </a></li>
                            <li><a href="<?php echo esc_url( home_url( '/onsite-calibration' ) ); ?>">
                                <?php esc_html_e( 'Onsite Calibration', 'abbott-gage' ); ?>
                            </a></li>
                            <li><a href="<?php echo esc_url( home_url( '/repair-services' ) ); ?>">
                                <?php esc_html_e( 'Repair Services', 'abbott-gage' ); ?>
                            </a></li>
                            <li><a href="<?php echo esc_url( home_url( '/sales' ) ); ?>">
                                <?php esc_html_e( 'Tool Sales', 'abbott-gage' ); ?>
                            </a></li>
                        </ul>
                    </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-contact">
                        <h3 class="footer-title"><?php esc_html_e( 'Contact Us', 'abbott-gage' ); ?></h3>
                        <ul class="footer-contact-list">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>40 Industrial Park<br>Childersburg, AL 35044</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:+12563783286">(256) 378-3286</a>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:+18004814243">1-800-481-4243 (Gage)</a>
                            </li>
                            <li>
                                <i class="fas fa-fax"></i>
                                <span>(256) 378-3287</span>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                <a href="mailto:info@abbottgageinc.com">info@abbottgageinc.com</a>
                            </li>
                        </ul>
                        <div class="footer-payment-methods">
                            <p class="payment-label"><?php esc_html_e( 'WE ACCEPT', 'abbott-gage' ); ?></p>
                            <div class="payment-methods-image">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cards-accepted.png' ); ?>" 
                                     alt="<?php esc_attr_e( 'Accepted Payment Methods', 'abbott-gage' ); ?>"
                                     loading="lazy">
                            </div>
                            <p class="payment-terms"><?php esc_html_e( 'NET 30 terms available', 'abbott-gage' ); ?></p>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-inner">
                    <div class="copyright">
                        <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All Rights Reserved.', 'abbott-gage' ); ?></p>
                    </div>
                    <div class="footer-bottom-links">
                        <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">
                            <?php esc_html_e( 'Privacy Policy', 'abbott-gage' ); ?>
                        </a>
                        <span class="separator">|</span>
                        <a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>">
                            <?php esc_html_e( 'Terms of Service', 'abbott-gage' ); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top Button -->
        <button id="back-to-top" class="back-to-top" aria-label="<?php esc_attr_e( 'Back to Top', 'abbott-gage' ); ?>">
            <i class="fas fa-arrow-up"></i>
        </button>

    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

