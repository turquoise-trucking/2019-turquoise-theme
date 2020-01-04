<?php get_header(); ?>

<?php remove_filter ('the_content', 'wpautop'); ?>

<?php if ( have_posts() ) : while ( have_posts() ) :   the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; else: ?>
  <p>There no posts to show</p>
<?php endif; ?>

<?php get_footer(); ?>
