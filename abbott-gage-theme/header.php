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

    <header id="masthead" class="site-header">
        <!-- Top Bar -->
        <div class="header-top">
            <div class="container">
                <div class="header-top-inner">
                    <div class="header-contact">
                        <?php
                        $phone_primary = abbott_gage_get_option( 'phone_primary', '(256) 378-3286' );
                        $phone_toll_free = abbott_gage_get_option( 'phone_toll_free', '1-800-481-4243' );
                        $email = abbott_gage_get_option( 'email', 'info@abbottgageinc.com' );
                        
                        if ( $phone_primary ) :
                            $phone_link = preg_replace( '/[^0-9+]/', '', $phone_primary );
                            if ( strpos( $phone_link, '+' ) !== 0 ) {
                                $phone_link = '+1' . $phone_link;
                            }
                            ?>
                            <span class="contact-item">
                                <i class="fas fa-phone"></i>
                                <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone_primary ); ?></a>
                            </span>
                        <?php endif; ?>
                        
                        <?php if ( $phone_toll_free ) :
                            $phone_toll_link = preg_replace( '/[^0-9+]/', '', $phone_toll_free );
                            if ( strpos( $phone_toll_link, '+' ) !== 0 ) {
                                $phone_toll_link = '+1' . $phone_toll_link;
                            }
                            ?>
                            <span class="contact-item">
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:<?php echo esc_attr( $phone_toll_link ); ?>"><?php echo esc_html( $phone_toll_free ); ?></a>
                            </span>
                        <?php endif; ?>
                        
                        <?php if ( $email ) : ?>
                            <span class="contact-item">
                                <i class="far fa-envelope"></i>
                                <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
                            </span>
                        <?php endif; ?>
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

        <!-- Main Header -->
        <div class="header-main">
            <div class="container">
                <div class="header-inner">
                    <!-- Site Branding -->
                    <div class="site-branding">
                        <?php
                        if ( has_custom_logo() ) :
                            the_custom_logo();
                        else :
                            ?>
                            <div class="site-title-wrapper">
                                <h1 class="site-title">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                        <?php bloginfo( 'name' ); ?>
                                    </a>
                                </h1>
                                <?php
                                $description = get_bloginfo( 'description', 'display' );
                                if ( $description || is_customize_preview() ) :
                                    ?>
                                    <p class="site-description"><?php echo $description; ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Primary Navigation -->
                    <nav id="site-navigation" class="main-navigation">
                        <button class="mobile-menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <span class="menu-toggle-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <span class="menu-toggle-text"><?php esc_html_e( 'Menu', 'abbott-gage' ); ?></span>
                        </button>

                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'primary-menu',
                                'container'      => 'div',
                                'container_class' => 'menu-primary-container',
                                'fallback_cb'    => false,
                            )
                        );
                        ?>

                        <div class="header-cta">
                            <?php
                            $header_cta_text = abbott_gage_get_option( 'header_cta_text', 'Get a Quote' );
                            $header_cta_link = abbott_gage_get_option( 'header_cta_link', home_url( '/contact' ) );
                            ?>
                            <a href="<?php echo esc_url( $header_cta_link ); ?>" class="btn btn-primary">
                                <?php echo esc_html( $header_cta_text ); ?>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">

