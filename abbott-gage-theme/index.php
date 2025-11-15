<?php
/**
 * The main template file
 *
 * @package Abbott_Gage
 * @since 1.0.0
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <div class="content-area">
            
            <?php if ( have_posts() ) : ?>
                
                <div class="posts-grid">
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'abbott-gage-card' ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            
                            <div class="post-content">
                                <header class="entry-header">
                                    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
                                    
                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <i class="far fa-calendar"></i>
                                            <?php echo get_the_date(); ?>
                                        </span>
                                        <span class="byline">
                                            <i class="far fa-user"></i>
                                            <?php the_author(); ?>
                                        </span>
                                    </div>
                                </header>
                                
                                <div class="entry-summary">
                                    <?php the_excerpt(); ?>
                                </div>
                                
                                <footer class="entry-footer">
                                    <a href="<?php the_permalink(); ?>" class="read-more">
                                        <?php esc_html_e( 'Read More', 'abbott-gage' ); ?>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </footer>
                            </div>
                            
                        </article>
                        
                    <?php endwhile; ?>
                    
                </div>
                
                <?php
                // Pagination
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="fas fa-arrow-left"></i> ' . esc_html__( 'Previous', 'abbott-gage' ),
                    'next_text' => esc_html__( 'Next', 'abbott-gage' ) . ' <i class="fas fa-arrow-right"></i>',
                ) );
                ?>
                
            <?php else : ?>
                
                <div class="no-results">
                    <h1><?php esc_html_e( 'Nothing Found', 'abbott-gage' ); ?></h1>
                    <p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'abbott-gage' ); ?></p>
                    <?php get_search_form(); ?>
                </div>
                
            <?php endif; ?>
            
        </div>
    </div>
</main>

<?php
get_footer();

