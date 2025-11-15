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
                    <div class="footer-widgets-inner">
                        
                        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                            <div class="footer-widget-area footer-widget-1">
                                <?php dynamic_sidebar( 'footer-1' ); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                            <div class="footer-widget-area footer-widget-2">
                                <?php dynamic_sidebar( 'footer-2' ); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                            <div class="footer-widget-area footer-widget-3">
                                <?php dynamic_sidebar( 'footer-3' ); ?>
                            </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Footer Main -->
        <div class="footer-main">
            <div class="container">
                <div class="footer-main-inner">
                    
                    <!-- Company Info -->
                    <div class="footer-company">
                        <h3 class="footer-title"><?php bloginfo( 'name' ); ?></h3>
                        <p class="footer-description">
                            <?php 
                            $footer_desc = abbott_gage_get_option( 'footer_description', 'Precision measuring tools, calibration, certification, and repair services. Over 30 years of excellence.' );
                            echo esc_html( $footer_desc );
                            ?>
                        </p>
                        <div class="footer-certifications">
                            <span class="footer-cert-badge">ISO 9001:2015</span>
                            <span class="footer-cert-badge">WBENC Certified</span>
                            <span class="footer-cert-badge">WOSB Certified</span>
                        </div>
                    </div>

                    <!-- Quick Links -->
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

                    <!-- Services -->
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

                    <!-- Contact Info -->
                    <div class="footer-contact">
                        <h3 class="footer-title"><?php esc_html_e( 'Contact Us', 'abbott-gage' ); ?></h3>
                        <ul class="footer-contact-list">
                            <?php
                            $footer_address = abbott_gage_get_option( 'footer_address', '40 Industrial Park' );
                            $footer_city_state = abbott_gage_get_option( 'footer_city_state_zip', 'Childersburg, AL 35044' );
                            $phone_primary = abbott_gage_get_option( 'phone_primary', '(256) 378-3286' );
                            $phone_toll_free = abbott_gage_get_option( 'phone_toll_free', '1-800-481-4243' );
                            $footer_fax = abbott_gage_get_option( 'footer_fax', '(256) 378-3287' );
                            $email = abbott_gage_get_option( 'email', 'info@abbottgageinc.com' );
                            ?>
                            
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span><?php echo esc_html( $footer_address ); ?><br><?php echo esc_html( $footer_city_state ); ?></span>
                            </li>
                            
                            <?php if ( $phone_primary ) :
                                $phone_link = preg_replace( '/[^0-9+]/', '', $phone_primary );
                                if ( strpos( $phone_link, '+' ) !== 0 ) {
                                    $phone_link = '+1' . $phone_link;
                                }
                                ?>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone_primary ); ?></a>
                                </li>
                            <?php endif; ?>
                            
                            <?php if ( $phone_toll_free ) :
                                $phone_toll_link = preg_replace( '/[^0-9+]/', '', $phone_toll_free );
                                if ( strpos( $phone_toll_link, '+' ) !== 0 ) {
                                    $phone_toll_link = '+1' . $phone_toll_link;
                                }
                                ?>
                                <li>
                                    <i class="fas fa-phone-alt"></i>
                                    <a href="tel:<?php echo esc_attr( $phone_toll_link ); ?>"><?php echo esc_html( $phone_toll_free ); ?> (Gage)</a>
                                </li>
                            <?php endif; ?>
                            
                            <?php if ( $footer_fax ) : ?>
                                <li>
                                    <i class="fas fa-fax"></i>
                                    <span><?php echo esc_html( $footer_fax ); ?></span>
                                </li>
                            <?php endif; ?>
                            
                            <?php if ( $email ) : ?>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <?php
                        $payment_image = abbott_gage_get_option( 'footer_payment_image', false );
                        if ( $payment_image && is_array( $payment_image ) ) :
                            ?>
                            <div class="footer-payment-methods">
                                <img src="<?php echo esc_url( $payment_image['url'] ); ?>" 
                                     alt="<?php echo esc_attr( isset( $payment_image['alt'] ) ? $payment_image['alt'] : 'Accepted Payment Methods' ); ?>" 
                                     loading="lazy">
                            </div>
                        <?php elseif ( file_exists( get_template_directory() . '/assets/images/payment-methods.png' ) ) : ?>
                            <div class="footer-payment-methods">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/payment-methods.png' ); ?>" 
                                     alt="<?php esc_attr_e( 'Accepted Payment Methods', 'abbott-gage' ); ?>" 
                                     loading="lazy">
                            </div>
                        <?php endif; ?>
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

