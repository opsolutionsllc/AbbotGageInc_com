<?php
/**
 * The template for displaying all single posts
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main">
    
    <div class="container">
        <div class="content-wrapper">
            
            <div class="primary-content">
                <?php while ( have_posts() ) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
                        <header class="entry-header">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                            
                            <div class="entry-meta">
                                <?php
                                abbott_gage_posted_on();
                                abbott_gage_posted_by();
                                ?>
                            </div>
                        </header>
                        
                        <?php abbott_gage_post_thumbnail(); ?>
                        
                        <div class="entry-content">
                            <?php
                            the_content();

                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'abbott-gage' ),
                                    'after'  => '</div>',
                                )
                            );
                            ?>
                        </div>
                        
                        <footer class="entry-footer">
                            <?php abbott_gage_entry_footer(); ?>
                        </footer>
                        
                    </article>
                    
                    <?php
                    // Post navigation
                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'abbott-gage' ) . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'abbott-gage' ) . '</span> <span class="nav-title">%title</span>',
                        )
                    );

                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                    
                <?php endwhile; ?>
            </div>
            
            <?php get_sidebar(); ?>
            
        </div>
    </div>
    
</main>

<?php
get_footer();

