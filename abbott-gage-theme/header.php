<?php
/**
 * The header for our theme
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main">
        <?php esc_html_e( 'Skip to content', 'abbott-gage' ); ?>
    </a>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay"></div>

    <header id="masthead" class="site-header">
        <!-- Top Bar -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-inner">
                    <div class="header-contact">
                        <span class="contact-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+12563783286">(256) 378-3286</a>
                        </span>
                        <span class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+18004814243">1-800-481-4243</a>
                        </span>
                        <span class="contact-item">
                            <i class="far fa-envelope"></i>
                            <a href="mailto:info@abbottgageinc.com">info@abbottgageinc.com</a>
                        </span>
                    </div>
                    <div class="header-certs">
                        <span class="cert-badge" title="ISO 9001:2015 Certified">
                            <i class="fas fa-certificate"></i> ISO 9001:2015
                        </span>
                        <span class="cert-badge" title="Woman-Owned Business">
                            <i class="fas fa-award"></i> WBENC & WOSB Certified
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <div class="header-main">
            <div class="container">
                <div class="header-inner">
                    <!-- Site Branding -->
                    <div class="site-branding">
                        <div class="site-title-wrapper">
                            <h1 class="site-title">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                    ABBOTT GAGE INC
                                </a>
                            </h1>
                        </div>
                    </div>

                    <!-- Desktop Navigation Wrapper -->
                    <div class="nav-wrapper">
                        <!-- Primary Navigation -->
                        <nav id="site-navigation" class="main-navigation">
                            <div class="mobile-menu-header">
                                <h3 class="mobile-menu-title"><?php esc_html_e( 'Navigation', 'abbott-gage' ); ?></h3>
                                <button class="mobile-menu-close" aria-label="<?php esc_attr_e( 'Close menu', 'abbott-gage' ); ?>">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                        <div class="menu-primary-container">
                            <?php
                            // Main menu
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'primary',
                                    'menu_id'        => 'primary-menu',
                                    'menu_class'     => 'primary-menu',
                                    'container'      => false,
                                    'fallback_cb'    => false,
                                )
                            );
                            ?>

                            <div class="mobile-menu-extra">
                                <div class="mobile-header-info">
                                    <div class="header-contact">
                                        <span class="contact-item">
                                            <i class="fas fa-phone"></i>
                                            <a href="tel:+12563783286">(256) 378-3286</a>
                                        </span>
                                        <span class="contact-item">
                                            <i class="fas fa-phone-alt"></i>
                                            <a href="tel:+18004814243">1-800-481-4243</a>
                                        </span>
                                        <span class="contact-item">
                                            <i class="far fa-envelope"></i>
                                            <a href="mailto:info@abbottgageinc.com">info@abbottgageinc.com</a>
                                        </span>
                                    </div>
                                    <div class="header-certs">
                                        <span class="cert-badge" title="ISO 9001:2015 Certified">
                                            <i class="fas fa-certificate"></i> ISO 9001:2015
                                        </span>
                                        <span class="cert-badge" title="Woman-Owned Business">
                                            <i class="fas fa-award"></i> WBENC Certified
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-menu-cta">
                                <a href="<?php echo esc_url( home_url( '/contact#quote' ) ); ?>" class="btn btn-primary">
                                    <i class="fas fa-clipboard-list"></i>
                                    <?php esc_html_e( 'Get a Quote', 'abbott-gage' ); ?>
                                </a>
                            </div>
                        </nav>

                        <!-- Desktop CTA -->
                        <div class="header-cta-desktop">
                            <a href="<?php echo esc_url( home_url( '/contact#quote' ) ); ?>" class="btn btn-primary btn-cta-main">
                                <span class="btn-text"><?php esc_html_e( 'Get a Quote', 'abbott-gage' ); ?></span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Mobile Menu Toggle (visible on mobile only) -->
                    <button class="mobile-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span class="menu-toggle-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">

