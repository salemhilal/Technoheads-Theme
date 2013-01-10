<?php
/**
 * @package Technoheads
 * @since Technoheads 0.0.1
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- Featured article -->
  <?php if( has_post_thumbnail() && !is_search()) :?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>" class="featured-image">
      <?php the_post_thumbnail(); ?>
    </a>
  <?php endif; ?>

  <!-- Article header -->
  <header class="entry-header">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'technoheads' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    <?php if ( 'post' == get_post_type() ) : ?>
    <div class="entry-meta">
      <?php technoheads_posted_on(); ?>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->

  <?php endif; ?>
  <div class="post-content">
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    <div class="entry-content">
      <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'technoheads' ) ); ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'technoheads' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
    <?php endif; ?>
    <div style="clear:both"></div>
    <footer class="entry-meta">
      <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
        <?php
          /* translators: used between list items, there is a space after the comma */
          $categories_list = get_the_category_list( __( ', ', 'technoheads' ) );
          if ( $categories_list && technoheads_categorized_blog() ) :
        ?>
        <span class="cat-links">
          <?php printf( __( 'Posted in %1$s', 'technoheads' ), $categories_list ); ?>
        </span>
        <?php endif; // End if categories ?>

        <?php
          /* translators: used between list items, there is a space after the comma */
          $tags_list = get_the_tag_list( '', __( ', ', 'technoheads' ) );
          if ( $tags_list ) :
        ?>
        <span class="sep"> | </span>
        <span class="tag-links">
          <?php printf( __( 'Tagged %1$s', 'technoheads' ), $tags_list ); ?>
        </span>
        <?php endif; // End if $tags_list ?>
      <?php endif; // End if 'post' == get_post_type() ?>

      <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
      <span class="sep"> | </span>
      <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'technoheads' ), __( '1 Comment', 'technoheads' ), __( '% Comments', 'technoheads' ) ); ?></span>
      <?php endif; ?>

      <?php edit_post_link( __( 'Edit', 'technoheads' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
  </div>
</article><!-- #post-<?php the_ID(); ?> -->