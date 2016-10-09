<?php /* Template Name: No Title Page */ get_header(); ?>
<?php get_sidebar(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


      <?php the_content(); ?>
      <?php edit_post_link(); ?>

    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

    </article>
  <?php endif; ?>

<?php get_footer(); ?>