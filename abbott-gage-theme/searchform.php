<?php
/**
 * Template for displaying search forms
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'abbott-gage' ); ?></span>
        <input type="search" 
               class="search-field" 
               placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'abbott-gage' ); ?>" 
               value="<?php echo get_search_query(); ?>" 
               name="s" />
    </label>
    <button type="submit" class="search-submit">
        <i class="fas fa-search"></i>
        <span class="screen-reader-text"><?php esc_html_e( 'Search', 'abbott-gage' ); ?></span>
    </button>
</form>

