<?php
/**
 * @package Technoheads
 * @since Technoheads 0.0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'technoheads' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

    <?php if ( 'post' == get_post_type() ) : ?>
    <!--div class="entry-meta">
      <h5><?php technoheads_posted_on_brief(); ?></h5>
    </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <!-- The post's featured image -->
  <?php if (has_post_thumbnail()) { ?>
  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
    <div class="featured-image">
      <a href="<?php echo $url ?>">
	<?php the_post_thumbnail(); ?>
      </a>
    </div>
  <?php } ?>

  <?php if ( is_search() ) : /* Only display Excerpts for Search*/ ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->
  <?php else : ?>
  <div class="entry-content clearfix">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'technoheads' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __('Pages:', technoheads), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->
  <?php endif; ?>

  <footer class="entry-meta"><h5>
    <?php technoheads_posted_on_brief(); ?>
    <span class="sep"> | </span>

    <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
      <?php
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( __( ', ', 'technoheads' ) );
        if ( $categories_list && technoheads_categorized_blog() ) :
      ?>
        <span class="cat-links">
          <?php printf( __( 'Posted in %1$s', 'technoheads' ), $categories_list ); ?>
        </span>
      <?php endif; /* End if categories */?>
      <?php
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', __( ', ', 'technoheads' ) );
        if ( $tags_list ) :
      ?>
        <span class="sep"> | </span>
  	    <span class="tag-links">
  	      <?php printf( __( '%1$s', 'technoheads' ), $tags_list ); ?>
	      </span>
      <?php endif; // End if $tags_list ?>
    <?php endif; // End if 'post' == get_post_type() ?>

    <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
    	<span class="sep"> | </span><span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'technoheads' ), __( '1 Comment', 'technoheads' ), __( '% Comments', 'technoheads' ) ); ?></span>
    <?php endif; ?>

    <?php edit_post_link( __( 'Edit', 'technoheads' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
  </h5></footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->