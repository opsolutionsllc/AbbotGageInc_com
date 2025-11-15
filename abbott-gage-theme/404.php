<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <div class="error-404 not-found">
            
            <div class="error-404-content">
                <div class="error-404-number">404</div>
                
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Oops! Page Not Found', 'abbott-gage' ); ?></h1>
                </header>
                
                <div class="page-content">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Perhaps try searching for what you need?', 'abbott-gage' ); ?></p>
                    
                    <?php get_search_form(); ?>
                    
                    <div class="error-404-suggestions">
                        <h3><?php esc_html_e( 'Here are some helpful links instead:', 'abbott-gage' ); ?></h3>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'abbott-gage' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>"><?php esc_html_e( 'Our Services', 'abbott-gage' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><?php esc_html_e( 'About Us', 'abbott-gage' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact Us', 'abbott-gage' ); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</main>

<?php
get_footer();

