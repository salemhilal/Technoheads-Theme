<?php
/**
 * The template for displaying posts in the Aside post format
 * @package Technoheads
 * @since Technoheads 0.0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
  <?php else : ?>
    <div class="entry-content">
      <?php the_content(__( 'Continue reading <span class="meta-nav">&rarr;</span>', 'technoheads' )); ?>
      <?php wp_link_pages(array( 'before' => '<div class="page-links">' . __('Pages:', 'technoheads'), 'after' => '</div>' )); ?>
    </div><!-- .entry-content -->
  <?php endif; ?>
 
  <footer class="entry-meta"><h5>
    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'technoheads' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
      <?php echo get_the_date(); ?>
    </a>

    <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
      <span class="sep"> | </span>
      <span class="comments-link">
        <?php comments_popup_link( 
          __( 'Leave a comment', 'technoheads' ), 
          __( '1 Comment', 'technoheads' ), 
          __( '% Comments', 'technoheads' ) ); 
        ?>
      </span>
    <?php endif; ?>

    <?php edit_post_link( __( 'Edit', 'technoheads' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
  </h5></footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->